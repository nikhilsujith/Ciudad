@include('layouts.admin_view.admin_header') {{--Including header --}}
<body>
    <div id = "wrapper">
        <table class = "admin-general-table">
            <tr class = "admin-general-table-title">
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Category</th>
                <th>Image File</th>
            </tr>
    {{--        <?php
            while ($row=$teams->fetch()) { //fetch data from events table
                echo '<tr>';
                echo'<td>
                        <form method="post" action="team_edit.php">
                            <button title = "Edit This Entry" id="admin-team-id-button" name="user_name" value='.$row["tid"].'>'.$row["tid"].'</button>
                         </form>
                     </td>';
                echo'<td>'.$row["tName"].'</td>';
                echo'<td>'.$row["tLocation"] . '</td>';
                echo'<td>'.$row["tBoard"].'</td>';
                echo'<td>'.$row["tImage"].'</td>';
            }
            ?>--}}
        </table>
    {{--    <?php
        echo'
            <div class="row" id="admin-events-table-addButton">
                <form  method="post" action = "team_add.php">
                    <div class="db-nameCards-editButton"><button><b class="orange-txt">+</b> Member</button></div>
                </form>
            </div>
        ';
        ?>--}}
    </div>
</body>
@include('layouts.admin_view.admin_footer')


