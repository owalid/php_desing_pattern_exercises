<?php
  class Post
  {
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content)
    {
      // Your code here
    }

    public static function all()
    {
    //  Your code here
    }

    public static function create($author, $content)
    {
        //  Your code here

    }

    public static function delete($id)
    {
          //  Your code here

    }

    public static function find($id)
    {
        //  Your code here
    }
  }
?>