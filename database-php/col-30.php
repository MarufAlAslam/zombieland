<?php
error_reporting(0);
    if(isset($_POST['clear30'])){
        $fp261= fopen('./file-db/cleared30.txt', 'w');//opens file in append mode  
        $fp262 = fopen('./file-db/progress30.txt', 'w');//opens file in append mode  
        $fp263 = fopen('./file-db/issue30.txt', 'w');//opens file in append mode  
        fwrite($fp261, 'cleared');
        fwrite($fp262, '');
        fwrite($fp263, '');
        echo '<br>';
        fclose($fp261);  
        fclose($fp262);  
        fclose($fp263);  
        
       header("location:index.php");
    }
?>

<?php
$myfile261= fopen("./file-db/cleared30.txt", "r") or die("Unable to open file!");
$myfile262 = fopen("./file-db/progress30.txt", "r") or die("Unable to open file!");
$myfile263 = fopen("./file-db/issue30.txt", "r") or die("Unable to open file!");
$myText261= fread($myfile261,filesize("./file-db/cleared30.txt"));
$myText262 = fread($myfile262,filesize("./file-db/progress30.txt"));
$myText263 = fread($myfile263,filesize("./file-db/issue30.txt"));
// echo $myText;
fclose($myfile261);
fclose($myfile262);
fclose($myfil263);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress30'])){
        $fp264 = fopen('./file-db/cleared30.txt', 'w');//opens file in append mode  
        $fp265 = fopen('./file-db/progress30.txt', 'w');//opens file in append mode  
        $fp266 = fopen('./file-db/issue30.txt', 'w');//opens file in append mode  
        fwrite($fp264, '');
        fwrite($fp265, 'progress');
        fwrite($fp266, '');
        echo '<br>';
        fclose($fp264);  
        fclose($fp265);  
        fclose($fp266);  
        
       header("location:index.php");
    }
?>

<?php
$myfile264 = fopen("./file-db/cleared30.txt", "r") or die("Unable to open file!");
$myfile265 = fopen("./file-db/progress30.txt", "r") or die("Unable to open file!");
$myfile266 = fopen("./file-db/issue30.txt", "r") or die("Unable to open file!");
$myText264 = fread($myfile264,filesize("./file-db/cleared30.txt"));
$myText265 = fread($myfile265,filesize("./file-db/progress30.txt"));
$myText266 = fread($myfile266,filesize("./file-db/issue30.txt"));
// echo $myText;
fclose($myfile264);
fclose($myfile265);
fclose($myfile266);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue30'])){
        $fp267 = fopen('./file-db/cleared30.txt', 'w');//opens file in append mode  
        $fp268 = fopen('./file-db/progress30.txt', 'w');//opens file in append mode  
        $fp269 = fopen('./file-db/issue30.txt', 'w');//opens file in append mode  
        fwrite($fp267, '');
        fwrite($fp268, '');
        fwrite($fp269, 'issue');
        echo '<br>';
        fclose($fp267);  
        fclose($fp268);  
        fclose($fp269);  
        
       header("location:index.php");
    }
?>

<?php
$myfile267 = fopen("./file-db/cleared30.txt", "r") or die("Unable to open file!");
$myfile268 = fopen("./file-db/progress30.txt", "r") or die("Unable to open file!");
$myfile269 = fopen("./file-db/issue30.txt", "r") or die("Unable to open file!");
$myText267 = fread($myfile267,filesize("./file-db/cleared30.txt"));
$myText268 = fread($myfile268,filesize("./file-db/progress30.txt"));
$myText269 = fread($myfile269,filesize("./file-db/issue30.txt"));
// echo $myText;
fclose($myfile267);
fclose($myfile268);
fclose($myfile269);
?>