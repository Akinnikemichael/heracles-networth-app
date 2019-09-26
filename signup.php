<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heracles | Signup</title>
    <link rel="icon" href="images/Heracles.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container-fluid login-container">
        <div class="login-bg">
            <div class="row ">
                <div class="col-sm-7 col-md-7 col-lg-7 login-content">
                     <?php
                            if (isset($_GET["error"])) {
                               if ($_GET['error']=='userAlreadyExist') {
                                    echo '<p><p style = "text-align:center" class="text-danger"> User already exists</p><p>';
                                   }elseif($_GET['error']=='emptyfields'){
                                    echo '<p><p style = "text-align:center" class="text-danger"> PLease all fields correctly</p><p>';
                                   }else{
                                    echo '<p><p style = "text-align:center" class="text-danger">PLease make sure that your passwords match</p><p>';
                                   }    
                                }
                           ?> 
                    <form action="includes/signup.inc.php" class="signup-form" onsubmit="return formValidation()" method="post">
                        <div class="form-header">
                            <h1>Create Your Heracle Account</h1>
                        </div>
                        <div class="row justify-content-between">
                            <div class="form-group col-sm col- md col-lg">
                                <!-- <label for="firstname">firstname</label><br> -->
                                <input type="text" class="login-control" id="firstname" name="firstname"
                                    placeholder="firstname" required>
                            </div>
                            <div class="form-group col-sm col- md col-lg" required>
                                <!-- <label for="lastname">lastname</label><br> -->
                                <input type="text" class="login-control" id="lastname" name="lastname"
                                    placeholder="lastname">
                            </div>
                            <div class="w-100"></div><br>
                            <div class="form-group col-sm col- md col-lg" required>
                                <!-- <label for="email">email address</label><br> -->
                                <input type="text" class="login-control" id="email" name="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group col-sm col- md col-lg" required>
                                <!-- <label for="phonenumber">phone number</label><br> -->
                                <input type="text" class="login-control" id="mobile" name="mobile"
                                    placeholder="Phone number">
                            </div>
                            <div class="w-100"></div><br>
                            <div class="form-group col-sm col- md col-lg">
                                <!-- <label for="pwd">Password</label><br> -->
                                <input type="password" class="login-control" id="password" name="password"
                                    placeholder="Password" required><br>
                            </div>
                            <div class="form-group col-sm col- md col-lg" required>
                                <!-- <label for="pwd">Confirm Password</label><br> -->
                                <input type="password" class="login-control" id="Cpassword" name="confirmPassword"
                                    placeholder="Confirm Password" required>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary signup-btn" name="regBtn">create account</button><br><br>
                        <p class="mx-auto">Already have an account? <a class="login-link" href="signin.php">Login</a>
                        </p>
                    </form>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 image-content signup-content">
                    <img src="https://res.cloudinary.com/benjee/image/upload/v1569283279/undraw_chore_list_iof3_1_hfbbj3.svg"
                        alt="login illustration" class="signup-image">
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src='js/signup.js'></script>
</body>

</html>