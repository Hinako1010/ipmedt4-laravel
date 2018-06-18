<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title></title>

    <style>
        body {
            background-color: none;
        }
        #grafieken{
            margin-bottom: 8px;
        }
    </style>
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
        <td><br><br><u>Symptomen</u><br><br>
        - Onverklaarbare koude rillingen<br>
        - Pijnlijke keel<br>
        - Maagklachten<br>
        - Hartkloppingen<br>
        - Pijn in de borstkas<br>
        - Hoofdpijn<br>
        - Pijn of jeuk in oren<br>
        - Pijn in de onderbuik<br><br><br></td>



    </tr>
  <tr id="grafieken">
      <td>
          <img src="https://i.imgur.com/GEZWWFo.png" height="200" width="350">
      </td>
      <td><img src="https://i.imgur.com/fmczBhu.png" height="200" width="350"></td>
  </tr>



</table>
</body>
</html>
