@include('admin.header') {{--Including header --}}
<body>
<div class = "container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit participants</h2>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class = "admin-general-table">
        <tr class = "admin-general-table-title">
            <th>No</th>
            <th>Event Name</th>
            <th>Name of user</th>
            
            <th width="280px">Action</th>
        </tr>
     
        @foreach ($participants as $participant)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $participant->eventName }}</td>
            <td>{{ $participant->participantName }}</td>
            
            <td>
           
                 
                 {{ Form::open(array('url' => 'admin/participants/' . $participant->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $participants->links() !!}
      
</div>
</body>
@include('admin.footer')