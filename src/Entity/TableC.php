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
 *     name="TABLE_C",
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
     * @ORM\Column(type="string", name="FIELD1")
     */
    public $field1;

    /**
     * @ORM\Column(type="string", name="FIELD2")
     */
    public $field2;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=TableB::class, inversedBy="tableC")
     * @ORM\JoinColumns(
     *     @ORM\JoinColumn(name="BFK1", referencedColumnName="BPK1"),
     *     @ORM\JoinColumn(name="BFK2", referencedColumnName="BPK2"),
     *     @ORM\JoinColumn(name="AFK1", referencedColumnName="AFK1"),
     *     @ORM\JoinColumn(name="AFK2", referencedColumnName="AFK2"),
     * )
     */
    public $tableB;
}
