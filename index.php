<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" id="loginBtn">Login</button>
        </form>
        <div class="signup-link">
            <a href="html/signup.php">Sign Up</a>
        </div>
    </div>

    <script>document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Retrieve the user data from local storage
    const storedUser = localStorage.getItem(username);

    if (storedUser) {
        const userData = JSON.parse(storedUser);

        // Check if the input password matches the stored password
        if (userData.password === password) {
            window.location.href = 'html/home.php'; // Redirect to the home page
        } else {
            alert("Incorrect username or password");
        }
    } else {
        alert("Incorrect username or password");
    }
});
</script>
</body>
</html>
