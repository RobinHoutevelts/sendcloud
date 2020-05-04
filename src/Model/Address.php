<?php

namespace JouwWeb\SendCloud\Model;

class Address
{
    /** @var string */
    protected $name;

    /** @var string|null */
    protected $companyName;

    /** @var string */
    protected $street;

    /** @var string|null */
    protected $street2;

    /** @var string */
    protected $houseNumber;

    /** @var string */
    protected $city;

    /** @var string */
    protected $postalCode;

    /** @var string */
    protected $countryCode;

    /** @var string */
    protected $emailAddress;

    /** @var string|null */
    protected $phoneNumber;

    public function __construct(
        string $name,
        ?string $companyName,
        string $street,
        string $houseNumber,
        string $city,
        string $postalCode,
        string $countryCode,
        string $emailAddress,
        ?string $phoneNumber,
        ?string $street2
    ) {
        $this->name = $name;
        $this->companyName = $companyName;
        $this->street = $street;
        $this->street2 = $street2;
        $this->houseNumber = $houseNumber;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->countryCode = $countryCode;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(?string $street): void
    {
        $this->street2 = $street;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getDisplayName(): string
    {
        $displayName = $this->getName();

        if ($this->getCompanyName()) {
            $displayName .= ' / ' . $this->getCompanyName();
        }

        return $displayName;
    }

    public function toArray(): array
    {
        return [
            'city' => $this->getCity(),
            'companyName' => $this->getCompanyName(),
            'countryCode' => $this->getCountryCode(),
            'displayName' => $this->getDisplayName(),
            'emailAddress' => $this->getEmailAddress(),
            'houseNumber' => $this->getHouseNumber(),
            'name' => $this->getName(),
            'phoneNumber' => $this->getPhoneNumber(),
            'postalCode' => $this->getPostalCode(),
            'street' => $this->getStreet(),
            'street2' => $this->getStreet2(),
        ];
    }

    public function __toString(): string
    {
        return $this->getDisplayName();
    }
}
