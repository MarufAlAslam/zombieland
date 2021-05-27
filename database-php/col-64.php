<?php
error_reporting(0);
    if(isset($_POST['clear64'])){
        $fp567= fopen('./file-db/cleared64.txt', 'w');//opens file in append mode  
        $fp568 = fopen('./file-db/progress64.txt', 'w');//opens file in append mode  
        $fp569 = fopen('./file-db/issue64.txt', 'w');//opens file in append mode  
        fwrite($fp567, 'cleared');
        fwrite($fp568, '');
        fwrite($fp569, '');
        echo '<br>';
        fclose($fp567);  
        fclose($fp568);  
        fclose($fp569);  
        
       header("location:index.php");
    }
?>

<?php
$myfile567= fopen("./file-db/cleared64.txt", "r") or die("Unable to open file!");
$myfile568 = fopen("./file-db/progress64.txt", "r") or die("Unable to open file!");
$myfile569 = fopen("./file-db/issue64.txt", "r") or die("Unable to open file!");
$myText567= fread($myfile567,filesize("./file-db/cleared64.txt"));
$myText568 = fread($myfile568,filesize("./file-db/progress64.txt"));
$myText569 = fread($myfile569,filesize("./file-db/issue64.txt"));
// echo $myText;
fclose($myfile567);
fclose($myfile568);
fclose($myfil569);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress64'])){
        $fp570 = fopen('./file-db/cleared64.txt', 'w');//opens file in append mode  
        $fp571 = fopen('./file-db/progress64.txt', 'w');//opens file in append mode  
        $fp572 = fopen('./file-db/issue64.txt', 'w');//opens file in append mode  
        fwrite($fp570, '');
        fwrite($fp572, 'progress');
        fwrite($fp572, '');
        echo '<br>';
        fclose($fp570);  
        fclose($fp572);  
        fclose($fp572);  
        
       header("location:index.php");
    }
?>

<?php
$myfile570 = fopen("./file-db/cleared64.txt", "r") or die("Unable to open file!");
$myfile571 = fopen("./file-db/progress64.txt", "r") or die("Unable to open file!");
$myfile572 = fopen("./file-db/issue64.txt", "r") or die("Unable to open file!");
$myText570 = fread($myfile570,filesize("./file-db/cleared64.txt"));
$myText571 = fread($myfile571,filesize("./file-db/progress64.txt"));
$myText572 = fread($myfile572,filesize("./file-db/issue64.txt"));
// echo $myText;
fclose($myfile570);
fclose($myfile572);
fclose($myfile572);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue64'])){
        $fp573 = fopen('./file-db/cleared64.txt', 'w');//opens file in append mode  
        $fp574 = fopen('./file-db/progress64.txt', 'w');//opens file in append mode  
        $fp575 = fopen('./file-db/issue64.txt', 'w');//opens file in append mode  
        fwrite($fp573, '');
        fwrite($fp574, '');
        fwrite($fp575, 'issue');
        echo '<br>';
        fclose($fp573);  
        fclose($fp574);  
        fclose($fp575);  
        
       header("location:index.php");
    }
?>

<?php
$myfile573 = fopen("./file-db/cleared64.txt", "r") or die("Unable to open file!");
$myfile574 = fopen("./file-db/progress64.txt", "r") or die("Unable to open file!");
$myfile575 = fopen("./file-db/issue64.txt", "r") or die("Unable to open file!");
$myText573 = fread($myfile573,filesize("./file-db/cleared64.txt"));
$myText574 = fread($myfile574,filesize("./file-db/progress64.txt"));
$myText575 = fread($myfile575,filesize("./file-db/issue64.txt"));
// echo $myText;
fclose($myfile573);
fclose($myfile574);
fclose($myfile575);
?>