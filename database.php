<!DOCTYPE html>
<html>
    <style>
        body{background-color: #003060;}
        table, th, td{border: solid;
            width: 80%;
            color: white;
            text-align: center;
        }

    </style>
<body>
<table>
    <tr>
        <th>Patient Name             </th>
        <th> Patient Number          </th>
        <th> Patient Condition       </th>
    <tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "hospital patient database");
    if ($conn-> connect_error) {
        die("Connection failed:" . $conn-> connect_error);
    }
    $sql = "SELECT patientname, patientnumber, patientcondition from guestbook";
    $result = $conn->query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
            echo"<tr><td>". $row["patientname"]. "</td><td>". $row ["patientnumber"] . "</td><td>". $row["patientcondition"]. "</td></tr>";
            
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }
    $conn-> close()
    ?>
</body>
</html>
