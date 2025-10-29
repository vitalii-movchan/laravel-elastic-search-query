<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Concern;

use Elastic;

/**
 * @trait
 *
 * @class FilterQuery
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\Common\ClauseQuery
 */
trait MustNotQuery
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\Common\ClauseQuery;
}
