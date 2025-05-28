<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connect to the database
    $conn = new mysqli("localhost", "tours-1", "tours-1", "tours"); // Replace with your DB credentials

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Login Handling
    if (isset($_POST['login-email']) && isset($_POST['login-password'])) {
        $email = $_POST['login-email'];
        $password = $_POST['login-password'];
    
        // Prepare the SQL query to prevent SQL injection
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);  // 's' for string parameter
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            // Fetch user data from the result
            $user = $result->fetch_assoc();
            
            // Verify the password (assuming it's hashed)
            if (password_verify($password, $user['password'])) {
                // Successful login, set session variables
                
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a CSRF token
                session_regenerate_id(true);
                // Redirect to dashboard page 
                header('Location: dashboard.php');
                exit(); 
            } else {
                // Invalid password
                echo "<script>alert('Invalid email or password.');</script>";
            }
        } else {
            // No user found with the given email
            echo "<script>alert('Invalid email or password.');</script>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Connect to the database
        $conn = new mysqli("localhost", "tours-1", "tours-1", "tours"); // Replace with your DB credentials
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        //Could be stored securely in a configuration file or environment variable
        $storedSecretKey = 'secret'; 
    
        if (isset($_POST['signup-name'], $_POST['signup-email'], $_POST['signup-password'], $_POST['signup-confirm-password'], $_POST['signup-secret-key'], $_POST['signup-confirm-secret-key'])) {
            $name = $_POST['signup-name'];
            $email = $_POST['signup-email'];
            $password = $_POST['signup-password'];
            $confirmPassword = $_POST['signup-confirm-password'];
            $secretKey = $_POST['signup-secret-key'];
            $confirmSecretKey = $_POST['signup-confirm-secret-key'];
    
            // Check if passwords match
            if ($password !== $confirmPassword) {
                echo "<script>alert('Passwords do not match.');</script>";
                exit();
            }
    
            // Check if secret keys match
            if ($secretKey !== $confirmSecretKey) {
                echo "<script>alert('Secret keys do not match.');</script>";
                exit();
            }
    
            // Verify the provided secret key
            if ($secretKey !== $storedSecretKey) {
                echo "<script>alert('Invalid secret key.');</script>";
                exit();
            }
    
            // Hash the password before storing it
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
            // Prepare the SQL query to prevent SQL injection
            $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sss', $name, $email, $hashedPassword); // 'sss' for string parameters
    
            if ($stmt->execute()) {
                echo "<script>alert('Signup successful! You can now log in.');</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
    
            // Close statement
            $stmt->close();
        }
    
        // Close database connection
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Template</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="css/loginstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <!-- Login Form -->
            <div id="login-form" class="form-section active">
                <h2>Login</h2>
                <form id="login" method="POST">
                    <div class="input-group">
                        <label for="login-email">Email</label>
                        <input type="email" id="login-email" name="login-email" required>
                    </div>
                    <div class="input-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" name="login-password" required>
                    </div>
                    <button type="submit" class="submit-btn">Login</button>
                    <button type="button" class="submit-btn" style="margin-top: 10px;" onclick="window.location.href='./index.php'">Go to Home</button>
                    <p class="toggle-link">Want to create a new account? <a href="#" onclick="toggleForm('signup')">Sign up</a></p>
                </form>
            </div>

            <!-- Signup Form -->
            <div id="signup-form" class="form-section">
                <h2>Signup</h2>
                <form id="signup" method="POST">
                    <div class="input-group">
                        <label for="signup-name">Name</label>
                        <input type="text" id="signup-name" name="signup-name" required>
                    </div>
                    <div class="input-group">
                        <label for="signup-email">Email</label>
                        <input type="email" id="signup-email" name="signup-email" required>
                    </div>
                    <div class="input-group">
                        <label for="signup-password">Password</label>
                        <input type="password" id="signup-password" name="signup-password" required>
                    </div>
                    <div class="input-group">
                        <label for="signup-confirm-password">Confirm </label>
                        <input type="password" id="signup-confirm-password" name="signup-confirm-password" required>
                    </div>
                    <div class="input-group">
                        <label for="signup-confirm-secret-key">Confirm Secret Key</label>
                        <input type="password" id="signup-confirm-secret-key" name="signup-secret-key" placeholder="Enter secret key"  required>
                    </div>
                    <div class="input-group">
                        <label for="signup-confirm-secret-key">Confirm Secret Key</label>
                        <input type="password" id="signup-confirm-secret-key" name="signup-confirm-secret-key" placeholder="Confirm secret key"  required>
                    </div>
                    <button type="submit" class="submit-btn">Sign Up</button>
                    <p class="toggle-link">Already have an account? <a href="#" onclick="toggleForm('login')">Login</a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleForm(formType) {
            const loginForm = document.getElementById('login-form');
            const signupForm = document.getElementById('signup-form');
            if (formType === 'signup') {
                loginForm.classList.remove('active');
                signupForm.classList.add('active');
            } else {
                signupForm.classList.remove('active');
                loginForm.classList.add('active');
            }
        }
    </script>
</body>
</html>



