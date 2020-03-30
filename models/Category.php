<?php

class Category{
    private $id;
    private $name;

    public function __construct(
     $name = ''


     ) {
        $this->name = $name;

     }


        public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): Category
    {
        $this->name = $name;

        return $this;
    }
}