<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post" name="form1">
            <table>
                <tr>
                    <td>No Telp</td>
                    <td><input type="text" name="no_telp" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="Username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="Password" required></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><select name="Role" id="role" required>
                        <option disabled selected>Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                    <td><button class="btn" name="Submit">Register</button></td>
                    <td><button class="btn-log">Login</button><a href="index.php"></a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
// Check if form submitted, insert form data into user table
if(isset($_POST['Submit'])) {
    $no_telp=$_POST['no_telp'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Role=$_POST['Role'];
    echo($Password);
    // echo($judul);
    // include database connection file
    include_once("connect.php");

    // insert user data into table
    $result= mysqli_query($mysqli,
    "INSERT INTO login(no_telp,Username,Password,Role) VALUES ('$no_telp','$Username','$Password','$Role')");


    // show message when user added
    // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
    header("location:index.php");
}
?>
</table>

