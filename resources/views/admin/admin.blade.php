@include('admin.header')

<div id="wrapper">
{{--    --}}{{--ERROR / SUCCESS ALERT--}}{{--
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
    @endif--}}

    {{--Error Validation----------------------------------------------------------------------------Begin --}}
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
    {{--Error Validation----------------------------------------------------------------------------END --}}


    <div>
            <div id="loginValidate-contain">
                <h2><B>Admin</B>  <I class = "orange-txt"><U>Lo</U>gin</I></h2>
                <div>
                    <form name = "loginValidateForm1" action="admin/doAdminLogin" method = "post">
                        {{csrf_field()}}
                        Email<br>
                        <input type ="email" id = "loginValidate-input-username" name = "aEmail" placeholder = "Email"/>
                        <p>
                            Password<br>
                            <input type ="password" id = "loginValidate-input-password" name = "aPassword" placeholder = "Password"/><br>
                        </p>
                        <p>
                            <input type = submit value="Login" placeholder = "Submit" id = "loginValidate-SubmitButton" onclick="validateForm_loginValidate()">
                        </p>
                    </form>
                </div>
            </div>
        </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width: 200px;">
    Admin Registration
</button>

<!-- Admin Register Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2><p><B>ADMIN</B> <I class = "orange-txt"><U>RE</U>GISTRATION</I></h2>
            </div>
            <div class="modal-body">
                        <form id = "contact-us-form" name = "contact-us-form" action="admin/AdminAdd" method = "POST">
                            {{csrf_field()}}
                            Name<br>
                            <input type ="text" id = "contact-us-input-phone" maxlength="10" name = "aName"/>
                            <p>
                                Email<br>
                                <input type ="email" id = "contact-us-input-name" name = "aEmail"/><br>
                            </p>
                            <p>
                                Password <br>
                                <input type ="password" id = "contact-us-input-title" name = "aPassword"/>
                            </p>
                            <p>
                                <button type="submit" name="submit">Enivar</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
