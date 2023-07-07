@extends('admin.reports.appointment.layout')

@section('admin_master_content')
    
    <div class="card custom table-card">
        <div class="card-header">
            <div class="card-title">
                Careers
            </div>
                <a href="{{ route('departmentapp.reports.export')}}">
                <button type="submit" id="dashboardExport" class="btn btn-primary" >Export</button>
                </a>
           
            {{-- <a href="{{ route('home_visit.create') }}" class="btn btn-primary ms-3">
                <i class="fa fa-plus me-2" aria-hidden="true"></i>
                Add New
            </a> --}}
        </div>
        <div class="card-body"> 
            <table class="table table-bordered table-centered m-0 tr-sm table-hover" id="data-table">
                <thead> 
                    <tr>
                        <th>S.No </th>                        
                        <th>Client Name</th>
                        <th>Mobile</th>
                        <th>Email </th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Message</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            var table = $('#data-table').DataTable({
                "pageLength": 50,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
               
                ajax: "{{ route('reports.departmentapp.report') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},                   
                  
                    {data:"name", name : "name"},
                    {data:"mobile_no", name : "mobile_no"},
                    {data:"email", name : "email"},
                    {data:"appointment_date", name : "appointment_date"},
                    {data:"appointment_time", name : "appointment_time"},
                    {data:"message", name : "message"},
                    {data:"created_at", name : "created_at"},
                   
                ],
            });
        });
        
       
    </script>  
@endsection