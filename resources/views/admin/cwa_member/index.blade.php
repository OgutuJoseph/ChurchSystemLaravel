@extends('layouts.app')

@section('title', 'CWA Members')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('cwa_member.create') }}" class="btn btn-info">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All CWA Members</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Surname</th>
                                    <th>Other Names</th>
                                    <th>Phone</th>
                                    <th>Date Of Birth</th> 
                                    <th>Church Group</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($cwa_members as $key=>$cwa_member)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $cwa_member->surname }}</td>
                                                <td>{{ $cwa_member->other_names }}</td>
                                                <td>{{ $cwa_member->phone }}</td>
                                                <td>{{ $cwa_member->dob }}</td> 
                                                <td>{{ $cwa_member->group_name }}</td>
                                                <td>{{ $cwa_member->created_at }}</td>
                                                <td>{{ $cwa_member->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('cwa_member.edit', $cwa_member->cwa_id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-{{ $cwa_member->cwa_id }}" action="{{ route('cwa_member.destroy',$cwa_member->cwa_id) }}" style="diplay: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $cwa_member->cwa_id }}').submit();
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

