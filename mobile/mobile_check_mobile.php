<?php
include "../admin/includes/config.php";
include "../admin/includes/functions.php";

$response = array(); 

if($_SERVER['REQUEST_METHOD']=='POST'){

if(!empty($_REQUEST['password']) && !empty($_REQUEST['password']))  {

      if(!empty($_REQUEST['mobile']) && !empty($_REQUEST['password']) && !empty($_REQUEST['token']))  {

        $mobile = $_REQUEST['mobile'];
        $token = $_REQUEST['token'];
        $password = encryptPassword($_REQUEST['password']);

        $sql = "SELECT * FROM users WHERE user_mobile = '$mobile'";
        $result = $conn->query($sql);   

          if($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $result = "UPDATE `users` SET `user_password`='$password',`token`='$token' WHERE `user_mobile`='$mobile'";
              if ($conn->query($result) === TRUE) {
                $response['success']=0;
                $response['message']='Success';        
              } else {
                $response['success']=4;
                $response['message']='Error oops!';
              }            

            } else {
              $response['success']=1;
              $response['message']='Your Mobile Number Not Valid ,Pelase Enter Valid Number.';          
            }

        } else {
          $response['success']=2;
          $response['message']='Parameters missing';     
        }

} else {

  if(!empty($_REQUEST['mobile']) && !empty($_REQUEST['mobile']))  {

    $mobile = $_REQUEST['mobile'];    
    $sql = "SELECT * FROM users WHERE user_mobile = '$mobile'";
    $result = $conn->query($sql);   

      if($result->num_rows > 0) {
          $row = $result->fetch_assoc();                   
          $response['success']=0;
          $response['message']='Success';          

        } else {
          $response['success']=1;
          $response['message']='Your Number Not Registered With Us,Pelase Register Palle2Patnam';          
        }

    } else {
      $response['success']=2;
      $response['message']='Parameters missing';     
    }
    
  } 
} else {
    $response['success']=3;
    $response['message']='Invalid request';   
}

  echo json_encode($response);
?>