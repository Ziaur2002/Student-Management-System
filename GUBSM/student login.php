<?php
include '\xampp\htdocs\GUBSM\Connection.php';

// Start the session only after successful authentication
session_start();

if (isset($_POST['Login'])) {
    $userId = $_POST['AdminUserId'];
    $password = $_POST['AdminPassword'];

    // Validate and sanitize user input
    $userId = mysqli_real_escape_string($con, $userId);
    $password = mysqli_real_escape_string($con, $password);

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM `student` WHERE `S_Id` = ? AND `Dob` = ?");
    $stmt->bind_param("ss", $userId, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['AdminLoginId'] = $userId;
        header("location: profile.php");
        exit();
    } else {
        $error = "Incorrect Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="/GUBSM/css/mycss.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img class="wave" src="/GUBSM/images/wave.jpg" alt="Wave">
    <div class="container">
        <div class="img">
            <img src="/GUBSM/images/Green.png" alt="Green Image">
        </div>
        <div class="login-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <img src="/GUBSM/images/Avatar.png" alt="Avatar">
                <h2 class="title">Welcome Student</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input" placeholder="Username" name="AdminUserId" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" placeholder="Password" name="AdminPassword" required>
                    </div>
                </div>
                <?php if (isset($error)) { ?>
                    <div class="error-message"><?php echo $error; ?></div>
                <?php } ?>
                <a href="#">Forgot Password?</a>
                <input type="submit" name="Login" value="Login" class="btn">
            </form>
        </div>
    </div>
</body>
</html>