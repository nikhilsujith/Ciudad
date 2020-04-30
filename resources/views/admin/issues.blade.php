@include('admin.header')
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
            <th>Name</th>
            <th>Phone Number</th>
            <th>Issue Title</th>
            <th>Issue Description</th>
        </tr>
    </table>
</div>
@include('admin.footer')
