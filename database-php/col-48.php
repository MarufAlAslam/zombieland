<?php
error_reporting(0);
    if(isset($_POST['clear48'])){
        $fp423= fopen('./file-db/cleared48.txt', 'w');//opens file in append mode  
        $fp424 = fopen('./file-db/progress48.txt', 'w');//opens file in append mode  
        $fp425 = fopen('./file-db/issue48.txt', 'w');//opens file in append mode  
        fwrite($fp423, 'cleared');
        fwrite($fp424, '');
        fwrite($fp425, '');
        echo '<br>';
        fclose($fp423);  
        fclose($fp424);  
        fclose($fp425);  
        
       header("location:index.php");
    }
?>

<?php
$myfile423= fopen("./file-db/cleared48.txt", "r") or die("Unable to open file!");
$myfile424 = fopen("./file-db/progress48.txt", "r") or die("Unable to open file!");
$myfile425 = fopen("./file-db/issue48.txt", "r") or die("Unable to open file!");
$myText423= fread($myfile423,filesize("./file-db/cleared48.txt"));
$myText424 = fread($myfile424,filesize("./file-db/progress48.txt"));
$myText425 = fread($myfile425,filesize("./file-db/issue48.txt"));
// echo $myText;
fclose($myfile423);
fclose($myfile424);
fclose($myfil425);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress48'])){
        $fp426 = fopen('./file-db/cleared48.txt', 'w');//opens file in append mode  
        $fp427 = fopen('./file-db/progress48.txt', 'w');//opens file in append mode  
        $fp428 = fopen('./file-db/issue48.txt', 'w');//opens file in append mode  
        fwrite($fp426, '');
        fwrite($fp427, 'progress');
        fwrite($fp428, '');
        echo '<br>';
        fclose($fp426);  
        fclose($fp427);  
        fclose($fp428);  
        
       header("location:index.php");
    }
?>

<?php
$myfile426 = fopen("./file-db/cleared48.txt", "r") or die("Unable to open file!");
$myfile427 = fopen("./file-db/progress48.txt", "r") or die("Unable to open file!");
$myfile428 = fopen("./file-db/issue48.txt", "r") or die("Unable to open file!");
$myText426 = fread($myfile426,filesize("./file-db/cleared48.txt"));
$myText427 = fread($myfile427,filesize("./file-db/progress48.txt"));
$myText428 = fread($myfile428,filesize("./file-db/issue48.txt"));
// echo $myText;
fclose($myfile426);
fclose($myfile428);
fclose($myfile428);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue48'])){
        $fp429 = fopen('./file-db/cleared48.txt', 'w');//opens file in append mode  
        $fp430 = fopen('./file-db/progress48.txt', 'w');//opens file in append mode  
        $fp431 = fopen('./file-db/issue48.txt', 'w');//opens file in append mode  
        fwrite($fp429, '');
        fwrite($fp430, '');
        fwrite($fp431, 'issue');
        echo '<br>';
        fclose($fp429);  
        fclose($fp430);  
        fclose($fp431);  
        
       header("location:index.php");
    }
?>

<?php
$myfile429 = fopen("./file-db/cleared48.txt", "r") or die("Unable to open file!");
$myfile430 = fopen("./file-db/progress48.txt", "r") or die("Unable to open file!");
$myfile431 = fopen("./file-db/issue48.txt", "r") or die("Unable to open file!");
$myText429 = fread($myfile429,filesize("./file-db/cleared48.txt"));
$myText430 = fread($myfile430,filesize("./file-db/progress48.txt"));
$myText431 = fread($myfile431,filesize("./file-db/issue48.txt"));
// echo $myText;
fclose($myfile429);
fclose($myfile430);
fclose($myfile431);
?>