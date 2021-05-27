<?php
error_reporting(0);
    $file_name = $_FILES["image"]["name"];
    $ext = pathinfo($file_name,PATHINFO_EXTENSION);
    $temp_name = $_FILES["image"]["tmp_name"];

    //     //checking if file exsists
    // if(file_exists("uploads/map.png")) unlink("uploads/map.png");

    // //Place it into your "uploads" folder mow using the move_uploaded_file() function
    // move_uploaded_file($fileTmpLoc, "documenti/$fileName")

    $newName = "map.png";
    $folder = "uploads/".$newName;
    
    move_uploaded_file($temp_name,$folder);
    // echo "<img src='$folder'/>";
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="input">
            <input type="hidden" name="size" id="" value="100000">
            <input type="file" name="image" id="image" required>
            <input type="submit" name="upload" id="upload">
        </div>
    </form>
</body>
</html> -->
