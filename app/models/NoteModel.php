<?php

require_once __DIR__ . "/../config/DatabaseConexion.php";


class NoteModel
{
    private $title;
    private $description;
    public $dbConection;

    public function __construct()
    {
        $this->dbConection = new DatabaseConnection('localhost', 'root', 'root', 'excercice_notas_mvc');
    }


    public function getTitle()
    {
        return $this->title;
    }

   
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

     
    public function getDescription()
    {
        return $this->description;
    }

    
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function saveNote(){
        $query = "INSERT INTO notes VALUES(NULL, '{$this->getTitle()}', '{$this->getDescription()}', CURDATE())";
        $sql = $this->dbConection->connect()->query($query); 
        return $sql; 

    }

    public function showNotes(){
        $sql = $this->dbConection->connect()->query("SELECT * FROM notes");
        return $sql;
    }
}
