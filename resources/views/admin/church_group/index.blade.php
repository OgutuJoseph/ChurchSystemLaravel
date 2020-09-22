@extends('layouts.app')

@section('title', 'Church Groups')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('church_group.create') }}" class="btn btn-info">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Church Groups</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Group Name</th> 
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($church_groups as $key=>$church_group)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $church_group->group_name }}</td> 
                                                <td>{{ $church_group->created_at }}</td>
                                                <td>{{ $church_group->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('church_group.edit', $church_group->group_id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-{{ $church_group->group_id }}" action="{{ route('church_group.destroy',$church_group->group_id) }}" style="diplay: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $church_group->group_id }}').submit();
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