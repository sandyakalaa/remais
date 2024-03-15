
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration</title>
      <!-- Favicons -->
      <link href="assets/img/logo/logo-rohis.png" rel="icon">
      <script src="https://kit.fontawesome.com/951fa0c9d0.js" crossorigin="anonymous"></script>
      

    <!-- Template Main CSS File -->
    <link href="assets/css/signup.css" rel="stylesheet">

   <!-- Include jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
      	 
         <div class="x-icon">
            <a href="beranda.php" class="x-btn">
            <i class="fa-solid fa-xmark fa-2xl" style="color: #c0c0c0;"></i>
            </a>
         </div>
      <div class="profile-image">  
         <img src="assets/img/logo/logo-rohis-awal.png">
        </div>
         <div class="title-text">

      <div class="title login">
               Login 
      </div>
      <div class="title signup">
         Signup 
      </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <i class="fa fa-envelope"></i>
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <i class="fa fa-lock"></i>
                     <input id="login-password" type="password" placeholder="Password" required>
                     <i id="show-login-password" class="fa fa-eye"></i> 
                  </div>
                  <div class="pass-link">
                     <a href="login.php">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="sign">Signup now</a>
                  </div>
                  <div class="separator">
				         <span class="separator-text">atau</span>
		            </div>
                   <div class="socmed-login">

                     <a href="#g-plus" class="socmed-btn google-btn">
                     <i class="fa-brands fa-google-plus fa-2xl" style="color: #ff0000;" ></i>
                     </a>
                     
                     <a href="#facebook" class="socmed-btn facebook-btn">
                     <i class="fa-brands fa-facebook fa-2xl" style="color: #0080ff;"></i>   
			            </a>
                     <a>
                      <a href="#twitter" class="socmed-btn twitter-btn">
                     <i class="fa-brands fa-twitter fa-2xl" style="color: #74C0FC;"></i>
                     </a>

		            </div>
               </form>

               <form action="#" class="signup" id="sign">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                     <i class="fa fa-envelope"></i>
                  </div>
                  <div class="field">
                     <i class="fa fa-lock"></i>
                     <input id="signup-password" type="password" placeholder="Password" required>
                     <i id="show-signup-password" class="fa fa-eye"></i> 
                  </div>
                  <div class="field">
                     <i class="fa fa-lock"></i>
                     <input id="confirm-signup-password" type="password" placeholder="Confirm password" required>
                     <i id="show-confirm-signup-password" class="fa fa-eye"></i> 
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
                  <div class="separator">
				         <span class="separator-text">atau</span>
		            </div>
                  <div class="socmed-login">

                     <a href="#g-plus" class="socmed-btn google-btn">
                     <i class="fa-brands fa-google-plus fa-2xl" style="color: #ff0000;" ></i>
                     </a>
                     <a href="#facebook" class="socmed-btn facebook-btn">
                     <i class="fa-brands fa-facebook fa-2xl" style="color: #0080ff;"></i>   
			            </a>
                     <a>
                      <a href="#twitter" class="socmed-btn twitter-btn">
                     <i class="fa-brands fa-twitter fa-2xl" style="color: #74C0FC;"></i>
                     </a>
		            </div>
               </form>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      $(document).ready(function() {
         // Handler for login form
         $('#show-login-password').click(function() {
            togglePassword($(this), '#login-password');
         });

         // Handler for signup form
         $('#show-signup-password').click(function() {
            togglePassword($(this), '#signup-password');
         });

         // Handler for confirm signup form
         $('#show-confirm-signup-password').click(function() {
            togglePassword($(this), '#confirm-signup-password');
         });

         function togglePassword($icon, inputId) {
            if ($icon.hasClass('fa-eye')) {
               $(inputId).attr('type', 'text');
               $icon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
               $(inputId).attr('type', 'password');
               $icon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
         }
      });
      </script>
   </body>
</html>