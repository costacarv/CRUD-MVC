<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Note;

class HomeController extends Controller {

    public function index() {
        $notes = Note::select()->execute();

        $this->render('home', [
            'notes' => $notes
        ]);
    }

}