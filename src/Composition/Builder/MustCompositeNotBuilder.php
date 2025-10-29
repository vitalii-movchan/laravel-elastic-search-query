<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder;

use Elastic;
use Exception;
use SplObjectStorage;

/**
 * @class MustNotQueryBuilder
 *
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Concern\Common\ClauseBuilder
 *
 * @property Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder mustNotQueryBuilder
 */
class MustCompositeNotBuilder implements
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component,
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustNotCompositeBuilder,
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
     * @var Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder mustNotQueryBuilder
     */
    private Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotQueryBuilder
     * @param SplObjectStorage $compositeBuilders
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotQueryBuilder,
        SplObjectStorage $compositeBuilders
    ) {
        $this->mustNotQueryBuilder = $mustNotQueryBuilder;
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
                    $this->getMustNotQueryBuilder()->addQuery(
                        $this->getChildren()->current()->getBoolQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder:
                    $this->getMustNotQueryBuilder()->addQuery(
                        $this->getChildren()->current()->getMatchQuery()
                    );
                    break;
                default:
                    throw new Exception('Composition builder not supported');
            }

            $this->children->next();
        }
    }

    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
     */
    public function getMustNotQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder
    {
        return $this->mustNotQueryBuilder;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotBuilder
     * @return $this
     */
    public function setMustQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\MustNotQueryBuilder $mustNotBuilder): self
    {
        $this->mustNotQueryBuilder = $mustNotBuilder;

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
    {
        return $this->getMustNotQueryBuilder()->getMustNotQuery();
    }
}
