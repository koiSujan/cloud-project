<header class="header">

  <nav class="navbar nav-1">
    <section class="flex flx-bewtween">
      <a href="../index.php" class="logo clr-theme">
        <?php include 'logo.php' ?>
      </a>

      <ul>
        <!-- <li><a href="#">About</a></li>
        <li><a href="#">Property</a></li>
        <li><a href="#">Contact</a></li> -->

        <?php
        if (isset($_SESSION['auth_user'])) {
          echo '
            <li><a href="#" class="">Welcome !' . $_SESSION['auth_user'] . '</a></li>
            <li><a href="./property-post.php" class=""><i class="ri-send-plane-line"></i>Post Property</a></li>
          ';
        } else {
          echo "<li><a href='../login.php' class='clr-theme'>Login</a></li>";
        }
        ?>
        <?php
        if (isset($_SESSION['auth_user'])) {
        ?>
          <li>
            <form action="../core/logout.php" class="logout-form"><a href="#" onClick="document.querySelector('.logout-form').submit()" class="clr-theme"><i class="ri-logout-box-r-line"></i>Logout</a></form>
          </li>
        <?php
        }
        ?>

      </ul>
    </section>
  </nav>
</header>