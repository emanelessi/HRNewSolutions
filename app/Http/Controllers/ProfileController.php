<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $event = Event::where('user_id', $user_id)->get();
        return view('events')->with(compact('event'));
    }

    public function editprofile($id)
    {
        $event = Event::find($id);
        $contact = EventContact::where('event_id', $id)->get('contact_id');
        $mycontact = Contact::find($contact)->first();
        $user_id = Auth::user()->id;
        $contacts = Contact::where('user_id', $user_id)->get();
        return view('editevent')->with(compact('event', 'contacts', 'mycontact'));
    }


}
