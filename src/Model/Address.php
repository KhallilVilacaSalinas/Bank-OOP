<?php

namespace Alura\Bank\Model;

class Address
{
    public function __construct(
        private readonly string $city,
        private readonly string $district,
        private readonly string $road
    )
    {}

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getRoad(): string
    {
        return $this->road;
    }

}