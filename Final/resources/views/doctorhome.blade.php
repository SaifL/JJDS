<!DOCTYPE html>
<html>
    <h1>Doctor's Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/dhome.css') }}"></header>
    {{-- <form action="">
        <select name="search" id="attribute" class="where">
            <option value="name">Name</option>
            <option value="date">Date</option>
            <option value="comment">Comments</option>
            <option value="morning_med">Morning Medicine</option>
            <option value="afternoon_med">Afternoon Medicine</option>
            <option value="night_med">Night Medicine</option>
        </select>
        <input type="submit" value="Search" class="align2">
    </form> --}}
    <form action="/api/search_name2" method="post">
        <label for="">Seach By Name</label>
        <select name="last_name" class="where">
            @foreach ($patients as $patients)
                <option value="{{$patients->last_name}}">{{$patients->last_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search" class="align2">
    </form>
<table>
    <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Comment</th>
        <th>Morning Med</th>
        <th>Afternoon Med</th>
        <th>Night Med</th>
    </tr>
    @foreach ($tables as $table)
    <tr>
        <td>{{$table->first_name}} {{$table->last_name}}</td>
        <td>{{$table->date}}</td>
        <td>{{$table->comment}}</td>
        <td>{{$table->morning_med}}</td>
        <td>{{$table->afternoon_med}}</td>
        <td>{{$table->night_med}}</td>
    </tr>
    @endforeach
</table>
<br>

<label class="where">Appointments: </label>
<input class="righthere" type="text">
<form>
    <div class="ALLIWANTISFORYOUTOGOUP"><input class="align" type="submit"></div>
</form>
<table>
    <tr>
        <th>Patient</th>
        <th>Date</th>
    </tr>
</table>
</html>