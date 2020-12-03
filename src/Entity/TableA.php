<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableARepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     itemOperations={
 *         "get": {
 *             "requirements": {"id": ".+"}
 *         }
 *     }
 * )
 * @ORM\Table(
 *     name="TEST_TABLE_A",
 *     indexes={
 *         @ORM\Index(
 *             columns={
 *                 "APK1",
 *                 "APK2"
 *             }
 *         )
 *     }
 * )
 * @ORM\Entity(repositoryClass=TableARepository::class)
 */
class TableA
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="APK1")
     */
    public $apk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="APK2")
     */
    public $apk2;

    /**
     * @ORM\OneToMany(targetEntity=TableB::class, mappedBy="tableA")
     */
    private $tableB;

    public function __construct() {
      $this->tableB = new ArrayCollection();
    }

    public function addTableB(TableB $tableB): self
    {
      if (!$this->tableB->contains($tableB)) {
        $this->tableB[] = $tableB;
        $tableB->setTableA($this);
      }

      return $this;
    }

    /**
     * @return Collection|TableB[]
     */
    public function getTableB(): Collection
    {
      return $this->tableB;
    }

    public function removeTableB(TableB $tableB): self
    {
      if ($this->tableB->removeElement($tableB)) {
        if ($tableB->getTableA() === $this) {
          //$tableB->setTableA(null);
        }
      }

      return $this;
    }
}
