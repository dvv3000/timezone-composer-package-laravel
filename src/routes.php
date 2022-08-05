<?php

use Illuminate\Support\Facades\Route;
use Vietdv\FirstPackage\TimezonesController;

Route::get('timezones/{timezone}', [TimezonesController::class, 'index']);