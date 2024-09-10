<?php
require 'config/init.php';
isAuth();

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php' ?>


<body>

  <!-- header section starts  -->
  <?php include './components/header.php' ?>
  <!-- header section ends -->


  <!-- listings section starts  -->
  <?php include './components/property-add.php' ?>
  <!-- listings section ends -->


  <!-- footer section starts  -->
  <?php include './components/footer.php' ?>
  <!-- footer section ends -->


  <!-- custom js file link  -->
  <script src="js/script.js"></script>

</body>

</html>
<script>
  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#property-form").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        title: "required",
        address: "required",
        price:{
          "required":true,
          "number": true
        },
        owner:"required",
        contact:{
          required: true,
          digits: true

        },
        cover_image:{
          required: true,
          accept: "image/jpg,image/jpeg,image/png"
          // extension:"png|jpg|jpeg"
        },
        'images[]':{
          accept: "image/jpg,image/jpeg,image/png"
        },
        area:{
          required: true,
          number: true
        }
      },
      // Specify validation error messages
      messages: {
        title: "Please provide title",
        address: "Please provide address",
        price: {
          required: "Please provide price",
          number: "Price must be numeric "
        },
        area:{
          required: "Please provide area (sq meter)",
          number:"Area must be numeric"
        },
        owner:{
          required:"Please provide owner name"
        },
        contact:{
          required: "Please provide contact number",
          digits:"Only digits are allowed in contact"
        },
        cover_image:{
          required:"Please upload cover image",
          accept :"Allowed extension are png, jpg, jpeg"
        },
        'images[]':{
          accept :"Allowed extension are png, jpg, jpeg"
        }
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
</script>