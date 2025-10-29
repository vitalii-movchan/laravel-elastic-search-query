<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder;

use Elastic;
use Illuminate\Validation\ValidationException;

/**
 * @class MatchQueryBuilder
 * @implements Query\Composition\Builder\Conceptual\Contract\Component
 * @implements Query\Composition\Builder\Contract\MatchCompositeBuilder
 *
 * @uses Elastic\Elasticsearch\Indice\Mappings\Field\Attribute\Concern\Field
 * @uses Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component
 *
 *
 * @property Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder matchQueryBuilder
 */
class MatchCompositeBuilder implements
    Elastic\Elasticsearch\Indice\Mappings\Field\Attribute\Contract\Field,
    Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract\Component,
    Elastic\Elasticsearch\Query\Composition\Builder\Contract\MatchCompositeBuilder,
    Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Fillable,
    Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Filterable
{
    // Indices
    use Elastic\Elasticsearch\Indice\Mappings\Field\Attribute\Concern\Field;

    // Composition builders
    use Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Concern\Component;

    /**
     * @var Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder matchQueryBuilder
     */
    private Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder $matchQueryBuilder;

    /**
     * @param Elastic\Elasticsearch\Indice\Mappings\Field\Entity\Contract\Field $field
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder $matchQueryBuilder
     */
    public function __construct(
        Elastic\Elasticsearch\Indice\Mappings\Field\Entity\Contract\Field $field,
        Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder $matchQueryBuilder
    ) {
        $this->field = $field;
        $this->matchQueryBuilder = $matchQueryBuilder;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder
     */
    public function getMatchQueryBuilder(): Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder
    {
        return $this->matchQueryBuilder;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder $matchBuilder
     * @return $this
     */
    public function setMatchQueryBuilder(Elastic\Elasticsearch\Query\Builder\Contract\MatchQueryBuilder $matchBuilder): self
    {
        $this->matchQueryBuilder = $matchBuilder;

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
     */
    public function getMatchQuery(): Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
    {
        return $this->getMatchQueryBuilder()->getMatchQuery();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery
     * @return $this
     */
    public function setMatchQuery(Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $matchQuery): self
    {
        $this->getMatchQueryBuilder()->setMatchQuery($matchQuery);

        return $this;
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function getFieldParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
    {
        return $this->getMatchQuery()->getFieldParameter();
    }

    public function getQueryParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
    {
        return $this->getMatchQuery()->getQueryParameter();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function getFuzzinessParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
    {
        return $this->getMatchQuery()->getFuzzinessParameter();
    }

    /**
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function getBoostParameter(): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
    {
        return $this->getMatchQuery()->getBoostParameter();
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter
     * @return $this
     */
    public function setFieldParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter): self
    {
        $this->getMatchQuery()->setFieldParameter($fieldParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter
     * @return $this
     */
    public function setQueryParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter): self
    {
        $this->getMatchQuery()->setQueryParameter($queryParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter
     * @return $this
     */
    public function setFuzzinessParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter): self
    {
        $this->getMatchQuery()->setFuzzinessParameter($fuzzinessParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter
     * @return $this
     */
    public function setBoostParameter(Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter): self
    {
        $this->getMatchQuery()->setBoostParameter($boostParameter);

        return $this;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Parameters $parameters
     * @return void
     */
    public function fill(Elastic\Elasticsearch\Query\Collection\Parameters $parameters): void
    {
        if ($parameters->get($this->getField()->getName())) {
            $this->getMatchQueryBuilder()
                ->getMatchQuery()
                ->getQueryParameter()
                ->setValue($parameters->get($this->getField()->getName()));
        }
    }

    /**
     * @return void
     */
    public function filter(): void
    {
        try {
            $this->getMatchQueryBuilder()->getMatchQuery()->validate();
        } catch (ValidationException) {
            $this->getParent()->remove($this);
        }
    }
}
