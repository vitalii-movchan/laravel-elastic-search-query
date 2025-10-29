<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Contract;

use Elastic;

/**
 * @interface MustQueryBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder
 * @extends Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
 */
interface MustCompositeBuilder extends
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\ClauseBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\Common\CompositeBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder
     */
    public function getMustQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustBuilder
     * @return $this
     */
    public function setMustQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustBuilder): Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery;
}
