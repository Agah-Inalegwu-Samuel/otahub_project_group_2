<?php
if(isset($_POST["enter"])){
    session_start();
    require "database-connect.php";

    $allowed_ext = ['png', 'jpg', 'jpeg', 'gif', 'mp4', 'mov', 'pdf', 'mp3', 'mtm', 'rip', 'PNG', 'JPG', 'JPEG', 'GIF', 'MP4', 'MOV', 'PDF', 'MP3', 'MTM', 'RIP'];
    
    $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $post = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $attachment = $_FILES['attachment']['name'];
    
    if(!empty($attachment)){
        $attachment_size = $_FILES ["attachment"]["size"];
        $attachment_tmp = $_FILES["attachment"]["tmp_name"];
        $attachment_ext = explode (".", $attachment);
        $attachment_ext = strtolower(end($attachment_ext));
        $dayInNumber = date("d");
        $monthInNumber = date ("m");
        $year = date("y");
        $time24Hrs = date("g");
        $timeMin = date("i");
        $secs = date("s");
        $attachment = "{$dayInNumber}{$monthInNumber}{$year}{$time24Hrs}{$timeMin}{$secs}.{$attachment_ext}";
        $final_dir = "posts/{$attachment}";
    }


    
    if(empty($attachment) && empty($post )){
        $_SESSION["error"] = "All fields are required";
        header("location: community.php");
        exit();
    };

    if(!empty($attachment)){
        if (!in_array($attachment_ext, $allowed_ext)){
            $_SESSION["error"] = "Invalid file type";
            header("location: community.php");
            exit();
        }
        if($attachment_size >1000000){
            $_SESSION["error"] = "File too large";
            header("location: community.php");
            exit();
        }
    }  

    $sql = "INSERT INTO community (user_id, full_name, attachment, post) VALUE (?, ?, ?, ?)" ;
    $statement = $pdo->prepare($sql);
    $statement->execute([$user_id, $full_name, $attachment, $post,]);

    move_uploaded_file($attachment_tmp, $final_dir);

    if($statement->rowCount() > 0 ){
        $_SESSION["success"] = "Posted successfully";
        header("location: post.php");
    } else{
        $_SESSION["error"] = "Failed to upload";
        header("location: community.php");
        exit();
    };
}    