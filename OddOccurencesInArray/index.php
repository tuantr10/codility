function solution($A) {
    // write your code in PHP7.0
    $B = [];
    foreach ($A as $item) {
        if(!array_key_exists($item, $B)) {
            $B[$item] = true;
        } else {
            unset($B[$item]);
        }
    }
    return array_keys($B)[0];
}
