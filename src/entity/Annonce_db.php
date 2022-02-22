<?php
include __DIR__.'/../../vendor/SimpleOrm.class.php';

class Annonce_db extends SimpleOrm { 
    public $id;
    public $titre;
    public $message;
}