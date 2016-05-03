<?php

namespace ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ImportBundle\Entity\Product;

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
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;


    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="product_page_link_id")
     */
//    private $products;
//
//    public function __construct()
//    {
//        $this->products = new ArrayCollection();
//    }



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

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return ProductPageLink
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

//    /**
//     * Add product
//     *
//     * @param Product $product
//     *
//     * @return ProductPageLink
//     */
//    public function addProduct(Product $product)
//    {
//        $this->products[] = $product;
//
//        return $this;
//    }
//
//    /**
//     * Remove product
//     *
//     * @param Product $product
//     */
//    public function removeProduct(Product $product)
//    {
//        $this->products->removeElement($product);
//    }
//
//    /**
//     * Get products
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getProducts()
//    {
//        return $this->products;
//    }
}
