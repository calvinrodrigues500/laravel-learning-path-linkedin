<?php

namespace App\Http\Controllers;

use App\Models\ScheduledClass;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create() {

        $shceduledClasses = ScheduledClass::where('date_time', '>', now())
            ->with('classType', 'instructor')
            ->oldest()->get();

        return view('member.book')->with('scheduledClasses', $shceduledClasses);
    }
}
