<?php
error_reporting(0);
    if(isset($_POST['clear53'])){
        $fp468= fopen('./file-db/cleared53.txt', 'w');//opens file in append mode  
        $fp469 = fopen('./file-db/progress53.txt', 'w');//opens file in append mode  
        $fp470 = fopen('./file-db/issue53.txt', 'w');//opens file in append mode  
        fwrite($fp468, 'cleared');
        fwrite($fp469, '');
        fwrite($fp470, '');
        echo '<br>';
        fclose($fp468);  
        fclose($fp469);  
        fclose($fp470);  
        
       header("location:index.php");
    }
?>

<?php
$myfile468= fopen("./file-db/cleared53.txt", "r") or die("Unable to open file!");
$myfile469 = fopen("./file-db/progress53.txt", "r") or die("Unable to open file!");
$myfile470 = fopen("./file-db/issue53.txt", "r") or die("Unable to open file!");
$myText468= fread($myfile468,filesize("./file-db/cleared53.txt"));
$myText469 = fread($myfile469,filesize("./file-db/progress53.txt"));
$myText470 = fread($myfile470,filesize("./file-db/issue53.txt"));
// echo $myText;
fclose($myfile468);
fclose($myfile469);
fclose($myfil470);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress53'])){
        $fp471 = fopen('./file-db/cleared53.txt', 'w');//opens file in append mode  
        $fp472 = fopen('./file-db/progress53.txt', 'w');//opens file in append mode  
        $fp473 = fopen('./file-db/issue53.txt', 'w');//opens file in append mode  
        fwrite($fp471, '');
        fwrite($fp472, 'progress');
        fwrite($fp473, '');
        echo '<br>';
        fclose($fp471);  
        fclose($fp472);  
        fclose($fp473);  
        
       header("location:index.php");
    }
?>

<?php
$myfile471 = fopen("./file-db/cleared53.txt", "r") or die("Unable to open file!");
$myfile472 = fopen("./file-db/progress53.txt", "r") or die("Unable to open file!");
$myfile473 = fopen("./file-db/issue53.txt", "r") or die("Unable to open file!");
$myText471 = fread($myfile471,filesize("./file-db/cleared53.txt"));
$myText472 = fread($myfile472,filesize("./file-db/progress53.txt"));
$myText473 = fread($myfile473,filesize("./file-db/issue53.txt"));
// echo $myText;
fclose($myfile471);
fclose($myfile473);
fclose($myfile473);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue53'])){
        $fp474 = fopen('./file-db/cleared53.txt', 'w');//opens file in append mode  
        $fp475 = fopen('./file-db/progress53.txt', 'w');//opens file in append mode  
        $fp476 = fopen('./file-db/issue53.txt', 'w');//opens file in append mode  
        fwrite($fp474, '');
        fwrite($fp475, '');
        fwrite($fp476, 'issue');
        echo '<br>';
        fclose($fp474);  
        fclose($fp475);  
        fclose($fp476);  
        
       header("location:index.php");
    }
?>

<?php
$myfile474 = fopen("./file-db/cleared53.txt", "r") or die("Unable to open file!");
$myfile475 = fopen("./file-db/progress53.txt", "r") or die("Unable to open file!");
$myfile476 = fopen("./file-db/issue53.txt", "r") or die("Unable to open file!");
$myText474 = fread($myfile474,filesize("./file-db/cleared53.txt"));
$myText475 = fread($myfile475,filesize("./file-db/progress53.txt"));
$myText476 = fread($myfile476,filesize("./file-db/issue53.txt"));
// echo $myText;
fclose($myfile474);
fclose($myfile475);
fclose($myfile476);
?>