<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CheckInOut;
use App\Models\User;
use App\Repositories\Web\Admin\CheckEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckController extends Controller
{
    public function __construct(CheckEloquent $checkEloquent)
    {
        $this->check = $checkEloquent;
    }

    public function index()
    {
        return $this->check->index();
    }

    public function addCheck(Request $request)
    {
//        dd($request->all());
        return $this->check->addCheck($request->all());
    }

    public function create()
    {
        return $this->check->create();
    }

    public function update(Request $request)
    {
        return $this->check->update($request->all());
    }

    public function edit($id)
    {
        return $this->check->edit($id);
    }

    public function destroy($id)
    {
        return $this->check->destroy($id);
    }

}
