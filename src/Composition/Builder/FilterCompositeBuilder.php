<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder;

use Elastic;
use Exception;
use SplObjectStorage;

/**
 * @class FilterQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite
 * @uses \Sxope\Infra\Search\Elastic\Query\Composition\Builder\Concern\Common\ClauseBuilder
 *
 * @property Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder filterQueryBuilder
 */
class FilterCompositeBuilder implements
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component,
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Fillable,
    Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Filterable
{
    // Clause builder
    use Elastic\Elasticsearch\Query\Composition\Builder\Concern\Common\ClauseBuilder;

    // Composition builders
    use Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component;
    use Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite;

    // Events
    use Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern\Fillable;
    use Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern\Filterable;

    /**
     * @var Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder filterQueryBuilder
     */
    private Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterQueryBuilder
     * @param SplObjectStorage $compositeBuilders
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterQueryBuilder,
        SplObjectStorage $compositeBuilders
    ) {
        $this->filterQueryBuilder = $filterQueryBuilder;
        $this->children = $compositeBuilders;
    }

    /**
     * @return void
     * @throws Exception
     */
    public function build(): void
    {
        $this->getChildren()->rewind();

        while ($this->getChildren()->valid()) {
            if ($this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite) {
                $this->getChildren()->current()->build();
            }

            switch ($this->getChildren()->current()) {
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder:
                    $this->getFilterQueryBuilder()->addQuery(
                        $this->getChildren()->current()->getBoolQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder:
                    $this->getFilterQueryBuilder()->addQuery(
                        $this->getChildren()->current()->getMatchQuery()
                    );
                    break;
                default:
                    throw new Exception('Composition builder not supported');
            }

            $this->getChildren()->next();
        }
    }

    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
     */
    public function getFilterQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder
    {
        return $this->filterQueryBuilder;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterBuilder
     * @return $this
     */
    public function setFilterQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\FilterQueryBuilder $filterBuilder): self
    {
        $this->filterQueryBuilder = $filterBuilder;

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
    {
        return $this->getFilterQueryBuilder()->getFilterQuery();
    }
}
