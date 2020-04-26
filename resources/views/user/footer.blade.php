<?php //include "header.php" ?>
<footer>
    <container>
        <div id = "footer1">
            <div class = "row">
                <div class = "column">
                    <h2  class="font_style"><B>Contacte con </B><em class = "orange-txt"> Nosotros</em></h2>
                </div>
                <div class="column">
                    <form name = "footerEmail" id = "footer-form" method = "post" action="/AddFooterEmail">
                       {{csrf_field()}}
                        <input name="footerEmailInput" id = "footer-field-email" type = "email" placeholder="Enter Email">
                        <button id="footer1-email-submitBtn" type="submit">Enviar</button>
                    </form>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var elements = document.getElementsByTagName("INPUT");
                                for (var i = 0; i < elements.length; i++) {
                                    elements[i].oninvalid = function(e) {
                                        e.target.setCustomValidity("");
                                        if (!e.target.validity.valid) {
                                            e.target.setCustomValidity("Please enter a valid email address");
                                            e.target.style.borderColor="red";
                                            e.target.style.borderStyle="dashed";
                                            e.target.style.color="red";
                                            e.target.style.fontWeight="800";
                                            e.target.style.padding="10px";
                                            e.target.style.backgroundColor="black";
                                        }
                                    };
                                    elements[i].oninput = function(e) {
                                        e.target.setCustomValidity("");
                                    };
                                }
                            })
                        </script>
                    </form>
                </div>
            </div>
        </div>

        <div id="footer2">
            <center>
                <img style = "margin-top: 40px;" src = "../images/mail.jpg" width = "30px" height="30px">
                <img style = "margin-top: 40px;" src = "../images/twitter.jpg" width = "30px" height="30px">
                <img style = "margin-top: 40px;" src = "../images/instagram.png" width = "30px" height="30px">
            </center>
        </div>
        <div id="footer3">
            <div class = "column">
                <B class="orange-txt">DiazApps</B> 2020 &#169 All Rights Reserved
            </div>
            <div class = "column">
                <button id="topButton" onclick="topFunction()">^</button>
                <script>
                    //Get the button:
                    mybutton = document.getElementById("topButton");

                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};

                    function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            mybutton.style.display = "block";
                        } else {
                            mybutton.style.display = "none";
                        }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0; // For Safari
                        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                    }
                </script>
            </div>
        </div>
    </container>
</footer>
