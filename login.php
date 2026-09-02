<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Project 1 - Login Register</title>
</head>
<body>
    <div>
        <div>
            Login
        </div>

        <!-- TODO: When user clicks login, form will collect data in input tags and send the data to actions/doLogin.php using POST request method. -->
        <!-- CODE STARTS HERE -->
        <form>
            <div>
                <label for="user-email">E-mail Address</label>
                <input type="text" id="user-email">
            </div>
            <div>
                <label for="user-password">Password</label>
                <input type="password" id="user-password">
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        <!-- CODE ENDS HERE -->
    </div>
</body>
</html>