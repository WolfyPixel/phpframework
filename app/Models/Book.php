<?php


namespace App\Models;


use Doctrine\ORM\Mapping as ORM;
use Framework\ORM\Model;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 */

class Book extends Model{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;


    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }
}