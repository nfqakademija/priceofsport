<?php

namespace Nfq\ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity(repositoryClass="Nfq\ImportBundle\Repository\ShopRepository")
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
     * @ORM\Column(name="shop_url", type="string", length=255)
     */
    private $shopUrl;


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
     * Set shopUrl
     *
     * @param string $shopUrl
     *
     * @return Shop
     */
    public function setShopUrl($shopUrl)
    {
        $this->shopUrl = $shopUrl;

        return $this;
    }

    /**
     * Get shopUrl
     *
     * @return string
     */
    public function getShopUrl()
    {
        return $this->shopUrl;
    }
}
