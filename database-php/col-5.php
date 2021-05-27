<?php
error_reporting(0);
    if(isset($_POST['clear5'])){
        $fp36 = fopen('./file-db/cleared5.txt', 'w');//opens file in append mode  
        $fp37 = fopen('./file-db/progress5.txt', 'w');//opens file in append mode  
        $fp38 = fopen('./file-db/issue5.txt', 'w');//opens file in append mode  
        fwrite($fp36, 'cleared');
        fwrite($fp37, '');
        fwrite($fp38, '');
        echo '<br>';
        fclose($fp36);  
        fclose($fp37);  
        fclose($fp38);  
        
       header("location:index.php");
    }
?>

<?php
$myfile36 = fopen("./file-db/cleared5.txt", "r") or die("Unable to open file!");
$myfile37 = fopen("./file-db/progress5.txt", "r") or die("Unable to open file!");
$myfile38 = fopen("./file-db/issue5.txt", "r") or die("Unable to open file!");
$myText36 = fread($myfile36,filesize("./file-db/cleared5.txt"));
$myText37 = fread($myfile37,filesize("./file-db/progress5.txt"));
$myText38 = fread($myfile38,filesize("./file-db/issue5.txt"));
// echo $myText;
fclose($myfile36);
fclose($myfile37);
fclose($myfil38);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress5'])){
        $fp39 = fopen('./file-db/cleared5.txt', 'w');//opens file in append mode  
        $fp40 = fopen('./file-db/progress5.txt', 'w');//opens file in append mode  
        $fp41 = fopen('./file-db/issue5.txt', 'w');//opens file in append mode  
        fwrite($fp39, '');
        fwrite($fp40, 'progress');
        fwrite($fp41, '');
        echo '<br>';
        fclose($fp39);  
        fclose($fp40);  
        fclose($fp41);  
        
       header("location:index.php");
    }
?>

<?php
$myfile39 = fopen("./file-db/cleared5.txt", "r") or die("Unable to open file!");
$myfile40 = fopen("./file-db/progress5.txt", "r") or die("Unable to open file!");
$myfile41 = fopen("./file-db/issue5.txt", "r") or die("Unable to open file!");
$myText39 = fread($myfile39,filesize("./file-db/cleared5.txt"));
$myText40 = fread($myfile40,filesize("./file-db/progress5.txt"));
$myText41 = fread($myfile41,filesize("./file-db/issue5.txt"));
// echo $myText;
fclose($myfile39);
fclose($myfile40);
fclose($myfile41);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue5'])){
        $fp42 = fopen('./file-db/cleared5.txt', 'w');//opens file in append mode  
        $fp43 = fopen('./file-db/progress5.txt', 'w');//opens file in append mode  
        $fp44 = fopen('./file-db/issue5.txt', 'w');//opens file in append mode  
        fwrite($fp42, '');
        fwrite($fp43, '');
        fwrite($fp44, 'issue');
        echo '<br>';
        fclose($fp42);  
        fclose($fp43);  
        fclose($fp44);  
        
       header("location:index.php");
    }
?>

<?php
$myfile42 = fopen("./file-db/cleared5.txt", "r") or die("Unable to open file!");
$myfile43 = fopen("./file-db/progress5.txt", "r") or die("Unable to open file!");
$myfile44 = fopen("./file-db/issue5.txt", "r") or die("Unable to open file!");
$myText42 = fread($myfile42,filesize("./file-db/cleared5.txt"));
$myText43 = fread($myfile43,filesize("./file-db/progress5.txt"));
$myText44 = fread($myfile44,filesize("./file-db/issue5.txt"));
// echo $myText;
fclose($myfile42);
fclose($myfile43);
fclose($myfile44);
?>