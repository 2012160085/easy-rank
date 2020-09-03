<?php
class ConnectionSettings {
    private $hostname = 'rank-db-lkbdname';
    private $username = 'jazz';
    private $password = 'dlrlqja0085!';
    private $db = 'rank';
    protected $connLink;

    // protected 'connect()' method
    protected function connect(){

        // establish connection
        if(!$this->connLink = mysql_connect($this->hostname, $this->username, $this->password)) {
            throw new Exception('Error connecting to MySQL: '.mysql_error());
        }

        // select database
        if(!mysql_select_db($this->db, $this->connLink)) { 
            throw new Exception('Error selecting database: '.mysql_error());
        }
    }
}
