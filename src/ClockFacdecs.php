<?php
namespace Clock\ClockProv;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClockFacdecs extends Controller
{
    public static function clock()
    {
    	$arr =   include(base_path('config/set_clock.php'));
    	return $arr;
    }

    public static function map()
    {
    	return view('map');
    }
}
