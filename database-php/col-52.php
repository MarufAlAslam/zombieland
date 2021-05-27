<?php
error_reporting(0);
    if(isset($_POST['clear52'])){
        $fp459= fopen('./file-db/cleared52.txt', 'w');//opens file in append mode  
        $fp460 = fopen('./file-db/progress52.txt', 'w');//opens file in append mode  
        $fp461 = fopen('./file-db/issue52.txt', 'w');//opens file in append mode  
        fwrite($fp459, 'cleared');
        fwrite($fp460, '');
        fwrite($fp461, '');
        echo '<br>';
        fclose($fp459);  
        fclose($fp460);  
        fclose($fp461);  
        
       header("location:index.php");
    }
?>

<?php
$myfile459= fopen("./file-db/cleared52.txt", "r") or die("Unable to open file!");
$myfile460 = fopen("./file-db/progress52.txt", "r") or die("Unable to open file!");
$myfile461 = fopen("./file-db/issue52.txt", "r") or die("Unable to open file!");
$myText459= fread($myfile459,filesize("./file-db/cleared52.txt"));
$myText460 = fread($myfile460,filesize("./file-db/progress52.txt"));
$myText461 = fread($myfile461,filesize("./file-db/issue52.txt"));
// echo $myText;
fclose($myfile459);
fclose($myfile460);
fclose($myfil461);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress52'])){
        $fp462 = fopen('./file-db/cleared52.txt', 'w');//opens file in append mode  
        $fp463 = fopen('./file-db/progress52.txt', 'w');//opens file in append mode  
        $fp464 = fopen('./file-db/issue52.txt', 'w');//opens file in append mode  
        fwrite($fp462, '');
        fwrite($fp463, 'progress');
        fwrite($fp464, '');
        echo '<br>';
        fclose($fp462);  
        fclose($fp463);  
        fclose($fp464);  
        
       header("location:index.php");
    }
?>

<?php
$myfile462 = fopen("./file-db/cleared52.txt", "r") or die("Unable to open file!");
$myfile463 = fopen("./file-db/progress52.txt", "r") or die("Unable to open file!");
$myfile464 = fopen("./file-db/issue52.txt", "r") or die("Unable to open file!");
$myText462 = fread($myfile462,filesize("./file-db/cleared52.txt"));
$myText463 = fread($myfile463,filesize("./file-db/progress52.txt"));
$myText464 = fread($myfile464,filesize("./file-db/issue52.txt"));
// echo $myText;
fclose($myfile462);
fclose($myfile464);
fclose($myfile464);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue52'])){
        $fp465 = fopen('./file-db/cleared52.txt', 'w');//opens file in append mode  
        $fp466 = fopen('./file-db/progress52.txt', 'w');//opens file in append mode  
        $fp467 = fopen('./file-db/issue52.txt', 'w');//opens file in append mode  
        fwrite($fp465, '');
        fwrite($fp466, '');
        fwrite($fp467, 'issue');
        echo '<br>';
        fclose($fp465);  
        fclose($fp466);  
        fclose($fp467);  
        
       header("location:index.php");
    }
?>

<?php
$myfile465 = fopen("./file-db/cleared52.txt", "r") or die("Unable to open file!");
$myfile466 = fopen("./file-db/progress52.txt", "r") or die("Unable to open file!");
$myfile467 = fopen("./file-db/issue52.txt", "r") or die("Unable to open file!");
$myText465 = fread($myfile465,filesize("./file-db/cleared52.txt"));
$myText466 = fread($myfile466,filesize("./file-db/progress52.txt"));
$myText467 = fread($myfile467,filesize("./file-db/issue52.txt"));
// echo $myText;
fclose($myfile465);
fclose($myfile466);
fclose($myfile467);
?>