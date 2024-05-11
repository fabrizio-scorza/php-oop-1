<?php
require_once __DIR__ . '/genre.php';

// dichiaro la classe Production con le sue variabili i metodi e il costruttore
class Production
{
    // variabili 
    public $title;
    public $lang;
    public $vote;
    public $genre;

    // costruttore
    function __construct(string $_title, string $_lang, int $_vote, Genre $_genre)
    {
        $this->title = $_title;
        $this->lang = $_lang;
        $this->setVote($_vote);
        $this->genre = $_genre;
    }

    // metodi
    public function setVote(int $vote): void
    {
        if (
            is_numeric($vote)
            && $vote >= 0 && $vote <= 10
        ) {
            $this->vote = intval($vote);
        } else {
            var_dump('valore inserito non valido');
        }
    }
}
