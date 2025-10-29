<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory;

use Elastic;

/**
 * @factory
 *
 * @class FilterFactory
 * @implement Elastic\Elasticsearch\Query\Factory\Contract\Factory
 */
class FilterFactory implements Elastic\Elasticsearch\Query\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
    {
        return new Elastic\Elasticsearch\Query\Entity\FilterQuery(new Elastic\Elasticsearch\Query\Collection\Queries());
    }
}
