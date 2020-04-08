
<?php
$cookie_name = "MoCA";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
$cookie_name2 = "chef";
if(!isset($_COOKIE[$cookie_name2])) {
    echo "Cookie named '" . $cookie_name2 . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name2 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name2];
}
?>

<?php
// The message
$message = "MoCA score:\r\n" . $_COOKIE[$cookie_name] ."Chef score:\r\n" . $_COOKIE[$cookie_name2];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('anay.aggarwal.2007@gmail.com', 'My Subject', $message);
?>




<script>
location="moca.html";
</script>
