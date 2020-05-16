<?php require '../includes/header.php'; ?>

<?php

$client = new Services_Twilio($config['account_sid'], $config['auth_token']);
$_SESSION['code'] = $code = uniqid();

$con->query("INSERT INTO verifications(code) VALUES('$code')");

$client->account->messages->sendMessage($config['phone_number'], '+6281286356605', $code);
//$client->account->sms_message->create($config['phone_number'], '+6281286356605', $code);

echo "<h3 class='text-center bg-success'>Your Code has been sent</h3>";

?>

<?php require '../includes/footer.php'; ?>