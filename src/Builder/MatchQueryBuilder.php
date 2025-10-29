<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder;

use Elastic;

/**
 * @builder
 *
 * @class MatchQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Attribute\Contract\MatchQuery
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\MatchQuery
 */
class MatchQueryBuilder implements
    Elastic\Elasticsearch\Query\Attribute\Contract\MatchQuery,
    Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\MatchQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery
     */
    public function __construct(Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery)
    {
        $this->matchQuery = $matchQuery;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function getFieldParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
    {
        return $this->matchQuery->getFieldParameter();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    public function getQueryParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
    {
        return $this->matchQuery->getQueryParameter();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function getFuzzinessParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
    {
        return $this->matchQuery->getFuzzinessParameter();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function getBoostParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
    {
        return $this->matchQuery->getBoostParameter();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter
     * @return $this
     */
    public function setFieldParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter): self
    {
        $this->matchQuery->setFieldParameter($fieldParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter
     * @return $this
     */
    public function setQueryParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter): self
    {
        $this->matchQuery->setQueryParameter($queryParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter
     * @return $this
     */
    public function setFuzzinessParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter): self
    {
        $this->matchQuery->setFuzzinessParameter($fuzzinessParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter
     * @return $this
     */
    public function setBoostParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter): self
    {
        $this->matchQuery->setBoostParameter($boostParameter);

        return $this;
    }

    /**
     * @return void
     */
    public function resetQuery(): void
    {
        $this->matchQuery = (new Elastic\Elasticsearch\Query\Factory\MatchFactory())->create();
    }
}
