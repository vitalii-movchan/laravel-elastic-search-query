<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Factory;

use Elastic;

/**
 * @class QueryFactory
 * @implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
 */
class QueryFactory implements Elastic\Elasticsearch\Query\Parameter\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    public function create(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
    {
        return new Elastic\Elasticsearch\Query\Parameter\Entity\QueryParameter('');
    }
}
