<?php

namespace App;

class Examples extends Base
{

    /** @var int */
    protected $number;

    /** @var string */
    protected $operator;

    public function __construct(int $number, string $operator)
    {
        $this->number = $number;
        $this->operator = $operator;
        parent::__construct($number);
    }

    public function one(string $text): string
    {
        return sprintf('Error: %s%s', $text, '!');
    }

    public function two(): string
    {
        return 'foo';
    }

    /**
     * Foo Bar
     *
     * @param \DateTimeImmutable[] $dates
     * @return string
     */
    public function four(array $dates): string
    {
        $first = current($dates);
        return $first->format('d/m/Y');
    }

    public function five(): array
    {
        return [
            'foo' => 'bar',
            'fizz' => 'buzz',
        ];
    }

    /**
     * Sum array numbers.
     *
     * @param int[] $numbers
     * @return int
     */
    public function six(array $numbers): int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    public function seven(int $number)
    {
        if (1 == '1') {
            echo 'fizz';
        }

        $isFalse = 1 != '1';

        if (false !== $isFalse) {
            echo 'buzz';
        }

        if (is_int($number)) {
            echo 'foobar';
        }
    }

    public function eigth($n)
    {
        if ($n > 0) {
            $notFound = 321;
        }

        $never = isset($notFound);
        
        if ($n <= 0) {
            $found = 123;
        }

        $always = isset($found);
    }

    public function nine(object $object)
    {
        $newObject = clone $object;
    }

    /**
     * Does anything.
     *
     * @param (int|float)[] $values
     * @return string
     */
    public function ten(array $values): string
    {    
        $this->ten([1, 2.5, 8, 10.1]);
    }

    public function eleven(): string
    {
        return implode(', ', NUMBERS);
    }
}