@extends('admin.layouts.index')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="portlet-body form" id="tab_1_1">
        <form action="{{route('editProfile')}}" enctype="multipart/form-data" method="post"
              class="form-horizontal">
            @csrf
            <div class="form-body" style="padding: 0px">
                <div class="form-group">
                    @if($errors->any())
                        <h4 class="col-md-3 control-label"
                            style="color: green;">{{$errors->first()}}</h4>
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-4">
                        <input type="text" name="first_name" class="form-control"
                               value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}"
                               placeholder="First Name" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Last Name</label>
                <div class="col-md-4">
                    <input type="text" name="last_name" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}"
                           placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-4">
                    <input type="email" name="email" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                           placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-4">
                    <input type="password" name="password" class="form-control"
                           placeholder="Password" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Phone Number</label>
                <div class="col-md-4">
                    <input type="tel" name="phone_number" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->phone_number}}"
                           placeholder="Phone Number" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Hire Date</label>
                <div class="col-md-4">
                    <input type="date" name="hire_date" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->hire_date}}"
                           placeholder="Hire Date" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Salary</label>
                <div class="col-md-4">
                    <input type="number" name="salary" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->salary}}"
                           placeholder="Salary" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Photo</label>
                <div class="col-md-4">
                    <input type="file" name="photo" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->photo}}"
                           placeholder="Photo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Department</label>
                <div class="col-md-4">
                    <select name="department_id" class="form-control"
                            value="{{\Illuminate\Support\Facades\Auth::user()->department_id}}"
                            required>
                        <option value="">-- Select One --</option>
                        @foreach ($Departments as $Department)
                            <option
                                value="{{ $Department->id }}" {{ (isset($Department->id) || old('id'))? "selected":"" }}>{{ $Department->name }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Job Title</label>
                <div class="col-md-4">
                    <select name="job_id" class="form-control"
                            value="{{\Illuminate\Support\Facades\Auth::user()->job_id}}"
                            required>
                        <option value=""></option>
                        @foreach ($Jobs as $Job)
                            <option value="{{ $Job->id }}"
                                    selected>{{ $Job->title }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Manager</label>
                <div class="col-md-4">
                    <select name="Manager" class="form-control"
                            value="{{\Illuminate\Support\Facades\Auth::user()->manager->first_name ?? null}}">
                        <option value=""></option>
                        @foreach ($employees  as $employee)
                            <option
                                value="{{ $employee->id  }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>



@endsection

