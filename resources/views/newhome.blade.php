
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medisch Dagboek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #9febf4; */
                background-color: #fdfdfd;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .mouse:hover{
                
                cursor: default;

            }

            /* .full-height {
                height: 100vh;
            } */

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
                font-weight: 600;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .button1 {
                color: #fff;
                background-color: #FB785B;
                border-color: #636b6f;
                margin-top: 35px;
                margin-bottom: 30px;
                width: 226px;
                height: 47px;
                font-size: 18px;
            }
            .button {
                color: #fff;
                background-color: #43C5E9;
                border-color: #636b6f;
                margin-bottom: 30px;
                width: 226px;
                height: 47px;
                font-size: 18px;
            }
            .homeafb1{
                height: 125px;
            }
            .homeafb12{
                height: 25px;
            }
            .homeafb{
                height: 90px;
            }
            .homeafb3{
                height: 150px;
            }
            .homeafb4{
                height: 120px;
            }
            .homeafb2{
                height: 28px;
                position: absolute;
                right: 0px;
                margin-top: -10px;
                padding-right: 10px;

            }
            .wit{
                color: white;
            }
            klik{
                border-bottom:1px #dedede solid;
            }
        </style>

        <script type="text/javascript">

            var onthouden="aan" 		// actuele status bijhouden met sessie-cookie (aan/uit)
            var vorige_verbergen="ja"   // bij nieuw item vorige geopende item dichtvouwen(ja/nee)

            if (document.getElementById){
            document.write('<style type="text/css">')
            document.write('.wisselen{display:none;}')
            document.write('</style>')}

            function getElementbyClass(classname){
            ophalen=new Array()
            var teller=0
            var alleTags=document.all? document.all : document.getElementsByTagName("*")
            for (i=0; i<alleTags.length; i++){
            if (alleTags[i].className==classname)
            ophalen[teller++]=alleTags[i]}}

            function dichtvouwen(omit){
            var teller=0
            while (ophalen[teller]){
            if (ophalen[teller].id!=omit)
            ophalen[teller].style.display="none"
            teller++}}

            function uitvouwen(cid){
            if (typeof ophalen!="undefined"){
            if (vorige_verbergen=="ja")
            dichtvouwen(cid)
            document.getElementById(cid).style.display=(document.getElementById(cid).style.display!="block")? "block" : "none"}}

            function vernieuwen(){
            dichtvouwen("alles")
            selectedItem=getselectedItem()
            selectedComponents=selectedItem.split("|")
            for (i=0; i<selectedComponents.length-1; i++)
            document.getElementById(selectedComponents[i]).style.display="block"}

            function get_cookie(Name) { 
            var search = Name + "="
            var returnvalue = "";
            if (document.cookie.length > 0) {
            offset = document.cookie.indexOf(search)
            if (offset != -1) { 
            offset += search.length
            end = document.cookie.indexOf(";", offset);
            if (end == -1) end = document.cookie.length;
            returnvalue=unescape(document.cookie.substring(offset, end))}}
            return returnvalue;}

            function getselectedItem(){
            if (get_cookie(window.location.pathname) != ""){
            selectedItem=get_cookie(window.location.pathname)
            return selectedItem}
            else return ""}

            function status_opslaan(){
            var teller=0, selectedItem=""
            while (ophalen[teller]){
            if (ophalen[teller].style.display=="block")
            selectedItem+=ophalen[teller].id+"|"
            teller++}
            document.cookie=window.location.pathname+"="+selectedItem}

            function do_onload(){
            getElementbyClass("wisselen")
            if (onthouden=="aan" && typeof ophalen!="undefined")
            vernieuwen()}

            if (window.addEventListener)
            window.addEventListener("load", do_onload, false)
            else if (window.attachEvent)
            window.attachEvent("onload", do_onload)
            else if (document.getElementById)
            window.onload=do_onload

            if (onthouden=="aan" && document.getElementById)
            window.onunload=status_opslaan

            </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!-- <a href="{{ route('calendar') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> -->

                    @endauth
                </div>
            @endif

            <div class="content">

        

                    <!-- <img class="homeafb12" src="{{ URL::to('/icons/logo.png') }}"> -->
                    <br>
                    <br>
                    
                    <img class="homeafb1" src="{{ URL::to('/icons/dagboek.png') }}">
                    <img class="homeafb" src="{{ URL::to('/icons/dokter.png') }}">

                <div class="title m-b-md">
                    Medisch Dagboek
                </div>

                <div class="infotekst">
                    <p style="font-weight: bold;">
                        Welkom bij Medisch Dagboek!<br>
                        Hier kun je al je medische gegevens <br>
                        gemakkelijk bijhouden. <br>
                     
                    </p>
                </div>   

               <p class="mouse" onClick="uitvouwen('sc1')" style="cursor:hand; font-weight: bold; text-decoration: underline;">Klik hier voor meer info</p>
                <div id="sc1" class="wisselen">
                
               

                <div class="infotekst">
                <img class="homeafb3" src="{{ URL::to('/icons/iconkal3.png') }} " >
                    <p style="font-weight: bold;">
                        Overzichtelijk maandoverzicht van je huidige medische gegevens. <br>
                    </p>
                </div>   
                

               <div class="infotekst">
               <img class="homeafb3" src="{{ URL::to('/icons/iconkal.png') }} " >               
                    <p style="font-weight: bold;">
                    Waarbij je gemakkelijk per dag je symtomen kunt invullen.
                    </p>
                </div>   
                

                <div class="infotekst">
                <img class="homeafb4" src="{{ URL::to('/icons/icongaf.png') }} " >               
                    <p style="font-weight: bold;">
                        Genereer samenvatting in de vorm van PDF van je klachten. <br>
                        Die je naar je huistart kunt sturen/ meenemen. <br>
                    </p>
                </div>   
                  

                <div class="infotekst">
                <img class="homeafb4" src="{{ URL::to('/icons/icondocter.png') }} " >
                    <p style="font-weight: bold;">
                        Hierdoor kan je huisart snel je klachten van een afgelopen periode inzien <br>
                        en je geen beter en gerichter consult geven.<br>
                    </p>
                </div>   
                </div>
                                            

                <div class="links">
                    <form method="get" action="/login">
                      <button class="button1" >Login</button>
                    </form>
                    <form method="get" action="/register" >
                      <button class="button">Of meld je aan</button>
                    </form>
                </div>
                <img class="homeafb12" src="{{ URL::to('/icons/logo.png') }}">
                <br>
                <br>
            </div>
        </div>
    </body>
</html>
