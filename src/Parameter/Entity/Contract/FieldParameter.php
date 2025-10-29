<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity\Contract;

use Elastic;

/**
 * @interface BoostParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
 */
interface FieldParameter extends Elastic\Elasticsearch\Query\Parameter\Entity\Contract\Common\Parameter
{
    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function setValue(string $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter;
}
