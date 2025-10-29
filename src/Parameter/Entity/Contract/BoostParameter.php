<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity\Contract;

use Elastic;

/**
 * @interface BoostParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
 */
interface BoostParameter extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
{
    /**
     * @return null|float
     */
    public function getValue(): null|float;

    /**
     * @param float|null $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function setValue(null|float $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter;
}
