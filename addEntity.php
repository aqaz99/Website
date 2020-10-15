<?php
    $db = pg_connect("host=localhost port=5432 dbname=postgres user=kronos password=aqazaqaz");
    $query = "INSERT INTO Underling VALUES ('$_POST[name]','$_POST[race]',
    '$_POST[gender]','$_POST[age]','$_POST[inventory]',
    '$_POST[current_op]')";
    $result = pg_query($query);
?>
