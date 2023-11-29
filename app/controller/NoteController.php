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
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $note->setId($id);
                    if($note->updateNote()){
                        $note = $note->updateNote();
                        require_once __DIR__ . "/../views/home/home.php";
                    }else{
                         throw new Exception("Error: update failed");
                    }
                }else{
                    $save = $note->saveNote();
                    require_once __DIR__ . "/../views/home/home.php";
                }
            }else{
                throw new Exception("Error: save failed");
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

    public function deleteNote(){
        try{
            if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $note = new NoteModel;
            $note->setId($id);
            $note->deletNote();
            require_once __DIR__."/../views/notes/listNotes.php";
            }else{
                throw new Exception("Error: delete failed");
            }
        }catch(Exception $e){
           $e->getMessage();
        }
    }

    public function updateNotes(){
        try{
            if($_GET['id']){
                $id = $_GET['id'];
                $note = new NoteModel;
                $note->setId($id);
                $note = $note->getOne();
                require_once __DIR__."/../views/notes/makeNote.php";
            }else{
                throw new Exception("Error: update failed");
            }

        }catch(Exception $e){
            print $e->getMessage();
        }
    }
}
