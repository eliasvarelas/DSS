<?php
  $newfile = fopen("/Users/hliasvarelas/github/DSS/testfile.arff", "w");
  $txt = "@relation 'Immunotherapy - ImmunoDataset'
@attribute sex {1,2}
@attribute age numeric
@attribute Time {'2,25',3,'10,5','4,5',8,5,'9,75','7,5',6,12,'6,25','5,75','1,75','5,5',10,'9,25','7,75','6,5','6,75','1,25','11,25','4,75',11,'11,5','2,5','10,25','4,25','8,75','8,5','8,25',9,'5,25','11,75','3,75',4,'10,75',1,2,'7,25'}
@attribute Number_of_Warts numeric
@attribute Type {1,2,3}
@attribute Area numeric
@attribute induration_diameter numeric
@attribute Result_of_Treatment {0,1}\n@data\n";
  fwrite($newfile, $txt);
  if(isset($_POST['submit'])){
    $newsex = $_POST['Sex'];
    $newage = $_POST['Age'];
    $newtime = $_POST['Time'];
    $newnum = $_POST['Number_of_warts'];
    $newtype = $_POST['Type'];
    $newarea = $_POST['Area'];
    $newindu = $_POST['induration_diameter'];
    $newset = $newsex .",". $newage .",'". $newtime ."',". $newnum .",". $newtype .",". $newarea .",". $newindu .","."?";
    fwrite($newfile, $newset);
    fopen("/Users/hliasvarelas/github/DSS/testfile.arff", "r");
    echo $newset;
  } else {
    echo "Sorry, Something Went Wrong";
  }
  fclose($newfile);
?>
