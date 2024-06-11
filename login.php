<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Desa Sejahtera</title>
    <style>
        /* style.css login*/

/* Reset default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

/* Container styles */
.login-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Heading styles */
.container {
    text-align: center;
    margin-bottom: 20px;
}

/* Form styles */
form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Link styles */
p {
    text-align: center;
    margin-top: 20px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <main class="login-container">
        
        <h2 class="container">Login</h2>
        <form action="php/login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Registrasi disini</a></p>
    </main>
    
</body>
</html>
