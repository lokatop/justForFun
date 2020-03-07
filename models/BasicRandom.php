<?php


class BasicRandom
{
    private $randomMassive;
    private $min;
    private $max;
    private $amount;
    public function __construct($numberOfRandom, $min, $max)
    {
        $this->min = $min;
        $this->max = $max;
        $this->amount = $numberOfRandom;
    }

    /**
     * @return array|int
     */
    public function getRandomMassive()
    {
        for ($i = 0; $i<$this->amount;$i++){
            try {
                $this->randomMassive[$i] = random_int($this->min,  $this->max);
            } catch (Exception $e) {}
        }
        return $this->randomMassive;
    }


}