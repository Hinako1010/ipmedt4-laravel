<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title></title>
</head>
<body>
<table class="table table-bordered">
  <tr>
    <td>
      {{$user->voornaam}} {{$user->achternaam}}
    </td>
  </tr>
  <tr>
    <td>
      {{$user->email}}
    </td>
  </tr>
  <tr>
    <img src="{{$grafiek->writeToCache("image.png")}}">
  </tr>
</table>
</body>
</html>
