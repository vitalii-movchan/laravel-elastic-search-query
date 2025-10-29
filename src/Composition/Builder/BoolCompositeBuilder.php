<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder;

use Elastic;
use Exception;
use SplObjectStorage;

/**
 * @class BoolQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite
 *
 * @property Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder boolQueryBuilder
 */
class BoolCompositeBuilder implements
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component,
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\BoolCompositeBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Fillable,
    Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Filterable
{
    // Composition builders
    use Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component;
    use Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite;

    // Events
    use Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern\Fillable;
    use Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern\Filterable;

    /**
     * @var Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder boolQueryBuilder
     */
    private Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder $boolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder $boolQueryBuilder
     * @param SplObjectStorage $compositeBuilders
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder $boolQueryBuilder,
        SplObjectStorage $compositeBuilders
    ) {
        $this->boolQueryBuilder = $boolQueryBuilder;
        $this->children = $compositeBuilders;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder $filterBuilder
     * @return Contract\BoolCompositeBuilder
     */
    public function addFilterCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder $filterBuilder): self
    {
        return $this->add($filterBuilder);
    }

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder $mustBuilder
     * @return self
     */
    public function addMustCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder $mustBuilder): self
    {
        $this->add($mustBuilder);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder $mustNotBuilder
     * @return self
     */
    public function addMustNotCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder $mustNotBuilder): self
    {
        $this->add($mustNotBuilder);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Composition\Builder\ShouldCompositeBuilder $shouldBuilder
     * @return self
     */
    public function addShouldCompositeBuilder(Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder $shouldBuilder): self
    {
        $this->add($shouldBuilder);

        return $this;
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
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\FilterCompositeBuilder:
                    $this->getBoolQueryBuilder()->setFilterQuery(
                        $this->getChildren()->current()
                            ->getFilterQueryBuilder()
                            ->getFilterQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder:
                    $this->getBoolQueryBuilder()->setMustQuery(
                        $this->getChildren()->current()
                            ->getMustQueryBuilder()
                            ->getMustQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder:
                    $this->getBoolQueryBuilder()->setMustNotQuery(
                        $this->getChildren()->current()
                            ->getMustNotQueryBuilder()
                            ->getMustNotQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder:
                    $this->getBoolQueryBuilder()->setShouldQuery(
                        $this->getChildren()->current()
                            ->getShouldQueryBuilder()
                            ->getShouldQuery()
                    );
                    break;
                default:
                    throw new Exception('Composition builder not supported');
            }

            $this->getChildren()->next();
        }
    }

    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
     */
    public function getBoolQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
    {
        return $this->boolQueryBuilder;
    }

    public function setBoolQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder $boolBuilder): self
    {
        $this->boolQueryBuilder = $boolBuilder;

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    public function getBoolQuery(): Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
    {
        return $this->getBoolQueryBuilder()->getBoolQuery();
    }
}
