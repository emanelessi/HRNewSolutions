<?php


namespace App\Repositories\Web;


use App\Models\Holiday;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HolidayEloquent
{
    private $model;

    public function __construct(Holiday $holiday)
    {
        $this->model = $holiday;
    }

    public function index()
    {
        $employee_id = Auth::user()->id;
        $holiday = Holiday::where('employee_id', $employee_id)->paginate(1);
        $employees = User::where('id', $employee_id);
        $types = ['Sick holiday', 'annual holiday', 'Official holiday', 'Marriage holiday', 'condolence holiday', 'for an hour', 'New Years Eve', 'Israa and meraaj', 'Prophets Birthday', 'Labor Day', 'Eid al-Fitr', 'Eid al-Adha', 'Islamic New Year', 'Independence Day', 'Christmas'];
        return view('layouts.holiday')->with(compact('holiday', 'employees', 'types'));
    }

    public function addHoliday(array $data)
    {
        $holiday = new Holiday();
        $holiday->duration = $data['duration'];
        $holiday->description = $data['description'];
        $holiday->date = $data['date'];
        $holiday->type = $data['type'];
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
        $types = ['Sick holiday', 'annual holiday', 'Official holiday', 'Marriage holiday', 'condolence holiday', 'for an hour', 'New Years Eve', 'Israa and meraaj', 'Prophets Birthday', 'Labor Day', 'Eid al-Fitr', 'Eid al-Adha', 'Islamic New Year', 'Independence Day', 'Christmas'];
        return view('layouts.addHoliday')->with('employees', $employees)->with('types', $types);
    }


}
