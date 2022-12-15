<!DOCTYPE html>
<html>

    <h1>Roster</h1>
    <header><link rel="stylesheet" href="{{ asset('css/roster.css') }}"></header>

<form action="/api/display_roster" method="post">
    <label class="where">Date: </label>
<select class="righthere" name="roster_id">
            
    @foreach ($rosters as $roster)
       <option value="{{$roster->roster_id}}">{{$roster->date}}</option>
    @endforeach

</select>
<input class="align" type="submit" value="Select Roster">
</form>
<br><br>
<a href="/home" class="align16">Cancel</a>


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
</table>
</html>