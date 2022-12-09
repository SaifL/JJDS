<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <h1>Family Memeber's Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/fhome.css') }}"></header>
    <br><br>
    <label class="where">Date: </label>
    <input class="righthere" type="text"><br><br>
    <form action="">
        <div class="jarielneedstogetajob"><label class="where">Family Code: </label>
        <input class="righthere" type="text"><br><br>
        <label class="where">Patient ID: </label>
        <input class="righthere" type="text"><br><br>
        <input class="align15" type="submit" value="Ok">
        <a class="align16" href="/fhome">Cancel</a>
    </form></div>
    {{-- <form action="/fhome">
        <input type="submit" value="Cancel">
    </form> --}}
    <table>
        <tr>
            <th>Doctor's Name</th>
            <th>Doctor's Appointment</th>
            <th>Caregiver's Name</th>
            <th>Morning Medicine</th>
            <th>Afternoon Medicine</th>
            <th>Night Medicine</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
        </tr>
        <tr>
            <th></th>
            <th><br><input class="checkbox" type="checkbox" /></th>
            <th></th>
            <th><br><input class="checkbox" type="checkbox"></th>
            <th> <br><input class="checkbox" type="checkbox"></th>
            <th> <br><input class="checkbox" type="checkbox"></th>
            <th><br><input class="checkbox" type="checkbox"></th>
            <th><br><input class="checkbox" type="checkbox"></th>
            <th><br><input class="checkbox" type="checkbox"></th>
        </tr>
    </table>

</html>