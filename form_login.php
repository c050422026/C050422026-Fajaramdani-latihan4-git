<!DOCTYPE html>
<html>
<head>
    <title>Form Login Sederhana</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Login">
    </form>

    <?php
    // Validasi login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Anda bisa mengganti username dan password sesuai kebutuhan
        $username_valid = "C050422026";
        $password_valid = "fajar123";

        if ($username === $username_valid && $password === $password_valid) {
            echo "<p>Login berhasil!</p>";
        } else {
            echo "<p>Login gagal. Silakan coba lagi.</p>";
        }
    }
    ?>
</body>
</html>