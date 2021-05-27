<?php
error_reporting(0);
    if(isset($_POST['clear56'])){
        $fp495= fopen('./file-db/cleared56.txt', 'w');//opens file in append mode  
        $fp496 = fopen('./file-db/progress56.txt', 'w');//opens file in append mode  
        $fp497 = fopen('./file-db/issue56.txt', 'w');//opens file in append mode  
        fwrite($fp495, 'cleared');
        fwrite($fp496, '');
        fwrite($fp497, '');
        echo '<br>';
        fclose($fp495);  
        fclose($fp496);  
        fclose($fp497);  
        
       header("location:index.php");
    }
?>

<?php
$myfile495= fopen("./file-db/cleared56.txt", "r") or die("Unable to open file!");
$myfile496 = fopen("./file-db/progress56.txt", "r") or die("Unable to open file!");
$myfile497 = fopen("./file-db/issue56.txt", "r") or die("Unable to open file!");
$myText495= fread($myfile495,filesize("./file-db/cleared56.txt"));
$myText496 = fread($myfile496,filesize("./file-db/progress56.txt"));
$myText497 = fread($myfile497,filesize("./file-db/issue56.txt"));
// echo $myText;
fclose($myfile495);
fclose($myfile496);
fclose($myfil497);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress56'])){
        $fp498 = fopen('./file-db/cleared56.txt', 'w');//opens file in append mode  
        $fp499 = fopen('./file-db/progress56.txt', 'w');//opens file in append mode  
        $fp500 = fopen('./file-db/issue56.txt', 'w');//opens file in append mode  
        fwrite($fp498, '');
        fwrite($fp499, 'progress');
        fwrite($fp500, '');
        echo '<br>';
        fclose($fp498);  
        fclose($fp499);  
        fclose($fp500);  
        
       header("location:index.php");
    }
?>

<?php
$myfile498 = fopen("./file-db/cleared56.txt", "r") or die("Unable to open file!");
$myfile499 = fopen("./file-db/progress56.txt", "r") or die("Unable to open file!");
$myfile500 = fopen("./file-db/issue56.txt", "r") or die("Unable to open file!");
$myText498 = fread($myfile498,filesize("./file-db/cleared56.txt"));
$myText499 = fread($myfile499,filesize("./file-db/progress56.txt"));
$myText500 = fread($myfile500,filesize("./file-db/issue56.txt"));
// echo $myText;
fclose($myfile498);
fclose($myfile500);
fclose($myfile500);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue56'])){
        $fp501 = fopen('./file-db/cleared56.txt', 'w');//opens file in append mode  
        $fp502 = fopen('./file-db/progress56.txt', 'w');//opens file in append mode  
        $fp503 = fopen('./file-db/issue56.txt', 'w');//opens file in append mode  
        fwrite($fp501, '');
        fwrite($fp502, '');
        fwrite($fp503, 'issue');
        echo '<br>';
        fclose($fp501);  
        fclose($fp502);  
        fclose($fp503);  
        
       header("location:index.php");
    }
?>

<?php
$myfile501 = fopen("./file-db/cleared56.txt", "r") or die("Unable to open file!");
$myfile502 = fopen("./file-db/progress56.txt", "r") or die("Unable to open file!");
$myfile503 = fopen("./file-db/issue56.txt", "r") or die("Unable to open file!");
$myText501 = fread($myfile501,filesize("./file-db/cleared56.txt"));
$myText502 = fread($myfile502,filesize("./file-db/progress56.txt"));
$myText503 = fread($myfile503,filesize("./file-db/issue56.txt"));
// echo $myText;
fclose($myfile501);
fclose($myfile502);
fclose($myfile503);
?>