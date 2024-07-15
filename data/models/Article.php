<?php 

    class Article{
        private $title;
        private $content;
        protected $author;
        public function __construct($title, $content, $author)
        {
            $this->title = $title;
            $this->content = $content;
            $this->author = $author;
        }

        public function getTitle()
        {
            return $this->title;
        }

        public function getContent()
        {
            return $this->content;
        }

        public function getAuthor()
        {
            return $this->author;
        }

        public function setTitle($title)
        {
            $this->title = $title;
        }

        public function setContent($content)
        {
            $this->content = $content;
        }

        public function setAuthor($author)
        {
            $this->author = $author;
        }

        public function getArticle()
        {
            return [
                'title' => $this->title,
                'content' => $this->content,
                'author' => $this->author
            ];
        }

        public function setArticle($title, $content, $author)
        {
            $this->title = $title;
            $this->content = $content;
            $this->author = $author;
        }

        public function __toString()
        {
            return "Title: $this->title <br> Content: $this->content <br> Author: $this->author";
        }

        public function __destruct()
        {
            echo "The article has been deleted";
        }     

    }

?>