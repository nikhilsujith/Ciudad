@include('admin.header') {{--Including header --}}
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Event</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::to('admin/events/') }}"> Back</a>
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
            
    
    

        {{ Form::model($event, array('action' => array('EventsAdminController@update', $event->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('eName', 'Name') }}
		{{ Form::text('eName', null, array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('eRegUser', 'RegUser') }}
		{{ Form::text('eRegUser', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('eOrg', 'Organizer') }}
		{{ Form::text('eOrganizer', null, array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('eLocation', 'Location') }}
		{{ Form::text('eLocation', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('eDate', 'Date') }}
		{{ Form::text('eDate', null, array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('eSpots', 'Spots') }}
		{{ Form::text('eSpots', null, array('class' => 'form-control')) }}
        
	</div>
    <div class="form-group">
		{{ Form::label('eSpotsRem', 'SpotsRem') }}
		{{ Form::text('eSpotsRem', null, array('class' => 'form-control')) }}
        
	</div>
    <div class="form-group">
		{{ Form::label('eDesc', 'Desc') }}
		{{ Form::text('eDesc', null, array('class' => 'form-control')) }}
        
	</div>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

         {{ Form::close() }}
</div>
</div>
</div>
	
</body>
@include('admin.footer')