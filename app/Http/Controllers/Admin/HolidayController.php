<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\HolidayRequest;
use App\Models\Holiday;
use App\Models\User;
use App\Repositories\Web\Admin\HolidayEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HolidayController extends Controller
{
    public function __construct(HolidayEloquent $HolidayEloquent)
    {
        $this->holiday = $HolidayEloquent;
    }

    public function index()
    {
        return $this->holiday->index();
    }

    public function addholiday(HolidayRequest $request)
    {
        return $this->holiday->addholiday($request->all());
    }

    public function create()
    {
        return $this->holiday->create();
    }

    public function update(HolidayRequest $request)
    {
        return $this->holiday->update($request->all());
    }

    public function edit($id)
    {
        return $this->holiday->edit($id);
    }

    public function destroy($id)
    {
        return $this->holiday->destroy($id);
    }

}
