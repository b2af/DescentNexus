<!DOCTYPE html>
<html>
    <head>
        <title>See you in the mines!</title>
        <link href="cloak.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/nexus.css">

    </head>

    <body>
        <?php
            session_start();
            include 'DBconnector.php';

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $username = mysqli_real_escape_string($connection, $_POST['pilot']);
                $password = mysqli_real_escape_string($connection, $_POST['pilotPassword']);

                $SQL = "SELECT * FROM Player WHERE pilot='$username' AND password='$password'";
                $result = mysqli_query($connection, $SQL);

                if (mysqli_num_rows($result) === 1) {
                    $_SESSION['user_Id'] = $username;
                    header("Location: index.html");
                    exit;
                } else {
                    header("Location: notfound.html");
                    exit;
                }
            }
        ?>

        <!-- Navigation Bar -->
        <div class="nav">
            <h1 class="nav-title">Descent Nexus</h1>
            <hr>
            <a href="./index.html">Nexus</a>
            <a href="./rdl.html">RDL</a>
            <a href="./news.html">News</a>
            <a href="#">Coming Soon</a>
            <hr>
            <a href="./login.html">Login</a>
            <a href="./signup.html">Sign up</a>
            <a href="./inbox.html">Notifications</a>
        </div>

        <form name="login" action="/login.php" method="POST">
            <div class="lightbox">
                <div class="form-box">
                    <label for="pilot">Pilot:</label>
                    <input type="text" id="pilot" name="pilot" placeholder="Pilot Name" required>
                    <br>
                    <label for="pilotPassword">Password:</label>
                    <input type="password" id="pilotPassword" name="pilotPassword" placeholder="Password" required>
                    <br><br>
                    <input type="submit" value="Sign in" class="left-align" style="background-color: transparent; color: black">
                </div>
            </div>
        </form>
    </body>
</html>
