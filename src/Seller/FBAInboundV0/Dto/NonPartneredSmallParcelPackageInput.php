<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class NonPartneredSmallParcelPackageInput extends Dto
{
    protected static array $attributeMap = ['trackingId' => 'TrackingId'];

    /**
     * @param  string  $trackingId  The tracking number of the package, provided by the carrier.
     */
    public function __construct(
        public string $trackingId,
    ) {}
}
