<?php
require_once __DIR__ . '/production.php';
require_once __DIR__ . '/genre.php';

class Film extends Production
{
    public $profits;
    public $time;
    function __construct(string $_title, string $_lang, int $_vote, Genre $_genre, $_profits, $_time)
    {
        parent::__construct($_title, $_lang, $_vote, $_genre);
        $this->profits = $_profits;
        $this->time = $_time;
    }
}
