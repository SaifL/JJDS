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
    <form action="">
        <label>Family Code: </label>
        <input type="text"><br>
        <label>Patient ID: </label>
        <input type="text"><br>
        <input type="submit" value="Ok">
    </form>
    <form action="">
        <input type="submit" value="Cancel">
    </form>
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
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table>

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
</html>