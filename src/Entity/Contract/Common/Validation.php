<?php

namespace Sxope\Infra\Search\Elastic\Query\Entity\Contract\Common;

use Illuminate;

/**
 * @interface Validation
 */
interface Validation
{
    /**
     * @return void
     * @throws Illuminate\Validation\ValidationException
     */
    public function validate(): void;
}
