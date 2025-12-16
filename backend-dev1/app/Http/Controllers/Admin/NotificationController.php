<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NotificationModel;
use App\Models\PrivateUserModel;
use Illuminate\Database\QueryException;

class NotificationController extends Controller
{
	public function index()
	{
		// Get all notification
		$notifikasis = NotificationModel::all();
		return view('notifikasi', compact('notifikasis'));
	}

	public function create()
	{
		return view('create-notifikasi');
	}

	public function store(Request $request)
	{
		try {
			// Validasi input
			$validated = $request->validate([
				'judul'   => 'required|string|max:255',
				'deskripsi' => 'required|string',
			]);

			$username = session('login_user.username');

			$user = PrivateUserModel::where('username', $username)->firstOrFail();

			$data = array_merge($validated, [
				'date_post'    => $request->input('date_post'),
				'date_created' => now()->toDateString(),
				'userId'       => $user->userId,
			]);

			// Insert ke database
			$post = NotificationModel::create($data);

			return redirect()->route('create-notification')->with('success', 'success: New notification stored.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('create-notification')->with('error', 'Gagal membuat notfication. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('create-notification')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}

	public function detail($id)
	{
		$notifikasi = NotificationModel::findOrFail($id);
		$user = PrivateUserModel::findOrFail($notifikasi->userId);
		return view('notifikasi-detail', compact('notifikasi', 'user'));
	}
}
