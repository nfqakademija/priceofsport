<?php

namespace ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ImportBundle\Entity\ProductPageLink;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="ImportBundle\Repository\ProductRepository")
 */
class Product
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
    private $shop_id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="ProductPageLink", inversedBy="products")
     * @ORM\JoinColumn(name="product_page_link_id", referencedColumnName="id")
     */
    private $product_page_link_id;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=10)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=350)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="string")
     */
    private $dateAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=350)
     */
    private $token;

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
     * Set categoryId
     *
     * @param integer $shopId
     *
     * @return Product
     */
    public function setShopId($shopId)
    {
        $this->shop_id = $shopId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->shop_id;
    }
    /**
     * Set title
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateAdded
     *
     * @return Product
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set productPageLinkId
     *
     * @param ProductPageLink $productPageLinkId
     *
     * @return Product
     */
    public function setProductPageLinkId(ProductPageLink $productPageLinkId = null)
    {
        $this->product_page_link_id = $productPageLinkId;

        return $this;
    }

    /**
     * Get productPageLinkId
     *
     * @return ProductPageLink
     */
    public function getProductPageLinkId()
    {
        return $this->product_page_link_id;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Product
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
