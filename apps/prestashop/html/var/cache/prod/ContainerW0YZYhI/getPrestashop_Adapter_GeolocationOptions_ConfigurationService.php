<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.geolocation_options.configuration' shared service.

return $this->services['prestashop.adapter.geolocation_options.configuration'] = new \PrestaShop\PrestaShop\Adapter\Geolocation\GeolocationOptionsConfiguration(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));