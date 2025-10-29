<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder;

use Elastic;
use Exception;
use SplObjectStorage;

/**
 * @class MustNotQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Concern\Common\ClauseBuilder
 *
 * @property Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder shouldQueryBuilder
 */
class ShouldCompositeBuilder implements
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component,
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\ShouldCompositeBuilder,
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
     * @var Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder shouldQueryBuilder
     */
    private Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldQueryBuilder
     * @param SplObjectStorage $compositeBuilders
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldQueryBuilder,
        SplObjectStorage $compositeBuilders
    ) {
        $this->shouldQueryBuilder = $shouldQueryBuilder;
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
                    $this->getShouldQueryBuilder()->addQuery(
                        $this->getChildren()->current()->getBoolQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder:
                    $this->getShouldQueryBuilder()->addQuery(
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
     * @return Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
     */
    public function getShouldQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder
    {
        return $this->shouldQueryBuilder;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldBuilder
     * @return $this
     */
    public function setMustQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\ShouldQueryBuilder $shouldBuilder): self
    {
        $this->shouldQueryBuilder = $shouldBuilder;

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
    {
        return $this->getShouldQueryBuilder()->getShouldQuery();
    }
}
