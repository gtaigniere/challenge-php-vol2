<?php


namespace Steamroller;


class Steamroller
{
    /**
     * Écrire la fonction steamrollArray qui 'aplatit' un tableau de tableau
     * ex : - steamrollArray([[["a"]], [["b"]]]) renvoi ["a", "b"].
     *      - steamrollArray([1, [2], [3, [[4]]]]) renvoi [1, 2, 3, 4].
     * @param array $arr
     * @return array
     */
    public function steamrollArray(array $arr) {
        return $arr;
    }
}