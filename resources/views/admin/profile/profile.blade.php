@extends('admin.layouts.index')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="tab-pane active" id="tab_1_1">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-unstyled profile-nav">
                    <li>
                        <img src="{{asset('storage/'.auth()->user()->photo)}}"
                             class="img-responsive pic-bordered" alt=""/>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8 profile-info">
                        @foreach($profile as $myprofile)
                            <h1 class="font-green sbold uppercase">{{$myprofile->username}}</h1>
                            <p>
                                 {{$myprofile->email}}
                            </p>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>





@endsection

