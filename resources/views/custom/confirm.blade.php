@extends('layouts.app')

@section('title', 'Confirm Membership')

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
                            <h4 class="card-title ">Confirm Chruch Group Membership</h4>
                        </div>
                        <div class="card-body">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                            <form method="POST" action="" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                <p><b>Kindly Confrim If You Belong To Any Church Group Below Before Proceeding.</b></p>
                                <a href="/member/register" class="btn btn-success">Yes</a>
                                <a href="/guest/register" class="btn btn-suces">No</a>
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