<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <h1>Patient's Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/phome.css') }}"></header>
    <label class="where">Patient ID: </label>
    <input class="righthere" type="text" name="Patient_ID" placeholder="Patient ID">
    <label class="where2">Patient Name: </label>
    <input class="righthere" type="text" name="Patient_Name" placeholder="Patient Name"><br>
    <br>
    <label class="where">Date: </label>
    <p style="margin-left: 11%; margin-top: -1.3%"><?php
    echo $date;
    ?></p><br>
    <table>
        <tr>
            <th>Doctor's Name</th>
            <th>Doctor's Appointment<br><input class="righthere2" type="text"></th>
            <th>Caregiver's Name</th>
            <th>Morning Medicine<br><input class="righthere2" type="text"></th>
            <th>Afternoon Medicine<br><input class="righthere2" type="text"></th>
            <th>Night Medicine<br><input class="righthere2" type="text"></th>
            <th>Breakfast<br><input class="righthere2" type="text"></th>
            <th>Lunch<br><input class="righthere2" type="text"></th>
            <th>Dinner<br><input class="righthere2" type="text"></th>
        </tr>

    </table>
</html>