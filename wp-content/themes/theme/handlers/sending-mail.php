<?php

$msg = $_POST;

$to      = ADMIN_EMAIL;
$subject = $msg['subject'];
$headers = "Reply-To: reply-to@inverse.studuio.com\r\n";

if ( !empty( $msg['body'] ) && gettype( $msg['body'] ) == 'array'  ) {
    foreach ( $msg['body'] as $content ) {
        $name  = trim(htmlspecialchars($content['name']));
        $text  = trim(htmlspecialchars($content['val']));

        $body .= "<p>$name: $text</p> <br>";
    }

    echo mail($to, $subject, $body, $headers);
}

else {
    echo json_encode($msg);
}



