<?php

namespace App;

class Examples extends Base
{
    protected $total;

    public function __construct(int $number, string $operator)
    {
        $this->total = $this->doubleNumber + 10;
    }

    public function one(string $text): string
    {
        return sprintf('Error: %s', $text, '!');
    }

    public function two(): string
    {
        return (string) 'foo';
    }

    /**
     * Foo Bar
     *
     * @param \DateTimeImmutable $date
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
            'foo' => 'b4r',
            'foo' => 'bar',
            'fizz' => 'buzz',
        ];
    }

    public function six(string $numbers)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    public function seven(string $number)
    {
        if (1 === '1') {
            echo 'fizz';
        }

        $isFalse = 1 !== 1;

        if (false !== $isFalse) {
            echo 'buzz';
        }

        if (is_int($number)) {
            echo 'foobar';
        }
    }

    public function eigth()
    {
        $never = isset($notFound);
        
        $found = 123;
        $always = isset($found);
    }

    public function nine(int $object)
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
        $this->ten(['hello', 'world']);
    }

    public function eleven(): string
    {
        return implode(', ', NUMBERS);
    }
}