<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <h1>Roster</h1>
    <header><link rel="stylesheet" href="{{ asset('css/roster.css') }}"></header>
<label class="where">Date: </label>
<input class="righthere" type="date">
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