<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next)
	{
		if (session()->has('locale')) {
			app()->setLocale(session('locale'));
		} else {
			// auto detect
			$locale = $request->getPreferredLanguage(['id', 'en', 'kr']);
			app()->setLocale($locale ?? config('app.fallback_locale'));
			session(['locale' => $locale]);
		}
		return $next($request);
	}
}
