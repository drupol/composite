<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableBRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Table(
 *     name="TABLE_B",
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
     * @ORM\Column(type="integer", name="BPK1")
     */
    public $bpk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="BPK2")
     */
    public $bpk2;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="AFK1")
     */
    public $afk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="AFK2")
     */
    public $afk2;
}
