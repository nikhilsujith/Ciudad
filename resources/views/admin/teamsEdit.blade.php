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

        @foreach($teamsAll as $row)

            <form method="post" action="{{url('admin/updateTeams')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type = "hidden" name = "_method" value="PATCH"/>

                    <input type = "hidden" name="tid" value="{{$row['id']}}">

                    <label>Name</label><br>
                    <input type ="text"class = "input-user-organizeEvents" name = "tName" value="{{$row['tName']}}"/><br>

                    <label>Location</label><br>
                    <input type ="text" class = "input-user-organizeEvents" name = "tLocation" value="{{$row['tLocation']}}"/><br>

                    <label>Board</label><br>
                    <input type ="text" class = "input-user-organizeEvents" name = "tBoard" value="{{$row['tBoard']}}"/><br>

                    <div class="form-group">
                        <table class="table">
                            <tr>
                                <td><input type="file" name="select_file" /></td>
                                <td ><input type="submit" name="upload" class="btn btn-primary" value="Upload"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>

        @endforeach
