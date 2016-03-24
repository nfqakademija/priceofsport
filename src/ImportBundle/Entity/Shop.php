<?php

namespace ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity(repositoryClass="ImportBundle\Repository\ShopRepository")
 */
class Shop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="shop_link", type="string", length=255)
     */
    private $shopLink;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shopLink
     *
     * @param string $shopLink
     *
     * @return Shop
     */
    public function setShopLink($shopLink)
    {
        $this->shopLink = $shopLink;

        return $this;
    }

    /**
     * Get shopLink
     *
     * @return string
     */
    public function getShopLink()
    {
        return $this->shopLink;
    }
}

