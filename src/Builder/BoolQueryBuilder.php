<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder;

use Elastic;

/**
 * @builder
 *
 * @class BoolQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Attribute\Contract\BoolQuery
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\BoolQuery
 */
class BoolQueryBuilder implements
    Elastic\Elasticsearch\Query\Attribute\Contract\BoolQuery,
    Elastic\Elasticsearch\Query\Builder\Contract\BoolQueryBuilder
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\BoolQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery
     */
    public function __construct(Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery $boolQuery)
    {
        $this->boolQuery = $boolQuery;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addFilterQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->boolQuery->getFilterQuery()->addQuery($query);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addMustQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->boolQuery->getMustQuery()->addQuery($query);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addMustNotQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->boolQuery->getMustNotQuery()->addQuery($query);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addShouldQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): self
    {
        $this->boolQuery->getShouldQuery()->addQuery($query);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
    {
        return $this->boolQuery->getFilterQuery();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
    {
        return $this->boolQuery->getMustQuery();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
    {
        return $this->boolQuery->getMustNotQuery();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
    {
        return $this->boolQuery->getShouldQuery();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
     * @return $this
     */
    public function setFilterQuery(Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery): self
    {
        $this->boolQuery->setFilterQuery($filterQuery);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery
     * @return $this
     */
    public function setMustQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery): self
    {
        $this->boolQuery->setMustQuery($mustQuery);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery
     * @return $this
     */
    public function setMustNotQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery): self
    {
        $this->boolQuery->setMustNotQuery($mustNotQuery);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery
     * @return $this
     */
    public function setShouldQuery(Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery): self
    {
        $this->boolQuery->setShouldQuery($shouldQuery);

        return $this;
    }

    /**
     * @return void
     */
    public function resetQuery(): void
    {
        $this->boolQuery = (new Elastic\Elasticsearch\Query\Factory\BoolFactory())->create();
    }
}
