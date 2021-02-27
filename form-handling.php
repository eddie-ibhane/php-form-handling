<!DOCTYPE html>
<htm>
    <head>
        <title>User Registration Form </title>
    </head>
    <body>
        <?php
            if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
            }

            if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
                echo "<h3>User Information </h3>";
                echo "First name: ". $fname. "<br>";
                echo "Last name: ". $lname. "<br>";
                echo "Email: ". $email. "<br>";
                echo "Password: ". $password. "<br>";
            }
        ?>

        <h3>User Registration Form</h3>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            First Name: <br><input type="text" name="fname">
            <br><br>
            Last Name: <br><input type="text" name="lname">
            <br><br>
            Email: <br><input type="email" name="email">
            <br><br>
            Password: <br><input type="password" name="password">
            <br><br>
            <input type="submit" value="Submit">
        
        </form>

    </body>
</htm>