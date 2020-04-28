@include('admin.header') {{--Including header --}}
<body>
<div class = "container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Events</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ URL::to('admin/events/create') }}"> Add new event</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Event Name</th>
            <th>Name of user</th>
            <th>Organizer</th>
            <th>Location</th>
            <th>Date</th>
            <th>Spots</th>
            <th>Spots Available</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $event->eName }}</td>
            <td>{{ $event->eRegUser }}</td>
            <td>{{ $event->eOrganizer }}</td>
            <td>{{ $event->eLocation }}</td>
            <td>{{ $event->eDate }}</td>
            <td>{{ $event->eSpots }}</td>
            <td>{{ $event->eSpotsRem }}</td>
            <td>{{ $event->eDesc }}</td>
            <td>
           
                 
                 {{ Form::open(array('url' => 'admin/events/' . $event->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-info" href="{{ URL::to('admin/events/' . $event->id) }}">Show</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-info" href="{{ URL::to('admin/events/' . $event->id . '/edit') }}">Edit </a>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $events->links() !!}
      
</div>
</body>
@include('admin.footer')