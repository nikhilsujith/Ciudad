@include('admin.header')
<div id = "wrapper">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Issues</h2>
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
            <th>Name</th>
            <th>Phone Number</th>
            <th>Name</th>
            <th>Issue Title</th>
            <th>Issue Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($issues as $issue)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $issue->cPhone }}</td>
            <td>{{ $issue->cName}}</td>
            <td>{{ $issue->cTitle }}</td>
            <td>{{ $issue->cDesc}}</td>
            <td>
            {{ Form::open(array('url' => 'admin/issues/' . $issue->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-info" href="{{ URL::to('admin/issues/' . $issue->id . '/edit') }}">Edit </a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $issues->links() !!}
</div>
@include('admin.footer')
