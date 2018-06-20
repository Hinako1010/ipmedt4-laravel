@if(Auth::check())

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Overzicht</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/calendar.css" rel="stylesheet" type="text/css">

        {{-- Scripts --}}
        <script src="js/calendar.js"></script>

    </head>
    <body>

      <div id="calendar">
        <div class="calendar-left">
          @include('inc.messages')
          <div class="container">

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
          </div>
          <div class="options container">
            <ul>
              <a href="/pdf/{{$userid}}" target="_blank"><li class="well well-sm">PDF overzicht</li></a>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><li class="well well-sm">
                Logout
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form></li>
            </a>
            </ul>
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
