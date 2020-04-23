@include('layouts.admin_view.admin_header') {{--Including header --}}
<body>
<div id = "wrapper">
    <table class = "admin-general-table">
        <tr class = "admin-general-table-title">
            <th>ID</th>
            <th>Title</th>
            <th>Organizer</th>
            <th>Location</th>``
            <th>Spots</th>
            <th>Spots Left</th>
            <th>Description</th>
        </tr>

{{--        <?php
        while ($row=$events->fetch()) { //fetch data from events table
            echo '<tr>';
            echo'<td>
                                    <form method="post" action="event_edit.php">
                                        <button title = "Edit This Entry" id="admin-team-id-button" name="user_name" value='.$row["eID"].'>'.$row["eID"].'</button>
                                     </form></td>';
            echo'<td>'.$row["eName"].'</td>';
            echo'<td>'.$row["eOrganizer"].'</td>';
            echo'<td>'.$row["eLocation"] . '</td>';
            echo'<td>'.$row["eSpot"].'</td>';
            if($row["eSpotRemaining"] == NULL){
                echo'<td>'.$row["eSpot"].'</td>';
            }
            else{
                echo '<td>'.$row["eSpotRemaining"].'</td>';
            }
            echo'<td>'.$row["eDesc"].'</td>';
        }
        ?>--}}
    </table>
{{--    <?php
    echo'
        <div class="row" id="admin-events-table-addButton">
            <form  method="post" action = "event_add.php">
                <div class="db-nameCards-editButton"><button><b class="orange-txt">+</b>Event</button></div>
            </form>
        </div>
    ';
    ?>--}}
</div>
</body>
@include('layouts.admin_view.admin_footer')


