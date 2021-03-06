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
                    <h3 class="modal-title" id="exampleModalLabel"><U class="orange-txt"><i>Organize</i></U>  Event Form</h3>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div id = "organize-makeNewEvents">
                        <div class = "card" style="height: 100%; display: inline-block;margin-bottom: 10%;">
                            <form name = "loginValidateForm1" action="AddEvents" method = "post">
                                {{csrf_field()}}
                                <label>Event Name</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "eventName"/><br>

                                <label>Participant Name</label><br>
                                <input type ="text" class = "input-user-organizeEvents" name = "participantName"/><br>
                             
                                
                              
                            </form>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id = "">
    <table class = "admin-general-table">
        <tr class = "admin-general-table-title">
            <th>No</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Issue Title</th>
            <th>Issue Description</th>
            <th> Email </th>
        </tr>
        @foreach($issues as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['cName']}}</td>
                    <td>{{$row['cPhone']}}</td>
                    <td>{{$row['cTitle']}}</td>
                    <td>{{$row['cDesc']}}</td>
                    <td>{{$row['cEmail']}}</td>

                    
                   
                    <td>
                        <form action="DeleteIssues">
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

