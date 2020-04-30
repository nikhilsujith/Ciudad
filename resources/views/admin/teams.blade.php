@include('admin.header') {{--Including header --}}
<body>

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


    <div id = "wrapper">
        <table class = "admin-general-table">
            <tr class = "admin-general-table-title">
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Category</th>
                <th>Image File</th>
            </tr>
        </table>
    </div>
</body>
@include('admin.footer')


