@extends('layouts.app')

@section('title', 'Priests')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('priest.create') }}" class="btn btn-info">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Priests</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Priest Name</th>
                                    <th>Image</th>
                                    <th>Phone</th>
                                    <th>Email</th> 
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($priests as $key=>$priest)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $priest->priest_name }}</td>
                                                <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/priest/'.$priest->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                                <td>{{ $priest->phone }}</td>
                                                <td>{{ $priest->email }}</td> 
                                                <td>{{ $priest->created_at }}</td>
                                                <td>{{ $priest->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('priest.edit', $priest->priest_id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-{{ $priest->priest_id }}" action="{{ route('priest.destroy',$priest->priest_id) }}" style="diplay: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $priest->priest_id }}').submit();
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