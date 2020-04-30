@include('/user.header')
<body>
<div id = "wrapper">

    {{--ERROR / SUCCESS ALERT--}}
    @if(isset(Auth::user()->uName))
        <script>
            window.location('/successLogin');
        </script>
    @endif
    @if ($message = Session::get('error'))
        <div class = "alert alert-danger alert-block">
            <button type="button" class = "close" data-dismiss = "alert">X</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
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

    <div id="loginValidate-contain">
        <h2><B>Log</B><I class = "orange-txt"><U>in</U></I></h2>
        <div>
            <form name = "loginValidateForm1" action="/doLogin" method = "post">
                {{csrf_field()}}
                Email<br>
                <input type ="email" id = "loginValidate-input-username" name = "uEmail" placeholder = "User Name"/>
                <p>
                    Password<br>
                    <input type ="password" id = "loginValidate-input-password" name = "uPassword" placeholder = "Password"/><br>
                </p>
                <p>
                    <input type = submit value="Login" placeholder = "Submit" id = "loginValidate-SubmitButton" onclick="validateForm_loginValidate()">
                </p>
            </form>
        </div>
    </div>
</div>
</body>
@include('/user.footer')
