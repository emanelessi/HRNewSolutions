<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\HolidayRequest;
use App\Models\Holiday;
use App\Models\User;
use App\Repositories\Web\HolidayEloquent;
use Illuminate\Database\Eloquent\Model;
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


    public function addHoliday(HolidayRequest $request)
    {
        return $this->holiday->addHoliday($request->all());

    }

    public function add()
    {
        return $this->holiday->add();
    }

    public function create()
    {
        return $this->holiday->create();

    }


}
