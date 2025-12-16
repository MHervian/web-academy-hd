<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
	/**
	 * The path to the "home" route for your application.
	 *
	 * This is used by Laravel authentication to redirect users after login.
	 *
	 * @var string
	 */
	public const HOME = '/home';

	/**
	 * Admin routes namespace
	 */
	private $adminNamespace = 'App\\Http\\Controllers\\Admin';
	private $apiNamespace = '';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->configureRateLimiting();

		$this->routes(function () {
			/** Admin routes */
			Route::prefix('hdpanel')
				->middleware('web')
				->namespace($this->adminNamespace)
				->group(base_path('routes/admin.php'));

			/** API Routes */
			Route::prefix('api')
				->middleware('api')
				->group(base_path('routes/api.php'));

			// NO USE route
			Route::middleware('web')
				->group(base_path('routes/web.php'));
		});
	}

	/**
	 * Configure the rate limiters for the application.
	 *
	 * @return void
	 */
	protected function configureRateLimiting()
	{
		RateLimiter::for('api', function (Request $request) {
			return Limit::perMinute(60);
		});
	}
}
