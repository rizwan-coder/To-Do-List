<?php
include 'connection.php';
include 'todo_connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Page</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #c5fff8;;
        }

        .container {
            max-width: 430px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #edf5ff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
        }


        .header {
            background-color: #3498db;
            color: #332c16;
            padding: 2px;
            text-align: center;
            margin: -30px -30px 30px -30px; /* Add negative margins to extend to the edges */
            border-radius: 10px 10px 0 0;
        }

        .header1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .header1 h1 {
            margin: 0;
            text-align: left;
            
            font-family: san-serif;
      
        }

        .header1 .login-button,
        .header1 .register-button {
    border: none;
    float: right;
    margin-left: 20px;
    margin-top: -40px;
    background-color: #333;
    border-color: none; 
    color: #fff; 
    transition: background-color 0.3s ease;
}

.header1 .login-button:hover,
.header1 .register-button:hover {
    background-color: #218838; 
}
 
        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-family: Fantasy;
            padding-top: 17px;
        }

        

        .form-group {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

<div class="header1">
        <h1>Daily Task Manager</h1>
        <a href="login.php" class="btn btn-primary login-button"><button>Login</button></a>
        <a href="index.html" class="btn btn-secondary register-button"><button>Home</button></a>
        <a href="about.php" class="btn btn-secondary register-button"><button>About</button></a>

    </div>


    <div class="container">
        
        <div class="header">
        <h2><u>REGISTRATION PAGE</u></h2>
    </div>
    
   
        <form action="" method="post">
            <div class="form-group">
            <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full-Name" required>
            </div>
            <div class="form-group">
            <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="user" placeholder="Create Username" required>
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="mail" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
            <label for="mobile">Mobile:</label>
                <input type="tel" class="form-control" maxlength="10" id="mobile" name="mob" placeholder="Enter Mobile" required>
            </div>
            <div class="form-group">
            <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="pass" placeholder="Create Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="sbt">Sign Up</button>
        </form>
        <p class="text-center mt-3">Already have an account? <a href="login.php">Log in</a></p>
    </div>

</body>

</html>


<?php
if(isset($_POST['sbt'])){
    $name=$_REQUEST['name'];
    $user=$_REQUEST['user']; 
    $mail= $_REQUEST['mail'];
    $phone = $_REQUEST['mob']; 
    $pass= $_REQUEST['pass'];

    $que= "select username from admin where username= '$user';";
    $result=mysqli_query($connect, $que);

    $queryyy= "select email from admin where email= '$mail';";
    $resulttt=mysqli_query($connect, $queryyy);


    $fetch= mysqli_fetch_assoc($result);
    $fetchh=mysqli_fetch_assoc($resulttt);

        
        if($fetch===NULL or $fetch['username']!==$user){

            if($fetchh===NULL or $fetchh['email']!==$mail){

            $query= "Insert into admin (name, username, phone, password, email) values ('$name', '$user', '$phone', '$pass', '$mail');";
            $result= mysqli_query($connect, $query);

                $queryy="create table $user(id int primary key auto_increment, task varchar(30), description text, time datetime);";
                $resultt= mysqli_query($connection, $queryy);

            if(isset($result)){
            echo "<script>alert('Registration Successful');</script>";
    }
    }

    else{
        echo "<center>Email already Registered</center>";
    }
        }
    
        else{
                echo "<center>Username already exist try new one<center>";
        }
}
?>