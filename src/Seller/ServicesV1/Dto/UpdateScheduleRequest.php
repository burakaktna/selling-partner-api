<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateScheduleRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['schedules' => [AvailabilityRecord::class]];

    /**
     * @param  AvailabilityRecord[]  $schedules List of `AvailabilityRecord`s to represent the capacity of a resource over a time range.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $schedules = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
