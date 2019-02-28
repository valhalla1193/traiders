<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$company=$_POST['company'];
$email=$_POST['youremail'];
$phone=$_POST['yourphone'];
$country=$_POST['country'];
$site=$_POST['web-site'];
$message=$_POST['yourmessage'];
$firstname = htmlspecialchars($firstname);
$lastname = htmlspecialchars($lastname);
$company = htmlspecialchars($company);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$country = htmlspecialchars($country);
$site = htmlspecialchars($site);
$message = htmlspecialchars($message);
$firstname = trim($firstname);
$lastname =  trim($lastname);
$company =  trim($company);
$email = trim($email);
$phone =  trim($phone);
$country = trim($country);
$site =  trim($site);
$message = trim($message);
if (mail("kirillpyshnenko93@gmail.com", "Заявка с сайта", ". name:".$firstname. ". lastname:".$lastname. ". company:".$company. ". phone:".$phone. ". country:".$country. ". site:".$site.". E-mail: ".$email." Message: ".$message ,"From: admin@zzshop.zzz.com.ua \r\n"))
 {      require('index.html'); 
} else { 
    echo "при отправке сообщения возникли ошибки";
}
?>