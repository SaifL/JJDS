<html>
    <h1>Login</h1>
<header><link rel="stylesheet" href="{{ asset('css/login.css') }}"> </header>
    


    <form class="middle"  action="/api/role_login" method="get">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label class="there" for="email">email</label>
        <input class="empty" type="text" name="email" placeholder="email"><br>
        <label class="there" for="password">Password</label>
        <input class="empty" type="password" name="password" placeholder="password" >
        <br>
        <br>
        <input class="align" type="submit" value="Ok"><form action="" method="get"><input class="align2" type="submit" value="Cancel">
        </form>
</html>