<?php

namespace ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPageLink
 *
 * @ORM\Table(name="product_page_link")
 * @ORM\Entity(repositoryClass="ImportBundle\Repository\ProductPageLinkRepository")
 */
class ProductPageLink
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
     * @var int
     *
     * @ORM\Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var string
     *
     * @ORM\Column(name="page_link", type="string", length=255)
     */
    private $pageLink;


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
     * Set shopId
     *
     * @param integer $shopId
     *
     * @return ProductPageLink
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * Get shopId
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * Set pageLink
     *
     * @param string $pageLink
     *
     * @return ProductPageLink
     */
    public function setPageLink($pageLink)
    {
        $this->pageLink = $pageLink;

        return $this;
    }

    /**
     * Get pageLink
     *
     * @return string
     */
    public function getPageLink()
    {
        return $this->pageLink;
    }
}
