<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity;

use Elastic;
use Illuminate;

/**
 * @class MatchQuery
 * @implements Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
 *
 * @uses Elastic\Elasticsearch\Query\Entity\Concern\MatchQuery
 */
class MatchQuery implements
    Illuminate\Contracts\Support\Arrayable,
    Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery
{
    use Elastic\Elasticsearch\Query\Entity\Concern\MatchQuery;

    /**
     * @var Elastic\Elasticsearch\Query\Validation\Contract\MatchValidator
     */
    private Elastic\Elasticsearch\Query\Validation\Contract\MatchValidator $matchValidator;

    /**
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter
     * @param Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter
     * @param Elastic\Elasticsearch\Query\Validation\Contract\MatchValidator $matchValidator
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter $fieldParameter,
        Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter $queryParameter,
        Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter $fuzzinessParameter,
        Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter $boostParameter,
        Elastic\Elasticsearch\Query\Validation\Contract\MatchValidator $matchValidator
    ) {
        $this->fieldParameter = $fieldParameter;
        $this->queryParameter = $queryParameter;
        $this->fuzzinessParameter = $fuzzinessParameter;
        $this->boostParameter = $boostParameter;
        $this->matchValidator = $matchValidator;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Enum\Type::Match->value;
    }

    /**
     * @return void
     */
    public function validate(): void
    {
        $this->matchValidator->validate($this);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            $this->getType() => collect([
                'field' => $this->getFieldParameter()->getValue(),
                'query' => $this->getQueryParameter()->getValue(),
                'fuzziness' => $this->getFuzzinessParameter()->getValue(),
                'boost' => $this->getBoostParameter()->getValue(),
            ])->filter()->toArray(),
        ];
    }
}
