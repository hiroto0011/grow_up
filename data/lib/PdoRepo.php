<?php

abstract class PdoRepo
{
    private static $_tableName;
    private static $config = array();
    private static $fields = array();
    private static $connection;
    private static $_primary_key;

    public function __construct()
    {
        if (self::$connection === null) {
            PdoRepo::connect();
        }
        self::$_tableName = $this->tableName;
        $this->fields = $this->getFields();
        $sql = 'SHOW KEYS FROM ' . $this->tableName . ' WHERE Key_name = \'PRIMARY\'';
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->_primary_key = $record['Column_name'];
    }

    public static function setConfig($config)
    {
        self::$config = $config;
    }

    private function getFields()
    {
        $sql = 'DESCRIBE ' . $this->tableName;
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function connect()
    {
        $username = self::$config['user'];
        $password = self::$config['password'];
        $host = self::$config['host'];
        $db = self::$config['name'];
        //self::$connection = new PDO("mysql:dbname=$db;host=$host;charset=utf8", $username, $password);
        self::$connection = new PDO("mysql:host=mysql27.db.sakura.ne.jp;dbname=sucseed2;charset=utf8;", 'sucseed2', 't9931820');
    }

    public static function isExists($field, $value)
    {
        $sql = 'SELECT 1 FROM ' . self::$_tableName . ' WHERE ' . $field . ' = ? LIMIT 1';
        $stmt = self::$connection->prepare($sql);
        $stmt->execute(array($value));

        $data = $stmt->fetch();
        return !empty($data);
    }

    protected function query($sql, $args)
    {
        $stmt = self::$connection->prepare($sql);
        $stmt->execute($args);
        // echo $stmt->debugDumpParams();
        $errorInfo = $stmt->errorInfo();
        if (!empty($errorInfo[2]))
            throw new Exception('Error: ' . $errorInfo[2], 500);
        return $stmt;
    }

    public function input(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function save()
    {
        $fields = '';
        $values = '';
        $args = array();
        foreach ($this->fields as $field) {
            if (!isset($this->{$field})) continue;
            $fields .= $field . ', ';
            $values .= '?, ';
            $args[] = $this->{$field};
        }
        $fields = trim($fields, ', ');
        $values = trim($values, ', ');
        $sql = 'INSERT INTO ' . $this->tableName . '(' . $fields . ') VALUES(' . $values . ')';

        return $this->query($sql, $args);
    }

    public function update()
    {
        $fields = '';
        $args = array();
        foreach ($this->fields as $field) {
            if (!isset($this->{$field})) continue;
            $fields .= $field . '= ?, ';
            $args[] = $this->{$field};
        }
        $args[] = $this->{$this->_primary_key};
        $fields = trim($fields, ', ');
        $condition = $this->_primary_key . ' = ?';
        $sql = 'UPDATE ' . $this->tableName . ' SET ' . $fields . ' WHERE ' . $condition;

        return $this->query($sql, $args);
    }

    public function delete()
    {
        $fields = '';
        $args = array();
        $args[] = $this->{$this->_primary_key};
        $fields = trim($fields, ', ');
        $condition = $this->_primary_key . ' = ?';
        $sql = 'DELETE FROM ' . $this->tableName . ' WHERE ' . $condition;

        return $this->query($sql, $args);
    }

    public function find($field, $value)
    {
        $sql = 'SELECT * FROM ' . $this->tableName . ' WHERE ' . $field . ' = ?';
        $args = array($value);

        $stmt = $this->query($sql, $args);
        if ($stmt) {
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($record) {
                foreach ($record as $field => $value) {
                    $this->{$field} = $value;
                }
                return $this;
            }
        }
    }
}
