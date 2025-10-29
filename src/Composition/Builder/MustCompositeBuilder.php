<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder;

use Elastic;
use Exception;
use SplObjectStorage;

/**
 * @class MustQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite
 * @implements Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Composite
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Concern\Common\ClauseBuilder
 *
 * @property Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder mustQueryBuilder
 */
class MustCompositeBuilder implements
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component,
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Composite,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\MustCompositeBuilder,
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
     * @var Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder mustQueryBuilder
     */
    private Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustQueryBuilder;

    /**
     * @var SplObjectStorage $compositeBuilders
     */
    private SplObjectStorage $compositeBuilders;

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustQueryBuilder
     * @param SplObjectStorage $compositeBuilders
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustQueryBuilder,
        SplObjectStorage $compositeBuilders
    ) {
        $this->mustQueryBuilder = $mustQueryBuilder;
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
                    $this->getMustQueryBuilder()->addQuery(
                        $this->getChildren()->current()->getBoolQuery()
                    );
                    break;
                case $this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder:
                    $this->getMustQueryBuilder()->addQuery(
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
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder
     */
    public function getMustQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder
    {
        return $this->mustQueryBuilder;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustBuilder
     * @return $this
     */
    public function setMustQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\MustQueryBuilder $mustBuilder): self
    {
        $this->mustQueryBuilder = $mustBuilder;

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
    {
        return $this->getMustQueryBuilder()->getMustQuery();
    }
}
