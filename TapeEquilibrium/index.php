funtion solution($A) {
    // write your code in PHP7.0
    $sum = array_sum($A);
    $left = $A[0];
    $right = $sum - $left;
    $min = abs($left - $right);
    for ($P = 1; $P < count($A)-1; $P++ ) {
        $left += $A[$P]; 
        $right -= $A[$P];
        $difference = abs($left - $right);
        if ($difference < $min) $min = $difference;
    }
    return $min;
}
