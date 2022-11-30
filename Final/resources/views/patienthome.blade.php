<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <label>Patient ID: </label>
    <p>sample ID</p>
    <label>Patient Name: </label>
    <p>sample Name</p>
    <br>
    <label>Date: </label>
    <p><?php
    echo $date;
    ?></p>
</html>