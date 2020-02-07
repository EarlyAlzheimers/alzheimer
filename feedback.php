
<?php
$cookie_name = "feedback";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<?php
// The message
$message = "Feedback:\r\n" . $_COOKIE[$cookie_name];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('anay.aggarwal.2007@gmail.com', 'My Subject', $message);
?>




<script>
location="index.html";
</script>
