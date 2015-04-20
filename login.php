<?php
session_start();
require 'linkedin.php';
require 'linkedin_config.php';
//require 'db_config.php';

$config = array('api_key' => $api_key, 'api_secret' => $api_secret , 'callback_url' => $callback_url);
$connection = new LinkedIn($config);

if (isset($_REQUEST['code'])) {
    $code = $_REQUEST['code'];
    $access_token = $connection->getAccessToken($code);
    $connection->setAccessToken($access_token);
    $user = $connection->get("people/~:(id,first-name,last-name,email-address,headline,picture-url,phone-numbers)");
    $_SESSION['user_id'] = $user_id = $user['id']; 
    $_SESSION['first_name'] = $first_name = $user['firstName']; 
    $_SESSION['last_name'] = $last_name = $user['lastName'];   
    $_SESSION['email'] = $email = $user['emailAddress']; 
    $_SESSION['headline'] = $headline = $user['headline']; 
    $_SESSION['pic_url'] = $picture_url = $user['pictureUrl']; 
	$_SESSION['phone_number'] = $phone_number = $user['phoneNumbers']['values']['0']['phoneNumber']; 
    //print_r($user);
	//echo $phone_number;
	header("Location: index.php#registro");
	
	

    
    /*$linkedin_users=mysqli_query($db_connection,"SELECT * FROM linkedin_users WHERE user_id='".$user_id."'");
    if(mysqli_num_rows($linkedin_users) == 0)
    {
      mysqli_query($db_connection,"INSERT into linkedin_users VALUES ('$user_id','$first_name','$last_name','$email','$headline','$picture_url');");
    	echo "INSERT into linkedin_users VALUES ('$user_id','$first_name','$last_name','$email','$headline','$picture_url');";
    }*/

    //header('Location: ./index.php');

}
else{

    if (isset($_REQUEST['error'])) {
        header('Location: ./index.php?error_code=1');
    }
    else{
        $authUrl = $connection->getLoginUrl($scope);
        header("Location: $authUrl");
    }
}

?>