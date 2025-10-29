<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Concern;

use Elastic;

/**
 * @trait
 *
 * @class BoolQuery
 *
 * @uses Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\BoostParameter
 * @uses Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\FieldParameter
 * @uses Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\FuzzinessParameter
 * @uses Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\QueryParameter
 */
trait MatchQuery
{
    use Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\BoostParameter;
    use Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\FieldParameter;
    use Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\FuzzinessParameter;
    use Elastic\Elasticsearch\Query\Parameter\Attribute\Concern\QueryParameter;
}
