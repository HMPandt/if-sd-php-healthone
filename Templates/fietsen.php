<h1>Fietsen</h1>
<?php
    global $result;
    $num = 1;
    echo "<table>";

    foreach ($result as &$data){
        echo "<tr>";
        echo "<td>" . $num . " " . "</td>";
        echo "<td>" . $data["Merk"]. "</td>";
        echo "<td>" . "<a href='detail.php?id=" . $data["ID"] . "'>" . $data["Type"]  . "</a>" . "</td>" ;
        $num++;
        echo "<tr>";

    }
    echo "</table>";

?>
