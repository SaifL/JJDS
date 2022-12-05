<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
<label>Date: </label>
<p><?php
    echo $date;
    ?></p>
<table>
    <tr>
        <th>Supervisor</th>
        <th>Doctor</th>
        <th>Caregiver1</th>
        <th>Caregiver2</th>
        <th>Caregiver3</th>
        <th>Caregiver4</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Name</th>
        <th>Name</th>
        <th>Name</th>
        <th>Name</th>
        <th>Name</th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th>Patient Group</th>
        <th>Patient Group</th>
        <th>Patient Group</th>
        <th>Patient Group</th>
    </tr>
</table>
</html>
<style>
    h1 {
        font-size: 24px;
        margin-top: 100px;
        margin-right: 150px;
        margin-left: 80px;
    }
    h2 {
        font-size: 16px;
        margin-right: 150px;
        margin-left: 80px;
    }
    p {
        font-size: 14px;
        margin-right: 150px;
        margin-left: 80px;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        font-size: 16px;
        margin-right: 150px;
        margin-left: 80px;  
    }
    ol, ul {
        font-size: 14px;
        margin-right: 150px;
        margin-left: 55px;
    }
    </style>