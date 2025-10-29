<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Contract;

use Elastic;

/**
 * @interface ShouldQueryBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
 */
interface ShouldCompositeBuilder extends
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
     */
    public function getShouldQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldBuilder
     * @return $this
     */
    public function setMustQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery;
}
