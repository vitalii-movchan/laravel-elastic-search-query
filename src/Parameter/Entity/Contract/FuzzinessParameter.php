<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity\Contract;

use Elastic;

/**
 * @interface BoostParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
 */
interface FuzzinessParameter extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
{
    /**
     * @return null|string|int
     */
    public function getValue(): null|string|int;

    /**
     * @param string|int|null $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function setValue(null|string|int $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter;
}
