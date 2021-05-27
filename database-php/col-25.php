<?php
error_reporting(0);
    if(isset($_POST['clear25'])){
        $fp216= fopen('./file-db/cleared25.txt', 'w');//opens file in append mode  
        $fp217 = fopen('./file-db/progress25.txt', 'w');//opens file in append mode  
        $fp218 = fopen('./file-db/issue25.txt', 'w');//opens file in append mode  
        fwrite($fp216, 'cleared');
        fwrite($fp217, '');
        fwrite($fp218, '');
        echo '<br>';
        fclose($fp216);  
        fclose($fp217);  
        fclose($fp218);  
        
       header("location:index.php");
    }
?>

<?php
$myfile216= fopen("./file-db/cleared25.txt", "r") or die("Unable to open file!");
$myfile217 = fopen("./file-db/progress25.txt", "r") or die("Unable to open file!");
$myfile218 = fopen("./file-db/issue25.txt", "r") or die("Unable to open file!");
$myText216= fread($myfile216,filesize("./file-db/cleared25.txt"));
$myText217 = fread($myfile217,filesize("./file-db/progress25.txt"));
$myText218 = fread($myfile218,filesize("./file-db/issue25.txt"));
// echo $myText;
fclose($myfile216);
fclose($myfile217);
fclose($myfil218);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress25'])){
        $fp219 = fopen('./file-db/cleared25.txt', 'w');//opens file in append mode  
        $fp220 = fopen('./file-db/progress25.txt', 'w');//opens file in append mode  
        $fp221 = fopen('./file-db/issue25.txt', 'w');//opens file in append mode  
        fwrite($fp219, '');
        fwrite($fp220, 'progress');
        fwrite($fp221, '');
        echo '<br>';
        fclose($fp219);  
        fclose($fp220);  
        fclose($fp221);  
        
       header("location:index.php");
    }
?>

<?php
$myfile219 = fopen("./file-db/cleared25.txt", "r") or die("Unable to open file!");
$myfile220 = fopen("./file-db/progress25.txt", "r") or die("Unable to open file!");
$myfile221 = fopen("./file-db/issue25.txt", "r") or die("Unable to open file!");
$myText219 = fread($myfile219,filesize("./file-db/cleared25.txt"));
$myText220 = fread($myfile220,filesize("./file-db/progress25.txt"));
$myText221 = fread($myfile221,filesize("./file-db/issue25.txt"));
// echo $myText;
fclose($myfile219);
fclose($myfile220);
fclose($myfile221);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue25'])){
        $fp222 = fopen('./file-db/cleared25.txt', 'w');//opens file in append mode  
        $fp223 = fopen('./file-db/progress25.txt', 'w');//opens file in append mode  
        $fp224 = fopen('./file-db/issue25.txt', 'w');//opens file in append mode  
        fwrite($fp222, '');
        fwrite($fp223, '');
        fwrite($fp224, 'issue');
        echo '<br>';
        fclose($fp222);  
        fclose($fp223);  
        fclose($fp224);  
        
       header("location:index.php");
    }
?>

<?php
$myfile222 = fopen("./file-db/cleared25.txt", "r") or die("Unable to open file!");
$myfile223 = fopen("./file-db/progress25.txt", "r") or die("Unable to open file!");
$myfile224 = fopen("./file-db/issue25.txt", "r") or die("Unable to open file!");
$myText222 = fread($myfile222,filesize("./file-db/cleared25.txt"));
$myText223 = fread($myfile223,filesize("./file-db/progress25.txt"));
$myText224 = fread($myfile224,filesize("./file-db/issue25.txt"));
// echo $myText;
fclose($myfile222);
fclose($myfile223);
fclose($myfile224);
?>