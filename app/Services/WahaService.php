<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WahaService
{
    public function sendMessage(string $phone = null, string $message = ''): void
    {
        $recipient = $phone ?: config('waha.default_recipient');
        $baseUrl = rtrim((string) config('waha.base_url'), '/');
        $token = config('waha.token');

        if (!$recipient || !$baseUrl || !$token) {
            return;
        }

        Http::withToken($token)->post("{$baseUrl}/messages", [
            'phone' => $recipient,
            'message' => $message,
        ]);
    }
}
