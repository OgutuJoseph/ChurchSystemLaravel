@extends('layouts.app')

@section('title', 'Church Groups')

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
                            <h4 class="card-title ">Add New Church Group</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('church_group.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Group Name</label>
                                            <input type="text" class="form-control" name="group_name">
                                        </div>
                                    </div>
                                </div>  
                                <a href="{{ route('church_group.index') }}" class="btn btn-danger">Back</a>
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