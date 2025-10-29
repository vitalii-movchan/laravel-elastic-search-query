<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Factory;

use Elastic;

/**
 * @factory
 *
 * @class MatchFactory
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
 */
class MatchFactory implements Elastic\Elasticsearch\Query\Composition\Builder\Factory\Contract\Factory
{
    /**
     * @return Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder
     */
    public function create(): Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder
    {
        return new Elastic\Elasticsearch\Query\Composition\Builder\MatchCompositeBuilder(
            (new Elastic\Elasticsearch\Indice\Mappings\Field\Entity\Factory\Factory())->create(),
            (new Elastic\Elasticsearch\Query\Builder\Factory\MatchFactory())->create()
        );
    }
}
