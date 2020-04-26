@include('admin.header') {{--Including header --}}

{{--Login Session Check---------------------------------------------------------BEGIN--}}
@if (isset(Auth::user()->uName))
    <div class = "alert alert-success success-block" id="successDiv">
        Welcome! <strong>{{Auth::user()->uName}}</strong>
        <a id = "logoutButton" href = "{{url('admin/logout')}}">Logout</a>
    </div>
@else
    <script>
        window.location="/admin";
    </script>
@endif
{{--Login Session Check---------------------------------------------------------END--}}

<body>
<div id = "wrapper">
    <table class = "admin-general-table">
        <tr class = "admin-general-table-title">
            <th>ID</th>
            <th>Title</th>
            <th>Organizer</th>
            <th>Location</th>
            <th>Spots</th>
            <th>Spots Left</th>
            <th>Description</th>
        </tr>
    </table>
</div>
</body>


@include('admin.footer')


