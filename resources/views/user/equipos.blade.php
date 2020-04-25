@include('user.header')
    <body>
    <div id = "wrapper">

{{--        @if (isset(Auth::user()->uName))
            <div class = "alert alert-success success-block" id="successDiv">
                Welcome! <strong>{{Auth::user()->uName}}</strong>
                <a id = "logoutButton" href = "{{url('/logout')}}">Logout</a>
            </div>
        @else
            <script>
                window.location="/login";
            </script>
        @endif--}}


        <div id="team-images">
            <!--Board of Directors Title-->
            <div class="team-subtitles" id = "board-of-directors-team">
                <div class = "row">
                    <b  class = "imageTilesHeader-BOD"> Equipo de <i class="orange-txt" >Direccion</i></b><br>
                </div>
            </div>
            <!--Board of Directors Images-->
            <div class = "row row-team-BOD">
 {{--               <?php
                while($row=$board->fetch())
                    echo"

                    <div class = \"column, imageTilesBOD\">
                        <img src = \"../images/".$row["tImage"]."\" ><br>
                        <caption>".$row["tName"]."</caption><br>
						<caption>".$row["tLocation"]."</caption>

                    </div>
                ";
                ?>--}}
            </div>
            <!--Multi Disiplinary Teams-->
            <!--Multi Disiplinary Team TITLE-->
            <div class="team-subtitles" id = "multi-disiplinary-team">
                <div class = "row">
                    <b  class = "fonts_style, imageTilesHeader-BOD"> Equipo de <i class="orange-txt" >Trabajo Multidiscilina</i></b><br>
                </div>
            </div>
       {{-- <?php
        $count = 0;
        $count1 =0;
        while($row=$multiTeam->fetch()){
            if($count%4==0){
                echo '<div class = "row row-team-BOD">';
                $count1+=3;
            }
            echo "<div class = \"column, imageTiles\">
                        <img src = \"../images/".$row["tImage"]."\" ><br>
                        <caption>".$row["tName"]."</caption><br>
                        <caption>".$row["tLocation"]."</caption>
                            </div>";


            if($count1 == $count){
                echo '</div>';
            }
            $count+=1;
        }


        ?>--}}
        <!--Multi Disiplinary Team Images-->
        </div>
    </div>
    </div>
    </body>
@include('user.footer')
</html>
