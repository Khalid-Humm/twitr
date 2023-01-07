<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <br>
<br>
    <div class="cont">
        <form method="POST" action="assets/php/class_Login_Join/login.php" class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email" name="email" require/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" require/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" name="login" class="submit">Sign In</button>
         
</form>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form method="POST" action="assets/php/class_Login_Join/join.php" class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" name="name" require/>
                </label>
                <label>
                    <span>Email</span>
                    <input type="email"  name="email" require/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password"  name="password" require/>
                </label>
                <label>
                    <span>rePassword</span>
                    <input type="password"  name="repassword" require/>
                </label>
                <label>
                    <span>BirthDay</span>
                    <input type="date"  name="data" require/>
                </label>
                <button type="submit" name="join" for="join" class="submit">Sign Up</button>

                
</form>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>
