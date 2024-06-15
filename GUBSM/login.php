<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            align-items:baseline;
            justify-content: top;
            height: 100vh;
            background-color: #f0f0f0;
            position: relative;
        }

        .image-container {
            flex: 1;
        }

        img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .login-container {
            flex: 0.5;
            width: 100%;
            max-width: 400px;
            align-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            margin: 20px;
            background-color:whitesmoke;
            padding: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            background-color: #008000;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn {
            height: 40px;
            width: 150px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #00b0ff);
        }

        .btn a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 0;
        }

        .btn:hover {
            background: linear-gradient(135deg, #00b0ff, #71b7e6);
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="images/students.jpg" alt="Students">
    </div>
    <div class="login-container">
        <h1>Login as</h1>
        <button class="btn">
            <a href="Student Login.php">Student</a>
        </button>
        <button class="btn">
            <a href="Admin Login.php">Admin</a>
        </button>
    </div>
</body>
</html>
