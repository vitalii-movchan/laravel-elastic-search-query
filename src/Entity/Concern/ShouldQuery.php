<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Concern;

use Elastic;

/**
 * @trait
 *
 * @class ShouldQuery
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\Common\ClauseQuery
 */
trait ShouldQuery
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\Common\ClauseQuery;
}
