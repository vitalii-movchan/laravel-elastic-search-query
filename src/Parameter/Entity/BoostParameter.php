<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity;

use Elastic;

/**
 * @class BoostParameter
 * @implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
 *
 * @property null|float value
 */
class BoostParameter implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
{
    /**
     * @var null|float
     */
    private null|float $value;

    /**
     * @param null|float $value
     */
    public function __construct(null|float $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Parameter\Enum\Type::Boost->value;
    }

    /**
     * @return null|float
     */
    public function getValue(): null|float
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
     */
    public function setValue(null|float $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\BoostParameter
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
