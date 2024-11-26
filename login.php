<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="aksi_login.php">
       <table align="center" style="margin-top: 200px;">
            <tr>
                <td><label>username : </label></td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td><label>password : </label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>                
                <td><input type="submit" value="login"></td>
            </tr>
       </table> 
    </form>
</body>
</html>