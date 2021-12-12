<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\CheckInOutRequest;
use App\Models\CheckInOut;
use App\Models\User;
use App\Repositories\Web\CheckEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function __construct(CheckEloquent $CheckEloquent)
    {
        $this->check = $CheckEloquent;
    }
    public function addCheck(CheckInOutRequest $request)
    {
        return $this->check->addCheck($request->all());
    }

    public function add()
    {
        return $this->check->add();
    }


}
