<?php


namespace PalindromeChecker;


class PalindromeChecker
{
    const UNWANTEDS = [
        '-', '_', '.', ',', ';', ':', '?', '!', ' ',
        'é', 'è', 'ê', 'ë', 'à', 'â', 'ä', 'î', 'ï', 'ù', 'û', 'ü', 'ô', 'ö'
    ];

    /**
     * Vérifie qu'une string est un palindrome.
     * Un palindrome est un mot ou groupe de mots qui peut se lire indifféremment de gauche à droite ou de droite
     * à gauche en ignorant la punctuation, la casse, et les espaces (ex. la mariée ira mal).
     * @param string $str
     * @return bool
     */
    public function check(string $str): bool
    {
        $str = strtolower($str);
        $i = 0;
        $str = $this->delAllCharNotAlpha($str);
        $len = strlen($str);
        $isPalindrome = true;
        while ($isPalindrome && $i < $len) {
            $isPalindrome = $str[$i] === $str[$len - 1 - $i];
            $i++;
        }
        return $isPalindrome;
    }

    /**
     * @param string $chaine
     * @return string
     */
    public function delAllCharNotAlpha(string $chaine): string
    {
        $result = '';
        $len = strlen($chaine);
        for ($i = 0; $i < $len; $i++) {
            $current = $chaine[$i];
            if (array_key_exists($current, self::UNWANTEDS)) {
                $result .= strtolower(self::UNWANTEDS[$current]);
            } elseif (ctype_alpha($current)) {
                $result .= strtolower($current);
            }
        }
        return $result;
    }
}