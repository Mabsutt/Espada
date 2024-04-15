<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0;
}

.login-container {
    padding: 20px;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 350px; /* Slightly wider to accommodate more form elements */
    text-align: center;
}

.input-group {
    margin: 10px 0;
}

.input-group label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
    color: #333;
}

.input-group input, .input-group select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 5px;
    background-color: #28a745; /* A green color for the signup button */
    color: white;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Signup</h2>
        <form id="signupForm">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="sex">Sex:</label>
                <select id="sex" name="sex" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <button type="submit">Signup</button>
        </form>
    </div>

    <script >document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Check if username already exists in local storage
    if (localStorage.getItem(username) !== null) {
        alert("Username already exists. Please choose a different one.");
        return;
    }

    // Create a user object to store in local storage
    const userData = {
        username: username,
        password: password // Ideally, this should be hashed
    };

    // Store the user data in local storage
    localStorage.setItem(username, JSON.stringify(userData));

    // Redirect to the login page
    window.location.href = '../index.php';
});
</script>
</body>
</html>

