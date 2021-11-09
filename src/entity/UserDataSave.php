<?php

namespace Amaur\App\entity;

class UserDataSave {
    private ?int $id;
    private ?User $userFk;
    private ?DataSave $dataSave;

    /**
     * @param int|null $id
     * @param User|null $userFk
     * @param DataSave|null $dataSave
     */
    public function __construct(int $id = null, User $userFk = null, DataSave $dataSave = null)
    {
        $this->id = $id;
        $this->userFk = $userFk;
        $this->dataSave = $dataSave;
    }

    /**
     *  return the id of UserDataSave
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the id of UserDataSave
     * @param int|null $id
     * @return UserDataSave
     */
    public function setId(?int $id): UserDataSave
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Return the user fk of UserDataSave
     * @return User|null
     */
    public function getUserFk(): ?User
    {
        return $this->userFk;
    }

    /**
     * Set the user fk of UserDateSave
     * @param User|null $userFk
     * @return UserDataSave
     */
    public function setUserFk(?User $userFk): UserDataSave
    {
        $this->userFk = $userFk;
        return $this;
    }

    /**
     * Return the data save of UserDataSave
     * @return DataSave|null
     */
    public function getDataSave(): ?DataSave
    {
        return $this->dataSave;
    }

    /**
     * Set the data save of UserDataSave
     * @param DataSave|null $dataSave
     * @return UserDataSave
     */
    public function setDataSave(?DataSave $dataSave): UserDataSave
    {
        $this->dataSave = $dataSave;
        return $this;
    }
}