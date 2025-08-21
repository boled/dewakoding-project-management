<?php

use App\Models\Project;
use App\Models\User;
use App\Services\WahaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

uses(RefreshDatabase::class);

it('sends WhatsApp notifications when project status changes', function () {
    $user = User::factory()->create(['phone_number' => '123']);

    $project = Project::create([
        'name' => 'Test',
        'ticket_prefix' => 'TST',
        'status' => 'pending',
    ]);

    $project->members()->attach($user);

    $mock = Mockery::mock(WahaService::class);
    $mock->shouldReceive('sendMessage')
        ->once()
        ->with('123', Mockery::type('string'));
    $this->app->instance(WahaService::class, $mock);

    $project->update(['status' => 'done']);
});
