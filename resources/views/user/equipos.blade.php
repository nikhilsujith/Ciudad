@include('user.header')
    <body>
    <div  class="container-fluid" id = "wrapper">
        <div class = "container-fluid" id="BOD">
            <b  class = "imageTilesHeader-BOD"> Equipo de <i class="orange-txt" >Direccion</i></b><br>
            <div class = "row">
            @foreach($teams as $row)
                @if($row['tBoard'] == 'Director' OR $row['tBoard'] == 'director' OR $row['tBoard'] == 'board of director' OR $row['tBoard'] == 'board of directors' OR $row['tBoard'] == 'Board of Directors' OR $row['tBoard'] == 'Board Of Directors')
                        <div class = "col-4" style="border-style: solid;">
                            <img src ="/images/{{$row['avatar']}}" style="width: 30%;" class="img-fluid "><br>
                            <caption>{{$row["tName"]}}</caption><br>
                            <caption>{{$row["tLocation"]}}</caption>
                        </div>
            @endif
            @endforeach
            </div>
        </div>


        @php
            $count = 0;
            $count1 = 0;
        @endphp
        <div class = "container-fluid" id="BOD">
            <b  class = "imageTilesHeader-BOD"> Equipo de <i class="orange-txt" >Multidisciplinary</i></b><br>
            @php if($count%4 == 0)
            echo '<div class = "row" style="background-color: #06D85F;">';
            $count1 += 3;
            @endphp
            @foreach($teams as $row)
                @if($row['tBoard'] == 'multidisciplinary' OR $row['tBoard'] == 'Multidisciplinary' OR $row['tBoard'] == 'multi'OR $row['tBoard'] == 'other')
                        <div    style="border-style: solid;">
                            <img src ="/images/{{$row['avatar']}}" style="width: 30%;" class="img-fluid "><br>
                            <caption>{{$row["tName"]}}</caption><br>
                            <caption>{{$row["tLocation"]}}</caption>
                        </div>
                    @php
                        if($count1 == $count){
                            echo '</div>';
                        }
                        $count += 1;
                    @endphp
            @endif
            @endforeach
            </div>
    </div>
</body>
@include('user.footer')
</html>
