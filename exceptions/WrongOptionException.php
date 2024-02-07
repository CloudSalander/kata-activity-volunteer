<?php

class WrongOptionException extends Exception {
    public function __construct($message = "Wrong option", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

?>