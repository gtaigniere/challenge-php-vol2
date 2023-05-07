<?php


namespace Steamroller;


use phpDocumentor\Reflection\Types\Array_;

class Steamroller
{
    /**
     * Écrire la fonction steamrollArray qui 'aplatit' un tableau de tableau
     * ex : - steamrollArray([[["a"]], [["b"]]]) renvoi ["a", "b"].
     *      - steamrollArray([1, [2], [3, [[4]]]]) renvoi [1, 2, 3, 4].
     * @param array $arr
     * @return array
     */
    // Pas encore opérationnel
    public function steamrollArray(array $arr) {
        $result = array();
        for ($row = 0; $row < count($arr); $row++) {
            for ($col = 0; $col < count($arr[$row]); $col++) {
                array_push($result, $arr[$row][$col]);
            }
        }
        return $result;
    }
}