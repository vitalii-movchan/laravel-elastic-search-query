<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Factory;

use Elastic;

/**
 * @class FuzzinessFactory
 * @implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
 */
class FuzzinessFactory implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function create(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
    {
        return new Elastic\Elasticsearch\Query\Parameter\Entity\FuzzinessParameter(null);
    }
}
