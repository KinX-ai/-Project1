<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 05/01/2019
 * Time: 6:58 CH
 */

class Product extends Item
{
    private $categoryId;
    private $Price;
    private $Description;
    private $metaKeyWord;
    private $metaDescription;
    public function __construct($data = array()){
        if(isset($data['proid'])){
            $this->Id = $data['proid'];
        }
        $this->Name = $data['proname'];
        $this->Image = $data['image'];
        $this->Status=$data['status'];
        $this->DateCreate = $data['datecreate'];
        $this->categoryId = $data['catid'];
        $this->Price = $data['proprice'];
        $this->Description = $data['description'];
        $this->metaKeyWord = $data['metakeyword'];
        $this->metaDescription = $data['metadescription'];
    }
    public function toArray()
    {
        // TODO: Implement toArray() method.
        $productArray = array();
        if(isset($this->Id)){
            $productArray['proid'] = $this->Id;
        }
        $productArray['proname'] = $this->Name;
        $productArray['proprice'] = $this->Price;
        $productArray['description'] = $this->Description;
        $productArray['metakeyword'] = $this->metaKeyWord;
        $productArray['metadescription'] = $this->metaDescription;
        $productArray['image'] = $this->Image;
        $productArray['status'] = $this->Status;
        $productArray['datecreate'] = $this->DateCreate;
        $productArray['catid'] = $this->categoryId;
        return $productArray;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     */
    public function setPrice($Price): void
    {
        $this->Price = $Price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description): void
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getMetaKeyWord()
    {
        return $this->metaKeyWord;
    }

    /**
     * @param mixed $metaKeyWord
     */
    public function setMetaKeyWord($metaKeyWord): void
    {
        $this->metaKeyWord = $metaKeyWord;
    }

    /**
     * @return mixed
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param mixed $metaDescription
     */
    public function setMetaDescription($metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

}