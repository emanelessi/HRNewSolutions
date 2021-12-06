<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HolidayController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $holiday = Holiday::where('employee_id', $employee_id)->paginate(1);
        $employees = User::where('id', $employee_id);
        $types=['Sick holiday','annual holiday','Official holiday','Marriage holiday','condolence holiday','for an hour','New Years Eve','Israa and meraaj','Prophets Birthday','Labor Day','Eid al-Fitr','Eid al-Adha','Islamic New Year','Independence Day','Christmas'];
        return view('layouts.holiday')->with(compact('holiday','employees','types'));
    }


    public function addHoliday(Request $request)
    {
        $holiday = new Holiday();
        $holiday->duration = $request->input('duration');
        $holiday->description = $request->input('description');
        $holiday->date = $request->input('date');
        $holiday->type = $request->input('type');
        $holiday->employee_id = Auth::user()->id;
        $holiday->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.addHoliday');
    }

    public function create()
    {
        $employee_id = Auth::user()->id;
        $employees = User::where('id', $employee_id);
        $types=['Sick holiday','annual holiday','Official holiday','Marriage holiday','condolence holiday','for an hour','New Years Eve','Israa and meraaj','Prophets Birthday','Labor Day','Eid al-Fitr','Eid al-Adha','Islamic New Year','Independence Day','Christmas'];
        return view('layouts.addHoliday')->with('employees', $employees)->with('types', $types);
    }


}
