<?php
require 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php' ?>

<body>
   <!-- header section starts  -->
   <?php include './components/header.php' ?>
   <!-- header section ends -->

   <!-- home section starts  -->
   <?php flash() ?>
   <section class="form-container">
      <form action="core/register.php" method="post" enctype="multipart/form-data">
         <h3>Welcome. Let's Get Started</h3>
         <input type="text" name="name"  placeholder="Enter your full name" class="box">
         <input type="text" name="phone"  maxlength="20" placeholder="Enter your phone number" class="box">
         <input type="text" name="address"  maxlength="20" placeholder="Enter your full address" class="box">
         <input type="email" name="email"  placeholder="Enter your email" class="box">
         <input type="password" id="pwd" name="password"  maxlength="20" placeholder="Enter your password" class="box">
         <input type="password"  name="confirm_password"  maxlength="20" placeholder="Confirm your password" class="box">

         <p>Have an account? <a href="./login.php">Login Now</a></p>
         <input type="submit" value="REGISTER" name="submit" class="btn">
      </form>
   </section>

   <!-- footer section starts  -->
   <?php include './components/footer.php' ?>
   <!-- footer section ends -->


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>

<script>
  $("#register-form").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        name: "required",
        email:{
          "required": true,
           "email":true
        },
        password:{
          "required":true,
          "minlength": 6
        },
        confirm_password:{
          required: true,
          minlength:6,
          equalTo:"#pwd"
        },
        phone:{
          required: true,
          digits: true

        },
      },
      // Specify validation error messages
      
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
</script>