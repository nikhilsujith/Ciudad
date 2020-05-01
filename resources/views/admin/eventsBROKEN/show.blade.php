@include('admin.header') {{--Including header --}}
<div id = "wrapper">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Event Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::to('admin/events/') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class = "container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $event->eName }}
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User:</strong>
                {{ $event->eRegUser }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Organizer:</strong>
                {{ $event->eOrganizer }}
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $event->eLocation }}
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $event->eDate }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spots:</strong>
                {{ $event->eSpots}}
            </div>
        </div>
     </div>   
    </div>
  </div>  
</body>
@include('admin.footer')