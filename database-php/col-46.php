<?php
error_reporting(0);
    if(isset($_POST['clear46'])){
        $fp405= fopen('./file-db/cleared46.txt', 'w');//opens file in append mode  
        $fp406 = fopen('./file-db/progress46.txt', 'w');//opens file in append mode  
        $fp407 = fopen('./file-db/issue46.txt', 'w');//opens file in append mode  
        fwrite($fp405, 'cleared');
        fwrite($fp406, '');
        fwrite($fp407, '');
        echo '<br>';
        fclose($fp405);  
        fclose($fp406);  
        fclose($fp407);  
        
       header("location:index.php");
    }
?>

<?php
$myfile405= fopen("./file-db/cleared46.txt", "r") or die("Unable to open file!");
$myfile406 = fopen("./file-db/progress46.txt", "r") or die("Unable to open file!");
$myfile407 = fopen("./file-db/issue46.txt", "r") or die("Unable to open file!");
$myText405= fread($myfile405,filesize("./file-db/cleared46.txt"));
$myText406 = fread($myfile406,filesize("./file-db/progress46.txt"));
$myText407 = fread($myfile407,filesize("./file-db/issue46.txt"));
// echo $myText;
fclose($myfile405);
fclose($myfile406);
fclose($myfil407);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress46'])){
        $fp408 = fopen('./file-db/cleared46.txt', 'w');//opens file in append mode  
        $fp409 = fopen('./file-db/progress46.txt', 'w');//opens file in append mode  
        $fp410 = fopen('./file-db/issue46.txt', 'w');//opens file in append mode  
        fwrite($fp408, '');
        fwrite($fp409, 'progress');
        fwrite($fp410, '');
        echo '<br>';
        fclose($fp408);  
        fclose($fp409);  
        fclose($fp410);  
        
       header("location:index.php");
    }
?>

<?php
$myfile408 = fopen("./file-db/cleared46.txt", "r") or die("Unable to open file!");
$myfile409 = fopen("./file-db/progress46.txt", "r") or die("Unable to open file!");
$myfile410 = fopen("./file-db/issue46.txt", "r") or die("Unable to open file!");
$myText408 = fread($myfile408,filesize("./file-db/cleared46.txt"));
$myText409 = fread($myfile409,filesize("./file-db/progress46.txt"));
$myText410 = fread($myfile410,filesize("./file-db/issue46.txt"));
// echo $myText;
fclose($myfile408);
fclose($myfile410);
fclose($myfile410);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue46'])){
        $fp411 = fopen('./file-db/cleared46.txt', 'w');//opens file in append mode  
        $fp412 = fopen('./file-db/progress46.txt', 'w');//opens file in append mode  
        $fp413 = fopen('./file-db/issue46.txt', 'w');//opens file in append mode  
        fwrite($fp411, '');
        fwrite($fp412, '');
        fwrite($fp413, 'issue');
        echo '<br>';
        fclose($fp411);  
        fclose($fp412);  
        fclose($fp413);  
        
       header("location:index.php");
    }
?>

<?php
$myfile411 = fopen("./file-db/cleared46.txt", "r") or die("Unable to open file!");
$myfile412 = fopen("./file-db/progress46.txt", "r") or die("Unable to open file!");
$myfile413 = fopen("./file-db/issue46.txt", "r") or die("Unable to open file!");
$myText411 = fread($myfile411,filesize("./file-db/cleared46.txt"));
$myText412 = fread($myfile412,filesize("./file-db/progress46.txt"));
$myText413 = fread($myfile413,filesize("./file-db/issue46.txt"));
// echo $myText;
fclose($myfile411);
fclose($myfile412);
fclose($myfile413);
?>