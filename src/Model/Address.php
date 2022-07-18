<?php

namespace Alura\Bank\Model;

class Address
{
    public function __construct(
        public readonly string $city,
        public readonly string $district,
        public readonly string $road
    )
    {}

}