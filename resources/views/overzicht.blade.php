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
<<<<<<< HEAD
    @if(Session::has('msg'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Heads Up!</strong> {!!Session::get('msg')!!}
        </div>
    @endif
      <div class="">
          <ul class="weekdays">
               <li><a href="{{ url('/pdf') }}">PDF</a></li>
               <li></li>
               <li></li>
               <li>Kalender</li>
               <li></li>
               <li></li>
               <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                   Logout
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form></li>
          </ul>
          <div class="month">
              <ul>
              <li class="prev">&#10094;</li>
              <li class="next">&#10095;</li>
              <li>{{$monthstr}}<br><span>2018</span></li>
              </ul>
              </div>

              <ul class="weekdays">
              <li>Mo</li>
              <li>Tu</li>
              <li>We</li>
              <li>Th</li>
              <li>Fr</li>
              <li>Sa</li>
              <li>Su</li>
              </ul>
=======
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
>>>>>>> 3c9665f8f0b25649d33062ea3596f028bf17ee38


    </body>
</html>
@else
<script type="text/javascript">
    window.location = "/login";
</script>
@endif
