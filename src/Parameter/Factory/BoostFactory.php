<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Factory;

use Elastic;

/**
 * @class BoostFactory
 * @implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
 */
class BoostFactory implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function create(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
    {
        return new Elastic\Elasticsearch\Query\Parameter\Entity\BoostParameter(null);
    }
}
