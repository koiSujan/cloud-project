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
  <section class="overview">
    <div class="flx flx-ctr flx-between" style="margin: 20px 0;">
      <h2 class="title-h2">Properties</h2>
      <a href="./property-post.php" class="theme-btn mg-x ">Add Property</a>
    </div>
    <div class="app-content">
      <?php
      $rows = array();
      $userId = (int)$_SESSION['auth_id'];
      $statement = $connection->prepare("Select * from properties  where user_id=?");
      $statement->bind_param(
        "i",
        $userId
      );
      if ($statement->execute()) {
        $result = $statement->get_result();
        while ($row = $result->fetch_assoc()) {
          $rows[] = $row;
        }
        // print_r($rows);
      }
      ?>
      <div style="overflow-x:auto;">
        <table class="app-table" id="property-table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Property Info</th>
              <th>Price</th>
              <th>Contact</th>
              <th>Details</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (isset($rows) && count($rows) > 0) {
              foreach ($rows as $key => $data) {
            ?>
                <tr>
                  <td><?php echo ($data['id']) ?></td>
                  <td>
                    <div class="p-detail">
                      <p class="title">
                        <?php
                        echo $data['title']
                        ?>
                      </p>
                      <p class="addr">
                        <?php
                        echo $data['address']
                        ?>
                      </p>
                      <p class="dt">
                        <?php
                        echo 'Listed On: ' . $data['listed_date'];
                        ?>
                      </p>
                    </div>
                  </td>
                  <td><?php echo $data['price'] ?></td>
                  <td>
                    <div class="p-contact">
                      <p><span style="font-weight:600">Owner:</span> <?php echo $data['owner'] ?></p>
                      <p><span style="font-weight:600">Phone</span> <?php echo $data['contact_person_number'] ?></p>
                    </div>
                  </td>
                  <td>
                    <div class="p-detail-2">
                      <p>Area: <?php echo $data['area'] ?></p>
                      <p>Bed: <?php echo $data['bed_no'] ?></p>
                      <p>Bathroom: <?php echo $data['bath_no'] ?></p>
                    </div>
                  </td>
                  <td>
                    <div class="table-action">
                      <a target="_blank" href="../property.php/?id=<?php echo $data['id'] ?>" title="View Detail"><i class="ri-eye-line"></i></a>
                      <form id="del-prop-<?php echo $data['id'] ?>" method="post" action="core/delete-properties.php" style="display:inline">
                        <input name="del_id" type="hidden" style="display:none" value="<?php echo $data['id'] ?>">
                        <a href="#" onClick="
                                                                if(window.confirm('Do you want to delete this item ?')){
                                                                    console.log('yes');
                                                                    document.querySelector('#del-prop-<?php echo $data['id'] ?>').submit();
                                                                }
                                                            " title="Delete Property"><i class="ri-delete-bin-line"></i></a>
                      </form>
                      <!-- <a href="" title="Delete Property"><i class="ri-delete-bin-line"></i></a> -->
                    </div>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "<tr style='text-align:center'><td style='color:red'>No Records Found</td></tr>";
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </section>
  <!-- listings section ends -->


  <!-- footer section starts  -->
  <?php include './components/footer.php' ?>
  <!-- footer section ends -->


  <!-- custom js file link  -->
  <script src="js/script.js"></script>

</body>

</html>
<?php include './components/script.php' ?>
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
        price: {
          "required": true,
          "number": true
        },
        owner: "required",
        contact: {
          required: true,
          digits: true

        },
        cover_image: {
          required: true,
          accept: "image/jpg,image/jpeg,image/png"
          // extension:"png|jpg|jpeg"
        },
        'images[]': {
          accept: "image/jpg,image/jpeg,image/png"
        },
        area: {
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
        area: {
          required: "Please provide area (sq meter)",
          number: "Area must be numeric"
        },
        owner: {
          required: "Please provide owner name"
        },
        contact: {
          required: "Please provide contact number",
          digits: "Only digits are allowed in contact"
        },
        cover_image: {
          required: "Please upload cover image",
          accept: "Allowed extension are png, jpg, jpeg"
        },
        'images[]': {
          accept: "Allowed extension are png, jpg, jpeg"
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

<script src="./js/script.js"></script>