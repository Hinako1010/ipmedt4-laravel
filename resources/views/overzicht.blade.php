@if(Auth::check())

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Overzicht</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/calendar.css" rel="stylesheet" type="text/css">

        {{-- Scripts --}}
        <script src="js/calendar.js"></script>

    </head>
    <body>
      @include('inc.messages')

      <div id="calendar">
        <div class="calendar-left">
          <div`class="container">
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
