@include('admin.header')
<div id = "wrapper">
    <table class = "admin-general-table">
        <tr class = "admin-general-table-title">
            <th>Name</th>
            <th>Phone Number</th>
            <th>Issue Title</th>
            <th>Issue Description</th>
        </tr>
{{--        <?php
        while ($row=$issue->fetch()) { //fetch data from events table
            echo '<tr>';
            echo'<td>'.$row["iName"].'</td>';
            echo'<td>'.$row["iPhone"].'</td>';
            echo'<td>'.$row["iTitle"] . '</td>';
            echo'<td>'.$row["iComment"].'</td>';
        }
        echo '</tr>';
        ?>--}}
    </table>
</div>
@include('admin.footer')
