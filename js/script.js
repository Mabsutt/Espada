document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Getting form values
    const username = document.getElementById('username').value;
    const fullname = document.getElementById('fullname').value;
    const password = document.getElementById('password').value;
    const sex = document.getElementById('sex').value;
    const dob = document.getElementById('dob').value;

    // Store user data (locally)
    localStorage.setItem('username', username);
    localStorage.setItem('fullname', fullname);
    localStorage.setItem('password', password);
    localStorage.setItem('sex', sex);
    localStorage.setItem('dob', dob);

    // Redirect to the login page after signup
    window.location.href = '../index.php';
});
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Retrieve the user data from local storage
    const storedUser = localStorage.getItem(username);
    
    if (storedUser) {
        const userData = JSON.parse(storedUser);

        // Check if the input password matches the stored password
        if (userData.password === password) {
            window.location.href = 'html/home.php'; // Correct redirection to 'html/home.php'
        } else {
            alert("Incorrect username or password");
        }
    } else {
        alert("Incorrect username or password");
    }
});
