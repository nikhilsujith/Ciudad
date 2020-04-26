@include('admin.header') {{--Including header --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit teams</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teams.create') }}"> Add new team member</a>
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
                <form action="{{ route('teams.destroy',$teams->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('teams.show',$teams->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('teams.edit',$teams->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $teams->links() !!}
      
