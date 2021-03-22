@extends('layout.main')
@section('calculator')

    <h1>Please find your calculation results below</h1>
    <br></br>
    <br></br>

    @if($addition) 
        <h2>When you add {{$term1}} and {{$term2}}, you receive {{$term1 + $term2}}.</h2>
    @elseif($subtraction)
        <h2>When you subtract {{$term1}}from {{$term2}}, you receive {{$term1 - $term2}}.</h2>
    @elseif($multiplication)
        <h2>When you multiply {{$term1}} by {{$term2}}, you receive {{$term1 * $term2}}.</h2>
    @elseif($division)
        <h2>When you divide {{$term1}} by {{$term2}}, you receive {{$term1 / $term2}}.</h2>
    @elseif($modulo)
        <h2>When you divide {{$term1}} by {{$term2}}, the remainder you receive is {{$term1 % $term2}}.</h2>
    @elseif($exponentation)
        <h2>When you raise {{$term1}} to the power of {{$term2}}, you receive {{pow($term1, $term2)}}.</h2>
    @elseif($nthRoot)
        <h2>When you pull the {{$term2}}th root of {{$term1}}, you receive {{gmp_root($term1, $term2)}}.</h2>
    @endif

@endsection

@section('title') 7 operation calculator @endsection
