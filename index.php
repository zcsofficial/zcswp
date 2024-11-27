<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        /* Reset and styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1d1d1f;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            width: 400px;
            padding: 20px;
            background-color: #292929;
            border-radius: 10px;
            border: 2px solid #ff0047;
        }

        .form-container h2 {
            text-align: center;
            color: #ff0047;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            color: #e2e2e2;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            padding-left: 30px;
            border-radius: 5px;
            border: 1px solid #444;
            background-color: #333;
            color: #ffffff;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #ff0047;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .form-container button:hover {
            background-color: #ff3366;
        }

        .form-group i {
            position: absolute;
            top: 35px;
            left: 10px;
            color: #888;
        }

        .error-message, .success-message {
            color: #ff0047;
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 10px;
        }

        .success-message {
            color: #00ff47;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <div class="error-message" id="error-message">
            <?php
            // Display error messages if any
            if (isset($_GET['error'])) {
                echo htmlspecialchars($_GET['error']);
            }
            ?>
        </div>
        <div class="success-message" id="success-message">
            <?php
            // Display success message if any
            if (isset($_GET['success'])) {
                echo htmlspecialchars($_GET['success']);
            }
            ?>
        </div>
        <form action="register_action.php" method="POST">
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <i class="fas fa-user"></i>
                <input type="text" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <i class="fas fa-user-tag"></i>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <i class="fas fa-phone"></i>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <select id="designation" name="designation" required>
                    <option value="ui_ux_designer">UI UX Designer</option>
                    <option value="frontend">Frontend</option>
                    <option value="backend">Backend</option>
                    <option value="devsecops">DevSecOps</option>
                    <option value="manager">Manager</option>
                    <option value="cyber_security">Cyber Security</option>
                </select>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
