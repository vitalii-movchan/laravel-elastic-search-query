<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity;

use Elastic;

/**
 * @class FieldParameter
 * @implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
 *
 * @property string value
 */
class FieldParameter implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
{
    /**
     * @var string
     */
    private string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Parameter\Enum\Type::Field->value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
     */
    public function setValue(string $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FieldParameter
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
