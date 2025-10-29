<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Enum;

/**
 * @enum
 *
 * @class Type
 */
enum Type: string
{
    case Bool = 'bool';
    case Filter = 'filter';
    case Match = 'match';
    case Must = 'must';
    case MustNot = 'must_not';
    case Should = 'should';
}
