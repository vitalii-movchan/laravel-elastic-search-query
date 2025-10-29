<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MatchFactory
 * @implement Elastic\Elasticsearch\Query\Factory\Contract\Factory
 */
class MatchFactory implements Elastic\Elasticsearch\Query\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
     */
    public function create(): Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
    {
        return new Elastic\Elasticsearch\Query\Entity\MatchQuery(
            (new Elastic\Elasticsearch\Query\Parameter\Factory\FieldFactory())->create(),
            (new Elastic\Elasticsearch\Query\Parameter\Factory\QueryFactory())->create(),
            (new Elastic\Elasticsearch\Query\Parameter\Factory\FuzzinessFactory())->create(),
            (new Elastic\Elasticsearch\Query\Parameter\Factory\BoostFactory())->create(),
            new Elastic\Elasticsearch\Query\Validation\MatchValidator(),
        );
    }
}
