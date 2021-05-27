<?php
error_reporting(0);
    if(isset($_POST['clear34'])){
        $fp297= fopen('./file-db/cleared34.txt', 'w');//opens file in append mode  
        $fp298 = fopen('./file-db/progress34.txt', 'w');//opens file in append mode  
        $fp299 = fopen('./file-db/issue34.txt', 'w');//opens file in append mode  
        fwrite($fp297, 'cleared');
        fwrite($fp298, '');
        fwrite($fp299, '');
        echo '<br>';
        fclose($fp297);  
        fclose($fp298);  
        fclose($fp299);  
        
       header("location:index.php");
    }
?>

<?php
$myfile297= fopen("./file-db/cleared34.txt", "r") or die("Unable to open file!");
$myfile298 = fopen("./file-db/progress34.txt", "r") or die("Unable to open file!");
$myfile299 = fopen("./file-db/issue34.txt", "r") or die("Unable to open file!");
$myText297= fread($myfile297,filesize("./file-db/cleared34.txt"));
$myText298 = fread($myfile298,filesize("./file-db/progress34.txt"));
$myText299 = fread($myfile299,filesize("./file-db/issue34.txt"));
// echo $myText;
fclose($myfile297);
fclose($myfile298);
fclose($myfil299);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress34'])){
        $fp300 = fopen('./file-db/cleared34.txt', 'w');//opens file in append mode  
        $fp301 = fopen('./file-db/progress34.txt', 'w');//opens file in append mode  
        $fp302 = fopen('./file-db/issue34.txt', 'w');//opens file in append mode  
        fwrite($fp300, '');
        fwrite($fp301, 'progress');
        fwrite($fp302, '');
        echo '<br>';
        fclose($fp300);  
        fclose($fp301);  
        fclose($fp302);  
        
       header("location:index.php");
    }
?>

<?php
$myfile300 = fopen("./file-db/cleared34.txt", "r") or die("Unable to open file!");
$myfile301 = fopen("./file-db/progress34.txt", "r") or die("Unable to open file!");
$myfile302 = fopen("./file-db/issue34.txt", "r") or die("Unable to open file!");
$myText300 = fread($myfile300,filesize("./file-db/cleared34.txt"));
$myText301 = fread($myfile301,filesize("./file-db/progress34.txt"));
$myText302 = fread($myfile302,filesize("./file-db/issue34.txt"));
// echo $myText;
fclose($myfile300);
fclose($myfile301);
fclose($myfile302);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue34'])){
        $fp303 = fopen('./file-db/cleared34.txt', 'w');//opens file in append mode  
        $fp304 = fopen('./file-db/progress34.txt', 'w');//opens file in append mode  
        $fp305 = fopen('./file-db/issue34.txt', 'w');//opens file in append mode  
        fwrite($fp303, '');
        fwrite($fp304, '');
        fwrite($fp305, 'issue');
        echo '<br>';
        fclose($fp303);  
        fclose($fp304);  
        fclose($fp305);  
        
       header("location:index.php");
    }
?>

<?php
$myfile303 = fopen("./file-db/cleared34.txt", "r") or die("Unable to open file!");
$myfile304 = fopen("./file-db/progress34.txt", "r") or die("Unable to open file!");
$myfile305 = fopen("./file-db/issue34.txt", "r") or die("Unable to open file!");
$myText303 = fread($myfile303,filesize("./file-db/cleared34.txt"));
$myText304 = fread($myfile304,filesize("./file-db/progress34.txt"));
$myText305 = fread($myfile305,filesize("./file-db/issue34.txt"));
// echo $myText;
fclose($myfile303);
fclose($myfile304);
fclose($myfile305);
?>