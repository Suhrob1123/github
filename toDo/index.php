<?php
require_once "todo.php";
require_once "todoList.php";

$todolist=new todoList();

$todo1=new todo("kitob oqish");
$todo2=new todo("kod yozish");
$todo2->markAsDone();

$todolist->addTodo($todo1);
$todolist->addTodo($todo2);

$todolist->showAll();