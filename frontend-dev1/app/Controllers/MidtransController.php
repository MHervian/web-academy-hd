<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarModel;
use CodeIgniter\HTTP\ResponseInterface;

class MidtransController extends BaseController
{
    public function index()
    {
        //
    }

    public function callback()
    {
        // Ambil JSON dari Midtrans
        $json = $this->request->getJSON(true);

        if (!$json) {
            return $this->response->setStatusCode(400);
        }

        // Data penting
        $orderId           = $json['order_id'];
        $statusCode        = $json['status_code'];
        $grossAmount       = $json['gross_amount'];
        $signatureKey      = $json['signature_key'];
        $transactionStatus = $json['transaction_status'];
        $fraudStatus       = $json['fraud_status'] ?? null;

        // ⚠️ WAJIB: validasi signature
        $serverKey = 'SB-Mid-server-Gx1B2xgZ7jmXewSB5q26aStb'; // JANGAN expose
        $validSignature = hash(
            'sha512',
            $orderId . $statusCode . $grossAmount . $serverKey
        );

        if ($signatureKey !== $validSignature) {
            return $this->response->setStatusCode(403);
        }

        /**
         * Mapping status Midtrans
         */
        if ($transactionStatus === 'capture') {
            if ($fraudStatus === 'accept') {
                $status = '1'; //PAID
            }
        } elseif ($transactionStatus === 'settlement') {
            $status = '1'; //PAID
        } elseif ($transactionStatus === 'pending') {
            $status = '0'; //PENDING
        } elseif (
            $transactionStatus === 'deny' ||
            $transactionStatus === 'cancel' ||
            $transactionStatus === 'expire'
        ) {
            $status = '0'; //FAILED
        }

        /**
         * TODO: update database
         * contoh:
         * transaksi.status = $status
         */
        // $this->transaksiModel->updateByOrderId($orderId, $status);

        // update database
        $pendaftarModel = new PendaftarModel();
        $pendaftarModel->where('pendaftarId', $orderId)
            ->set(['isPaid' => $status])
            ->update();

        // Response WAJIB 200
        return $this->response->setJSON([
            'status' => 'ok'
        ]);
    }
}
