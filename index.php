<?php


require_once ("index2.php");
$inst = new gg();
  if($_POST['submit']== '+'){
    echo  $inst-> add ($_POST['unm1'], $_POST['unm2']);
 

 }
  elseif($_POST['submit'] == '-') {
    $inst-> subtraction ($_POST['unm1'], $_POST['unm2']);

  }
  elseif($_POST['submit'] == '*') {
   $inst-> mubtraction ($_POST['unm1'], $_POST['unm2']);

  }
  elseif($_POST['submit'] == '%') {
    echo  $inst-> division ($_POST['unm1'], $_POST['unm2']);

  }
 else{
 echo ("Undefined");
}
   
?>


<form action="index.php" method="post">
<input type="text" name="unm1"></input> <br>
<input type="text" name="unm2" style="margin:10px 0px"></input> <br>
 <input type="submit" name="submit" value="+"/> 
 <input type="submit" name="submit" value="-"/> 
 <input type="submit" name="submit" value="*"/> 
 <input type="submit" name="submit" value="%"/>

</form>