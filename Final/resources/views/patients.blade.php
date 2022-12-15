<!DOCTYPE html>
<html>
    <h1>Patients</h1>
    <header><link rel="stylesheet" href="{{ asset('css/patients.css') }}"></header>

    <form action="/patients" method="get">
        <input class="align16" type="submit" value="Clear Filters">
        <a href="/home" class="align16">Cancel</a>
    </form>

    <form action="/api/patient_id" method="post">
        <label class="where">Enter an ID: </label>
        <select class="righthere" type="text" name="user_id">
            @foreach ($patients as $patient)
                <option value="{{$patient->user_id}}">{{$patient->user_id}}</option>
            @endforeach
        </select>
        <input type="submit" value="search">
    </form>

    <form action="/api/patient_name" method="post">
        <label class="where">Enter a Name: </label>
        <select class="righthere" type="text" name="last_name">
            @foreach ($patients as $patient)
                <option value="{{$patient->last_name}}">{{$patient->last_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="search">
    </form>

    <form action="/api/patient_relation" method="post">
        <label class="where">Enter a Relation: </label>
        <select class="righthere" type="text" name="rel_emergency">
            @foreach ($infos as $info)
                <option value="{{$info->rel_emergency}}">{{$info->rel_emergency}}</option>
            @endforeach
        </select>
        <input type="submit" value="search">
    </form>


    <form action="/api/patient_contact" method="POST">
        <label class="where">Enter a Contact: </label>
        <select class="righthere" type="text" name="contact">
            @foreach ($infos as $info)
                <option value="{{$info->emergency_contact}}">{{$info->emergency_contact}}</option>
            @endforeach
        </select>
        <input type="submit" value="search">
    </form>

    <form action="/api/patient_admission" method="post">
        <label class="where">Enter an Admission Date: </label>
        <select class="righthere" type="text" name="admission_date">
            @foreach ($infos as $info)
                <option value="{{$info->admission_date}}">{{$info->admission_date}}</option>
            @endforeach
        </select>
        <input type="submit" value="search">
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Relation to Emergency Contact</th>
            <th>Emergency Contact</th>
            <th>Admission Date</th>
        </tr>
        @foreach ($tables as $table)
        <tr>
            <td>{{$table->user_id}}</td>
            <td>{{$table->first_name}} {{$table->last_name}}</td>
            <td>{{date_diff(date_create($table->date_of_birth), date_create('today'))->y;}}</td>
            <td>{{$table->rel_emergency}}</td>
            <td>{{$table->emergency_contact}}</td>
            <td>{{$table->admission_date}}</td>
        </tr>
        @endforeach
    </table>
    <style>
    </style>
</html>