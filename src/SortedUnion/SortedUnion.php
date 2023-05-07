<?php


namespace SortedUnion;


class SortedUnion
{

    /**
     * Écrire la fonction sort qui prend en paramètre un nombre variable de tableaux d'entiers
     * et retourne un nouveau tableau d'entiers uniques triés par ordre croissants
     * @param array ...$arr
     * @return array
     */
    public function sort(array ...$arr): array
    {
        $resTmp = [];
        $result = [];
        foreach ($arr as $tab) {
            $resTmp = array_merge($resTmp, $tab);
        }
        $resTmp = array_unique($resTmp);
        sort($resTmp);
        for ($i = 0; $i < count($resTmp); $i++) {
            $result[] = $resTmp[$i];
        }
        return $result;
    }
}