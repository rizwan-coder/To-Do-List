<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 30px;
        }

        .header h1 {
            margin: 0;
        }

        .todo-list p {
    /* text-align: center;  */
  
     
    font-size: 20px;
    padding-left: 420px;
    padding-right: 420px;


}

        .header .login-button, .header .register-button {
            float: right;
            margin-left: 20px;
        }

        .container {
            margin-top: 20px;
        }

        

        .footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: right;
    position: absolute;
    bottom: 0;
    width: 98%;
    
}

.footer p {
    margin: 0;
    text-align: right; 
    
}

        .todo-list {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        } 
    </style>
</head>
<body>
    <div class="header">
        <h1>Daily Task Manager</h1>
        <a href="login.php" class="btn btn-primary login-button"><button>Login</button></a>
        <a href="registration.php" class="btn btn-secondary register-button"><button>Register</button></a>
        <a href="about.php" class="btn btn-secondary register-button"><button>About</button></a>

    </div>

    <div class="container">
        <div class="todo-list">
           <H1><center><u>Welcome to The Task Manager</u></center></H1>
        <p> Manage your tasks using the To-Do-List here..</p>
        <p>LogIn to continue !</p>
        <p>If new on our website, click 'Register' and continue.</p>
        <p>If you are already a member, click 'Login' and continue and you can add task.</p>
        </div>
    </div>
    <div class="footer">
        &copy; By Rizwan Shaikh
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
</body>
</html>