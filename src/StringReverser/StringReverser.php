<?php


namespace StringReverser;


class StringReverser
{
    /**
     * Inverse une chaîne de caractère
     * @param string $str
     * @return string
     */
    public function reverse(string $str): string
    {
        $result = '';
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $result .= $str[$i];
        }
        return $result;
    }
}