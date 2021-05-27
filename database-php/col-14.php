<?php
error_reporting(0);
    if(isset($_POST['clear14'])){
        $fp117= fopen('./file-db/cleared14.txt', 'w');//opens file in append mode  
        $fp118 = fopen('./file-db/progress14.txt', 'w');//opens file in append mode  
        $fp119 = fopen('./file-db/issue14.txt', 'w');//opens file in append mode  
        fwrite($fp117, 'cleared');
        fwrite($fp118, '');
        fwrite($fp119, '');
        echo '<br>';
        fclose($fp117);  
        fclose($fp118);  
        fclose($fp119);  
        
       header("location:index.php");
    }
?>

<?php
$myfile117= fopen("./file-db/cleared14.txt", "r") or die("Unable to open file!");
$myfile118 = fopen("./file-db/progress14.txt", "r") or die("Unable to open file!");
$myfile119 = fopen("./file-db/issue14.txt", "r") or die("Unable to open file!");
$myText117= fread($myfile117,filesize("./file-db/cleared14.txt"));
$myText118 = fread($myfile118,filesize("./file-db/progress14.txt"));
$myText119 = fread($myfile119,filesize("./file-db/issue14.txt"));
// echo $myText;
fclose($myfile117);
fclose($myfile118);
fclose($myfil119);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress14'])){
        $fp120 = fopen('./file-db/cleared14.txt', 'w');//opens file in append mode  
        $fp121 = fopen('./file-db/progress14.txt', 'w');//opens file in append mode  
        $fp122 = fopen('./file-db/issue14.txt', 'w');//opens file in append mode  
        fwrite($fp120, '');
        fwrite($fp121, 'progress');
        fwrite($fp122, '');
        echo '<br>';
        fclose($fp120);  
        fclose($fp121);  
        fclose($fp122);  
        
       header("location:index.php");
    }
?>

<?php
$myfile120 = fopen("./file-db/cleared14.txt", "r") or die("Unable to open file!");
$myfile121 = fopen("./file-db/progress14.txt", "r") or die("Unable to open file!");
$myfile122 = fopen("./file-db/issue14.txt", "r") or die("Unable to open file!");
$myText120 = fread($myfile120,filesize("./file-db/cleared14.txt"));
$myText121 = fread($myfile121,filesize("./file-db/progress14.txt"));
$myText122 = fread($myfile122,filesize("./file-db/issue14.txt"));
// echo $myText;
fclose($myfile120);
fclose($myfile121);
fclose($myfile122);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue14'])){
        $fp123 = fopen('./file-db/cleared14.txt', 'w');//opens file in append mode  
        $fp124 = fopen('./file-db/progress14.txt', 'w');//opens file in append mode  
        $fp125 = fopen('./file-db/issue14.txt', 'w');//opens file in append mode  
        fwrite($fp123, '');
        fwrite($fp124, '');
        fwrite($fp125, 'issue');
        echo '<br>';
        fclose($fp123);  
        fclose($fp124);  
        fclose($fp125);  
        
       header("location:index.php");
    }
?>

<?php
$myfile123 = fopen("./file-db/cleared14.txt", "r") or die("Unable to open file!");
$myfile124 = fopen("./file-db/progress14.txt", "r") or die("Unable to open file!");
$myfile125 = fopen("./file-db/issue14.txt", "r") or die("Unable to open file!");
$myText123 = fread($myfile123,filesize("./file-db/cleared14.txt"));
$myText124 = fread($myfile124,filesize("./file-db/progress14.txt"));
$myText125 = fread($myfile125,filesize("./file-db/issue14.txt"));
// echo $myText;
fclose($myfile123);
fclose($myfile124);
fclose($myfile125);
?>