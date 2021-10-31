<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="btnbox">
                <div id="butt"></div>
                <button class="toggle-btn" type="button" onclick="login()">Login</button>
                <button class="toggle-btn" type="button" onclick="register()">Register</button>
            </div>
            <div class="social">
                <img src="fb.png" alt="">
                <img src="google.png" alt="">
                <img src="twitter.png" alt="">
            </div>



            <form id="login" action="" class="in">
                <input type="text" id="username" class="field" placeholder="User Id" required>
                <input type="text" id="password" class="field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                
                <button onclick="checkLogin()" class="sum">Login</button>
            </form>


            
            <form id="register" action="" class="in">
                <input type="text" id="newUsername" class="field" placeholder="User Id" required>
                <input type="email" id="newEmail" class="field" placeholder="Email Id" required>
                <input type="text" id="newPass" class="field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>I agree to terms & conditions</span>
                <button type="submit" onclick="newregister()" class="sum">Register</button>
            </form>
        </div>
    </div>
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("butt");
    function register(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";

    }
    function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";

    }


    function checkLogin(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        // alert(username);
        // alert(password);
        
        var request = new XMLHttpRequest();
        request.open('GET', 'config.php?u=' + username + "&p=" + password, false);
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert(request.responseText);
                location.reload()
            }
        };

        request.send();
    }
    function newregister(){
        var username = document.getElementById("newUsername").value;
        var password = document.getElementById("newPass").value;
        var email = document.getElementById("newEmail").value;
        // alert(username);
        // alert(password);
        
        var request = new XMLHttpRequest();
        request.open('GET', 'register.php?u=' + username + "&p=" + password + "&e=" +email, false);
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert(request.responseText);
                // Window.open('index.html', '_self');
                location.reload()
            }
        };

        request.send();
    }
</script>

</body>
</html>