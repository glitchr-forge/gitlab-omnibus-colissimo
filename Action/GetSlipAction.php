<?php

namespace Payum\Colissimo\Action;

use ArrayAccess;
use Payum\Core\Action\ActionInterface;
use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\Exception\RequestNotSupportedException;
use Payum\Core\Request\Authorize;
use Payum\Core\Request\Capture;
use Payum\Colissimo\Constants;

class PackingSlipAction implements ActionInterface
{
    public function execute($request)
    {
        // /** @var Capture $request */
        // RequestNotSupportedException::assertSupports($this, $request);

        // $model = ArrayObject::ensureArrayObject($request->getModel());

        // if ($model[Constants::FIELD_PAID]) {
        //     $model[Constants::FIELD_STATUS] = Constants::STATUS_AUTHORIZED;
        // } else {
        //     $model[Constants::FIELD_STATUS] = Constants::STATUS_PENDING;
        // }
    }

    public function supports($request)
    {
        // return $request instanceof PackingSlip &&
        //     $request->getModel() instanceof ArrayAccess
        // ;
    }
}