@extends('layout.main')

@section('calculator')
    <h1>Calculator</h1>

    <form action="{{route('doMath')}}" method="post">
    
    First operation term: <input type="text" name="term1"><br><br>
    Second operation term: <input type="text" name="term2"><br><br>

    <label for="operations">Choose your operation type: </label>
    <select name="operations" id="operations">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
        <option value="modulo">Modulo</option>
        <option value="exponentation">Exponentation</option>
        <option value="nthRoot">NthRoot</option>
    </select>
    <button type="submit">Calculate</button>
    @csrf

    </form>
    <br>
    <div> Result: {{$result}}</div>
@endsection