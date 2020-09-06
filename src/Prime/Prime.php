<?php


namespace Prime;


use InvalidArgumentException;

class Prime
{
    const MSG_NB_NEGATIF = 'Vous devez fournir un nombre positif';
    /**
     * Retourne la somme de tous les nombres premiers compris entre 0 et n
     * Pour rappel, un nombre est considéré comme premier si et seulement si il est supérieur à 0 et possède exactement
     * deux diviseur : lui même et 1.
     * @param int $n entier strictement positif
     * @return int la somme de tous les nombres premiers jusqu'à $n
     * @throws InvalidArgumentException si $n est <= 0
     */
    public function sumAll(int $n): int
    {
        return $n;
    }
}