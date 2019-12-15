<?php 
require_once 'DataHandler.php';

class Logic {
    public function __construct() {
        $this->DataHandler = new DataHandler( "localhost:3306", "mysql", "testbase", "testbase", "Admin_123");
    }

    public function __destruct() {
    }

    public function Reads() {

    }
}
?>