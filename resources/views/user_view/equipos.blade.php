@include('user_view.header')

@section('equipos-body')
    <body>
    <div id = "wrapper">
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
@include('user_view.footer')
<script>
    function openNav() {
        var e = document.getElementById("mySidenav"); //store mySidenav in e
        var f = document.getElementById("content-wrap"); //store main in f
        if (e.style.width=='250px'&& f.style.marginLeft=='250px') //check if both are expanded
        { //if expanded, revert to 0
            e.style.width='0px';
            f.style.marginLeft='0px';
        }
        else //if not expanded, expand to 250 px
        {
            e.style.width='250px';
            f.style.marginLeft='250px';
        }
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("content-wrap").style.marginLeft = "0";

    }
</script>
</html>
