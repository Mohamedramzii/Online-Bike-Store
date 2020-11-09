<?php

class database {
    private $host ;
    private $user ;
    private $pass;
    private $db;
    function __construct ($filename) {
        if(is_file($filename))   include  '../include/vars.php' ;
        else throw new Exception("Error ");
        $this->host=$host;
        $this->user=$user;
        $this->pass=$pass;
        $this->db=$db;
        $this->connect();
        
    }
    private function connect () {
        if (!mysql_connect($this->host, $this->user,$this->pass)) throw new Exception("Error not connection to server");
        if (!mysql_select_db ($this->db))  throw new Exception("Error no database select");
        
    }
    function close (){
        mysql_close();
    }
}


?>