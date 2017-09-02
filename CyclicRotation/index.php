function solution($A, $K) {
    // write your code in PHP7.0
    for ($i = 0; $i < $K; $i++) {
        $inserted = $A[count($A)-1];
        array_splice($A, 0, 0, $inserted);
        unset($A[count($A)-1]);
    }
    return $A;
}
