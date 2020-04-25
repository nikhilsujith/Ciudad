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


{{--Content--}}
<div id = "wrapper">
 <div id = "user-dashboard-contain">
     <div id = "user-dashboard-card">
         <div style="text-align: center;">
             <div class="card-header"> <h2 class="font_style"><p><B><U class="orange-txt">Bi</U>envinida</B></p></h2></div>
             <div class="card-body">
                 <br>
                 Thanks from the whole team. If you are an organizer you can create an event and help with our cause. If you are not as an organizer then you can join our events, read our blogs and reach out to us if you need any assistance.<br> We are here for you!!!
             </div>
         </div>
     </div>
     <div id = "user-dashboard-card" >
{{--         <div class="card">--}}
             <a type="hidden" href="/OrganizeEvents">
                 <div class="card-image">
                     <img class = "btn btn-success" id = "user-dashboard-events-background" src = "{{url('/images/events-background.jpg')}}">
                 </div>
                 <a>Organize an Event</a>
             </a>
             <a type="hidden" href="/ParticipateEvent">
                 <div class="card-image">
                     <img class = "btn btn-secondary" id = "user-dashboard-events-background" src = "{{url('/images/participate-background.jpg')}}">
                 </div>
                 <a>Participate an Event</a>
             </a>
{{--         </div>--}}
     </div>
 </div>
</div>

@include('user.footer')
