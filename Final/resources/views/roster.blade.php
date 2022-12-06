<!DOCTYPE html>
<html>
<form action="/api/display_roster" method="post">
    <label>Date: </label>
<select name="roster_id">
            
    @foreach ($rosters as $roster)
       <option value="{{$roster->roster_id}}">{{$roster->date}}</option>
    @endforeach

</select>
<input type="submit" value="Select Roster">
</form>

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
        <th>{{$supervisor}}</th>
        <th>{{$doctor}}</th>
        <th>{{$caregiver1}}</th>
        <th>{{$caregiver2}}</th>
        <th>{{$caregiver3}}</th>
        <th>{{$caregiver4}}</th>
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