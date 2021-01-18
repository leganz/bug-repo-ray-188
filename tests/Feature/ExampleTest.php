<?php

namespace Tests\Feature;

use App\Notifications\TestNotification;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $email = 'manuel.pirker-ihl@ambersive.com';
        Notification::route('mail', $email)->notify(new TestNotification());
    }
}
