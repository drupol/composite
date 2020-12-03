<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableBRepository;
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
 *     name="TEST_TABLE_B",
 *     indexes={
 *         @ORM\Index(
 *             columns={
 *                 "BPK1",
 *                 "BPK2",
 *                 "AFK1",
 *                 "AFK2"
 *             }
 *         )
 *     }
 * )
 * @ORM\Entity(repositoryClass=TableBRepository::class)
 */
class TableB
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="BPK1")
     */
    public $bpk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="BPK2")
     */
    public $bpk2;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="AFK1")
     */
    public $afk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="AFK2")
     */
    public $afk2;

    /**
     * @ORM\ManyToOne(targetEntity=TableA::class, inversedBy="tableB")
     * @ORM\JoinColumns(
     *     @ORM\JoinColumn(name="AFK1", referencedColumnName="APK1"),
     *     @ORM\JoinColumn(name="AFK2", referencedColumnName="APK2")
     * )
     */
    private $tableA;

    public function setTableA(TableA $tableA): self
    {
      $this->afk1 = $tableA->apk1;
      $this->afk2 = $tableA->apk2;
      $this->tableA = $tableA;

      return $this;
    }

    public function getTableA(): TableA
    {
      return $this->tableA;
    }

    /**
     * @ORM\OneToMany(targetEntity=TableC::class, mappedBy="tableB")
     */
    private $tableC;

    public function __construct() {
      $this->tableC = new ArrayCollection();
    }

    public function addTableC(TableC $tableC): self
    {
      if (!$this->tableC->contains($tableC)) {
        $this->tableC[] = $tableC;
        $tableC->setTableB($this);
      }

      return $this;
    }

    /**
     * @return Collection|TableC[]
     */
    public function getTableC(): Collection
    {
      return $this->tableC;
    }

    public function removeTableC(TableC $tableC): self
    {
      if ($this->tableC->removeElement($tableC)) {
        if ($tableC->getTableB() === $this) {
          //$tableC->setTableB(null);
        }
      }

      return $this;
    }
}