<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
        
    <form class="login" action="validate.php" method="POST">
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <br>
        <label>
            <input type="password" name="password" placeholder="Password">
        </label>
        <?php
            if(isset($_GET["error"]))
                echo '<div class="warn">Incorrect username or password !</div>';
            if(isset($_GET["zonaprivada"]))
            echo '<div class="warn">Please log in !</div>'
        ?>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>