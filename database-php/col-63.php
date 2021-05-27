<?php
error_reporting(0);
    if(isset($_POST['clear63'])){
        $fp558= fopen('./file-db/cleared63.txt', 'w');//opens file in append mode  
        $fp559 = fopen('./file-db/progress63.txt', 'w');//opens file in append mode  
        $fp560 = fopen('./file-db/issue63.txt', 'w');//opens file in append mode  
        fwrite($fp558, 'cleared');
        fwrite($fp559, '');
        fwrite($fp560, '');
        echo '<br>';
        fclose($fp558);  
        fclose($fp559);  
        fclose($fp560);  
        
       header("location:index.php");
    }
?>

<?php
$myfile558= fopen("./file-db/cleared63.txt", "r") or die("Unable to open file!");
$myfile559 = fopen("./file-db/progress63.txt", "r") or die("Unable to open file!");
$myfile560 = fopen("./file-db/issue63.txt", "r") or die("Unable to open file!");
$myText558= fread($myfile558,filesize("./file-db/cleared63.txt"));
$myText559 = fread($myfile559,filesize("./file-db/progress63.txt"));
$myText560 = fread($myfile560,filesize("./file-db/issue63.txt"));
// echo $myText;
fclose($myfile558);
fclose($myfile559);
fclose($myfil560);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress63'])){
        $fp561 = fopen('./file-db/cleared63.txt', 'w');//opens file in append mode  
        $fp562 = fopen('./file-db/progress63.txt', 'w');//opens file in append mode  
        $fp563 = fopen('./file-db/issue63.txt', 'w');//opens file in append mode  
        fwrite($fp561, '');
        fwrite($fp563, 'progress');
        fwrite($fp563, '');
        echo '<br>';
        fclose($fp561);  
        fclose($fp563);  
        fclose($fp563);  
        
       header("location:index.php");
    }
?>

<?php
$myfile561 = fopen("./file-db/cleared63.txt", "r") or die("Unable to open file!");
$myfile562 = fopen("./file-db/progress63.txt", "r") or die("Unable to open file!");
$myfile563 = fopen("./file-db/issue63.txt", "r") or die("Unable to open file!");
$myText561 = fread($myfile561,filesize("./file-db/cleared63.txt"));
$myText562 = fread($myfile562,filesize("./file-db/progress63.txt"));
$myText563 = fread($myfile563,filesize("./file-db/issue63.txt"));
// echo $myText;
fclose($myfile561);
fclose($myfile563);
fclose($myfile563);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue63'])){
        $fp564 = fopen('./file-db/cleared63.txt', 'w');//opens file in append mode  
        $fp565 = fopen('./file-db/progress63.txt', 'w');//opens file in append mode  
        $fp566 = fopen('./file-db/issue63.txt', 'w');//opens file in append mode  
        fwrite($fp564, '');
        fwrite($fp565, '');
        fwrite($fp566, 'issue');
        echo '<br>';
        fclose($fp564);  
        fclose($fp565);  
        fclose($fp566);  
        
       header("location:index.php");
    }
?>

<?php
$myfile564 = fopen("./file-db/cleared63.txt", "r") or die("Unable to open file!");
$myfile565 = fopen("./file-db/progress63.txt", "r") or die("Unable to open file!");
$myfile566 = fopen("./file-db/issue63.txt", "r") or die("Unable to open file!");
$myText564 = fread($myfile564,filesize("./file-db/cleared63.txt"));
$myText565 = fread($myfile565,filesize("./file-db/progress63.txt"));
$myText566 = fread($myfile566,filesize("./file-db/issue63.txt"));
// echo $myText;
fclose($myfile564);
fclose($myfile565);
fclose($myfile566);
?>