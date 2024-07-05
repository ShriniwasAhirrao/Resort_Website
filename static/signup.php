<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-form {
            max-width: 400px;
            padding: 20px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .signup-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        .signup-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .signup-form .signup-link {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form id="signupForm" action="signup_process.php" method="post" onsubmit="return signUp()">
            <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
            <input type="email" id="email" name="email" placeholder="Email Address" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="submit" value="Sign Up">
        </form>
        <p class="signup-link">Already have an account? <a href="login.html">Login</a></p>
    </div>

    <script>
        function signUp() {
            // Get form values
            var fullName = document.getElementById("fullName").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
    
            // Perform validation
            if (fullName.trim() === '') {
                alert('Please enter your full name.');
                return false;
            }
    
            if (email.trim() === '') {
                alert('Please enter your email address.');
                return false;
            }
    
            // Regular expression for email validation
            var emailRegex = /^\S+@\S+\.\S+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }
    
            if (password.trim() === '') {
                alert('Please enter a password.');
                return false;
            }
    
            // Password length validation
            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                return false;
            }
    
            // Prevent form submission
            return true;
        }
    </script>
    <?php
// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "testing"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for insertion
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to insert data into database
$sql = "INSERT INTO user_login (user_email, user_password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

</body>
</html>
