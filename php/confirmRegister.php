<?php
$passedFN = $_POST['newFN'];
$passedLN = $_POST['newLN'];
$passedEmail = $_POST['newEmail'];
$passedContact = $_POST['newContact'];
$passedPass = $_POST['newPass'];
$response = "";

$xml = new DOMDocument();
$xml->load("../xml/accounts.xml");

if (strlen($passedPass) < 8 || strlen($passedPass) > 20) {
  $response = "Password must be between 8 and 20 characters long.";
} else {
  $response = "valid";
  $status = "Offline";
  $defaultPic = "img/defaultPicture.png";
  $passedAddress = "No Adress Disclosed";


  $newUser = $xml->createElement("account");
  $newUserEmail = $xml->createElement("email", $passedEmail);
  $newUserPassword = $xml->createElement("password", $passedPass);
  $newFirstName = $xml->createElement("firstName", $passedFN);
  $newLastName = $xml->createElement("lastName", $passedLN);
  $newUserContact = $xml->createElement("contact", $passedContact);
  $newUserAddress = $xml->createElement("address", $passedAddress);
  $newProfilePic = $xml->createElement("profilePic", $defaultPic);
  $newStatus = $xml->createElement("status", $status);

  $newUser->appendChild($newUserEmail);
  $newUser->appendChild($newUserPassword);
  $newUser->appendChild($newFirstName);
  $newUser->appendChild($newLastName);
  $newUser->appendChild($newUserContact);
  $newUser->appendChild($newUserAddress);
  $newUser->appendChild($newProfilePic);
  $newUser->appendChild($newStatus);

  $xml->getElementsByTagName("accounts")->item(0)->appendChild($newUser);
  $xml->save("../xml/accounts.xml");
}
echo $response;
