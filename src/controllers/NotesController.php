<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Note;

class NotesController extends Controller {
    public function add() {
        $this->render('add');
    }

    public function addAction() {
        $title = filter_input(INPUT_POST, 'title');
        $text = filter_input(INPUT_POST, 'text');

        if($title && $text) {
         
                Note::insert([
                    'title' => $title,
                    'text' => $text
                ])->execute();
                $this->redirect('/');
        }
        $this->redirect('/note');    
    }
    public function edit($args) {
        $note = Note::select()->find($args['id']);
        $this->render('edit', [
            'note' => $note
        ]);
    }
    public function editAction($args) {
        $title = filter_input(INPUT_POST, 'title');
        $text = filter_input(INPUT_POST, 'text');

        if($title && $text) {
            Note::update()
            ->set('title', $title)
            ->set('text', $text)
            ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
    }
    $this->redirect('/edit/'.$args['id']);
}
    public function del($args) {
        Note::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}