<?php
namespace Vietdv\FirstPackage;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone) 
    {
        $current_time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone))  : Carbon::now();

        return view('timezones::time', ['current_time' => $current_time]);
    }
}