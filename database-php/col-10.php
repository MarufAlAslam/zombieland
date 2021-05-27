<?php
error_reporting(0);
    if(isset($_POST['clear10'])){
        $fp81= fopen('./file-db/cleared10.txt', 'w');//opens file in append mode  
        $fp82 = fopen('./file-db/progress10.txt', 'w');//opens file in append mode  
        $fp83 = fopen('./file-db/issue10.txt', 'w');//opens file in append mode  
        fwrite($fp81, 'cleared');
        fwrite($fp82, '');
        fwrite($fp83, '');
        echo '<br>';
        fclose($fp81);  
        fclose($fp82);  
        fclose($fp83);  
        
       header("location:index.php");
    }
?>

<?php
$myfile81= fopen("./file-db/cleared10.txt", "r") or die("Unable to open file!");
$myfile82 = fopen("./file-db/progress10.txt", "r") or die("Unable to open file!");
$myfile83 = fopen("./file-db/issue10.txt", "r") or die("Unable to open file!");
$myText81= fread($myfile81,filesize("./file-db/cleared10.txt"));
$myText82 = fread($myfile82,filesize("./file-db/progress10.txt"));
$myText83 = fread($myfile83,filesize("./file-db/issue10.txt"));
// echo $myText;
fclose($myfile81);
fclose($myfile82);
fclose($myfil83);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress10'])){
        $fp84 = fopen('./file-db/cleared10.txt', 'w');//opens file in append mode  
        $fp85 = fopen('./file-db/progress10.txt', 'w');//opens file in append mode  
        $fp86 = fopen('./file-db/issue10.txt', 'w');//opens file in append mode  
        fwrite($fp84, '');
        fwrite($fp85, 'progress');
        fwrite($fp86, '');
        echo '<br>';
        fclose($fp84);  
        fclose($fp85);  
        fclose($fp86);  
        
       header("location:index.php");
    }
?>

<?php
$myfile84 = fopen("./file-db/cleared10.txt", "r") or die("Unable to open file!");
$myfile85 = fopen("./file-db/progress10.txt", "r") or die("Unable to open file!");
$myfile86 = fopen("./file-db/issue10.txt", "r") or die("Unable to open file!");
$myText84 = fread($myfile84,filesize("./file-db/cleared10.txt"));
$myText85 = fread($myfile85,filesize("./file-db/progress10.txt"));
$myText86 = fread($myfile86,filesize("./file-db/issue10.txt"));
// echo $myText;
fclose($myfile84);
fclose($myfile85);
fclose($myfile86);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue10'])){
        $fp87 = fopen('./file-db/cleared10.txt', 'w');//opens file in append mode  
        $fp88 = fopen('./file-db/progress10.txt', 'w');//opens file in append mode  
        $fp89 = fopen('./file-db/issue10.txt', 'w');//opens file in append mode  
        fwrite($fp87, '');
        fwrite($fp88, '');
        fwrite($fp89, 'issue');
        echo '<br>';
        fclose($fp87);  
        fclose($fp88);  
        fclose($fp89);  
        
       header("location:index.php");
    }
?>

<?php
$myfile87 = fopen("./file-db/cleared10.txt", "r") or die("Unable to open file!");
$myfile88 = fopen("./file-db/progress10.txt", "r") or die("Unable to open file!");
$myfile89 = fopen("./file-db/issue10.txt", "r") or die("Unable to open file!");
$myText87 = fread($myfile87,filesize("./file-db/cleared10.txt"));
$myText88 = fread($myfile88,filesize("./file-db/progress10.txt"));
$myText89 = fread($myfile89,filesize("./file-db/issue10.txt"));
// echo $myText;
fclose($myfile87);
fclose($myfile88);
fclose($myfile89);
?>