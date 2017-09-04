function solution($N, $A) {
    // write your code in PHP7.0
    $out = array_fill(0, $N, 0);
    $max = 0;
    $last = 0;
    foreach ($A as $val) {
        if ($val == $N + 1) {
            $max = $last;
        } else {
            $out[$val - 1] = max($out[$val - 1], $max) + 1;
            $last = max($max, $out[$val - 1]);
        }
    }
    for ($i = 0;$i < $N; $i++) {
        $out[$i] = max($max, $out[$i]);     
    }
    return $out;
}
