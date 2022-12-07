<!DOCTYPE html>
<html>

    <h1>Roster</h1>
    <header><link rel="stylesheet" href="{{ asset('css/roster.css') }}"></header>
<label class="where">Date: </label>
<input class="righthere" type="date">

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