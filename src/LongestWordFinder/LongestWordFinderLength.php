<?php


namespace LongestWordFinder;


class LongestWordFinderLength
{

    /**
     * Renvoie la taille du mot le plus long dans la chaine fournie sans utiliser la fonction explode
     * @param string $str
     * @return int
     */
    public function find(string $str): int
    {
        $compteur = 0;
        $max = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == ' ') {
                if ($compteur > $max) {
                    $max = $compteur;
                }
                $compteur = 0;
            } else {
                $compteur++;
            }
        }
        return $compteur > $max ? $compteur : $max;
    }
}