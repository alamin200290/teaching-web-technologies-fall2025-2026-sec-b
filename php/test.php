<?php

    $name = "alamin";
    $id = 123;
    $cgpa = 3.5;

    $std = ['alamin', $id, $cgpa];
    $std = array($name, $id, $cgpa);

    $stds = [
        ['alamin', '1', '3.5'],
        ['alamin', '2', '3.5'],
        ['alamin', '4', '3.5'],
        ['alamin', '5', '3.5']
    ];

    $stds[3][2];

    $std = ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5];
    $std['cgpa'];

    $stds = [
        's1'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5],
        's2'=>['name'=>'xyz', 'id'=>2, 'cgpa'=>2.5],
        's3'=>['name'=>'abc', 'id'=>3, 'cgpa'=>4.0]
    ];

    // $stds['s3']['cgpa'];

    // function sum($a, $b){
    //     return $a+$b;
    // }

    // sum(10,20);

    for($i=0; $i<10; $i++){
        echo "<p>".$name."</p>";
    }

    //echo "Test"."abc {$name} test";
    //print('test');
?>

<h2 style='color: red' onclick="alert('test')"><?php if($name !==""){echo $name;}else{ echo "null";} ?> </h2>

<?php 

    echo "Testing another php section";
?>