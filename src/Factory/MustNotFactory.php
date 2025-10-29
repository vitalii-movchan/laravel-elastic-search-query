<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MustNotFactory
 * @implement Elastic\Elasticsearch\Query\Factory\Contract\Factory
 */
class MustNotFactory implements Elastic\Elasticsearch\Query\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
    {
        return new Elastic\Elasticsearch\Query\Entity\MustNotQuery(new Elastic\Elasticsearch\Query\Collection\Queries());
    }
}
