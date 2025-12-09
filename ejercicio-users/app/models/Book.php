<?php
class Book
{
    function __construct(
        private string $isbn,
        private string $title,
        private string $author,
        private int $pages,
        private $type = [],
    ) {
    }

    public function __toString(): string
    {
        return $this->isbn . " | " .
            $this->title . " | " .
            $this->author . " | " .
            $this->pages . " | " .
            implode(", ", $this->type);
    }
}
