<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Calendar;

class CalendarController extends Controller
{
    /**
     * Returns the view clientside/calendar/calendar.blade.php
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(){

        return view('clientside.calender.calendar');
    }

    public function getEvent(){


        $events = Event::all();
return json_encode($events);
        return view('clientside.calender._data', ['events' => $events]);
    }


    public function save(Request $r){
        $event = new Event();

        $event->title = $r->input('title');
        $event->start = \Carbon\Carbon::parse($r->input('start_date'))->format('Y-m-d h:i');
        $event->end = \Carbon\Carbon::parse($r->input('end_date'))->format('Y-m-d h:i');
        $event->allDay = $r->input('allDay');
        $event->save();
        return redirect()->back();
//        return json_encode($event);

    }


}
