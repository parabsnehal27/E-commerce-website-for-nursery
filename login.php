

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-login</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
        <div id="container" class="container">
            <!-- FORM SECTION -->
            <div class="row">
                <!-- SIGN UP -->
                
                <div class="col align-items-center flex-col sign-up">
                    <div class="form-wrapper align-items-center">
                        
                        <div class="form sign-up">
                        <form action="connect.php" method="post">
                            <div class="input-group">      
                                <input type="text" id="username" name="username" placeholder="Enter Username" required>    
                                <input type="password" id="password" name="password" placeholder="Enter Password" required>                      
                                <input type="email" id="email" name="email" placeholder="Enter Email ID" required>
                                <input type="tel" id="phoneno" name="phoneno" placeholder="Enter Phone Number" required>                                
                                <div class="error-message" id="errorMessage"></div>
                            </div>
                            <button>
                                Sign up
                            </button>
                            <p>
                                <span>
                                    Already have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign in here
                                </b>
                            </p>
                        </form>
                        </div>

                    </div>
                </div>
                
                <!-- END SIGN UP -->
                <!-- SIGN IN -->
                
                <div class="col align-items-center flex-col sign-in">
                    <div class="form-wrapper align-items-center">
                        
                        
                        <div class="form sign-in">
                        <form action="signin.php" method="post">
                            <div class="input-group">
                                <input type="text" id="username" name="username" placeholder="Enter Username" required>
                                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                            </div>
                            <button>
                                Sign in
                            </button>
                            <p>
                                <b>
                                    Forgot password?
                                </b>
                            </p>
                            <p>
                                <span>
                                    Don't have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign up here
                                </b>
                            </p>
                        </form>
                        </div>
                        
                    </div>
                </div>
               
                <!-- END SIGN IN -->
            </div>
            <!-- END FORM SECTION -->
            <!-- CONTENT SECTION -->
            <div class="row content-row">
                <!-- SIGN IN CONTENT -->
                <div class="col align-items-center flex-col">
                    <div class="text sign-in">
                        <h2>
                            Welcome
                        </h2>
        
                    </div>
                </div>
                <!-- END SIGN IN CONTENT -->
                <!-- SIGN UP CONTENT -->
                <div class="col align-items-center flex-col">
                    <div class="img sign-up">
                    
                    </div>
                    <div class="text sign-up">
                        <h2>
                            Join with us
                        </h2>
        
                    </div>
                </div>
                <!-- END SIGN UP CONTENT -->
            </div>
            <!-- END CONTENT SECTION -->
        </div>    
        <script src="logic.js"></script>
</body>
</html>