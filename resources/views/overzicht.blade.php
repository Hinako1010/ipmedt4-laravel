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

        <!-- Styles -->
        <style>
            body {
                font-family: 'Raleway', sans-serif;
            }
            /* begin css kalender */
            ul {list-style-type: none;}
            /* body {font-family: Verdana, sans-serif;} */

            /* Month header */
            .month {
                padding: 70px 0px;
                width: 100%;
                background: #43C5E9;
                text-align: center;
            }

            /* Month list */
            .month ul {
                margin: 0;
                padding: 0;
            }

            .month ul li {
                color: white;
                font-size: 36px;
                font-weight: 100;
                text-transform: uppercase;
                letter-spacing: 3px;
            }

            /* Previous button inside month header */
            .month .prev {
                float: left;
                /* padding-top: 10px; */
                padding-left: 27px;
            }

            /* Next button */
            .month .next {
                float: right;
                padding-right: 27px;
            }

            /* Weekdays (Mon-Sun) */
            .weekdays {
                margin: 0;
                padding: 10px 0;
                background-color:#ddd;
            }

            .weekdays li {
                display: inline-block;
                width: 13%;
                margin-bottom: 15px;
                color: #666;
                text-align: center;
            }

            /* Days (1-31) */
            .days {
                padding: 10px 0;
                background: #eee;
                margin: 0;
            }

            .days li {
                list-style-type: none;
                display: inline-block;
                width: 13%;
                text-align: center;
                margin-bottom: 35px;
                font-size:20px;
                color: #777;
            }

            /* Highlight the "current" day */
            .days li .active {
                padding: 5px;
                background: #FB785B;
                color: white !important
            }
        </style>
    </head>
    <body>
        <div class="">
            <ul class="weekdays">
                 <li><a href="{{ url('/newhome') }}">Home</a></li>
                 <li></li>
                 <li></li>
                 <li>Kalender</li>
                 <li></li>
                 <li></li>
                 <li>Log out</li>
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

                <ul class="days"> 
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li><span class="active"><a href="{{ url('/newentry') }}">10</a></span></li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                
                </ul>
            </div>
        </div>
    </body>
</html>
@endsection
@else
<script type="text/javascript">
    window.location = "/login";
</script>
@endif