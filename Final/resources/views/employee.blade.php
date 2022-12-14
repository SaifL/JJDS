<!DOCTYPE html>
<html>
    <h1>Employee</h1>
    <header><link rel="stylesheet" href="{{ asset('css/employee.css') }}"></header>

    <form action="/employee" method="get">
        <input type="submit" value="Clear Filters">
    </form>

    <form action="/api/search_id" method="post">
        <label for="">Seach By ID</label>
        <select name="user_id">
            @foreach ($employees as $employee)
                <option value="{{$employee->user_id}}">{{$employee->user_id}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>

    <form action="/api/search_name" method="post">
        <label for="">Seach By Name</label>
        <select name="last_name">
            @foreach ($employees as $employee)
                <option value="{{$employee->last_name}}">{{$employee->last_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>

    <form action="/api/search_role" method="post">
        <label for="">Seach By Role</label>
        <select name="role_id">
            @foreach ($roles as $role)
                <option value="{{$role->role_id}}">{{$role->role}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>

    <form action="/api/search_salary" method="post">
        <label for="">Seach By Salary</label>
        <select name="salary">
            @foreach ($salaries as $salary)
                <option value="{{$salary->salary}}">{{$salary->salary}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>


    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Salary</th>
        </tr>

        @foreach ($tables as $table)
        <tr>
            <td>{{$table->user_id}}</td>
            <td>{{$table->first_name}} {{$table->last_name}}</td>
            <td>{{$table->role}}</td>
            <td>{{$table->salary}}</td>
        </tr>
        @endforeach

    </table>
    <form action="/api/employee" method="post">
        <label class="where">Emp ID: </label>
        <input class="righthere" type="text" name="user_id"><br><br>
        <label class="where">New Salary: </label>
        <input class="righthere" type="text" name="salary">
        <br><br>
        <input class="align15" type="submit" value="Ok">
        <a class="align4" href="/home" >Cancel</a>
    </form>
</html>