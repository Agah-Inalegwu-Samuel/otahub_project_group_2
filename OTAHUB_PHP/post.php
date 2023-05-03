<?php
session_start();
require "database-connect.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM community ORDER BY id DESC";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$user_id = $_SESSION['id'];

$sql = 'SELECT * FROM profile WHERE user_id=?';
$statement = $pdo->prepare($sql);
$statement->execute([$user_id]);
$profile= $statement->fetch(PDO::FETCH_ASSOC);

if($profile){
    $profile['image'];
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
    <link rel="stylesheet" href="post.css">
    <title>Post</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">POSTS</a>
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
                <a class="nav-link text-white" href="community.php">Community</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </nav>


    <div class="container1">
        <header>
        <h1 class="heading-1">OTA NEWS FEED</h1>
        <div class="sub-heading">
        <p>Wednesday, <span>May 3, 2023</span></p>
        <p class="importent">your right to know</p>
        </div>
        </header>

        <div class="main">
            <div class="home">
                <div class="left">
                <h2 class="heading-2">
                    Welcome to OTA Community Hub...Lets intract!
                </h2>

                <img src="post-img/best.jpg" class="home-img" alt="Paper photo">

                </div>
            </div>
            
            <div class="main">
                <div class="home">
                    <div class="left">
                        <?php foreach($users as $user){?>

                        <div class="fullname">
                            <span>
                            <a href="<?php echo $profile["image"]; ?>"><img src="student_img/<?php echo $profile["image"];?>"></a><h2 class="full_name"><?php echo $user["full_name"];?></h2>
                            </span>
                        </div>

                        <div class="date">
                            <p class="time"><?php echo $user['date']; ?></p>
                        </div>

                        <div class="">
                            <h4 class="post"><?php echo $user["post"] ?></h4>
                        </div>
                        
                        <div class="attach">    
                            <h2 class="image"><img src="posts/<?php echo $user["attachment"];?>"></h2>
                        </div>

                        <?php }?>
                    </div>
                </div>
            </div> 
        </div>
        
        <div class="cards">
    <div class="card">
      <img src="img/6.jpg" width="100%" height="300vh" srcset="">
      <p class="desc">Divine Ayodele neatly dressed and looking great on his glasses beside him is Ijachi Gabriel, they both took part in the week and long courses(second batch)</p>
    </div>

    <div class="card">
      <img src="img/Sir Dan.png" width="100%" height="300vh" srcset="">
      <p class="desc">Our irrefutably outstanding instructor, Sir Daniel standing between students from the first batch</p>
    </div>

    <div class="card">
      <img src="img/4.jpg" width="100%" height="300vh" srcset="">
      <p class="desc">It's a bright friday morning, the equipments are set and readily available as ever. Lub-dub, lub-dub, lub-dub... It's the keyboards heart panting, afraid of the the aggressive punches. Lets get started!</p>
    </div>
  </div>
    </div> 


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