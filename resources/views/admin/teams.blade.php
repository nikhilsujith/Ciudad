@include('admin.header') {{--Including header --}}
<body>
@if(count($errors)>0)
    <div class = "alert alert-danger"> {{--bootstrap class--}}
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(\Session::has('success'))
    <div class = "alert alert-success"> {{--bootstrap class--}}
        <p>{{\Session::get('success')}}</p>
    </div>
@endif

    <div id = "wrapper">
        <table class = "admin-general-table">
            <tr class = "admin-general-table-title">
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Board</th>
                <th>Image File</th>
            </tr>
        @foreach($adminTeams as $row)
            <tr class = "admin-general-table-title">
                <td>{{$row['id']}}</td>
                <td>{{$row['tName']}}</td>
                <td>{{$row['tLocation']}}</td>
                <td>{{$row['tBoard']}}</td>
                <td>{{$row['avatar']}}</td>
                <td>
                    <form action="editTeams">
                        <input name = "team-id" type="hidden" value="{{$row['id']}}"/>
                        <button type="submit" style="margin-left: 1%;height: 4vh; font-size: 10px; padding: 0px;">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="deleteTeams">
                        <input name = "team-id" type="hidden" value="{{$row['id']}}"/>
                        <button type="submit" style="margin-left: 1%;height: 4vh; font-size: 10px; padding: 0px;">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="width: 200px;">
            Add New Team Member
        </a>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><U class="orange-txt"><i>Add</i></U>  Team Member</h3>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('admin/uploadfile')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <label>Name</label><br>
                        <input type ="text" class = "input-user-organizeEvents" name = "tName"/><br>

                        <label>Location</label><br>
                        <input type ="text" class = "input-user-organizeEvents" name = "tLocation"/><br>

                        <label>Board</label><br>
                        <input type ="text" class = "input-user-organizeEvents" name = "tBoard"/><br>

                        <div class="form-group">
                            <input type="file" name="select_file" />
                            <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                        </div>
                    </form>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
</form>
</body>
@include('admin.footer')


