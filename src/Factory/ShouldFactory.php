<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory;

use Elastic;

/**
 * @factory
 *
 * @class ShouldFactory
 * @implement Elastic\Elasticsearch\Query\Factory\Contract\Factory
 */
class ShouldFactory implements Elastic\Elasticsearch\Query\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
    {
        return new Elastic\Elasticsearch\Query\Entity\ShouldQuery(new Elastic\Elasticsearch\Query\Collection\Queries());
    }
}
