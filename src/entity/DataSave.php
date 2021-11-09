<?php

namespace Amaur\App\entity;

class DataSave {
    private ?int $id;
    private ?string $weight;
    private ?string $size;
    private ?string $size_neck;
    private ?string $size_stomach;
    private ?string $size_haunch;
    /**
     * @param int|null $id
     * @param string|null $weight
     * @param string|null $size
     * @param string|null $size_neck
     * @param string|null $size_stomach
     * @param string|null $size_haunch
     */
    public function __construct(int $id = null, string $weight = null, string $size = null, string $size_neck = null, string $size_stomach = null,string $size_haunch = null)
    {
        $this->id =$id;
        $this->weight = $weight;
        $this->size = $size;
        $this->size_neck = $size_neck;
        $this->size_stomach = $size_stomach;
        $this->size_haunch = $size_haunch;
    }

    /**
     * Return the id of DataSave
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the id of DataSave
     * @param int|null $id
     * @return DataSave
     */
    public function setId(?int $id): DataSave
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Return the weight of DataSave
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Set the weight of DataSave
     * @param string|null $weight
     * @return DataSave
     */
    public function setWeight(?string $weight): DataSave
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Return the size of DataSave
     * @return string|null
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * Set the size of DataSave
     * @param string|null $size
     * @return DataSave
     */
    public function setSize(?string $size): DataSave
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Return size neck of DataSave
     * @return string|null
     */
    public function getSizeNeck(): ?string
    {
        return $this->size_neck;
    }

    /**
     * Set the size neck of DataSave
     * @param string|null $size_neck
     * @return DataSave
     */
    public function setSizeNeck(?string $size_neck): DataSave
    {
        $this->size_neck = $size_neck;
        return $this;
    }

    /**
     * Return the size stomach of DataSave
     * @return string|null
     */
    public function getSizeStomach(): ?string
    {
        return $this->size_stomach;
    }

    /**
     * Set the size stomach of DataSave
     * @param string|null $size_stomach
     * @return DataSave
     */
    public function setSizeStomach(?string $size_stomach): DataSave
    {
        $this->size_stomach = $size_stomach;
        return $this;
    }

    /**
     * Return size haunch of DataSave
     * @return string|null
     */
    public function getSizeHaunch(): ?string
    {
        return $this->size_haunch;
    }

    /**
     * Set the size haunch of DataSave
     * @param string|null $size_haunch
     * @return DataSave
     */
    public function setSizeHaunch(?string $size_haunch): DataSave
    {
        $this->size_haunch = $size_haunch;
        return $this;
    }
}