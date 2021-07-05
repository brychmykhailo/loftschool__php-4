<?php
class ServiceDriver implements ServiceInterface
{
    protected $driverPrice = 100;

    public function __construct(int $price) {
        $this->driverPrice = $price;
    }
    public function apply(TariffInterface $tariff)
    {
        return $this->driverPrice;
    }
}