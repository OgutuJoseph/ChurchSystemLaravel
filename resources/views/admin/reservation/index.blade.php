@extends('layouts.app')

@section('title', 'Reservation')

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
                            <h4 class="card-title ">All Reservations</h4>
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
                                        @foreach($reservations as $key=>$reservation)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $reservation->service_name }}</td>
                                                <td>{{ $reservation->date }}</td>
                                                <td>{{ $reservation->start_time }}</td>
                                                <td>{{ $reservation->end_time }}</td>
                                                <td>{{ $reservation->number_of_seats }}</td>
                                                <td>{{ $reservation->other_names }}</td>
                                                <td>{{ $reservation->email }}</td>
                                                <td>
                                                    @if($reservation->status == true)
                                                        <span class="label label-info">Confirmed</span>
                                                    @else
                                                        <span class="label label-danger">Not Confirmed Yet</span>
                                                    @endif
                                                </td>
                                                <td>{{ $reservation->created_at }}</td>
                                                <td>
                                                    @if($reservation->status == false)
                                                        <form id="status-form-{{ $reservation->reservation_id }}" action="{{ route('reservation.status',$reservation->reservation_id) }}" style="diplay: none;" method="POST">
                                                            {{ csrf_field() }}
                                                        </form>
                                                        <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Do You Verify This Request?')){
                                                                event.preventDefault();
                                                                document.getElementById('status-form-{{ $reservation->reservation_id }}').submit();
                                                                }else {
                                                                event.preventDefault();
                                                                }"><i class="material-icons">done</i></button>
                                                    @endif
                                                    <form id="delete-form-{{ $reservation->reservation_id }}" action="{{ route('reservation.destroy',$reservation->reservation_id) }}" style="diplay: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure You Want To Delete This Request?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $reservation->reservation_id }}').submit();
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