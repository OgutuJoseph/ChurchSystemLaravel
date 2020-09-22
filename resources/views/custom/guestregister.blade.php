@extends('layouts.app')

@section('title', 'Guest Registration')

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
                            <h4 class="card-title ">Guest Registration</h4>
                        </div>
                        <div class="card-body">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                            <form method="POST" action="{{ route('custom.register2') }}" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Enter Email</label>
                                            <input type="email" class="form-control" name="email" required  value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Enter Password</label>
                                            <input type="password" class="form-control" required name="password">
                                        </div>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Enter Surname</label>
                                            <input type="text" class="form-control" required name="surname" value="{{ old('surname') }}"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Enter Other Names</label>
                                            <input type="text" class="form-control" required name="other_names" value="{{ old('other_names') }}"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Enter Phone</label>
                                            <input type="number" class="form-control" required name="phone" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 text-left">Date of Birth</label>
                                            <input type="date" class="form-control" required name="dob" >
                                        </div>
                                    </div>
                                </div> 
                                <div>
                                    <button type="submit" class="btn btn-primary">Register</button>  
                                    <a href="/confirm-membership" class="btn btn-info">Back</a>
                                    <p>Already Registered? Login To Proceed With Reservation</p>
                                    <a href="/guest/login" class="btn btn-success">Login</a>
                                </div>
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