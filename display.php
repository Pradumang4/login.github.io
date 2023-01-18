<html>

<head>
    <title>Display</title>
    <STYLE>
        body {
            background:linear-gradient(lightblue,skyblue)
            
        }

        table {
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>

</head>

</html>
<?php
include "connection.php";
error_reporting(0);

$query = "SELECT * FROM details"; // selecting data from table'details' of db
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
//brought data in form of arrays
if ($total != 0) {
    //echo " table has record";
?>

    <body>
        <CENTER>
            <h2>DISPLAYING ALL RECORDS</h2>
            <table border="1" cellspacing="7" width="70%">
                <tr>
                    <th width="15%"> User name </th>
                    <th width="20%"> Email ID </th>
                    <th width="15%"> Contact </th>
                </tr>
    </body>




<?php
    while ($result = mysqli_fetch_assoc($data)) {
        echo " <tr>
                    <td>" . $result['User_name'] . "</td>
                    <td>" . $result['Email_ID'] . "</td>
                    <td>" . $result['Contact'] . "</td>
        </tr>";
    }
} else {
    echo "no record found";
}
?>
</table>
     </CENTER>

<!--echo $result['User_name'] . " " . $result['Email_ID'] . " " . $result['Contact'] . "<br>";