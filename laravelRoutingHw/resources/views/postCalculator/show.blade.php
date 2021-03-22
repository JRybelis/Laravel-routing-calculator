@extends('layout.main')

@section('calculator')
    <h1>Calculator</h1>

    <from action="{{route('doMath')}}" method="post">
    <div>{{$result}}</div>
    
    First operation term: <input type="text" name="term1">
    Second operation term: <input type="text" name="term2">
    <button type="submit">Calculate</button>
    @csrf

    </form>
@endsection