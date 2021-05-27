<?php
error_reporting(0);
    if(isset($_POST['clear9'])){
        $fp72= fopen('./file-db/cleared9.txt', 'w');//opens file in append mode  
        $fp73 = fopen('./file-db/progress9.txt', 'w');//opens file in append mode  
        $fp74 = fopen('./file-db/issue9.txt', 'w');//opens file in append mode  
        fwrite($fp72, 'cleared');
        fwrite($fp73, '');
        fwrite($fp74, '');
        echo '<br>';
        fclose($fp72);  
        fclose($fp73);  
        fclose($fp74);  
        
       header("location:index.php");
    }
?>

<?php
$myfile72= fopen("./file-db/cleared9.txt", "r") or die("Unable to open file!");
$myfile73 = fopen("./file-db/progress9.txt", "r") or die("Unable to open file!");
$myfile74 = fopen("./file-db/issue9.txt", "r") or die("Unable to open file!");
$myText72= fread($myfile72,filesize("./file-db/cleared9.txt"));
$myText73 = fread($myfile73,filesize("./file-db/progress9.txt"));
$myText74 = fread($myfile74,filesize("./file-db/issue9.txt"));
// echo $myText;
fclose($myfile72);
fclose($myfile73);
fclose($myfil74);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress9'])){
        $fp75 = fopen('./file-db/cleared9.txt', 'w');//opens file in append mode  
        $fp76 = fopen('./file-db/progress9.txt', 'w');//opens file in append mode  
        $fp77 = fopen('./file-db/issue9.txt', 'w');//opens file in append mode  
        fwrite($fp75, '');
        fwrite($fp76, 'progress');
        fwrite($fp77, '');
        echo '<br>';
        fclose($fp75);  
        fclose($fp76);  
        fclose($fp77);  
        
       header("location:index.php");
    }
?>

<?php
$myfile75 = fopen("./file-db/cleared9.txt", "r") or die("Unable to open file!");
$myfile76 = fopen("./file-db/progress9.txt", "r") or die("Unable to open file!");
$myfile77 = fopen("./file-db/issue9.txt", "r") or die("Unable to open file!");
$myText75 = fread($myfile75,filesize("./file-db/cleared9.txt"));
$myText76 = fread($myfile76,filesize("./file-db/progress9.txt"));
$myText77 = fread($myfile77,filesize("./file-db/issue9.txt"));
// echo $myText;
fclose($myfile75);
fclose($myfile76);
fclose($myfile77);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue9'])){
        $fp78 = fopen('./file-db/cleared9.txt', 'w');//opens file in append mode  
        $fp79 = fopen('./file-db/progress9.txt', 'w');//opens file in append mode  
        $fp80 = fopen('./file-db/issue9.txt', 'w');//opens file in append mode  
        fwrite($fp78, '');
        fwrite($fp79, '');
        fwrite($fp80, 'issue');
        echo '<br>';
        fclose($fp78);  
        fclose($fp79);  
        fclose($fp80);  
        
       header("location:index.php");
    }
?>

<?php
$myfile78 = fopen("./file-db/cleared9.txt", "r") or die("Unable to open file!");
$myfile79 = fopen("./file-db/progress9.txt", "r") or die("Unable to open file!");
$myfile80 = fopen("./file-db/issue9.txt", "r") or die("Unable to open file!");
$myText78 = fread($myfile78,filesize("./file-db/cleared9.txt"));
$myText79 = fread($myfile79,filesize("./file-db/progress9.txt"));
$myText80 = fread($myfile80,filesize("./file-db/issue9.txt"));
// echo $myText;
fclose($myfile78);
fclose($myfile79);
fclose($myfile80);
?>