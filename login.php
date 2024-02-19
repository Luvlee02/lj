<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
    <link rel="stylesheet" href="css/form.css">
  
</head>
<body>  
    <div class="container">
        <h1><b>LOGIN</b></h1>
          
        <form action="process.php" method ="POST">
                 
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required></p>
                      
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required></p>
                          
            <input type="submit" class="btn" name = "loginform" value ="LOGIN"></p>

            <p>Don't have an account? <a href="reg.php">REGISTER</a></p>                
        </form>
      </div>

</body>
