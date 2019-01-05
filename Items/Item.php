<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 05/01/2019
 * Time: 10:44 SA
 */

abstract class Item
{
    protected $Id;
    protected $Name;
    protected $Image;
    protected $Status;
    protected $DateCreate;
    public abstract function toArray();

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id): void
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param mixed $Image
     */
    public function setImage($Image): void
    {
        $this->Image = $Image;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status): void
    {
        $this->Status = $Status;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->DateCreate;
    }

    /**
     * @param mixed $DateCreate
     */
    public function setDateCreate($DateCreate): void
    {
        $this->DateCreate = $DateCreate;
    }

}