<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFeaturesResult extends Dto
{
    protected static array $complexArrayTypes = ['features' => Feature::class];

    /**
     * @param  Feature[]  $features  An array of features.
     */
    public function __construct(
        public array $features,
    ) {}
}
