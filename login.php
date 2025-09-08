<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <header id="hex-grid">
            <div class="light"></div>
            <div class="grid"></div>
    <script>
        const light = document.querySelector(".light");
const grid = document.querySelector("#hex-grid");

grid.addEventListener('mousemove', function (e) {
    light.style.left = `${e.clientX}px`;
    light.style.top = `${e.clientY}px`;
});
    </script>
    <h2>Admin Login</h2>
    <div class="box">
        <div class="form"></div>
    </div>
    <form action="login_act.php" method="POST">
    <fieldset>
        <label for="name">Username: <span style="color: red;">*</span></label><br>
        <input required type="text" class="name" name="userName" id="userName" placeholder="  Enter your username"
            oninvalid="this.setCustomValidity('Please enter your first name')" 
            oninput="this.setCustomValidity('')">
        <br><br>
        <label for="name">Password: <span style="color: red;">*</span></label><br>
        <input required type="password" class="name" name="password" id="password" placeholder="  Enter yout password"
            oninvalid="this.setCustomValidity('Please enter your last name')" 
            oninput="this.setCustomValidity('')">
        
        <br><br>
        <input type="submit" name="submit" class="submit" id="login" value="Log in Here">
    </fieldset>
    </form>
        </header>
    </div>
</body>
</html>