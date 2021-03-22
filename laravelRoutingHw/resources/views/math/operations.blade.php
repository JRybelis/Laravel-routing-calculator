<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematical operations</title>
</head>
<body>
    <h1>Please find your calculation results below</h1>
    <br></br>
    <br></br>

    @if($addition) 
        <h2>When you add {{$term1}} and {{$term2}}, you receive {{$term1 + $term2}}.</h2>
    @endif

    @if($subtraction)
        <h2>When you subtract {{$term1}}from {{$term2}}, you receive {{$term1 - $term2}}.</h2>
    @endif

    @if($multiplication)
        <h2>When you multiply {{$term1}} by {{$term2}}, you receive {{$term1 * $term2}}.</h2>
        
    @endif

    @if($division)
        <h2>When you divide {{$term1}} by {{$term2}}, you receive {{$term1 / $term2}}.</h2>
    @endif

    @if($modulo)
        <h2>When you divide {{$term1}} by {{$term2}}, the remainder you receive is {{$term1 % $term2}}.</h2>
    @endif

    @if($exponentation)
        <h2>When you raise {{$term1}} to the power of {{$term2}}, you receive {{pow($term1, $term2)}}.</h2>
        
    @endif

    @if($nthRoot)
        <h2>When you pull the {{$term2}}th root of {{$term1}}, you receive {{gmp_root($term1, $term2)}}.</h2>
    @endif

</body>
</html> 



