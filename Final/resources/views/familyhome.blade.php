<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <header><link rel="stylesheet" href="{{ asset('css/fhome.css') }}"></header>
    <label class="where">Date: </label>
    <p><?php
    echo $date;
    ?></p>
    <form action="">
        <label class="where">Family Code: </label>
        <input class="righthere" type="text"><br><br>
        <label class="where">Patient ID: </label>
        <input class="righthere" type="text"><br><br>
        <input type="submit" value="Ok">
        <a href="/fhome">Cancel</a>
    </form>
    {{-- <form action="/fhome">
        <input type="submit" value="Cancel">
    </form> --}}
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