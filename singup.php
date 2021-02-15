<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="signup-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Sign Up</h1>
                <p>Have Account? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
                <form class="form" action="config/prosesregister.php" method="POST">
                    
                    <input type="text" class="Username" name="username" placeholder="Username" required>
                    <input type="password" class="Password" name="password" placeholder="Password" required>
                    <button type="submit" name="daftar" class="button">Daftar</button>
                </form>
            </div>
        </div>
        <ul style="color:white;" class="copyright">
            <li>&copy; @Copyright by 18111083_MuhammadRifqiRaufFathurrahman_TIFRP18CIDA.</li>
    </ul>
    </main>
    <script>
        function validateform(){
            if(document.forms["formSignup"]["nama"].value == ""){
                alert("Nama tidak boleh kosong");
                document.forms["formSignup"]["nama"].focus();
                return false;
            }
            if(document.forms["formSignup"]["jenis kelamin"].value == ""){
                alert("Jenis kelamin tidak boleh kosong");
                document.forms["formSignup"]["jenis kelamin"].focus();
                return false;
            }
            if(document.forms["formSignup"]["username"].value == ""){
                alert("Username tidak boleh kosong");
                document.forms["formSignup"]["username"].focus();
                return false;
            }
            if(document.forms["formSignup"]["password"].value == ""){
                alert("password tidak boleh kosong");
                document.forms["formSignup"]["password"].focus();
                return false;
            } else {
                alert("Sign Up Berhasil, Silahkan Login")
            }
        } 
    </script>
</body>
</html>