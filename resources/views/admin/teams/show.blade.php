@include('admin.header') {{--Including header --}}
<div id = "wrapper">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Team Member Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::to('admin/teams/') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class = "container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $team->tName }}
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $team->tLocation }}
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Board:</strong>
                {{ $team->tBoard }}
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                {{ $team->tImage }}
            </div>
        </div>
     </div>   
    </div>
  </div>  
</body>
@include('admin.footer')