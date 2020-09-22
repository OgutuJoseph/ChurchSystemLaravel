@extends('layouts.app')

@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">slideshow</i>
                            </div>
                            <p class="card-category">Mass Servces</p>
                            <h3 class="card-title">{{ $serviceCount }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i><a href="{{ route('service.index') }}">Get More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Priests / Members</p>
                            <h3 class="card-title"> {{ $priestCount }} / {{ $memberCount }}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="{{ route('member.index') }}">Total Priests and Members</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">info_outline</i>
                            </div>
                            <p class="card-category">Reservation</p>
                            <h3 class="card-title">{{ $reservations->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i>Pending Reservations
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">announcement</i>
                            </div>
                            <p class="card-category">Contact Messages</p>
                            <h3 class="card-title">{{ $contactCount }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i><a href="{{ route('contact.index') }}">All Messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Pending Reservation Requests</h4>
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
                                    <th>Member ID</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $key=>$reservation)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $reservation->service_id }}</td>
                                                <td>{{ $reservation->date }}</td>
                                                <td>{{ $reservation->start_time }}</td>
                                                <td>{{ $reservation->end_time }}</td>
                                                <td>{{ $reservation->number_of_seats }}</td>
                                                <td>{{ $reservation->member_id }}</td>
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
