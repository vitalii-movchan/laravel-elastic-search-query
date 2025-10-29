<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity\Contract;

use Elastic;

/**
 * @interface BoostParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
 */
interface QueryParameter extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
{
    /**
     * @return string|int
     */
    public function getValue(): string|int;

    /**
     * @param string|int $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    public function setValue(string|int $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter;
}
