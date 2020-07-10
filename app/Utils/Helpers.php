<?php
/**
 * Generate random values that are normally distributed
 */
function generateScore($min, $max, $std_deviation = 12,$step=1) {
    $rand1 = (float)mt_rand()/(float)mt_getrandmax();
    $rand2 = (float)mt_rand()/(float)mt_getrandmax();
    $gaussian_number = sqrt(-2 * log($rand1)) * cos(2 * M_PI * $rand2);
    $mean = ($max + $min) / 2;
    $random_number = ($gaussian_number * $std_deviation) + $mean;
    $random_number = round($random_number / $step) * $step;
    if($random_number < $min || $random_number > $max) {
        $random_number = generateScore($min, $max,$std_deviation);
    }
    return $random_number;
}

/**
 * Get n random values with an average of x
 */
function getRandomNumbersWithAverage($target_average, $n, $min=40, $max=100)
{

  if($min>$max) list($min, $max) = array($max, $min);
  if($target_average<$min || $target_average>$max) return false;
  else if($target_average==$min) return array_fill(0, $n, $min);
  else if($target_average==$max) return array_fill(0, $n, $max);

  if($n<1) return false;
  else if($n==1) return array($target_average);
  else
  {
    $numbers = array();
    for($i=0;$i<$n;$i++)
    {
      $sum = array_sum($numbers);
      $average = $i ? $sum/($i+1) : ($min+$max)/2;
      $contrived_number = $target_average*($i+1) - $sum;
      // Last one must be contrived
      if($i==$n-1) $new_number = ceil($contrived_number); // Round up
      else
      {
        // The tolerance gets smaller with iteration
        $tolerance = ($max-$min)*(1-($i/($n-1)));
        $temp_min = ($contrived_number-$tolerance);
        if($temp_min<$min) $temp_min = $min;
        $temp_max = ($contrived_number+$tolerance);
        if($temp_max>$max) $temp_max = $max;
        $new_number = mt_rand($temp_min, $temp_max);
      }
      if($new_number==0) $new_number = 0; // Handle -0
      $numbers[] = $new_number;
    }
    // Since the numbers get more contrived towards the end, it might be nice to shuffle
    shuffle($numbers);
    return $numbers;
  }
}