<?php
session_start();
require "database-connect.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM profile WHERE";
$statement = $pdo->prepare($sql);
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_ASSOC); 
  
  $user_id = $_SESSION['id'];
  $full_name= "";
  $username = "";
  $email ="";
  $phone ="";
  $gender = "";
  $sessionofadmission = "";
  $updatepro= false;

  if (isset($_GET['edit'])) {
    $id=filter_input(INPUT_GET, 'edit', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $updatepro=true;
    $sql = 'SELECT * FROM profile WHERE user_id = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);
    $student=$statement->fetch(PDO::FETCH_ASSOC);
    $rowCount = $statement->rowCount();
    if($rowCount>0){ 
        $full_name = $student['full_name'];
        $username = $student['username'];
        $email = $student['email'];
        $phone = $student['phone'];
        $gender= $student['gender'];
        $sessionofadmission= $student['sessionofadmission'];
        $image = $student['image'];
        $user_id= $student['user_id'];
    }
    else{
        echo "Failed to create profile";
    }
  }

  $edit = false;

  $sql = "SELECT * FROM profile WHERE user_id = ?";
  $statement = $pdo->prepare($sql);
  $statement->execute([$user_id]);
  $profile=$statement->fetch(PDO::FETCH_ASSOC);

  if($statement->rowCount()>0){
    $edit = true;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profilestyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap-icons-1.10.4/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Profile</title>
</head>
<body>
    
    <div class="wrapper">

        <div class="form-box login">
            
            <div class="heading">
                <?php if ($edit == true){?>
                    <h2>Edit Profile</h2>
                    <a href="profile.php?edit=<?php echo $_SESSION['id'];?>"><button class="btn btn-outline-danger">Edit Profile</button></a>
                <?php } else { ?>
                    <h2>Create Profile</h2>
                <?php }?>
            </div>

            <h6 class="text" style="text-align: center; font-style: italic; color: black;">
                <?php
                
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                    }
                    unset($_SESSION['error']);
                ?>
            </h6>

            <h6 class="text" style="text-align: center; font-style: italic; color: black;">
                <?php
                    if(isset($_SESSION['success'])){
                        echo $_SESSION['success'];
                    }
                    unset($_SESSION['success']);
                ?>
            </h6>
           

                
          

            <form action="process-profile.php" method="post" enctype="multipart/form-data">
                <div class="input-box" style="display: none;">
                    <span class="icon"><i class="bi bi-envelope"></i></span>
                    <input type="text" name="user_id" value="<?php echo $_SESSION['id'];?>">
                    <label for="user_id">User id</label>                
                </div>

                <div class="input-box">
                    <?php if($updatepro == true) { ?>
                        <input type="text" name="full_name" value="<?php echo $full_name;?>">
                        <label for="">Fullname</label>
                    <?php } else { ?>
                        <input type="text" name="full_name" value="">
                        <label for="">Fullname</label>
                    <?php } ?>
                </div>

                <div class="input-box">
                    <?php if($updatepro == true) { ?>
                        <input type="text" name="username" value="<?php echo $username;?>">
                        <label for="">Username</label>
                    <?php } else { ?>
                        <input type="text" name="username" value="">
                        <label for="">Username</label>
                    <?php } ?>
                </div>

                <div class="input-box" style="display: none;">
                    <?php if($updatepro == true) { ?>
                        <input type="email" name="email"  placeholder="Email Address..." value="<?php echo $email;?>">
                        <label for="">Email</label>
                    <?php } else { ?>
                        <input type="email" name="email" value="<?php echo $_SESSION['email'];?>">
                        <label for="">Email</label>
                    <?php } ?>
                </div>

                <div class="input-box">
                    <?php if($updatepro == true) { ?>
                        <input type="number" name="phone" value="<?php echo $phone;?>">
                        <label for="">Phone</label>
                    <?php } else { ?>
                        <input type="number" name="phone" value="">
                        <label for="">Phone</label>
                    <?php } ?>
                </div>

                <div class="select">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control"> Gender 
                        <?php if($updatepro==true){ ?>
                                <Option value="<?php echo $gender;?>"><?php echo $gender;?></Option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                        <?php } else { ?>
                                <option value="gender" selected disabled>Select Gender</option>
                                <Option value="female">Male</Option>
                                <Option value="female">Female</Option>
                        <?php }?>
                    </select>
                </div>

                <div class="select">
                    <label for="">Academic Session</label>
                    <select name="sessionofadmission" class="form-control">
                        <?php if($updatepro==true){ ?>
                            <option value="<?php echo $sessionofadmission;?>"><?php echo $sessionofadmission?></option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2019/2020">2019/2020</option>
                        <?php } else { ?>
                            <option value="">Select Session</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2019/2020">2019/2020</option>
                        <?php }?>
                    </select>
                </div><br>

                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" value="image">
                </div><br>

                <div>
                    <?php if($updatepro==true && $edit == true){ ?>
                        <button name="updatepro" class="btn btn-primary btn1" type="submit">Update</button>
                    <?php } else { ?>
                        <button name="update" class="btn btn-outline-primary btn1" type="submit">Create</button>
                    <?php } ?>
                </div>
            </form>
            <div class="inline">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="dashboard.php"><button class="btn btn-outline-dark">Dashboard</button></a>
                        </div>
                        <div class="col-md-6">
                            <a href="community.php"><button class="btn btn-outline-dark">Community</button></a>
                        </div>
                    </div>     
                </div>
        </div>
    </div>    




    
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.esm.js"></script>
<script module src="https://unpkg.com/ionicons@5.52/dist/ionicons.js"></script>
</body>
</html>