<!-- Topbar -->
<nav class="navbar navbar-expand navbar-dark bg-light topbar mb-4 static-top shadow">

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
            <img class="img-profile rounded-circle" src="
            <?php
              if ($_SESSION['username'] == "Aldebaran") echo 'views/img/users/admin/aldebaran.jpg';
              //elseif ($_SESSION['id'] == 2) echo 'views/img/users/U23/259.jpg';
              else echo 'views/img/users/default/anonymous.png';
            ?>
            "/>

        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>
  </ul>

</nav>
<!-- End of Topbar -->
