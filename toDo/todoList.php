<?php
class todoList{
    private $todos=[];

    public function addTodo(Todo $todo){
        $this->todos[]=$todo;
    }

    public function showAll(){
        foreach($this->todos as $todo){
            $todo->display();
        }
    }
}