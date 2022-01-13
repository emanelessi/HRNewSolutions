<?php


namespace App\Repositories\Web\Admin;


use App\Models\Holiday;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
        $holidays = Holiday::paginate(10);
        $employee = User::all();
        $type = ['Sick holiday', 'annual holiday', 'Official holiday', 'Marriage holiday', 'condolence holiday', 'for an hour', 'New Years Eve', 'Israa and meraaj', 'Prophets Birthday', 'Labor Day', 'Eid al-Fitr', 'Eid al-Adha', 'Islamic New Year', 'Independence Day', 'Christmas'];
        $status = ['pending', 'approve', 'rejected'];
        return view('admin.holiday.holiday')->with(compact('holidays', 'employee', 'type', 'status'));
    }

    public function addholiday(array $data)
    {
        $holiday = new Holiday();
        $holiday->duration = $data['duration'];
        $holiday->description = $data['description'];
        $holiday->date = $data['date'];
        $holiday->type = $data['type'];
        $holiday->employee_id = $data['employee_id'];
        $holiday->save();
//        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        return response()->json(['success'=>'post added successfully']);

    }


    public function create()
    {
        $type = ['Sick holiday', 'annual holiday', 'Official holiday', 'Marriage holiday', 'condolence holiday', 'for an hour', 'New Years Eve', 'Israa and meraaj', 'Prophets Birthday', 'Labor Day', 'Eid al-Fitr', 'Eid al-Adha', 'Islamic New Year', 'Independence Day', 'Christmas'];
        $status = ['pending', 'approve', 'rejected'];
        $employees = User::all();
        return view('admin.holiday.addHoliday')->with(compact('type', 'status', 'employees'));
    }

    public function update(array $data)
    {
        $id =$data['id'];
        $holiday = Holiday::find($id);
        $holiday->duration = $data['duration'];
        $holiday->description = $data['description'];
        $holiday->date = $data['date'];
        $holiday->type = $data['type'];
        $holiday->status = $data['status'];
        $holiday->employee_id = $data['employee_id'];
        $holiday->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit($id)
    {

        $holiday = Holiday::findOrFail($id);
        $type = ['Sick holiday', 'annual holiday', 'Official holiday', 'Marriage holiday', 'condolence holiday', 'for an hour', 'New Years Eve', 'Israa and meraaj', 'Prophets Birthday', 'Labor Day', 'Eid al-Fitr', 'Eid al-Adha', 'Islamic New Year', 'Independence Day', 'Christmas'];
        $status = ['pending', 'approve', 'rejected'];
        $employees = User::all();
        return view('admin.holiday.editHoliday', compact('holiday', 'type', 'status', 'employees'));

    }


    public function destroy($id)
    {
        $holiday = Holiday::find($id);
        $holiday->destroy($id);
        return Redirect::back();
    }


}
