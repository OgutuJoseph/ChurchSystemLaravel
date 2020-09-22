@extends('layouts.app')

@section('title', 'Guest Login')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Guest Login</h4>
                        </div>
                        <div class="card-body">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                            <form method="POST" action="{{ route('custom.login2') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @if (\Session::has('sucess'))
    			                    <div class="alert alert-success">
        			                  <ul>
            			                <li>{!! \Session::get('sucess') !!}</li>
       				                  </ul>
    			                    </div>
			                      @endif
                                  <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" class="form-control" required name="password">
                                        </div>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-success">Login</button>
                                <a href="/guest/register" class="btn btn-info">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush