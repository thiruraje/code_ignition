@extends('admin.layout.master')


@section('content')

 <div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> View TeamList
    </h1>
</div>

 <div class="row">
    <div class="col-xl-12">
        <div class="panel">
            <div class="panel-hdr">
                <h1>
                    {{$Team_name}}
                </h1>
               
            </div>
            @if(!empty($Team_details))
            	<table  class="table table-bordered table-striped DataTable">
                    <thead>
                        <tr>
                            <th >Team Members</th>
                            <th >Reg Num</th>
                            <th >Dept</th>
                            <th >Year</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($Team_details as $Team_detail)
                    	<tr>
                    		
            			 	<td>{{ $Team_detail->member_name }}</td>
                            <td>{{ $Team_detail->roll_num }}</td>
                            <td>{{ $Team_detail->department }}</td>
                            <td>{{ $Team_detail->year }}</td>
                    	
                    	</tr>

            			@endforeach 
                      
                    </tbody>
                </table>
            @else
	            <blockquote><p>Vehicle Type Didn't added!!</p></blockquote>
	        @endif
           
        </div>
    </div>
</div>
@endsection