<?php

session_start();
$activeEmail = $_SESSION['email'];

$xml = new DOMDocument();
$xml->load("../xml/accounts.xml");

$response = "";
$accounts = $xml->getElementsByTagName("account");

foreach ($accounts as $account) {
  $userEmail = $account->getElementsByTagName("email")[0]->nodeValue;

  if ($userEmail == $activeEmail) {
    $userProfilePic = $account->getElementsByTagName("profilePic")[0]->nodeValue;
    $userContact = $account->getElementsByTagName("contact")[0]->nodeValue;
    $userAddress = $account->getElementsByTagName("address")[0]->nodeValue;
    $userFirstName = $account->getElementsByTagName("firstName")[0]->nodeValue;
    $userLastName = $account->getElementsByTagName("lastName")[0]->nodeValue;

    $response .= "<div class=\"account-container\">
    <div class=\"account-content\">
      <div class=\"content-header\">
        <img src=$userProfilePic class=\"account-img\" alt=\"account-header\" />
        <div class=\"content-wrapper\">
          <h2>$userFirstName $userLastName</h2>
          <p>$userAddress</p>
        </div>
        <div class=\"account-btn\">
          <button class=\"acc-edit\" onclick=\"editDeets()\">Edit Account</button>
          <button class=\"acc-logout\" onclick=\"logout()\">Logout</button>
        </div>
      </div>
    </div>
  </div>
        ";
  }
}
echo $response;
