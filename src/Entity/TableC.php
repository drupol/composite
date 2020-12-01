<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableCRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
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
     * @ORM\Column(type="integer", name="CPK1")
     */
    public $cpk1;

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

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="BFK1")
     */
    public $bfk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="BFK2")
     */
    public $bfk2;
}
