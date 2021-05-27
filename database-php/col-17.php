<?php
error_reporting(0);
    if(isset($_POST['clear17'])){
        $fp144= fopen('./file-db/cleared17.txt', 'w');//opens file in append mode  
        $fp1144 = fopen('./file-db/progress17.txt', 'w');//opens file in append mode  
        $fp146 = fopen('./file-db/issue17.txt', 'w');//opens file in append mode  
        fwrite($fp144, 'cleared');
        fwrite($fp1144, '');
        fwrite($fp146, '');
        echo '<br>';
        fclose($fp144);  
        fclose($fp1144);  
        fclose($fp146);  
        
       header("location:index.php");
    }
?>

<?php
$myfile144= fopen("./file-db/cleared17.txt", "r") or die("Unable to open file!");
$myfile1144 = fopen("./file-db/progress17.txt", "r") or die("Unable to open file!");
$myfile146 = fopen("./file-db/issue17.txt", "r") or die("Unable to open file!");
$myText144= fread($myfile144,filesize("./file-db/cleared17.txt"));
$myText1144 = fread($myfile1144,filesize("./file-db/progress17.txt"));
$myText146 = fread($myfile146,filesize("./file-db/issue17.txt"));
// echo $myText;
fclose($myfile144);
fclose($myfile1144);
fclose($myfil146);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress17'])){
        $fp147 = fopen('./file-db/cleared17.txt', 'w');//opens file in append mode  
        $fp148 = fopen('./file-db/progress17.txt', 'w');//opens file in append mode  
        $fp149 = fopen('./file-db/issue17.txt', 'w');//opens file in append mode  
        fwrite($fp147, '');
        fwrite($fp148, 'progress');
        fwrite($fp149, '');
        echo '<br>';
        fclose($fp147);  
        fclose($fp148);  
        fclose($fp149);  
        
       header("location:index.php");
    }
?>

<?php
$myfile147 = fopen("./file-db/cleared17.txt", "r") or die("Unable to open file!");
$myfile148 = fopen("./file-db/progress17.txt", "r") or die("Unable to open file!");
$myfile149 = fopen("./file-db/issue17.txt", "r") or die("Unable to open file!");
$myText147 = fread($myfile147,filesize("./file-db/cleared17.txt"));
$myText148 = fread($myfile148,filesize("./file-db/progress17.txt"));
$myText149 = fread($myfile149,filesize("./file-db/issue17.txt"));
// echo $myText;
fclose($myfile147);
fclose($myfile148);
fclose($myfile149);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue17'])){
        $fp150 = fopen('./file-db/cleared17.txt', 'w');//opens file in append mode  
        $fp151 = fopen('./file-db/progress17.txt', 'w');//opens file in append mode  
        $fp152 = fopen('./file-db/issue17.txt', 'w');//opens file in append mode  
        fwrite($fp150, '');
        fwrite($fp151, '');
        fwrite($fp152, 'issue');
        echo '<br>';
        fclose($fp150);  
        fclose($fp151);  
        fclose($fp152);  
        
       header("location:index.php");
    }
?>

<?php
$myfile150 = fopen("./file-db/cleared17.txt", "r") or die("Unable to open file!");
$myfile151 = fopen("./file-db/progress17.txt", "r") or die("Unable to open file!");
$myfile152 = fopen("./file-db/issue17.txt", "r") or die("Unable to open file!");
$myText150 = fread($myfile150,filesize("./file-db/cleared17.txt"));
$myText151 = fread($myfile151,filesize("./file-db/progress17.txt"));
$myText152 = fread($myfile152,filesize("./file-db/issue17.txt"));
// echo $myText;
fclose($myfile150);
fclose($myfile151);
fclose($myfile152);
?>