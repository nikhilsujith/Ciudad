@include('admin.header') {{--Including header --}}
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Issue</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::to('admin/issues/') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
    
    

        {{ Form::model($issue, array('action' => array('Admin\IssuesAdminController@update', $issue->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('cPhone', 'Phone') }}
		{{ Form::text('cPhone', null, array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('cName', 'Name') }}
		{{ Form::text('cName', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('cTitle', 'Title') }}
		{{ Form::text('cTitle', null, array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('cDesc', 'Desc') }}
		{{ Form::text('cDesc', null, array('class' => 'form-control')) }}
	</div>

    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

         {{ Form::close() }}
</div>
</div>
</div>
	
</body>
@include('admin.footer')