<?php
$to  = "nissan-sumy@ukr.net" ;

$subject = "Test";

$message = ' 
<html> 
    <head> 
        <title>Birthday Reminders for August</title> 
    </head> 
    <body> 
        <p>Here are the birthdays upcoming in August!</p> 
    </body> 
</html>';

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Birthday Reminder <info@nissan-sumy.com>\r\n";
try {
      mail($to, $subject, $message, $headers);
} catch (Exception $e) {
    echo 'Поймано исключение: ',  $e->getMessage(), "\n";

}
?>