<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HolidayController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $holiday = Holiday::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.holiday')->with(compact('holiday'));
    }

    public function addholiday(Request $request)
    {
        $data = request()->only('name', 'date', 'text', 'type', 'video', 'user_id');

        $event = Event::create([
            'name' => $data['name'],
            'date' => $data['date'],
            'text' => $data['text'],
            'type' => $data['type'],
            'video' => $data['video'],
            'user_id' => Auth::user()->id,
        ]);
        $contact_event = new EventContact();
        $contact_event->event_id = $event->id;
        $contact_event->contact_id = $request->contacts_id;
        $contact_event->save();
        $event_job = (new EventJob($event))->delay(Carbon::parse($request->get('date')));
        $this->dispatch($event_job);

        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


}
