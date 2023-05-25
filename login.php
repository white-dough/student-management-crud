<?php
$curError = "";
isset($_GET['err']) ? $curError = $_GET['err'] : false;
isset($_GET['logout']) ? $curError = "logoutsuccess" : false;
isset($_GET['register']) ? $curError = "registersuccess" : false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body class="p-5 font-poppins">
    <h1 class="text-2xl font-bold">Student Management</h1>
    <!-- parent div -->
    <div class="flex flex-col sm:flex-row justify-evenly items-center mt-10">
        <!-- text div -->
        <div class="flex flex-col text-left p-3 pt-20">
            <h1 class="text-3xl font-semibold"><b>Welcome</b><br>Log in to continue
            </h1>
            <br>
            <br>
            <p>Don't have an account?<br>
                You can <a class="text-blue-500 hover:cursor-pointer font-bold" href="signup.php"><u>Register Here</u></a>
            </p>
        </div>
        <!-- form div -->
        <div class="flex flex-col justify-center p-3 gap-7">
            <h1 class="font-semibold text-2xl">Sign in</h1>
            <form class="flex flex-col relative gap-5" method="POST" action="login-process.php">
                <?php if ($curError == "logoutsuccess")
                    echo '<p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">Logged out successfully<br></p>';
                if ($curError == "registersuccess")
                    echo '<p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">Registered successfully<br></p>';
                elseif ($curError == "1")
                    echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">Username not found. Please try again.<br></p>';
                elseif ($curError == "2")
                    echo '<p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">The password you entered is incorrect. Please try again.<br></p>';
                ?>
                <input class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500" type="text"
                    id="loginfo" placeholder="Username" name="username" required>
                <input class="bg-gray-200 p-3 rounded-md placeholder-black w-80 focus:outline-blue-500" type="password"
                    id="password" placeholder="Password" name="password" required>
                <button class="bg-blue-500 p-3 rounded-md text-white mt-7 w-80" type="submit" name="submit">Login
                </button>
            </form>
        </div>
    </div>
</body>

</html>