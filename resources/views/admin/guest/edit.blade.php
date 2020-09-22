@extends('layouts.app')

@section('title', 'Guests')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit guest</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('guest.update',$guest->guest_id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $guest->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{ $guest->password }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Surname</label>
                                            <input type="text" class="form-control" name="surname" value="{{ $guest->surname }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Other Names</label>
                                            <input type="text" class="form-control" name="other_names" value="{{ $guest->other_names }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Phone</label>
                                            <input type="number" class="form-control" name="phone" value="{{ $guest->phone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Date Of Birth</label>
                                            <input type="dob" class="form-control" name="dob" value="{{ $guest->dob }}">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('guest.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
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