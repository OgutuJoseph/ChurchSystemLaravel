@extends('layouts.app')

@section('title', 'Mass Services')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('service.create') }}" class="btn btn-info">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Mass Services</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Priest Residing</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Theme</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $key=>$service)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $service->service_name }}</td>
                                                <td>{{ $service->priest_name }}</td>
                                                <td>{{ $service->date }}</td>
                                                <td>{{ $service->start_time }}</td>
                                                <td>{{ $service->end_time }}</td>
                                                <td>{{ $service->theme }}</td>
                                                <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/service/'.$service->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                                <td>{{ $service->created_at }}</td>
                                                <td>{{ $service->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('service.edit', $service->service_id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-{{ $service->service_id }}" action="{{ route('service.destroy',$service->service_id) }}" style="diplay: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $service->service_id }}').submit();
                                                    }else {
                                                        event.preventDefault();
                                                            }"><i class="material-icons">delete</i></button>
                                                </td>
                                            </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js</script>
    <script>https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js</script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush