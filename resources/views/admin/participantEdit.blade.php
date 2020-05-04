@include('admin.header')
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    @if(\Session::has('success'))
        <div class = "alert alert-success"> {{--bootstrap class--}}
            <p>{{\Session::get('success')}}</p>
        </div>
    @endif
<body>
    <div id="wrapper">
    @foreach($participantAll as $row)
        <form method="post" action="{{url('admin/UpdateParticipants')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type = "hidden" name = "_method" value="PATCH"/>

            <input type = "hidden" name="pid" value="{{$row['id']}}">

            <label>Event Name</label><br>
            <input type ="text"class = "input-user-organizeEvents" name = "eventName" value="{{$row['eventName']}}"/><br>

            <label>Participant</label><br>
            <input type ="text" class = "input-user-organizeEvents" name = "participantName" value="{{$row['participantName']}}"/><br>

            
            <input type ="submit" class = "input-user-organizeEvents" value="Edit participant" style="background-color: #e65c00; color: white"/><br>
        </form>
    @endforeach
    </div>
</body>
