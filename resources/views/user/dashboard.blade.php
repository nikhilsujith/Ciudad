@include('user.header')
<strong>USER DASHBOARD</strong>
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

@include('user.footer')
