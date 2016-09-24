<?php
class Section {
    public $title;
    public $text;
    public function view()
    {
        echo '<section>';
        echo '<h1>' . $this->title . '</h1>';
        echo '<p>' . $this->text . '</p>';
        echo '</sectio>';
    }
}