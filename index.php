<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
          <h1 class="text-danger bg-dark text-center p-2 m-2">Login System in PHP</h1>  
        </div>

        <div class="row">
            <p class="text-center fs-2 text-danger"><?php 
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    echo $msg;
                }
                
            ?></p>
        </div>

        <div class="row">
            <form action="includes/loginProcess.php" method="POST" class="form">
                <div class="mb-3 fs-2 form-group">
                    <label class="form-label" for="uname">User Name:</label>
                    <input class="form-control fs-2" type="text" name="uname" id="uname">
                </div>
                <div class="mb-3 fs-2 form-group">
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control fs-2" type="email" name="email" id="email">
                </div>
                <div class="mb-3 fs-2 form-group">
                    <input class="btn btn-success fs-2" type="submit" name="login" id="login" value="Login">
                    <h4>If you are not Registered! <a href="registration.php">Click Here</a></h4>
                </div>
            </form>
        </div>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>