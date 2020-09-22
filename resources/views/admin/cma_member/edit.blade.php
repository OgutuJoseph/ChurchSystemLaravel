@extends('layouts.app')

@section('title', 'CMA Members')

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
                            <h4 class="card-title ">Edit Member</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('cma_member.update',$cma_member->cma_id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }} 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Surname</label>
                                            <input type="text" class="form-control" name="surname" value="{{ $cma_member->surname }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Other Names</label>
                                            <input type="text" class="form-control" name="other_names" value="{{ $cma_member->other_names }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Phone</label>
                                            <input type="number" class="form-control" name="phone" value="{{ $cma_member->phone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label class="control-label col-md-3 text-left">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" value="{{ $cma_member->dob }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Church Group</label>
                                            <select class="form-control" name="group_id">
                                                @foreach($church_groups as $group)
                                                    <option value="{{ $group->group_id }}">{{ $group->group_name }}</option>
                                                 @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('cma_member.index') }}" class="btn btn-danger">Back</a>
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