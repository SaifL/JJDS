<!DOCTYPE html>
<html>
    <h1>Caregiver's Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/chome.css') }}"></header>
<table>
    <label class="where">List of Patients duty today</label>
    <tr>
        <th>Name</th>
        <th>Morning Medicine<br><input class="righthere2" type="text"></th>
        <th>Afternoon Medicine<br><input class="righthere2" type="text"></th>
        <th>Night Medicine<br><input class="righthere2" type="text"></th>
        <th>Breakfast<br><input class="righthere2" type="text"></th>
        <th>Lunch<br><input class="righthere2" type="text"></th>
        <th>Dinner<br><input class="righthere2" type="text"></th>
    </tr>
</table>
<form action="">
    <input type="submit" value="Ok">
    <a href="/chome">Cancel</a>
</form>
</html>