<?php

require __DIR__ . '/vendor/autoload.php';

use AhoCorasick\MultiStringMatcher;

// Use the Aho-Corasick algorithm to search for substrings in a string
function searchForWordsInText($words, $text)
{
    $keywords = new MultiStringMatcher($words);
    return $keywords->searchIn($text);
}

function main()
{

    // Clean and format input for search
    $text = strtolower(substr(readline(), 2));
    $words = strtolower(substr(readline(), 2));
    
    $wordList = explode(" ", $words);
    
    // Array to track which words are present
    $isWordPresent = array();
    foreach($wordList as $word)
    {
        $isWordPresent[$word] = false;
    }
    
    $searchResult = searchForWordsInText($wordList, $text);
    
    // Update tracker array using the algorithm results
    foreach($searchResult as $result)
    {
        $isWordPresent[$result[1]] = true;
    }
    
    // Print to stdout
    foreach($isWordPresent as $isPresent)
    {
        print($isPresent? "true\n" : "false\n");
    }
}

main();

?>