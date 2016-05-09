<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\github\houtai\tp5\public/../application/index\view\template\login.html";i:1462784186;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="cbfun/login.php">
    <label for="username">用户名:</label>
    <input type="text"  name="username" id="username" value="" />
    <br/>
    <label for="pass">密码:</label>
    <input type="password"  name="pass" id="pass" value="" />
    <br/>
    <input type="submit" value="确定"  name="submit" />
    <input type="reset" value="重置" name="reset" />
</form>
</body>
</html>