<?php

/**
 * Clean a sentence by removing leading/trailing spaces and converting multiple spaces to single spaces
 * 
 * @param string $sentence The sentence to clean
 * @return string The cleaned sentence
 */
function cleanSentence($sentence) {
    // Remove leading and trailing spaces
    $cleaned = trim($sentence);
    
    // Replace multiple spaces with single space using regular expression
    $cleaned = preg_replace('/\s+/', ' ', $cleaned);
    
    return $cleaned;
}

// Alternative method using str_replace (less efficient for multiple spaces)
function cleanSentenceAlt($sentence) {
    // Remove leading and trailing spaces
    $cleaned = trim($sentence);
    
    // Keep replacing double spaces with single space until no more double spaces exist
    while (strpos($cleaned, '  ') !== false) {
        $cleaned = str_replace('  ', ' ', $cleaned);
    }
    
    return $cleaned;
}