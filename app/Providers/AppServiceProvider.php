<?php

namespace App\Providers;

use App\Filament\Resources\TicketResource\Pages\EditCommentModal;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\SendUserRegisteredWhatsApp;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::component('edit-comment-modal', EditCommentModal::class);

        Event::listen(Registered::class, SendUserRegisteredWhatsApp::class);
    }
}
