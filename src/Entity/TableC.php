<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableCRepository;
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
 *     name="TEST_TABLE_C",
 *     indexes={
 *         @ORM\Index(
 *             columns={
 *                 "CPK1",
 *                 "AFK1",
 *                 "AFK2",
 *                 "BFK1",
 *                 "BFK2"
 *             }
 *         )
 *     }
 * )
 * @ORM\Entity(repositoryClass=TableCRepository::class)
 */
class TableC
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="CPK1")
     */
    public $cpk1;

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
     * @ORM\Id
     * @ORM\Column(type="string", name="BFK1")
     */
    public $bfk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="BFK2")
     */
    public $bfk2;

    /**
     * @ORM\ManyToOne(targetEntity=TableB::class, inversedBy="tableC")
     * @ORM\JoinColumns(
     *     @ORM\JoinColumn(name="BFK1", referencedColumnName="BPK1"),
     *     @ORM\JoinColumn(name="BFK2", referencedColumnName="BPK2"),
     *     @ORM\JoinColumn(name="AFK1", referencedColumnName="AFK1"),
     *     @ORM\JoinColumn(name="AFK2", referencedColumnName="AFK2"),
     * )
     */
    private $tableB;

    public function setTableB(TableB $tableB): self
    {
      $this->tableB = $tableB;
      $this->afk1 = $tableB->afk1;
      $this->afk2 = $tableB->afk2;
      $this->bfk1 = $tableB->bpk1;
      $this->bfk2 = $tableB->bpk2;

      return $this;
    }

    public function getTableB(): TableB
    {
      return $this->tableB;
    }
}
