<?php

namespace App\Http\Middleware;

use App\Models\Currency;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;

class DetectCurrency
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (! session()->has('currency')) {

            $countryCode = 'US';

            try {
                $response = Http::timeout(3)
                    ->get('https://ipwho.is/' . $request->ip());

                if ($response->successful() && $response->json('success')) {
                    $countryCode = $response->json('country_code');
                }
            } catch (\Throwable $e) {
                // تجاهل الخطأ واستخدم العملة الافتراضية
            }

            $currencyId = Currency::where('country_code', $countryCode)->value('id')
                ?? Currency::where('is_default', true)->value('id');

            session(['currency' => $currencyId]);
        }

        return $next($request);
    }
}
