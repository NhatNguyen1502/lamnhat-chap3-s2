<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="password" id="password" placeholder="Password">
        <button id="login_btn">Log in</button>
    </form>
    <?php
        $display = 'none';
        if ($_SERVER["REQUEST_METHOD"] == "POST") $display = ($_POST['password'] == '1234') ? 'block' : 'none';
    ?>
    
    <div id="hidden" style="display:<?echo $display?>">This is sensitive data visible only if the user knows the correct password</div>

</body>
</html>