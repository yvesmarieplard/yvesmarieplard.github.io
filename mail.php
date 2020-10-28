<?php
    $retour = mail('ymplard@gmail.com', 'Sent from contact section of personal portfolio', $_POST['message'], 'From :'. $_POST['email']);
    if ($retour) {
        echo '<p>Your message was sent.</p>';
    }
?>
