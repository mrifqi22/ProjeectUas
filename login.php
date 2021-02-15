<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

</head>

<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Login</h1>
                <p>No Account? <a href="singup.php">Sign up</a></p>
            </div>
            <div class="box">
                <form class="form" action="config/proseslogin.php" method="POST">
                    <input type="text" name="username" class="username" placeholder="Username" required>
                    <input type="password" name="password" class="password" placeholder="Password" required>
                    <button type="submit" name="login" class="button">Login</button>
                </form>
            </div>
        </div>
        <ul style="color:white;" class="copyright">
            <li>&copy; @Copyright by 18111083_MuhammadRifqiRaufFathurrahman_TIFRP18CIDA.</li>
        </ul>
    </main>
    <script>
        if (document.forms["formSignup"]["username"].value == "") {
            alert("Username tidak boleh kosong");
            document.forms["formSignup"]["username"].focus();
            return false;
        }
        if (document.forms["formSignup"]["password"].value == "") {
            alert("password tidak boleh kosong");
            document.forms["formSignup"]["password"].focus();
            return false;
        } else {
            alert("Berhasil Login")
        }
    </script>

</body>

</html>