<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | CoinSwitch Ariano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">CoinSwitch Ariano</a>
    <div class="d-flex">
      <a href="profile.php" class="btn btn-outline-info me-2">Profile</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
  </div>
</nav>

<div class="container my-5">
    <h2 class="text-center">Welcome, <?php echo $_SESSION["username"]; ?> 👋</h2>
    <p class="text-center"><strong>Your Balance:</strong> $<?php echo $_SESSION["balance"]; ?></p>

    <!-- Market Section -->
    <h3 class="mt-4">Market Overview</h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr><th>Coin</th><th>Price ($)</th><th>Status</th></tr>
        </thead>
        <tbody>
            <tr><td>Bitcoin (BTC)</td><td>42,000</td><td class="text-success">+5%</td></tr>
            <tr><td>Ethereum (ETH)</td><td>2,900</td><td class="text-danger">-3%</td></tr>
            <tr><td>Ripple (XRP)</td><td>0.85</td><td class="text-success">+2%</td></tr>
        </tbody>
    </table>
</div>

</body>
</html>
