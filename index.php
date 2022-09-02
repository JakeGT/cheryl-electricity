<!DOCTYPE html>

<head>
    <?php
    session_start();

    $login_error = "";

    if (isset($_SESSION['id']) && $_SESSION['id']!="") {
        header("Location: ./dashboard.php");
        die();
    }
    require "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $_SESSION['login_err'] = "";

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT id, password FROM users WHERE username=?";

        $statement = $link->prepare($sql);
        $statement->bind_param('s', $username);

        $statement->execute();

        $result = $statement->get_result();

        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $strd_password = $row['password'];
            if (password_verify($password, $strd_password)) {
                session_regenerate_id();
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id'];
                header("Location: dashboard.php");
            }
            else {
                $login_error = "Incorrect password";
            }
        }
        else {
            $login_error = "User does not exist";
        }
    }
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
        if (!($login_error == "")) {
            $ret = $ret . '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>'.$login_error.
        '</div>';
        }

    ?>
    <div id="bg"></div>
    <form action="index.php" method="post">
        <div class="form-field">
            <input type="text" placeholder="Username" required name="username"/>
        </div>
  
        <div class="form-field password">
            <input type="password" placeholder="Password" required name="password"/>
        </div>
        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
        <div id="register">
        <a href="register.php">Don't have an account? Register now!</a>
        <div>
    </form>
</body>
