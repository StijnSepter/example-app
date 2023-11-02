<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}


$post = new App\Models\comments
$post->name = "stijn";
$post->email = "dit is een e-mail";
$post->comment = 'Dit is de body van post 1. Dit is de body van post 1.';
$post->save();

$post = new App\Models\comments
$post->name = "stijn2";
$post->email = "dit is een e-mail2";
$post->comment = 'Dit is de body van post 2. Dit is de body van post 2.';
$post->save();
