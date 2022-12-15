<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <h1>Patient's Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/phome.css') }}"></header>
    <label class="where">Patient ID: </label>
    <input class="righthere" type="text" name="Patient_ID" value="{{$patients[0]->user_id}}" placeholder="Patient ID" disabled>
    <label class="where2">Patient Name: </label>
    <input class="righthere" type="text" name="Patient_Name" value="{{$patients[0]->first_name}} {{$patients[0]->last_name}}" placeholder="Patient Name" disabled><br>
    <br>
    <label class="where">Date: </label>
    <input class="righthere" type="date" value="<?php print(date("Y-m-d")); ?>"/><br>
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