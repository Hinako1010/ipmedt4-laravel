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

            <div class="symptoms">
              <h2>Bodytemp: {{$symptoms->bodytemp}}</h2>
              <ul>

              </ul>
            </div>

            <div>
              <ul>
                <li><a href="{{ url('/pdf') }}">PDF</a></li>
                <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form></li>
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
