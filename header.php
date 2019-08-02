<?php
    session_start();
    if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
        header('Location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: login.php');
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP Tutorial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Homepage</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="./homepage1">Homepage1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./homepage2">Homepage2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?logout=1">Logout</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get">
          <input class="form-control mr-sm-2" type="search" name="search-input" placeholder="Search" aria-label="Search" value="<?php echo isset($_GET['search']) ? $_GET['search-input'] : ''; ?>">
          <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
      </form>
  </div>
</nav>