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
    @foreach($eventsAll as $row)
        <form method="post" action="{{url('admin/UpdateEvents')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type = "hidden" name = "_method" value="PATCH"/>

            <input type = "hidden" name="eid" value="{{$row['id']}}">

            <label>Name</label><br>
            <input type ="text"class = "input-user-organizeEvents" name = "eName" value="{{$row['eName']}}"/><br>

            <label>Organizer</label><br>
            <input type ="text" class = "input-user-organizeEvents" name = "eOrganizer" value="{{$row['eOrganizer']}}" readonly/><br>

            <label>Location</label><br>
            <input type ="text" class = "input-user-organizeEvents" name = "eLocation" value="{{$row['eLocation']}}"/><br>

            <label>Date</label><br>
            <input type ="text" class = "input-user-organizeEvents" name = "eDate" value="{{$row['eDate']}}" readonly/><br>

            <label>Description</label><br>
            <input type ="text" class = "input-user-organizeEvents" name = "eDesc" value="{{$row['eDesc']}}"/><br>

            <input type ="submit" class = "input-user-organizeEvents" value="Edit Events" style="background-color: #e65c00; color: white"/><br>
        </form>
    @endforeach
    </div>
</body>
