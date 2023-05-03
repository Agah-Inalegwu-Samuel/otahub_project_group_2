<?php

session_start();
require "database-connect.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['id'];

    $sql = 'SELECT * FROM profile WHERE user_id=?';
    $statement = $pdo->prepare($sql);
    $statement->execute([$user_id]);
    $profile= $statement->fetch(PDO::FETCH_ASSOC);

    if($profile){
      $profile['full_name'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <title>Community</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">COMMUNITY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="post.php">Posts</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <form action="process-community.php" method="post" class="mt-4 w-75 ml-4" enctype="multipart/form-data">

    <div class="">
      <h4 style="color: black;">Welcome to OTAHUB community</h4>
    </div>

    <h6>
      <?php
        if(isset($_SESSION['error'])){
          echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
      ?>
    </h6>

    <h6>
      <?php
        if(isset($_SESSION['success'])){
          echo $_SESSION['success'];
        }
        unset($_SESSION['success']);
      ?>
    </h6>

    <div class="mb-3" style="display: none;">
      <label for="File" class="form-label">User_id</label>
      <input type="text" name="user_id" class="form-control custom-control" value="<?php echo $_SESSION['id']; ?>">
    </div>

    <div class="mb-3" style="display: none;">
      <label for="File" class="form-label">Fullname</label>
      <input type="text" name="full_name" class="form-control custom-control" value="<?php echo $profile['full_name'];?>">
    </div>

    <div class="mb-3">
      <textarea name="post" placeholder="What's on your mind?" class="form-control" id="" cols="5" rows="5"></textarea>
    </div>
    
    <div class="mb-3">
      <label for="File" class="form-label">Attachment</label>
      <input type="file" name="attachment" class="form-control">
    </div>

    <div class="mb-3">
      <button class="btn btn-primary" name="enter" class="">Post</button>
    </div>
  </form>

  <div class="my-5">
    <footer class="bg-dark text-center text-white">
      <div class="container p-4 pb-0">
          <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="mailto:admissions@thebackhomeproject.org" role="button"
              ><i class="bi bi-envelope"></i> </a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://business.facebook.com/" role="button"
              ><i class="bi bi-facebook"></i></i
            ></a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/i/flow/login" role="button"
              ><i class="bi bi-twitter"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
              ><i class="bi bi-instagram"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/login" role="button"
              ><i class="bi bi-linkedin"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button"
              ><i class="bi bi-github"></i></a>
          </section>
      </div>


      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://www.otukpotech.org/">otukpotech.org</a>
        <a href="logout.php" class="text-left"><button class="btn btn-danger">Logout</button></a>
      </div>
    </footer>
  </div>
</body>
</html>