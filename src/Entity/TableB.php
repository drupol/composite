<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableBRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Table(
 *     name="TABLE_B"
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

    public function setTableA(TableA $tableA)
    {
      $this->afk1 = $tableA->apk1;
      $this->afk2 = $tableA->apk2;
      $this->tableA = $tableA;

      return $this;
    }
}