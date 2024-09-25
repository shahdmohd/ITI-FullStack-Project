<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/signuplogin.css')}}">
    <script src="{{asset('./js/script.js')}}"></script> <!--navigation scripts-->
    <title>Registeration</title>
</head>

<body>
    <!-- The Biggest div  -->
    <div class="container">
        <!-- the image column -->
        <div class="col1">
            <img src="{{asset('./Media/images/Logo-removebg-preview.png')}}" alt="">
        </div>
        <!-- the form column -->
        <div class="col2">
            <!-- column2 header -->
            <div class="header">
                <p>Already have an account ? <button onclick="goToLogin()">sign in</button></p>
            </div>
            <!-- column inputs -->
            <div class="form-section">
                <h1>Welcome to BlogakTube!</h1><br>
                <p>Register your account</p><br>
                <form action="{{asset('./Frontend/html/login.html')}}">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required placeholder="Enter your username"><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required placeholder="Enter your Email"><br><br>
                    <label for="password">New Password:</label><br>
                    <input type="password" id="password" name="password" required
                        placeholder="Enter new Password"><br><br>
                    <label for="repassword">Re-Enter password:</label><br>
                    <input type="password" id="repassword" name="repassword" required
                        placeholder="Re-enter Password"><br><br>
                    <label for="male" class="labelgender">Male</label>
                    <input type="radio" name="gender" id="male" value="male" required>
                    <label for="female" class="labelgender">Female</label>
                    <input type="radio" name="gender" id="female" value="female" required><br>
                    <input type="submit" value="Register" id="submit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>