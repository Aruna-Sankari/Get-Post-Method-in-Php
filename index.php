   <html>
   <head>
   <title>Get & Post Method</title>
   </head>
   <body>
   <h4><u>GET & POST</u></h4>
    <form method="get" action="basic.php" id="form">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Password:</label>
        <input type="password" name="pass" required>
        <label>Email:</label>
        <input type="email" name="mail" required><br><br>
        <button type="submit" name="sub">Register</button>
    </form>
    <?php
    // if ($_GET) {
    //     print_r($_GET);
    // }
    ?>

    <form method="post" action="basic.php" id="form">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Password:</label>
        <input type="password" name="pass" required>
        <label>Email:</label>
        <input type="email" name="mail" required><br><br>
        <button type="submit" name="sub">Register</button>
    </form>
    <?php
    if ($_POST) {
        print_r($_POST);
    }
    ?>
	</body>
	</html>
	