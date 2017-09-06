funtion solution($A) {
    // write your code in PHP7.0
    $temp = [];
    foreach($A as $val) {
        $temp[$val] = true;
    }
    return sizeof($temp);
}
