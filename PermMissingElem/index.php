funtion solution($A) {
    // write your code in PHP7.0
    sort($A);
    foreach($A as $key => $val) {
        if($val != $key + 1) {
            return $key + 1;
        }
    }
    return count($A) + 1;
}
