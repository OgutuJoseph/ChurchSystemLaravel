@extends('layouts.app')

@section('title', 'Custom Search Test')

@push('css')

@endpush

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <div class="container">
            <br />
            <h3>Custom Search</h3>
            <br /> <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_phone" id="filter_phone" class="form-control" required>
                            <option value="">Select Phone</option>  
                            @foreach($phone as $em)
                                <option value="{{ $em->phone }}">{{ $em->phone }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="form-group" >
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>  
            <br />
            <div class="table-responsive">
                <table id="customer_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Surname</th>
                            <th>Other Names</th>
                            <th>Phone</th>
                            <th>Date Of Birth</th>
                            <th>Group Id</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <br />
            <br />
        </div> 
    <script>
$(document).ready(function(){
    
    fill_datatable();

    function fill_datatable(filter_phone = '')
    {
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('customsearch.index') }}",
                data: {filter_phone:filter_phone}
            },
            columns: [
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'surname',
                    name: 'surname'
                },
                {
                    data: 'other_names',
                    name: 'other_names'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'dob',
                    name: 'dob'
                },
                {
                    data: 'group_id',
                    name: 'group_id'
                }
            ]
        });
    }

    $('#filter').click(function(){
        var filter_phone = $('#filter_phone').val() 

        if(filter_phone != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_phone);
        } 
    });

    $('#reset').click(function(){
        $('#filter_phone').val(''); 
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });
});

</script>
@endsection

@push('scripts')

@endpush