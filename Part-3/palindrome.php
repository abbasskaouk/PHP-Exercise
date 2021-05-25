<?php
    function isPalindrome ($inputWord){
        //strrev("Hello");  olleH
        //strtolower("Hello WORLD.");   hello world
        $word = strtolower($inputWord);
        $reversedword = strrev($word);
        if($reversedword == $word){
            echo "Your word is : " . $word ;
            echo "<br>";
            echo "The inverse is : " .$reversedword ;
            echo "<br>";
            echo "Palindrome";
        }
        else {
            echo "Your is : " . $word ;
            echo "<br>";
            echo "The inverse is : " .$reversedword ;
            echo "<br>";
            echo "Not Palindrome";
        }
    }

    echo isPalindrome("deed");
?>