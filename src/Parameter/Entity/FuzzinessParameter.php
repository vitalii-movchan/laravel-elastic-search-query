<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Parameter\Entity;

use Elastic;

/**
 * @class FuzzinessParameter
 * @implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
 *
 * @property null|string|int value
 */
class FuzzinessParameter implements Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
{
    /**
     * @var null|string|int
     */
    private null|string|int $value;

    /**
     * @param null|string|int $value
     */
    public function __construct(null|string|int $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Parameter\Enum\Type::Fuzziness->value;
    }

    /**
     * @return null|string|int
     */
    public function getValue(): null|string|int
    {
        return $this->value;
    }

    /**
     * @param int|string|null $value
     * @return Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
     */
    public function setValue(int|string|null $value): Elastic\Elasticsearch\Query\Parameter\Entity\Contract\FuzzinessParameter
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
