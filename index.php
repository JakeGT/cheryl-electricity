<!DOCTYPE html>

<head>
    <?php
    session_start();

    if (isset($_SESSION['id']) && $_SESSION['id']!="") {
        header("Location: ./dashboard.php");
        die();
    }
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="bg"></div>
    <form action="login-action.php" method="post">
        <div class="form-field">
            <input type="text" placeholder="Username" required/>
        </div>
  
        <div class="form-field">
            <input type="password" placeholder="Password" required/>                         </div>
    
        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
    </form>
</body>
