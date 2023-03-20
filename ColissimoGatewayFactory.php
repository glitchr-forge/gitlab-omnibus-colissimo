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
            'omnibus.factory_name' => 'Colissimo',
            'omnibus.factory_title' => 'Colissimo',
            'omnibus.action.print_slip' => new PackingSlipAction(),
            'omnibus.action.shipping' => new ShippingAction(),
            'omnibus.action.tracking' => new TrackingAction(),
        ]);
    }
}