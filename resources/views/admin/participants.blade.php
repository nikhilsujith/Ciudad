@include('admin.header')
{{--Set user session--}}{{--

@if (isset(Auth::user()->uName))
    <div class = "alert alert-success success-block" id="successDiv">
        Welcome! <strong>{{Auth::user()->uName}}</strong>
        <a id = "logoutButton" href = "{{url('/logout')}}">Logout</a>
    </div>
@else
    <script>
        window.location="/login";
    </script>
@endif

--}}


<head>
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>
<div id = "wrapper">
    {{--RETURNS VALIDATION SUCCESS OR FAIL--}}
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

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
<<<<<<< Updated upstream
                    <h3 class="modal-title" id="exampleModalLabel"><U class="orange-txt"><i>Organize</i></U>  Participant Form</h3>
=======
                    <h3 class="modal-title" id="exampleModalLabel"><U class="orange-txt"><i>Organize</i></U>  Event Form</h3>
>>>>>>> Stashed changes
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div id = "organize-makeNewEvents">
                        <div class = "card" style="height: 100%; display: inline-block;margin-bottom: 10%;">
                            <form name = "loginValidateForm1" action="AddEvents" method = "post">
                                {{csrf_field()}}
<<<<<<< Updated upstream
                                <label> Name</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "cName"/><br>

                                <label>Phone</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "cPhone"/><br>
                             
                                <label>Title</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "cTitle"/><br>
                                <label>Desc</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "cDesc"/><br>
                                <label>Email</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "cEmail"/><br>
                              
                            </form>
                        </div>
                    </div>
                    
=======
                                <label>Event Name</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "eventName"/><br>

                                <label>Participant Name</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "participantName"/><br>



                            </form>
                        </div>
                    </div>

>>>>>>> Stashed changes
                    <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id = "organize-existingEvents">
        <table class = "admin-general-table">
            <tr class = "admin-general-table-title">
                <th>ID</th>
                <th>Event Name</th>
                <th>Participant Name</th>

            </tr>
            @foreach($participants as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['eventName']}}</td>
                    <td>{{$row['participantName']}}</td>

                    <td>
                        <form action="participantEdit">
                            <input name = "team-id" type="hidden" value="{{$row['id']}}"/>
                            <button type="submit" style="margin-left: 1%;height: 4vh; font-size: 10px; padding: 0px;">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="DeleteParticipants">
                            <input name = "team-id" type="hidden" value="{{$row['id']}}"/>
                            <button type="submit" style="margin-left: 1%;height: 4vh; font-size: 10px; padding: 0px;">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
   
</div>


</body>

@include('admin.footer')
