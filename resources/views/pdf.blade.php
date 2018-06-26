<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title></title>

    <style>
        body {
            background-color: none;
            border-width: 1px;
            border-style: dotted;
        }
        #grafieken{
            margin-bottom: 8px;
        }
        #tabelletje{
            padding: 10px;
        }

    </style>
</head>
<body>
<table id="tabelletje" class="table table-bordered">
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
    <td style="color:red;">
    <br>
         Het wordt aangeraden om naar de huisarts te gaan!
    </td>
  </tr>
    <tr>
        <th><br><br><u>Symptomen</u></th>
        <th><br><br><u>Hoeveelheid dagen</u></th>
    </tr>
    <tr>
        <td>Onverklaarbare koude rillingen</td>
        <td>3 dagen</td>
    </tr>
    <tr>
        <td>Pijnlijke keel</td>
        <td>1 dag</td>
    </tr>
    <tr>
        <td>Maagklachten</td>
        <td>3 dagen</td>
    </tr>
    <tr>
        <td>Hartkloppingen</td>
        <td>1 dag</td>
    </tr>
    <tr>
        <td>Pijn in de borstkas</td>
        <td>1 dag</td>
    </tr>
    <tr>
        <td>Hoofdpijn</td>
        <td>5 dagen</td>
    </tr>
    <tr>
        <td>Pijn of jeuk in oren</td>
        <td>1 dag</td>
    </tr>
    <tr>
        <td>Pijn in de onderbuik<br><br><br></td>
        <td>3 dagen<br><br><br></td>
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
