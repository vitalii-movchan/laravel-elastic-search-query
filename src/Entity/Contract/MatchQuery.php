<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Contract;

use Elastic;

/**
 * @interface MatchQuery
 *
 * @extends Elastic\Elasticsearch\Query\Entity\Contract\Common\Query
 *
 * @extends Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\BoostParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\FieldParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\FuzzinessParameter
 * @extends Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\QueryParameter
 */
interface MatchQuery extends
    Elastic\Elasticsearch\Query\Entity\Contract\Common\Query,
    Elastic\Elasticsearch\Query\Entity\Contract\Common\Validation,
    Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\BoostParameter,
    Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\FieldParameter,
    Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\FuzzinessParameter,
    Elastic\Elasticsearch\Query\Parameter\Attribute\Contract\QueryParameter
{
}
