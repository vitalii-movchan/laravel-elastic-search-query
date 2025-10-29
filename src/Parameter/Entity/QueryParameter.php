<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity;

use Elastic;

/**
 * @class QueryParameter
 * @implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
 *
 * @property string|int value
 */
class QueryParameter implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
{
    /**
     * @var string|int
     */
    private string|int $value;

    /**
     * @param string|int $value
     */
    public function __construct(string|int $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Parameter\Enum\Type::Query->value;
    }

    /**
     * @return string|int
     */
    public function getValue(): string|int
    {
        return $this->value;
    }

    public function setValue(int|string $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\QueryParameter
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->value);
    }
}
