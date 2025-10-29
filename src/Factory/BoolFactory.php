<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory;

use Elastic;

/**
 * @factory
 *
 * @class BoolFactory
 * @implement Elastic\Elasticsearch\Query\Factory\Contract\Factory
 */
class BoolFactory implements Elastic\Elasticsearch\Query\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
    {
        return new Elastic\Elasticsearch\Query\Entity\BoolQuery(
            (new Elastic\Elasticsearch\Query\Factory\FilterFactory())->create(),
            (new Elastic\Elasticsearch\Query\Factory\MustFactory())->create(),
            (new Elastic\Elasticsearch\Query\Factory\MustNotFactory())->create(),
            (new Elastic\Elasticsearch\Query\Factory\ShouldFactory())->create(),
        );
    }
}
