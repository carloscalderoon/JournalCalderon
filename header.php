<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Journal Calderon</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top "id="mainNavFixed" style="position:inherit!important">
        <div class="container">
            <a class="navbar-brand" >iFinance</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <?php // show public or private links depending on whether the user has been authenticated
          if (!empty($_SESSION['user_id'])) { ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="expenses.php">Expenses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="users.php">Users</a>
            </li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php" title="logout">Logout</a></li>
          <?
        } else { ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>