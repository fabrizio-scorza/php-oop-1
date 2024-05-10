<?php
require_once __DIR__ . '/models/production.php';
require_once __DIR__ . '/genre.php';

class Serie extends Production
{
    public $number_of_season;
    function __construct(string $_title, string $_lang, int $_vote, Genre $_genre, $_number_of_season)
    {
        parent::__construct($_title, $_lang, $_vote, $_genre);
        $this->number_of_season = $_number_of_season;
    }
}
