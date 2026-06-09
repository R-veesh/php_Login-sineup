<?php
include_once("header.php");
?>

<section class="signup">
  <h2>Sign Up</h2>
  <form action="includes/signup.inc.php" method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="uid" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <button type="submit" name="submit">Sign Up</button>
  </form>

  
<?php
    if(isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords doesn't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username or email already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
?>

</section>


<?php
include_once("footer.php");
?>