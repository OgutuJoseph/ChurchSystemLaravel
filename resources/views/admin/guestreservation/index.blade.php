@extends('layouts.app')

@section('title', 'Guest Reservation')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Guest Reservations</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Mass Service</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Numnber of Seats</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($guestreservations as $key=>$guestreservation)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $guestreservation->service_name }}</td>
                                                <td>{{ $guestreservation->date }}</td>
                                                <td>{{ $guestreservation->start_time }}</td>
                                                <td>{{ $guestreservation->end_time }}</td>
                                                <td>{{ $guestreservation->number_of_seats }}</td>
                                                <td>{{ $guestreservation->other_names }}</td>
                                                <td>{{ $guestreservation->email }}</td>
                                                <td>
                                                    @if($guestreservation->status == true)
                                                        <span class="label label-info">Confirmed</span>
                                                    @else
                                                        <span class="label label-danger">Not Confirmed Yet</span>
                                                    @endif
                                                </td>
                                                <td>{{ $guestreservation->created_at }}</td>
                                                <td>
                                                    @if($guestreservation->status == false)
                                                        <form id="status-form-{{ $guestreservation->reserve_id }}" action="{{ route('guestreservation.status',$guestreservation->reserve_id) }}" style="diplay: none;" method="POST">
                                                            {{ csrf_field() }}
                                                        </form>
                                                        <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Do You Verify This Request?')){
                                                                event.preventDefault();
                                                                document.getElementById('status-form-{{ $guestreservation->reserve_id }}').submit();
                                                                }else {
                                                                event.preventDefault();
                                                                }"><i class="material-icons">done</i></button>
                                                    @endif
                                                    <form id="delete-form-{{ $guestreservation->reserve_id }}" action="{{ route('reservation.destroy',$guestreservation->reserve_id) }}" style="diplay: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This Request?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $guestreservation->reserve_id }}').submit();
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