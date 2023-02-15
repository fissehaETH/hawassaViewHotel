<!DOCTYPE html>
<html>
<head>
	<title>login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="heading.css">
</head>
<body>
        <header>
                <div class="logos"><a href="home.html" class="logos"><img src="photos/hawassaviewlogo.png" alt="logos" id="imglogo">Hawassa view Hotel</a></div>
                <nav>
                  <a href="home.html" id="homeid">Home</a>
                  <a href="rooms.html" id="roomid">Room Booking</a>
                  <a href="dinning.html" id="dineid">Dining</a>
                  <a href="amenities.html" id="amentid">Amenities</a>
                  <a href="developers.html" id="developid">Developers</a>
                  <a href="index.php" id="loginid">login</a>
                  <a href="signup.html" id="signupid">sign up</a>
                  <a href="#contactss" id="contaid">Contact</a>
                </nav>
              </header>
                    <div class="container vh-100">
                            <div class="row justify-content-center h-100">
                                <div class="card w-25 my-auto shadow">
                                    <div class="card-header text-center bg-primary text-white">
                                        <h2>Login</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="login.php" method="POST">
                                            <div class="form-group">
                                                <label for="phoneNumber">Phone Number</label>
                                                <input type="tel" id="email" class="form-control" name="phonenumberlogin" />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" class="form-control" name="passwordlogin" />
                                            </div>
                                            <input type="submit" class="btn btn-primary w-100" value="Login" name="submitlogin"><br><br>
                                           <a href="signup.html"><input type="button" class="signups" value="sign up" name="sign-up" style="background-color:yellow;"></a> 
                                        </form>
                                    </div>
                                    <div class="card-footer text-right">
                                        <small>&copy;Hawassa View Hotel</small>
                                    </div>
                                </div>
                            </div>
                        </div>


        

              <footer>
                    <div class="contact">
                        <a id="contactss"></a>
                      <h4>Contact Us:</h4>
                      <p>Hawassa,Atote warka beside Hayole Secondary School 12345</p>
                      <p>Phone: (251) 926-095169</p>
                      <p>Email: ftsadiku@gmail.com</p>
                      <p>2023 &copy; copyright protected,Hawassa View Hotels Group</p>
                    </div>
                    <div class="social">
                      <a href="https://www.facebook.com/hawassaviewhotel" target="_blank">Facebook</a>
                      <a href="https://twitter.com/?lang=en" target="_blank">Twitter</a>
                      <a href="https://www.instagram.com/fisseha_tsadiku/" target="_blank">Instagram</a>
                    </div>
                  </footer>

        <script type="text/javascript" src="heading.js">
        
        </script>
	
</body>
</html>