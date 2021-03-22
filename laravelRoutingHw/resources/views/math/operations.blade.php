@extends('layout.main')
@section('calculator')

    <h1>Please find your calculation results below</h1>
    <br></br>
    <br></br>

    @if($operation == 'addition') 
        <h2>When you add {{$term1}} to {{$term2}}, you receive {{$result}}.</h2>
    @elseif($operation == 'subtraction')
        <h2>When you subtract {{$term1}}from {{$term2}}, you receive {{$result}}.</h2>
    @elseif($operation == 'multiplication')
        <h2>When you multiply {{$term1}} by {{$term2}}, you receive {{$result}}.</h2>
    @elseif($operation == 'division')
        <h2>When you divide {{$term1}} by {{$term2}}, you receive {{$result}}.</h2>
    @elseif($operation == 'modulo')
        <h2>When you divide {{$term1}} by {{$term2}}, the remainder you receive is {{$result}}.</h2>
    @elseif($operation == 'exponentation')
        <h2>When you raise {{$term1}} to the power of {{$term2}}, you receive {{$result}}.</h2>
    @elseif($operation == 'nthRoot')
        <h2>When you pull the {{$term2}}th root of {{$term1}}, you receive {{$result}}.</h2>
    @endif

@endsection

@section('title') 7 operation calculator @endsection
