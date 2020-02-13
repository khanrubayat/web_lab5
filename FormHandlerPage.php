

<?php 
class userForm{
 private $name;
 private $email;
 private $gender;
 function setName($name)
 {

$this->name=$name;


 }

 function getName()
 {

return $this->name;

 }

function setEmail($email)
 {

$this->email=$email;


 }

 function getEmail()
 {

return $this->email;

 }
 function setGender($gender)
 {

$this->gender=$gender;


 }

 function getGender()
 {

return $this->gender;

 }




}

//include 'user.php';

$object1=new userForm();

$object1->setName($_POST["name"]);
$object1->setEmail($_POST["email"]);
$object1->setGender($_POST["gender"]);

$show1=$object1->getName()." ".$object1->getEmail()." ".$object1->getGender()."\n";

$myfile = fopen("webdictionary.txt", "w") or die("Unable to open file!");
//echo fwrite($myfile,filesize("webdictionary.txt"));
fwrite($myfile,$show1);
echo "DONE!!!!!";


$dom=new DOmDocument()


 ?>