<?php


namespace Prime;


use InvalidArgumentException;

class Prime
{
    const MSG_NB_NEGATIF = 'Vous devez fournir un nombre positif';
    /**
     * Retourne la somme de tous les nombres premiers compris entre 0 et n (n étant inclus)
     * Pour rappel, un nombre est considéré comme premier si et seulement si il est supérieur à 0 et possède exactement
     * deux diviseur : lui même et 1.
     * @param int $n entier strictement positif
     * @return int la somme de tous les nombres premiers jusqu'à $n
     * @throws InvalidArgumentException si $n est <= 0
     */
    public function sumAll(int $n): int
    {
        if ($n <= 0) {
            throw new InvalidArgumentException(self::MSG_NB_NEGATIF);
        }
        $result = 0;
        for ($i = 0; $i <= $n; $i++) {
            if ($this->isPrime($i)) {
                $result += $i;
            }
        }
        return $result;
    }

    /**
     * @param int $n
     * @return bool
     */
    public function isPrime(int $n): bool
    {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= 9; $i++) {
            if($n !== $i && $n %$i === 0) {
                return false;
            }
        }
        return true;
    }

}