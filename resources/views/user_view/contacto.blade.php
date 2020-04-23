@include('user_view.header'){{--Including header --}}
    <body>
    <div id = "wrapper">
        <div class = "row" id="contact-desktop">
            <div class = "column" id="ContactUsCol1">
                <h2 class = "font_style" ><p><B >NEUSTRAS &nbsp</B><I class="orange-txt">REDES<BR><U>SOC</U>IALES</I>
                    </p></h2>
                <div id="contact-icon-contain">
                    <div class = row>
                        <div class = column2>
                            <a href="https://www.instagram.com/"><img class="contact-icons" id="contact-instagram" src="../images/contact-instagram.png"></a>
                        </div>
                        <div class = column2>
                            <a href="https://twitter.com/genteyciudadorg"><img class="contact-icons" id="contact-twitter" src="../images/contact-twitter.png"></a>						</div>
                    </div>
                    <div class = row>
                        <div class = column2>
                            <a href="#"><img class="contact-icons" id="contact-phone" src="../images/contact-phone.png"></a>						</div>
                        <div class = column2>
                            <a href="#"><img class="contact-icons" id="contact-mail" src="../images/contact-mail.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "column" id="ContactUsCol2">
                <h2><p><B>FORMULARIO DE</B><br><I class = "orange-txt"><U>CO</U>NTACTO</I></h2>

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


                <div>
                    <form id = "contact-us-form" name = "contact-us-form" action="/ContactoAdd" method = "POST">
                        {{csrf_field()}}
                        Tu Nombre(requerido)<br>
                        <input type ="text" id = "contact-us-input-phone" maxlength="10" name = "cPhone" placeholder="Number" onkeypress='validateNumber(event)'/>
                        <p>
                            Tu Correo(requerido)<br>
                            <input type ="text" id = "contact-us-input-name" name = "cName" placeholder="Name" onkeypress='validateText(event)'><br>
                        </p>
                        <p>
                            Asunto <br>
                            <input type ="text" id = "contact-us-input-title" name = "cTitle" placeholder="Concern Title" maxlength = 50>

                        </p>
                        <p>
                            Asunto<br>
                            <textarea id = "contact-us-input-textArea" name = "cDesc" placeholder = "Description of your inquiry" maxlength = 300></textarea>
                        </p>
                        <p>
                            <button type="submit" name="submit">Enivar</button>
{{--                            <input type = button placeholder="Submit" id = "contact-us-submitButton" value = "Enviar" onclick="validateForm()"/>--}}
                        </p>
                    </form>
                </div>
                </p>
            </div>
        </div>
        <div id=contact-icon-contain-mobile class="row">
            <div class="column">
                <a href="https://www.instagram.com/"><img class="contact-icons-mobile" id="contact-instagram-mobile" src="../images/contact-instagram.png"></a>
            </div>
            <div class="column">
                <a href="https://twitter.com/genteyciudadorg/"><img class="contact-icons-mobile" id="contact-twitter-mobile" src="../images/contact-twitter.png"></a>
            </div>
            <div class="column">
                <a href="#"><img class="contact-icons-mobile" id="contact-phone-mobile" src="../images/contact-phone.png"></a>
            </div>
            <div class="column">
                <a href="#"><img class="contact-icons-mobile" id="contact-mail-mobile" src="../images/contact-mail.png"></a>
            </div>
        </div>
    </div>
</body>
</html>
@include('user_view.footer')
