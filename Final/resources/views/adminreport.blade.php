<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <header><link rel="stylesheet" href="{{ asset('css/report.css') }}"></header>
    <label class="where">Date: </label><input class="righthere" type="text">
    <br>
    <br>
    <input class="align2" type="submit" value="Missed Patient Activity">
    <table>
        <tr>
            <th>Patient's Name<br><input class="righthere2" type="text"></th>
            <th>Doctor's Name<br><input class="righthere2" type="text"></th>
            <th>Doctor's Appointment<br><input class="righthere2" type="text"></th>
            <th>Caregiver's Name<br><input class="righthere2" type="text"></th>
            <th>Morning Medicine<br><input class="righthere2" type="text"></th>
            <th>Afternoon Medicine<br><input class="righthere2" type="text"></th>
            <th>Night Medicine<br><input class="righthere2" type="text"></th>
            <th>Breakfast<br><input class="righthere2" type="text"></th>
            <th>Lunch<br><input class="righthere2" type="text"></th>
            <th>Dinner<br><input class="righthere2" type="text"></th>
        </tr>
    </table>
</html>