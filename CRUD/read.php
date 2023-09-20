<?php

#include "../Connection/db.php";
$query = "SELECT *FROM user";
$result = mysqli_query($conn, $query);





$table = "<table class='table table-hover'>
<thead>
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nome</th>
        <th scope='col'>Email</th>
    </tr>
</thead>
<tbody>";
    
while ($row = mysqli_fetch_assoc($result)) {

        $table .= "<tr>
                <td>".$row['user_id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
            </tr>";
        }

    $table .="</tbody>
    </table>";

     echo $table;