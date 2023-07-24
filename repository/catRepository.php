<?php

class CatRepository
{
    private PDO $db; // Instance de PDO

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function createCat(Cat $cat)
    {
        $request = $this->db->prepare('INSERT INTO cat (name, race, age) VALUES(:name, :race, :age)');
        $request->execute([
            ':name' => $cat->getName(),
            ':race' => $cat->getRace(),
            ':age' => $cat->getAge(),
        ]);
    }

    public function findAllCats(): array
    {
        $query = 'SELECT * FROM cat';
        $result = $this->db->query($query);
        $catDatas = $result->fetchAll();
        $cats = [];

        foreach ($catDatas as $catData) {
            $cats[] = new Cat($catData);
        }

        return $cats;
    }

    /**
     * Get the value of db
     */
    public function getDb(): PDO
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }
}
