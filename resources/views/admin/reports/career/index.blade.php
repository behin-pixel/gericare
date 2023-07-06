@extends('admin.reports.career.layout')

@section('admin_master_content')
    
    <div class="card custom table-card">
        <div class="card-header">
            <div class="card-title">
                Career Report
            </div>
            
            <a href="{{ route('career.reports.export')}}"><button type="submit" id="dashboardExport" class="btn btn-primary" >Export</button></a>
          
           <!-- <a class="btn btn-primary" href="{{ route('video.create') }}"><i class="fa fa-plus"></i> Add </a>-->
           
            {{-- @if (permission_check('CONTACT_US_EXPORT'))1
            <form method="POST" name="dashboard_export" action="{{ route('testimonial.export') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                
            </form>
            @endif --}}
        </div>
        <div class="card-body"> 
            <table class="table table-bordered table-centered m-0 tr-sm table-hover" id="data-table">
                <thead> 
                    <tr>
                        <th>S.No </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>   
                        <th>Designation</th>                   
                        <th>Relevant Experience</th>
                        <th>Cover Letter</th>
                        <th>Submitted Date</th>
                        <th>Download Resume</th>
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
               
                ajax: "{{ route('reports.career.report') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
                    {data:"name", name : "name"},
                    {data:"email", name : "email"},
                    {data:"mobile", name : "mobile"},
                    {data:"designation", name : "designation"},
                    {data:"relevant_experience", name : "relevant_experience"},
                    {data:"message", name : "message"},
                    {data:"created_at", name : "created_at"},
                    {data:"action", name : "action",orderable: false},
                    
                ],
            });
        });

        
        
       
    </script>  
@endsection