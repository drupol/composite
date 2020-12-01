<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Table(
 *     name="TABLE_A",
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
     * @ORM\Column(type="integer", name="APK1")
     */
    public $apk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="APK2")
     */
    public $apk2;
}
