<?php


function clean($input){

  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  $input = trim($input);

  return $input;

}




if($_SERVER['REQUEST_METHOD'] == "POST"){

$name     =  clean($_POST['name']); 
$password =  clean($_POST['password']);
$email    =  clean($_POST['email']);
$address =  clean($_POST['address']);
$gender =  clean($_POST['gender']);
$url =  clean($_POST['url']);


 $errors = [];

/////////   name //////////////////

 if(empty($name)){
    $errors['Name'] = "undefined";
 }


///////////   email //////////////////

   if(empty($email)){
    $errors['Email'] = "undefined";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['Email'] = "Invalid Email";
}

///////////   password //////////////////

 if(empty($password)){
    $errors['password'] = "undefined";
}elseif(strlen($password ) > 10){
    $errors['password'] = "Invalid address";
}

///////////   address //////////////////

 
 if(empty($address)){
    $errors['address'] = "undefined";
}elseif(strlen($address) > 10){
    $errors['address'] = "Invalid address";
}
 
///////////   gender //////////////////

   if(empty($gender)){
      $errors['gender'] = "undefined";
   }

///////////   linkedin //////////////////
 
     if(empty($url)){
        $errors['url'] = "undefined";
    }elseif(!filter_var($url,FILTER_VALIDATE_URL)){
        $errors['url'] = "Invalid url";
    }

// if(empty($val)){
//   $errors['val'] = " undefined";
// }elseif(!filter_var($val,FILTER_VALIDATE_EMAIL)){
//   $errors['Email'] = "Invalid Email";


// }elseif(!filter_var($val,FILTER_VALIDATE_URL)){
//   $errors['url'] = "Invalid url";
// }


///////////////////////////////////////////////////
    if(count($errors) > 0){
        foreach($errors as $key => $val ){
            echo '* '.$key.' :  '.$val.'<br>';
        }
    }else{
        echo 'Valid Data';
       }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form  action="<?php echo $_SERVER['PHP_SELF'];?>"   method="post"   enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email"   name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password"   name = "password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="address"   name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
    <input type="gender"   name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter gender">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Linkedin</label>
    <input type="linkedin"   name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter linkedin url">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>