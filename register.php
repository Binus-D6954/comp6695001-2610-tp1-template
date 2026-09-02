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
            Register
        </div>

        <!-- TODO: When user clicks login, form will collect data in input tags and send the data to actions/doLogin.php using POST request method. -->
        <!-- CODE STARTS HERE -->
        <form>
            <div>
                <label>Full Name</label>
                <input type="text" id="user-name">
            </div>
            <div>
                <label>E-mail Address</label>
                <input type="text" id="user-email">
            </div>
            <div>
                <label>Gender</label>
                <input type="radio" value="male"> Male
                <input type="radio" value="female"> Female
                <input type="radio" value="prefer_not_to_tell"> Prefer not to tell
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