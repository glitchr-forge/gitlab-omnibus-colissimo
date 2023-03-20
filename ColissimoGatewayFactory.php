<?php

namespace Omnibus\Colissimo;

use Omnibus\Core\GatewayFactory;
use Omnibus\Colissimo\Action\ShippingAction;
use Omnibus\Colissimo\Action\TrackingAction;
use Omnibus\Colissimo\Action\PackingSlipAction;

class ColissimoGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config)
    {
        $config->defaults([
            'omnibus.factory_name' => 'colissimo',
            'omnibus.factory_title' => 'Colissimo'
        ]);
    }
}