<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>

  /* Apply some basic styling to the form */
form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f5f5f5;
}

/* Style the label and input fields */
label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
}


</style>
<body>

<?php

function isprime($num){
  for ($i=0; $i<=$num; $i++){
    if($num%i ==0 ){
    echo "The $num number is prime $ <br>";
    }
    else{
    echo "The $num number is not prime $ <br>";
    }      
  }   
}
isprime(5);

$arr= array('one'=>'cat', 'two'=>'fox', 'three'=>'dog','four'=>'Elephant');

foreach($arr as $a=>$values){
  echo "$a=$values <br>" ;
  
}
  
?>
    
</body>
</html>