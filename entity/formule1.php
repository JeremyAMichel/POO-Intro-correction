<?php
class Formule1
{
   private $speed = 0;

   /**
    * Get the value of speed
    */ 
   public function getSpeed()
   {
      return $this->speed;
   }

   /**
    * Set the value of speed
    *
    * @return  self
    */ 
   public function setSpeed($speed)
   {
      $this->speed = $speed;

      return $this;
   }

   public function shiftGear($vitesse)
   {
      $this->setSpeed($this->getSpeed() + $vitesse);
   }

   public function drive()
   {
      echo "Vroum vroum à " . $this->speed . " km/h <br>";
   }

}