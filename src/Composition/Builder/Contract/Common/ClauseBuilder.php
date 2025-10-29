<?php

namespace Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common;

use Elastic;

interface ClauseBuilder
{
    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder $boolBuilder
     * @return $this
     */
    public function addBoolCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder $boolBuilder): static;

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder $matchBuilder
     * @return $this
     */
    public function addMatchCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder $matchBuilder): static;
}
