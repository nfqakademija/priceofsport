<?php

namespace Proxies\__CG__\ImportBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \ImportBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'shop_id', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'title', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'product_page_link_id', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'image', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'dateAdded', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'token', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'currencyId'];
        }

        return ['__isInitialized__', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'shop_id', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'title', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'product_page_link_id', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'image', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'dateAdded', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'token', '' . "\0" . 'ImportBundle\\Entity\\Product' . "\0" . 'currencyId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setShopId($shopId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShopId', [$shopId]);

        return parent::setShopId($shopId);
    }

    /**
     * {@inheritDoc}
     */
    public function getShopId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShopId', []);

        return parent::getShopId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductPageLinkId(\ImportBundle\Entity\ProductPageLink $productPageLinkId = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductPageLinkId', [$productPageLinkId]);

        return parent::setProductPageLinkId($productPageLinkId);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductPageLinkId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductPageLinkId', []);

        return parent::getProductPageLinkId();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyId($currencyId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyId', [$currencyId]);

        return parent::setCurrencyId($currencyId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyId', []);

        return parent::getCurrencyId();
    }

}