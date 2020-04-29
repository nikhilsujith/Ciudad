@include('admin.header') {{--Including header --}}
<body>
<div class = "container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit teams</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ URL::to('admin/teams/create') }}"> Add new team member</a>
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
            <th>Name</th>
            <th>Location</th>
            <th>Board</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teams as $team)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $team->tName }}</td>
            <td>{{ $team->tLocation }}</td>
            <td>{{ $team->tBoard }}</td>
            <td>{{ $team->tImage }}</td>
            <td>
            <!-- <form action="deleteTeams" method="POST">
                    <input type="hidden" name = "value_Delete" value="{$team->id}">
                    <a class="btn btn-info" href="{{ route('teams.show',$team->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('teams.edit',$team->id) }}">Edit</a>
        
   
                    @csrf
                    @method('DELETE')
      
            <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                 -->
                 {{ Form::open(array('url' => 'admin/teams/' . $team->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-info" href="{{ URL::to('admin/teams/' . $team->id) }}">Show</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-info" href="{{ URL::to('admin/teams/' . $team->id . '/edit') }}">Edit </a>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $teams->links() !!}
      
</div>
</body>
@include('admin.footer')