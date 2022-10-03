<?php

// function readingtimeFilter($content) {
//     $wordsPerMinute = 200;
//     $words = str_word_count(strip_tags($content));
//     $minutesToRead = floor($words / $wordsPerMinute);
//     $min = ($minutesToRead < 1 ? '1' : $minutesToRead);

//     return $min;
// }

use Timber\Timber;
use Timber\Post;

function phpReadingTime() {

    $post = get_post($context);

    $wordsPerMinute = 200;
    $words = str_word_count(strip_tags($context));
    // $words = str_word_count(strip_tags($content));
    // $words = str_word_count( strip_tags($post->$content));
    // $words = str_word_count(strip_tags($post->post_content));
    $minutesToRead = floor($words / $wordsPerMinute);
    $min = ($minutesToRead < 1 ? '1' : $minutesToRead);
    
    $estimated_time = $min . ' MIN' ;

    return $estimated_time;

}
