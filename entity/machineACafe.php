<?php

class MachineACafe 
{
    private $marque;
    private $cafe = 0; 
    private $enFonction;

    public function __construct(string $marque)
    {
        $this->setMarque($marque);
    }


    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of cafe
     */ 
    public function getCafe()
    {
        return $this->cafe;
    }

    /**
     * Set the value of cafe
     *
     * @return  self
     */ 
    public function setCafe($cafe)
    {
        $this->cafe = $cafe;

        return $this;
    }

    /**
     * Get the value of enFonction
     */ 
    public function getEnFonction()
    {
        return $this->enFonction;
    }

    /**
     * Set the value of enFonction
     *
     * @return  self
     */ 
    public function setEnFonction($enFonction)
    {
        $this->enFonction = $enFonction;

        return $this;
    }

    public function allumage(bool $switch)
    {
        $this->setEnFonction($switch);
        if($switch){
            echo $this->getMarque() . " est en fonction <br>";
        }
        else{
            echo $this->getMarque() . " est éteinte <br> ";
        }
    }

    public function faireDuCafe()
    {
        if($this->getEnFonction()){
            if($this->getCafe()){
                echo "le café est pret <br>";    
      
            }else{
                echo "il n'y a plus de dosette dans la machine " . $this->getMarque() . "<br>";
            }
        }else{
            echo " la machine " . $this->getMarque() . " est éteinte <br>";
        }
        
        $this->setCafe($this->getCafe() - 1);

    }

    public function mettreUneDosette()
    {
        $this->setCafe($this->getCafe() + 1);

        echo " je met une dosette, il y a " . $this->getCafe() . " dosettes dans la machine " . $this->getMarque() . " <br>";
    }
}


