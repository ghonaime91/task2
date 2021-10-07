<?php

function output(){
    $input = 'f';
      $input++;
      print$input;
  }

  output();
?>

<br>


<?php

  $students = [
    ['name' => 'Root', ' ' ,'age' => 20] , 
    ['name' => 'Root2', ' ' ,'age' => 25],
    ['name' => 'Root3', ' ' ,'age' => 30]
];

foreach($students as  $key => $val ){

    print_r(implode ($students [$key]).'<br>');
  
}

?>