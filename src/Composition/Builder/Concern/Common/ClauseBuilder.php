<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Concern\Common;

use Elastic;

/**
 * @trait
 *
 * @class ClauseBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite
 */
trait ClauseBuilder
{
    use Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite;

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder $boolBuilder
     * @return $this
     */
    public function addBoolCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder $boolBuilder): static
    {
        return $this->add($boolBuilder);
    }

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder $matchBuilder
     * @return $this
     */
    public function addMatchCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder $matchBuilder): static
    {
        return $this->add($matchBuilder);
    }
}
