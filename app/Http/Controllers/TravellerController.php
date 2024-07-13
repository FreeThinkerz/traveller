<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TravellerController extends Controller
{
    /**
     * The home route
     *
     * @return View
     */
    public function home(): View
    {
        $schedules = Schedule::query()->whereDay('departure_time', '=', now())->get();
        dump($schedules);
        return view('home', compact('schedules'));
    }

    /**
     * The about route
     *
     * @return View
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * The contact route
     *
     * @return View
     */
    public function contact(): View
    {
        return view('contact');
    }
}
