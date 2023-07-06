@extends('admin.video.layout')

@section('admin_master_content')
    
    <div class="card custom table-card">
        <div class="card-header">
            <div class="card-title">
                Video
            </div>
          
            <a class="btn btn-primary" href="{{ route('video.create') }}"><i class="fa fa-plus"></i> Add </a>
           
            {{-- @if (permission_check('CONTACT_US_EXPORT'))1
            <form method="POST" name="dashboard_export" action="{{ route('testimonial.export') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <button type="submit" id="dashboardExport" class="btn btn-primary" >Export</button>
            </form>
            @endif --}}
        </div>
        <div class="card-body"> 
            <table class="table table-bordered table-centered m-0 tr-sm table-hover" id="data-table">
                <thead> 
                    <tr>
                        <th>S.No </th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Video Link</th>
                        <th>Status</th>
                        <th>Action</th>
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
               
                ajax: "{{ route('video.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'id',orderable: false, searchable: false},
                    {data:"title", name : "title"},
                    {data:"name", name : "name"},
                    {data:"description", name : "description"},
                    {data:"video_link", name : "video_link"},
                    {data:"status", name : "status"},
                    {data:"action", name : "action",orderable: false},
                    
                ],
            });
        });

        
        
       
    </script>  
@endsection