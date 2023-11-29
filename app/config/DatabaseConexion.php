<?php


class DatabaseConnection
{
    private $hostName;
    private $userName;
    private $password;
    private $dataBase;
    public  $conection;

    public function __construct($hostName, $userName, $password, $dataBase)
    {
        $this->hostName = $hostName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dataBase = $dataBase;
    }

    public function connect()
    {
        try {
            $conection = new mysqli($this->hostName, $this->userName, $this->password, $this->dataBase);
            if ($conection->connect_error) {
                throw new Exception("Conexion Error" . $conection->connect_error);
            }
        } catch (Exception $e) {
            print $e->getMessage();
        }

        return $conection;
    }
}
