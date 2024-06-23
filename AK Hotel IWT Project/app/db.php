<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

class DB
{
    protected $_link;
    protected $_result;
    protected $_numRows;
    private $_host = "localhost";
  
    private $_username = "root";
    private $_password = "";
    private $_database = "ak_hotel";
 
    public function __construct()
    {
        $this->_link = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        if (mysqli_connect_errno()) {
            echo "Connection Failed: " . mysqli_connect_errno();
            exit();
        }
    }

    public function selectQuery($sql)
    {
        $this->_result = $this->_link->query($sql) or die($this->_link->error);
        return $this->_result;
    }

    // Sends the query to the connection

    public function readQuery($sql)
    {
        if (!$this->_link->query($sql)) {
            return $this->_link->error;
        } else {
            return true;
        }
    }

    public function readLastID($sql)
    {
        if (!$this->_link->query($sql)) {
            return $this->_link->error;
        } else {
            return $this->_link->insert_id;;
        }
    }

    // Return the number of rows
    public function NumRows()
    {
        return $this->_numRows;
    }

    // Fetchs the rows and return them
    public function Rows()
    {
        $rows = array();

        for ($x = 0; $x < $this->NumRows(); $x++) {
            $rows[] = mysqli_fetch_assoc($this->_result);
        }
        return $rows;
    }

    // Used by other classes to get the connection
    public function GetLink()
    {
        return $this->_link;
    }

    // Securing input data
    public function SecureInput($value)
    {
        return mysqli_real_escape_string($this->_link, $value);
    }

    public function close_connection()
    {
        if (isset($this->_link)) {
            $this->_link->close();
            unset($this->_link);
        }
    }
      
    
}


