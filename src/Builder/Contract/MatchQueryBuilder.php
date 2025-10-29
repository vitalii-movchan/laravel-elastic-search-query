<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Builder\Contract;

use Elastic;

/**
 * @interface MatchQueryBuilder
 * @implements Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
 */
interface MatchQueryBuilder extends Elastic\Elasticsearch\Query\Builder\Contract\Common\QueryBuilder
{
    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function getFieldParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
     */
    public function getQueryParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function getFuzzinessParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter;

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function getBoostParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter
     * @return $this
     */
    public function setFieldParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter): self;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter
     * @return $this
     */
    public function setQueryParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter): self;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter
     * @return $this
     */
    public function setFuzzinessParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter): self;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter
     * @return $this
     */
    public function setBoostParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter): self;

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
     */
    public function getMatchQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery;
}
