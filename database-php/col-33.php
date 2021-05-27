<?php
error_reporting(0);
    if(isset($_POST['clear33'])){
        $fp288= fopen('./file-db/cleared33.txt', 'w');//opens file in append mode  
        $fp289 = fopen('./file-db/progress33.txt', 'w');//opens file in append mode  
        $fp290 = fopen('./file-db/issue33.txt', 'w');//opens file in append mode  
        fwrite($fp288, 'cleared');
        fwrite($fp289, '');
        fwrite($fp290, '');
        echo '<br>';
        fclose($fp288);  
        fclose($fp289);  
        fclose($fp290);  
        
       header("location:index.php");
    }
?>

<?php
$myfile288= fopen("./file-db/cleared33.txt", "r") or die("Unable to open file!");
$myfile289 = fopen("./file-db/progress33.txt", "r") or die("Unable to open file!");
$myfile290 = fopen("./file-db/issue33.txt", "r") or die("Unable to open file!");
$myText288= fread($myfile288,filesize("./file-db/cleared33.txt"));
$myText289 = fread($myfile289,filesize("./file-db/progress33.txt"));
$myText290 = fread($myfile290,filesize("./file-db/issue33.txt"));
// echo $myText;
fclose($myfile288);
fclose($myfile289);
fclose($myfil290);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress33'])){
        $fp291 = fopen('./file-db/cleared33.txt', 'w');//opens file in append mode  
        $fp292 = fopen('./file-db/progress33.txt', 'w');//opens file in append mode  
        $fp293 = fopen('./file-db/issue33.txt', 'w');//opens file in append mode  
        fwrite($fp291, '');
        fwrite($fp292, 'progress');
        fwrite($fp293, '');
        echo '<br>';
        fclose($fp291);  
        fclose($fp292);  
        fclose($fp293);  
        
       header("location:index.php");
    }
?>

<?php
$myfile291 = fopen("./file-db/cleared33.txt", "r") or die("Unable to open file!");
$myfile292 = fopen("./file-db/progress33.txt", "r") or die("Unable to open file!");
$myfile293 = fopen("./file-db/issue33.txt", "r") or die("Unable to open file!");
$myText291 = fread($myfile291,filesize("./file-db/cleared33.txt"));
$myText292 = fread($myfile292,filesize("./file-db/progress33.txt"));
$myText293 = fread($myfile293,filesize("./file-db/issue33.txt"));
// echo $myText;
fclose($myfile291);
fclose($myfile292);
fclose($myfile293);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue33'])){
        $fp294 = fopen('./file-db/cleared33.txt', 'w');//opens file in append mode  
        $fp295 = fopen('./file-db/progress33.txt', 'w');//opens file in append mode  
        $fp296 = fopen('./file-db/issue33.txt', 'w');//opens file in append mode  
        fwrite($fp294, '');
        fwrite($fp295, '');
        fwrite($fp296, 'issue');
        echo '<br>';
        fclose($fp294);  
        fclose($fp295);  
        fclose($fp296);  
        
       header("location:index.php");
    }
?>

<?php
$myfile294 = fopen("./file-db/cleared33.txt", "r") or die("Unable to open file!");
$myfile295 = fopen("./file-db/progress33.txt", "r") or die("Unable to open file!");
$myfile296 = fopen("./file-db/issue33.txt", "r") or die("Unable to open file!");
$myText294 = fread($myfile294,filesize("./file-db/cleared33.txt"));
$myText295 = fread($myfile295,filesize("./file-db/progress33.txt"));
$myText296 = fread($myfile296,filesize("./file-db/issue33.txt"));
// echo $myText;
fclose($myfile294);
fclose($myfile295);
fclose($myfile296);
?>