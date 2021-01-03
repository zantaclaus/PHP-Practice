<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rigester</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="save-POST.php" method="POST">

        Usernaem :
        <input type="text" name="username" required="required">
        <br>

        Password :
        <input type="password" name="password" required="required">
        <br>

        name :
        <input type="text" name="member_name" required="required">
        <br>

        phone :
        <input type="text" name="phone" required="required">
        <br>
        
        email :
        <input type="email" name="email" required="required">
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>