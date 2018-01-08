<!DOCTYPE html>
<head>
<?php include_once("analyticstracking_1.php") ?>
<script>
</script>
<title>TICKATE</title>
<link href='https://fonts.googleapis.com/css?family=Ranga' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="ticket.css">
</head>
<?php session_start();

// if email_counter is not set, set to zero
if(!isset($_SESSION['email_counter'])) {
    $_SESSION['email_counter'] = 0;
}
// if chat_counter is not set, set to zero
if(!isset($_SESSION['chat_counter'])) {
    $_SESSION['chat_counter'] = 0;
}
// if email_button is pressed, increment counter
if(isset($_POST['email_button'])) {
    ++$_SESSION['email_counter'];
}
// if chat_button is pressed, increment counter
if(isset($_POST['chat_button'])) {
    ++$_SESSION['chat_counter'];
}
// reset counters
if(isset($_POST['reset'])) {
    $_SESSION['email_counter'] = 0;
}
if(isset($_POST['reset'])) {
    $_SESSION['chat_counter'] = 0;
}
$chats = $_SESSION['chat_counter'];

$emails = $_SESSION['email_counter'];

$tickets = $_SESSION['chat_counter'] + $_SESSION['email_counter'];
?>
<body>

<table>
<tr>
<td>
<!-- email button -->
<form method="POST">
    <input type="hidden" name="email_counter" value="" />
    <input id="email" type="submit" name="email_button" value="<?php echo $emails?>"/>
    </form>
</td>
<td>
<!-- Chat button -->
<form method="POST">
    <input type="hidden" name="chat_counter" value="" />
 <input id="chat" type="submit" name="chat_button" value="<?php echo $chats?>" /> </form>
</td>
</tr>
<tr>
<td colspan="2">
<div id="total" align="center">Total: <?php echo "$tickets"; ?></div>
</td>
</tr>
<tr>
<form method="POST">

<td colspan="2">
  <div align="center">  <input id="reset" type="submit" name="reset" value="Mark it Zero" /></div>
    </form>
</td>
</tr>
    <br/>

</form>
</table>
<?php include("analyticstracking_1.php"); ?>
</body>
</html>
