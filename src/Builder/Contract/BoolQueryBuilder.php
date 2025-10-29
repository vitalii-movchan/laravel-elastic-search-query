<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract;

use Elastic;

/**
 * @interface BoolQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
 */
interface BoolQueryBuilder extends Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
{
    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addFilterQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addMustQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addMustNotQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query
     * @return $this
     */
    public function addShouldQuery(Elastic\Elasticsearch\Query\Entity\Contract\Common\Query $query): BoolQueryBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
     */
    public function getFilterQuery(): Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
     */
    public function getMustQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
     */
    public function getMustNotQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
     */
    public function getShouldQuery(): Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
     * @return $this
     */
    public function setFilterQuery(Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery): BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery
     * @return $this
     */
    public function setMustQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery): BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery
     * @return $this
     */
    public function setMustNotQuery(Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery): BoolQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery
     * @return $this
     */
    public function setShouldQuery(Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery): BoolQueryBuilder;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
     */
    public function getBoolQuery(): Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery;
}
