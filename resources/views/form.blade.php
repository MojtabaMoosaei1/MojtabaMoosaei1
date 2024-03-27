<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
  Welcomm Laravel
</h1>
{{----------------------------------------------------------------------}}

{{--}} @foreach ($user as $item)
    {{ $item }}
@endforeach -->

{{----------------------------------------------------------------------}}

{{-- @forelse ($user as $item)
{{ $item }}

@empty

{{"empty"}}

@endforelse -->
{{----------------------------------------------------------------------}}
@foreach($user as $key => $value)
  {{$key . '=>' . $value }}<br>

@endforeach


<form action="{{route('home.store')}}" method="POST" style="margin:100px">
   @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
{{----------------------------------------------------------------------}}

</body>
</html>