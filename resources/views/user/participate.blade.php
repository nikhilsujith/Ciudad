@include('user.header')
{{--Set user session--}}
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

    <div id = "organize-existingEvents">
        <table class = "admin-general-table">
            <tr class = "admin-general-table-title">
                <th>Event ID</th>
                <th>Event Name</th>
            </tr>

            @foreach($myParticipationOnly as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['eventName']}}</td>
                </tr>
            @endforeach

        </table>
    </div>





</div>
@include('user.footer')
