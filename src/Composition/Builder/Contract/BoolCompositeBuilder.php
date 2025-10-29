<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Contract;

use Elastic;

/**
 * @interface BoolQueryBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
 */
interface BoolCompositeBuilder extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
{
    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder $filterBuilder
     * @return BoolCompositeBuilder
     */
    public function addFilterCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder $filterBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder $mustBuilder
     * @return BoolCompositeBuilder
     */
    public function addMustCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder $mustBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder $mustNotBuilder
     * @return BoolCompositeBuilder
     */
    public function addMustNotCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder $mustNotBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder $shouldBuilder
     * @return BoolCompositeBuilder
     */
    public function addShouldCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder $shouldBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
     */
    public function getBoolQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder $boolBuilder
     * @return BoolCompositeBuilder
     */
    public function setBoolQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder $boolBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    public function getBoolQuery(): Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery;
}
