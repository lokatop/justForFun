<?php
class AdvancedRandom extends BasicRandom{
    private $randomWordWithInt;
    private $n = 10;

    public function __construct($numberOfRandom, $min, $max)
    {
        parent::__construct($numberOfRandom, $min, $max);
    }
    private function getRandomWord($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getRandomWordWithInt()
    {
        $ints = $this->getRandomMassive();
        for ($i = 0; $i < sizeof($ints); $i++) {
            $a = random_int(0,5);
            $randomWord = $this->getRandomWord($a);
            $randomWordWithInt[$i] = (string)$ints[$i] . " " . $randomWord;
        }
        return $randomWordWithInt;
    }


}