<!DOCTYPE html>
<html>
    <table>
        <tr>
            <th>Role</th>
            <th>Access Level</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </table>
    <form action="/api/role" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label>New Role: </label>
        <input type="text" name="role" placeholder="Role Name">
        <label>Access Level: </label>
        <input type="text" name="access_level" placeholder="Access Level">
        <input type="submit" value="Ok">
    </form>
    <form action="/ahome">
        <input type="submit" value="Cancel">
    </form>
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
</html>