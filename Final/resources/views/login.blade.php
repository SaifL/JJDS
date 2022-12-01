<html>
    <h1>Login</h1>

    

    <form style="margin-left: 50%"  action="/api/role_login" method="get">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="text" name="email" placeholder="email" >
        <input type="password" name="password" placeholder="password" >
        <input type="submit" value="Ok"><form action="" method="get"><input type="submit" value="Cancel">
        </form>


</html>