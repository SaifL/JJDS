<!DOCTYPE html>
<html>
    <h1>Employee</h1>
    <header><link rel="stylesheet" href="{{ asset('css/employee.css') }}"></header>

    <form action="search_id" method="post">
        <label for="">Seach By ID</label>
        <select name="user_id">
            @foreach ($employees as $employee)
                <option value="{{$employee->user_id}}">{{$employee->user_id}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>

    <form action="" method="post">
        <label for="">Seach By Name</label>
        <select name="user_id">
            @foreach ($employees as $employee)
                <option value="{{$employee->last_name}}">{{$employee->last_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>

    <form action="" method="post">
        <label for="">Seach By Role</label>
        <select name="user_id">
            @foreach ($roles as $role)
                <option value="{{$role->role_id}}">{{$role->role}}</option>
            @endforeach
        </select>
        <input type="submit" value="Search">
    </form>

    <form action="" method="post">
        <label for="">Seach By Salary</label>
        <select name="user_id">
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
        <input type="submit" value="Change" id="">
    </form>
</html>