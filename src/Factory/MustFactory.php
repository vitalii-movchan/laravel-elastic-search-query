<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MustFactory
 * @implement Elastic\Elasticsearch\Query\Factory\Contract\Factory
 */
class MustFactory implements Elastic\Elasticsearch\Query\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
    {
        return new Elastic\Elasticsearch\Query\Entity\MustQuery(new Elastic\Elasticsearch\Query\Collection\Queries());
    }
}
