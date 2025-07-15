<?php
class Post {
    public $title;
    public $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function display() {
        echo "<h2>" . htmlspecialchars($this->title) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($this->content)) . "</p><hr>";
    }

    public function toArray() {
        return ['title' => $this->title, 'content' => $this->content];
    }
}
