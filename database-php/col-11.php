<?php
error_reporting(0);
    if(isset($_POST['clear11'])){
        $fp90= fopen('./file-db/cleared11.txt', 'w');//opens file in append mode  
        $fp91 = fopen('./file-db/progress11.txt', 'w');//opens file in append mode  
        $fp92 = fopen('./file-db/issue11.txt', 'w');//opens file in append mode  
        fwrite($fp90, 'cleared');
        fwrite($fp91, '');
        fwrite($fp92, '');
        echo '<br>';
        fclose($fp90);  
        fclose($fp91);  
        fclose($fp92);  
        
       header("location:index.php");
    }
?>

<?php
$myfile90= fopen("./file-db/cleared11.txt", "r") or die("Unable to open file!");
$myfile91 = fopen("./file-db/progress11.txt", "r") or die("Unable to open file!");
$myfile92 = fopen("./file-db/issue11.txt", "r") or die("Unable to open file!");
$myText90= fread($myfile90,filesize("./file-db/cleared11.txt"));
$myText91 = fread($myfile91,filesize("./file-db/progress11.txt"));
$myText92 = fread($myfile92,filesize("./file-db/issue11.txt"));
// echo $myText;
fclose($myfile90);
fclose($myfile91);
fclose($myfil92);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress11'])){
        $fp93 = fopen('./file-db/cleared11.txt', 'w');//opens file in append mode  
        $fp94 = fopen('./file-db/progress11.txt', 'w');//opens file in append mode  
        $fp95 = fopen('./file-db/issue11.txt', 'w');//opens file in append mode  
        fwrite($fp93, '');
        fwrite($fp94, 'progress');
        fwrite($fp95, '');
        echo '<br>';
        fclose($fp93);  
        fclose($fp94);  
        fclose($fp95);  
        
       header("location:index.php");
    }
?>

<?php
$myfile93 = fopen("./file-db/cleared11.txt", "r") or die("Unable to open file!");
$myfile94 = fopen("./file-db/progress11.txt", "r") or die("Unable to open file!");
$myfile95 = fopen("./file-db/issue11.txt", "r") or die("Unable to open file!");
$myText93 = fread($myfile93,filesize("./file-db/cleared11.txt"));
$myText94 = fread($myfile94,filesize("./file-db/progress11.txt"));
$myText95 = fread($myfile95,filesize("./file-db/issue11.txt"));
// echo $myText;
fclose($myfile93);
fclose($myfile94);
fclose($myfile95);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue11'])){
        $fp96 = fopen('./file-db/cleared11.txt', 'w');//opens file in append mode  
        $fp97 = fopen('./file-db/progress11.txt', 'w');//opens file in append mode  
        $fp98 = fopen('./file-db/issue11.txt', 'w');//opens file in append mode  
        fwrite($fp96, '');
        fwrite($fp97, '');
        fwrite($fp98, 'issue');
        echo '<br>';
        fclose($fp96);  
        fclose($fp97);  
        fclose($fp98);  
        
       header("location:index.php");
    }
?>

<?php
$myfile96 = fopen("./file-db/cleared11.txt", "r") or die("Unable to open file!");
$myfile97 = fopen("./file-db/progress11.txt", "r") or die("Unable to open file!");
$myfile98 = fopen("./file-db/issue11.txt", "r") or die("Unable to open file!");
$myText96 = fread($myfile96,filesize("./file-db/cleared11.txt"));
$myText97 = fread($myfile97,filesize("./file-db/progress11.txt"));
$myText98 = fread($myfile98,filesize("./file-db/issue11.txt"));
// echo $myText;
fclose($myfile96);
fclose($myfile97);
fclose($myfile98);
?>