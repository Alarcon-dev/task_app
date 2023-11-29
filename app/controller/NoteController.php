<?php

class NoteController
{
    public function index()
    {
        require_once __DIR__ . "/../views/notes/makeNote.php";
    }

    public function saveNote(){

        $title = isset($_POST['title']) ? $_POST['title'] : "";
        $description = isset($_POST['description']) ? $_POST['description'] : "";

        try {
            if(!empty($title) && !empty($description)){
                $note = new NoteModel;
                $note->setTitle($title);
                $note->setDescription($description);
                $save = $note->saveNote();
                require_once __DIR__."/../views/home/home.php";

            }else{
                throw new Exception("Error: Los datos no se han guardado");
            }
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function noteList(){
        $note = new NoteModel;
        $notes = $note->showNotes();

        require_once __DIR__ . "/../views/notes/listNotes.php";

    }
}
