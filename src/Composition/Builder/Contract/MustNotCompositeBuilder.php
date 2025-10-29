<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Contract;

use Elastic;

/**
 * @interface MustNotQueryBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
 */
interface MustNotCompositeBuilder extends
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
     */
    public function getMustNotQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotBuilder
     * @return $this
     */
    public function setMustQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery;
}
