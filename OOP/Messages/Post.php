<?php

class Post {
  protected $postBody;

  public function __construct(PostBody $postBody) {
    $this->postBody = $postBody;
  }

  // This function sends a 'message' to another class PostBody
  public function readPost() {
    $this->postBody->getContent();
  }
}

class PostBody {
  protected $content = '';

  public function __construct($content = '') {
    $this->content = $content;
  }

  public function getContent() {
    var_dump($this->content);
  }
}

$blogPostOne = new Post(new PostBody('Hello, world!'));
$blogPostOne->readPost();
