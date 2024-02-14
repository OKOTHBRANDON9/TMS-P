<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tender Manager Register - Tender Management System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="register-container">
    <h1>Tender Manager Registration</h1>
    <form action="tender_manager_register.php" method="post">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="username">Enter Organization Name:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Choose a Password:</label>
      <input type="password" id="password" name="password" required>
      <label for="password">Repeat Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login-tender-manager.html">Log in here</a></p>
  </div>
</body>
</html>
