<?php
class ServiceDriver implements ServiceInterface
{
    protected $driverPrice = 200;

    public function __construct(int $price) {
        $this->driverPrice = $price;
    }
    public function apply(TariffInterface $tariff)
    {
        return $this->driverPrice;
    }
}