@include('admin.header') {{--Including header --}}
  

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Team Member</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ URL::to('teams/') }}"> Back</a>
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
<div class ="container">
{{ Form::open(array('url' => 'teams')) }}

<div class="form-group">
		{{ Form::label('tName', 'Name') }}
		{{ Form::text('tName', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tLocation', 'Location') }}
		{{ Form::text('tLocation', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tBoard', 'Board') }}
		{{ Form::text('tBoard', null, array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('tImage', 'Image') }}
		{{ Form::text('tImage', null, array('class' => 'form-control')) }}
        
	</div>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

         {{ Form::close() }}
</div>
<!-- <form action="{{ route('teams.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="tName" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <input type="text" name="tLocation" class="form-control" placeholder="Location">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Board:</strong>
                <input type="text" name="tBoard" class="form-control" placeholder="Board">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="text" name="tImage" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form> -->
</div>
</body>
@include('admin.footer')
