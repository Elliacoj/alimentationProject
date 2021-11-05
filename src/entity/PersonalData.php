<?php

namespace Amaur\App\entity;

class PersonalData {
    private ?int $id;
    private ?string $firstname;
    private ?string $lastname;
    private ?string $birthday;
    private ?string $weight;
    private ?string $size;
    private ?string $size_neck;
    private ?string $size_stomach;
    private ?User $userFk;

    /**
     * @param int|null $id
     * @param string|null $firstname
     * @param string|null $lastname
     * @param string|null $birthday
     * @param string|null $weight
     * @param string|null $size
     * @param string|null $size_neck
     * @param string|null $size_stomach
     * @param User|null $userFk
     */
    public function __construct(int $id = null, string $firstname = null, string $lastname = null, string $birthday = null, string $weight = null,
                                string $size = null, string $size_neck = null, string $size_stomach = null, User $userFk = null)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthday = $birthday;
        $this->weight = $weight;
        $this->size = $size;
        $this->size_neck = $size_neck;
        $this->size_stomach = $size_stomach;
        $this->userFk = $userFk;
    }

    /**
     * Return the id of PersonalData
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the id of PersonalData
     * @param int|null $id
     * @return PersonalData
     */
    public function setId(?int $id): PersonalData
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Return the firstname of PersonalData
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * Set the firstname of PersonalData
     * @param string|null $firstname
     * @return PersonalData
     */
    public function setFirstname(?string $firstname): PersonalData
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Return the lastname of PersonalData
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Set the lastname of PersonalData
     * @param string|null $lastname
     * @return PersonalData
     */
    public function setLastname(?string $lastname): PersonalData
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Return the birthday of PersonalData
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * Set the birthday of PersonalData
     * @param string|null $birthday
     * @return PersonalData
     */
    public function setBirthday(?string $birthday): PersonalData
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * Return the weight of PersonalData
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Set the weight of PersonalData
     * @param string|null $weight
     * @return PersonalData
     */
    public function setWeight(?string $weight): PersonalData
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Return the size of PersonalData
     * @return string|null
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * Set the size of PersonalData
     * @param string|null $size
     * @return PersonalData
     */
    public function setSize(?string $size): PersonalData
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Return size neck of PersonalData
     * @return string|null
     */
    public function getSizeNeck(): ?string
    {
        return $this->size_neck;
    }

    /**
     * Set the size neck of PersonalData
     * @param string|null $size_neck
     * @return PersonalData
     */
    public function setSizeNeck(?string $size_neck): PersonalData
    {
        $this->size_neck = $size_neck;
        return $this;
    }

    /**
     * Return the size stomach of PersonalData
     * @return string|null
     */
    public function getSizeStomach(): ?string
    {
        return $this->size_stomach;
    }

    /**
     * Set the size stomach of PersonalData
     * @param string|null $size_stomach
     * @return PersonalData
     */
    public function setSizeStomach(?string $size_stomach): PersonalData
    {
        $this->size_stomach = $size_stomach;
        return $this;
    }

    /**
     * Return the user fk of PersonalData
     * @return User|null
     */
    public function getUserFk(): ?User
    {
        return $this->userFk;
    }

    /**
     * Set the user fk of PersonalData
     * @param User|null $userFk
     * @return PersonalData
     */
    public function setUserFk(?User $userFk): PersonalData
    {
        $this->userFk = $userFk;
        return $this;
    }
}