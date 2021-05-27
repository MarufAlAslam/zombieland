<?php
error_reporting(0);
    if(isset($_POST['clear22'])){
        $fp189= fopen('./file-db/cleared22.txt', 'w');//opens file in append mode  
        $fp190 = fopen('./file-db/progress22.txt', 'w');//opens file in append mode  
        $fp191 = fopen('./file-db/issue22.txt', 'w');//opens file in append mode  
        fwrite($fp189, 'cleared');
        fwrite($fp190, '');
        fwrite($fp191, '');
        echo '<br>';
        fclose($fp189);  
        fclose($fp190);  
        fclose($fp191);  
        
       header("location:index.php");
    }
?>

<?php
$myfile189= fopen("./file-db/cleared22.txt", "r") or die("Unable to open file!");
$myfile190 = fopen("./file-db/progress22.txt", "r") or die("Unable to open file!");
$myfile191 = fopen("./file-db/issue22.txt", "r") or die("Unable to open file!");
$myText189= fread($myfile189,filesize("./file-db/cleared22.txt"));
$myText190 = fread($myfile190,filesize("./file-db/progress22.txt"));
$myText191 = fread($myfile191,filesize("./file-db/issue22.txt"));
// echo $myText;
fclose($myfile189);
fclose($myfile190);
fclose($myfil191);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress22'])){
        $fp192 = fopen('./file-db/cleared22.txt', 'w');//opens file in append mode  
        $fp193 = fopen('./file-db/progress22.txt', 'w');//opens file in append mode  
        $fp194 = fopen('./file-db/issue22.txt', 'w');//opens file in append mode  
        fwrite($fp192, '');
        fwrite($fp193, 'progress');
        fwrite($fp194, '');
        echo '<br>';
        fclose($fp192);  
        fclose($fp193);  
        fclose($fp194);  
        
       header("location:index.php");
    }
?>

<?php
$myfile192 = fopen("./file-db/cleared22.txt", "r") or die("Unable to open file!");
$myfile193 = fopen("./file-db/progress22.txt", "r") or die("Unable to open file!");
$myfile194 = fopen("./file-db/issue22.txt", "r") or die("Unable to open file!");
$myText192 = fread($myfile192,filesize("./file-db/cleared22.txt"));
$myText193 = fread($myfile193,filesize("./file-db/progress22.txt"));
$myText194 = fread($myfile194,filesize("./file-db/issue22.txt"));
// echo $myText;
fclose($myfile192);
fclose($myfile193);
fclose($myfile194);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue22'])){
        $fp195 = fopen('./file-db/cleared22.txt', 'w');//opens file in append mode  
        $fp196 = fopen('./file-db/progress22.txt', 'w');//opens file in append mode  
        $fp197 = fopen('./file-db/issue22.txt', 'w');//opens file in append mode  
        fwrite($fp195, '');
        fwrite($fp196, '');
        fwrite($fp197, 'issue');
        echo '<br>';
        fclose($fp195);  
        fclose($fp196);  
        fclose($fp197);  
        
       header("location:index.php");
    }
?>

<?php
$myfile195 = fopen("./file-db/cleared22.txt", "r") or die("Unable to open file!");
$myfile196 = fopen("./file-db/progress22.txt", "r") or die("Unable to open file!");
$myfile197 = fopen("./file-db/issue22.txt", "r") or die("Unable to open file!");
$myText195 = fread($myfile195,filesize("./file-db/cleared22.txt"));
$myText196 = fread($myfile196,filesize("./file-db/progress22.txt"));
$myText197 = fread($myfile197,filesize("./file-db/issue22.txt"));
// echo $myText;
fclose($myfile195);
fclose($myfile196);
fclose($myfile197);
?>