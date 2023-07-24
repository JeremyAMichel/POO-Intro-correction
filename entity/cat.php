<?php


class Cat
{
    private int $id;
    private string $name;
    private string $race;
    private int $age;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }


    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Get the value of race
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
   

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }


    public function hydrate(array $datas)
    {
      if(isset($datas["id"])) {
        $this->setId($datas["id"]);
      }

      if(isset($datas["name"])) {
        $this->setName($datas["name"]);
      }

      if(isset($datas["race"])) {
        $this->setRace($datas["race"]);
      }

      if(isset($datas["age"])) {
        $this->setAge($datas["age"]);
      }
    }
}
