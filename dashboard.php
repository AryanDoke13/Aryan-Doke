<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

<h2>Edit Profile</h2>
<form method="POST">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>">
    </div>
    <button class="btn btn-primary">Save Changes</button>
</form>

</body>
</html>
