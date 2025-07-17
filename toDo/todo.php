<?php
class todo{
    public $task;
    public $done;


public function __construct($task) {
    $this->task = $task;
    $this->done = false;
}

public function markAsDone(){
    $this->done=true;
}

public function display(){
    $status = $this->done ? "✅" : "❌";
    echo $status . " " . htmlspecialchars($this->task) . "<br>";    
}
}