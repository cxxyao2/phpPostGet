<?php

 class Task {
    public $description;

    protected $completed = false;

    protected $alias = 'alias';

   

    public function isCompleted()
    {
        return $this->completed;
    }

    public function alias()
    {
        return 'alias';
    }

}