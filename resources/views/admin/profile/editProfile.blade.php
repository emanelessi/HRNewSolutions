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
                        <input type="text" name="username" class="form-control"
                               value="{{\Illuminate\Support\Facades\Auth::user()->username}}"
                               placeholder="First Name" required>
                    </div>
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
                <label class="col-md-3 control-label">Photo</label>
                <div class="col-md-4">
                    <input type="file" name="photo" class="form-control"
                           value="{{\Illuminate\Support\Facades\Auth::user()->photo}}"
                           placeholder="Photo" required>
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

