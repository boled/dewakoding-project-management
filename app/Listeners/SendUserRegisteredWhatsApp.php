<?php

namespace App\Listeners;

use App\Services\WahaService;
use Illuminate\Auth\Events\Registered;

class SendUserRegisteredWhatsApp
{
    public function handle(Registered $event): void
    {
        $user = $event->user;
        app(WahaService::class)->sendMessage(
            $user->phone_number,
            "Halo {$user->name}, pendaftaran Anda berhasil."
        );
    }
}
