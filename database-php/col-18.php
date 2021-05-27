<?php
error_reporting(0);
    if(isset($_POST['clear18'])){
        $fp153= fopen('./file-db/cleared18.txt', 'w');//opens file in append mode  
        $fp154 = fopen('./file-db/progress18.txt', 'w');//opens file in append mode  
        $fp155 = fopen('./file-db/issue18.txt', 'w');//opens file in append mode  
        fwrite($fp153, 'cleared');
        fwrite($fp154, '');
        fwrite($fp155, '');
        echo '<br>';
        fclose($fp153);  
        fclose($fp154);  
        fclose($fp155);  
        
       header("location:index.php");
    }
?>

<?php
$myfile153= fopen("./file-db/cleared18.txt", "r") or die("Unable to open file!");
$myfile154 = fopen("./file-db/progress18.txt", "r") or die("Unable to open file!");
$myfile155 = fopen("./file-db/issue18.txt", "r") or die("Unable to open file!");
$myText153= fread($myfile153,filesize("./file-db/cleared18.txt"));
$myText154 = fread($myfile154,filesize("./file-db/progress18.txt"));
$myText155 = fread($myfile155,filesize("./file-db/issue18.txt"));
// echo $myText;
fclose($myfile153);
fclose($myfile154);
fclose($myfil155);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress18'])){
        $fp156 = fopen('./file-db/cleared18.txt', 'w');//opens file in append mode  
        $fp157 = fopen('./file-db/progress18.txt', 'w');//opens file in append mode  
        $fp158 = fopen('./file-db/issue18.txt', 'w');//opens file in append mode  
        fwrite($fp156, '');
        fwrite($fp157, 'progress');
        fwrite($fp158, '');
        echo '<br>';
        fclose($fp156);  
        fclose($fp157);  
        fclose($fp158);  
        
       header("location:index.php");
    }
?>

<?php
$myfile156 = fopen("./file-db/cleared18.txt", "r") or die("Unable to open file!");
$myfile157 = fopen("./file-db/progress18.txt", "r") or die("Unable to open file!");
$myfile158 = fopen("./file-db/issue18.txt", "r") or die("Unable to open file!");
$myText156 = fread($myfile156,filesize("./file-db/cleared18.txt"));
$myText157 = fread($myfile157,filesize("./file-db/progress18.txt"));
$myText158 = fread($myfile158,filesize("./file-db/issue18.txt"));
// echo $myText;
fclose($myfile156);
fclose($myfile157);
fclose($myfile158);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue18'])){
        $fp159 = fopen('./file-db/cleared18.txt', 'w');//opens file in append mode  
        $fp160 = fopen('./file-db/progress18.txt', 'w');//opens file in append mode  
        $fp161 = fopen('./file-db/issue18.txt', 'w');//opens file in append mode  
        fwrite($fp159, '');
        fwrite($fp160, '');
        fwrite($fp161, 'issue');
        echo '<br>';
        fclose($fp159);  
        fclose($fp160);  
        fclose($fp161);  
        
       header("location:index.php");
    }
?>

<?php
$myfile159 = fopen("./file-db/cleared18.txt", "r") or die("Unable to open file!");
$myfile160 = fopen("./file-db/progress18.txt", "r") or die("Unable to open file!");
$myfile161 = fopen("./file-db/issue18.txt", "r") or die("Unable to open file!");
$myText159 = fread($myfile159,filesize("./file-db/cleared18.txt"));
$myText160 = fread($myfile160,filesize("./file-db/progress18.txt"));
$myText161 = fread($myfile161,filesize("./file-db/issue18.txt"));
// echo $myText;
fclose($myfile159);
fclose($myfile160);
fclose($myfile161);
?>