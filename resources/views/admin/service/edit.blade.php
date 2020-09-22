@extends('layouts.app')

@section('title', 'Mass Services')

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
                            <h4 class="card-title ">Edit Mass Service</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('service.update',$service->service_id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" value="{{ $service->service_name }}" name="service_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Priest Residing</label>
                                            <select class="form-control" name="priest">
                                                @foreach($priests as $priest)
                                                    <option value="{{ $priest->priest_id }}">{{ $priest->priest_name }}</option>
                                                 @endforeach
                                            </select>
                                         </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Date</label>
                                            <input type="date" class="form-control" value="{{ $service->date }}" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Start Time</label>
                                            <input type="time" class="form-control" value="{{ $service->start_time }}" name="start_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">End Time</label>
                                            <input type="time" class="form-control" value="{{ $service->end_time }}" name="end_time">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Theme</label>
                                            <input type="theme" class="form-control" value="{{ $service->theme }}" name="theme">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <a href="{{ route('service.index') }}" class="btn btn-danger">Back</a>
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