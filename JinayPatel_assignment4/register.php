<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 4-Inventory Management System</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #wrapper
            {
                width:70%;
                margin:auto;
            }

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:40%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php
                require_once 'header.php';
            ?>

            <h2>Register</h2>

            <form action="register1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </form>

            <?php
                if (isset($_REQUEST['msg']))
                {
                    if ($_REQUEST['msg'] == "success")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-success alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Success!</strong> New user was registered.";
                        echo "</div></div>";
                    }
                    else if ($_REQUEST['msg'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Fail!</strong> New user was not registered.";
                        echo "</div></div>";
                    }
                    else if ($_REQUEST['msg'] == "userexists")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Fail!</strong> This username is already taken up. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
        </div>
    </body>
</html>
