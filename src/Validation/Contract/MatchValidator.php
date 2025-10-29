<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Validation\Contract;

use Elastic;

/**
 * @final
 * @class MatchQueryValidator
 */
interface MatchValidator
{
    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $query
     * @return void
     */
    public function validate(Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $query): void;
}
