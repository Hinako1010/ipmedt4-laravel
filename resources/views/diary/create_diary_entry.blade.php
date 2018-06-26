@extends('layouts.app')
@section('css')
  <link href="css/create_entry.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="/home"><span class="btn btn-default">&larr; Terug naar kalender</span></a>
      <h1>Vandaag: {{$daynr}} {{$monthstr}}</h1>
    </div>

    <div class="panel-body">
      {!!Form::model($diaryentry, ['action'=>'DiaryEntryController@store'])!!}
        <div class="form-group">
          <label id="bodytemp_label" for="bodytemp"><h2>Lichaamstemperatuur</h2></label>
          <input id="bodytemp" type="number" min="25" max="45" step="0.1" name="bodytemp" value="37.0">
        </div>
        <div class="row">
          <div class="col-xs-12"><h2>Huidaandoeningen</h2></div>
          <div class="form-group col-xs-4">
            <input id="cut" type="checkbox" class="css-checkbox" name="cut" value="1">
            <label id="cut_label" for="cut" class="css-label"></label>
            <h5>Snee</h5>
          </div>
          <div class="form-group col-xs-4">
            <input id="tickbite" type="checkbox" class="css-checkbox"  name="tickbite" value="1">
            <label id="tickbite_label" for="tickbite" class="css-label"></label>
            <h5>Tekenbeet</h5>

          </div>
          <div class="form-group col-xs-4">
            <input id="skinrash" type="checkbox" name="skinrash" value="1" class="css-checkbox">
            <label id="skinrash_label" for="skinrash" class="css-label"></label>
            <h5>Huiduitslag</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12"><h2>Bovenlichaam</h2></div>
          <div class="form-group col-xs-4">
            <input id="headache" type="checkbox" class="css-checkbox" name="headache" value="1">
            <label id="headache_label" for="headache" class="css-label"></label>
            <h5>Hoofdpijn</h5>
          </div>
          <div class="form-group col-xs-4">
            <input id="shoulderpain" type="checkbox" class="css-checkbox" name="shoulderpain" value="1">
            <label id="shoulderpain_label" for="shoulderpain" class="css-label"></label>
            <h5>Gewrichtspijn (schouder)</h5>
          </div>
          <div class="form-group col-xs-4">
            <input id="elbowpain" type="checkbox" class="css-checkbox" name="elbowpain" value="1">
            <label id="elbowpain_label" for="elbowpain" class="css-label"></label>
            <h5>Gewrichtspijn (elleboog)</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12"><h2>Onderlichaam</h2></div>
          <div class="form-group col-xs-4">
            <input id="hippain" type="checkbox" class="css-checkbox" name="hippain" value="1">
            <label id="hippain_label" for="hippain" class="css-label"></label>
            <h5>Pijn aan heupen</h5>
          </div>
          <div class="form-group col-xs-4">
            <input id="thighpain" type="checkbox" class="css-checkbox" name="thighpain" value="1">
            <label id="thighpain_label" for="thighpain" class="css-label"></label>
            <h5>Pijn aan bovenbeen</h5>
          </div>
          <div class="form-group col-xs-4">
            <input id="kneepain" type="checkbox" class="css-checkbox" name="kneepain" value="1">
            <label id="kneepain_label" for="kneepain" class="css-label"></label>
            <h5>Gewrichtspijn (knie)</h5>
          </div>
          <div class="form-group col-xs-4">
            <input id="shinpain" type="checkbox" class="css-checkbox" name="shinpain" value="1">
            <label id="shinpain_label" for="shinpain" class="css-label"></label>
            <h5>Pijn aan onderbeen</h5>
          </div>
        </div>
        <div class="form-group">
          <h2>Notities</h2>
          <label id="notes_label" for="notes"></label>
          <input id="notes" type="textarea" placeholder="Things to note..." name="notes" value="">
        </div>

        {{Form::submit('Opslaan', ['class'=>'btn btn-success pull-right'])}}
      {!!Form::close() !!}
    </div>
  </div>
@endsection
