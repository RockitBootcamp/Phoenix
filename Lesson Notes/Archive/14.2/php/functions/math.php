
<?php 

$aa = 'foo';

if(! preg_match('/oo/', $aa)) {
    // do something interesting
}

function add($a, $b) {
    global $aa;
    return $a + $b;
}

function addr($a, $b) {
    if($a == 0) {
        return $b;
    } else {
        return 1 + addr($a-1, $b);
    }
}

function addl($a, $b) {
    $sum = $b;
    while($a >= 0) {
        $sum++;
        $a--;
    }
    return $sum;
}

// $root = [
//         'value' => 4,
//         'rc' => ['value' => 7, 'rc' => null],
//         'lc' =>
//         ];

function donothing($a, $b) {
    $c = $a + $b;
}

function notquite($a, $b) {
    while($keepgoing) {


        if($result > 100) {
            return $result;
        }
    }
    return null;
}

function output_to_page($params) {
    $output = '';
    while($params) {
        $output .= array_pop($params);
    }
    return $output;
}
$output = output_to_page([1,2,3]);
echo $output;




$val = donothing(3,4);


function traverse_add($node) {
    if($node == null) {
        return 0;
    } else {
        return traverse_add($node['rc']) +
                traverse_add($node['lc']) + 
                $node['value'];
    }
}

function multiply($a, $b) {
    $c = $a * $b;
    return [$c, 4];
}

function factors($num) {
    $factors = [];
    while($notdone) {
        // computer next factor as $f
        $factors[] = $f;
    }
    return $factors;
}


function is_even($n) {
    return ($n % 2 == 0);
}

function is_odd($n) {
    return !is_even($n);
}

function length($array) {
    return count($array);
}

$people = [
    ['name' => 'bob',
    'age' => 34],
    ['name' => 'nancy',
    'age' => 20]
];

function sum_of_peoples_age($p) {

}

$string = "azzabcadefgacbefa";

function find_char_positions($string, $char) {
    $poses = [];
    $start = 0;
    while(($pos = strpos($string, $char, $start)) !== false) {
        $poses[] = $pos;
        $start = $pos+1;
    }

    return $poses;
}

function is_palin($str) {
    $str2 = strrev($str);
    return $str == $str2;
}

function explode_to_char($string) {
    $chars = [];



    return $chars;
}

echo "positions: ";
print_r(find_char_positions($string, "a"));

 ?>