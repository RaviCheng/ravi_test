<?php
require_once 'DBSqlScript.php';

define('DB_NAME', 'message');
define('DB_USER', 'message');
define('DB_PASSWORD', 'aaa112233');
define('DB_HOST', 'localhost');
define('DB_TYPE', 'mysql');
class DBAccess extends DB_SqlScript
{
    private $_dbConn;
    var $_queryResource = 0;

    function __construct()
    {
        $this->DBAccess();
    }

    function DBAccess()
    {
        $dbConn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        if (! $dbConn) {
            die ("MySQL Connect Error");
        }
        mysql_query("SET NAMES utf8", $dbConn);
        if (! mysql_select_db(DB_NAME, $dbConn)) {
            die ("MySQL Select DB Error");
        }
        $this->_dbConn = $dbConn;

        return true;
    }

    function DBClose()
    {
        mysql_close($this->_dbConn);

        return true;
    }

    function query($sql)
    {
        $this->_queryResource = null; /*清空*/
        if (! $queryResource = mysql_query($sql, $this->_dbConn)) {
            die (mysql_error());
        }
        $this->_queryResource = $queryResource;

        return $queryResource;
    }

    /*Get array return by MySQL (db_script.php 內部用)*/
    function getSqlArray($r)
    {
        return mysql_fetch_array($r, MYSQL_ASSOC);
    }

    /*外部用*/
    function fetchArray()
    {
        return mysql_fetch_array($this->_queryResource, MYSQL_ASSOC);
    }

    function fetchRow()
    {
        return mysql_fetch_row($this->_queryResource);
    }

    function getNumRows()
    {
        return mysql_num_rows($this->_queryResource);
    }


    /*Get array return by MySQL*/
    function getSqlRow($r)
    {
        return mysql_fetch_row($r);
    }

    /*取得Sql資料數*/
    function getSqlCount($r)
    {
        return mysql_num_rows($r);
    }

    function escape($value)
    {
        return mysql_real_escape_string($value, $this->_dbConn);
    }

    /*Get the cuurent id*/
    function getInsertID()
    {
        return mysql_insert_id($this->_dbConn);
    }
}
