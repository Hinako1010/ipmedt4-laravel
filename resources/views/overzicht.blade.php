@if(Auth::check())
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medisch Dagboek</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/calendar.css" rel="stylesheet" type="text/css">

        {{-- Scripts --}}
        <script src="js/calendar.js"></script>

    </head>
    <body>

    <span onclick='document.getElementById("id01").style.display="block"' class='helpicon'><p>?</p></span>
    <span onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"  class='helpicon2'><p><img height="35px" src="{{ URL::to('/icons/iconlogout.png') }}"></p></span>
      
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
              <p>Some text. Some text. Some text.</p>
              <p>Some text. Some text. Some text.</p>
          </div>
      </div>

    </div>
      <div id="calendar" class="conatiner-fluid">
        <div id ="layoutrow" class="row">
          <div class="calendar-left col-xs-12 col-sm-12 col-md-3">
            <div class="container">
              @include('inc.messages')
              <div class="date">
                <h1 id="daynr">{{$daynr}}</h1>
                <h2 id="monthstr">{{$monthstr}}</h2>
              </div>

              <hr>

              <div class="symptoms container">
                <ul id="symptomlist">
                  @foreach($symptoms as $key => $value)
                    @if($key == "bodytemp")
                      @isset($value)
                        <h2>Temperatuur: {{$value}}</h2>
                      @endisset
                    @endif
                  @endforeach
                  <h2>Symptomen:</h2>
                  @foreach($symptoms as $key => $value)
                    @if ($value == 1)
                      {{-- <div class="tooltip"> --}}
                      <li title="{{$key}}" id="{{$key}}_label" class="css-label"></li>

                      {{-- </div> --}}
                    @endif
                  @endforeach
                  @foreach($symptoms as $key => $value)
                    @if ($key == "notes")
                      @isset($value)
                        <div>
                          <h2>Notities:</h2>
                          <p id="notes">{{$value}}</p>
                        </div>
                      @endisset
                    @endif
                  @endforeach
                </ul>
              </div>
              <div class="options container">
                <ul>
                  <a href="/pdf/{{$userid}}" target="_blank" class="btn btn-default"><li>PDF overzicht</li></a>
                  <!-- <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-default"><li>
                    Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form></li>
                  </a> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
@else
<script type="text/javascript">
    window.location = "/login";
</script>
@endif
