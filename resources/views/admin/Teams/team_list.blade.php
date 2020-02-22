@extends('admin.layout.master')


@section('content')
 <div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> View TeamList
    </h1>
     <a href="{{ action('AdminController\TeamListController@create') }}" class="btn btn-info pull-right">Add Team</a>
</div>

 <div class="row">
    <div class="col-xl-12">
        <div class="panel">
            <div class="panel-hdr">
                <h2>
                    Team Names
                </h2>
               
            </div>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="table-responsive">
                <table class="table table-bordered" id="TeamDetailsTable">
                    <thead>
                        <tr>
                            <th>team_name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    var teams = $('#TeamDetailsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ action('AdminController\TeamListController@index') }}',
        "columns": [
            {data: 'team_name', name: 'team_name'},
            {data: 'action', name: 'action'}
        ]
    });



    // $('#teams').on('click', '.Delete', function (e) { 
    //     e.preventDefault();
    //     var url = $(this).attr('href');
    //     var DeleteMessage = $(this).attr('DeleteMessage');
    //     swal({
    //         title: "Are you sure?",
    //         text: DeleteMessage,
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonClass: "btn-danger",
    //         confirmButtonText: "Yes, delete it!",
    //         cancelButtonText: "No, cancel!",
    //         closeOnConfirm: false,
    //         closeOnCancel: false
    //     },function(isConfirm) {
    //         if (isConfirm) {
    //             $.ajax(
    //                 {headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //                 url: url,
    //                 type: 'DELETE',
    //                 dataType: 'json',
    //             }).always(function (data) {
    //                 teams.ajax.reload();
    //                 swal("Deleted!", data.msg, data.status);
    //             });
    //         } else {
    //             swal("Cancelled", "Your Data is safe", "error");
    //         }
    //     });
    // });
</script>        
@endsection