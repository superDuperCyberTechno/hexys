<?php


$num_of_names = 100;
while ($num_of_names--) {
    $number = 100 - $num_of_names;
    if( $number < 10) {
        $number = "0{$number}";
    }

    echo $number . ': ' . generate_name() . "\n";
}

function generate_name($length = 7)
{
    $vowels = str_split('eyuioa');
    $syllables = str_split('qwrtpasdfghjklzxcvbnm');

    $name = '';
    $last_char = random_int(0, 1) ? 'a' : 'b';

    while ($length--) {
        if (in_array($last_char, $vowels)) {
            $last_char = $syllables[array_rand($syllables)];
        } else {
            $last_char = $vowels[array_rand($vowels)];
        }

        $name .= $last_char;
    }

    return ucwords($name);
}
