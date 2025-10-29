<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Enum;

/**
 * @enum
 *
 * @class Type
 */
enum Type: string
{
    case Boost = 'boost';
    case Field = 'field';
    case Fuzziness = 'fuzziness';
    case Query = 'query';
}
