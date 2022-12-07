<!DOCTYPE html>
<html>
    <h1>Patients</h1>
    <header><link rel="stylesheet" href="{{ asset('css/patients.css') }}"></header>
    <form action="">
        <label class="where">Enter an ID: </label>
        <input class="righthere" type="text">
        <input type="submit" value="search">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Emergency Contact</th>
            <th>Afternoon Contact Name</th>
            <th>Admission Date</th>
        </tr>
    </table>
    <style>
    </style>
</html>