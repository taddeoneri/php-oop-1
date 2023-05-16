<?php 

class Movie{
    public $id;
    public $title;
    public $vote;
    public $year;
    public $direction;
    public $type;

    public function __construct($title, $vote, $year, $direction, $type){
        $this->title = $title;
        $this->vote = $vote;
        $this->year = $year;
        $this->direction = $direction;
        $this->type = $type;
    }

}