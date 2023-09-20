<?php

<?php

function joinNumbersFromRange($start, $end) {

    $i = $start;
    $result = '';

    while ($i <= $end) {
      
      $result = "{$result}{$i}";

      $i = $i + 1;
      
    };
  
    return "{$result}";
};

var_dump(joinNumbersFromRange(1, 5));


// function joinNumbersFromRange($start, $finish) {

//   $i = $start;
//   $result = '';
  
//   while ($i <= $finish) {

//     print_r($i);
//     print_r("\n");
    
//     $result = "{$result}{$i}";
    
//     $i = $i + 1;
//   };

//     return $result;
// };

// var_dump(joinNumbersFromRange(5, 20));