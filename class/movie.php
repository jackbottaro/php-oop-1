<?php

class Movie
{
   public $title;
   public $genre;
   public $director;
   public $plot;
   public $discount = 'full';
   public $price = 0;

   function __construct($title, $genre, $director, $plot)
   {
      $this->title = $title;
      $this->genre = $genre;
      $this->director = $director;
      $this->plot = $plot;
   }

   public function setPrice($discount)
   {
      if ($discount === 'less') {
         $this->price = 10;
      } else {
         $this->price = 15;
      }
   }

   public function getPrice(){
      return $this->price;
   }
}
