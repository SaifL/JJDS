<!DOCTYPE html>
<html>
    <header><link rel="stylesheet" href="{{ asset('css/role.css') }}"> </header>
    <table>
        <h1>Role</h1>
        <tr>
            <th>Role</th>
            <th>Access Level</th>
        </tr>

    </table>
    <form action="/api/role" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


        <div class="down"><label class="where">New Role: </label><input class="righthere" type="text" name="role" placeholder="Role Name"><br><br></div>
        <label class="where">Access Level: </label>
        <input class="righthere" type="text" name="access_level" placeholder="Access Level">
        <input class="align15" type="submit" value='Ok'>
        <a href="/home" class="align16">Cancel</a>
    </form>
        {{-- <form action=""><input class="align16" type="submit" value="Cancel">
        </form> --}}

    <style>
        p {
            font-size: 14px;
            margin-right: 150px;
            margin-left: 80px;
        }
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            font-size: 16px;
            margin-left: 80px;  
            background-color: rgb(209, 207, 207);
        }
        th{
            height: 70px;
            width: 150px;
        }
        </style>
</html>