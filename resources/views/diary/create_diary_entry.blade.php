@extends('layouts.app')

@section('content')
  <h1>Vandaag: {{$daynr}} {{$monthstr}}</h1>

  <span id="savednote" style="opacity:0;">Info saved</span><br>

  {!!Form::model($diaryentry, ['action'=>'DiaryEntryController@store'])!!}
    <div class="form-group">
      <label id="bodytemp_label" for="bodytemp">Lichaamstemperatuur</label>
      <input id="bodytemp" type="number" min="25" max="45" step="0.1" value="37.0" onchange="saveformdata()">
    </div>
    <div class="row">
      <div class="form-group col-xs-4">
        <input id="cut" type="checkbox" class="css-checkbox" onchange="saveformdata()">
        <label id="cut_label" for="cut" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="tickbite" type="checkbox" class="css-checkbox" onchange="saveformdata()">
        <label id="tickbite_label" for="tickbite" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="skinrash" type="checkbox" class="css-checkbox">
        <label id="skinrash_label" for="skinrash" class="css-label"></label>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-4">
        <input id="headache" type="checkbox" class="css-checkbox">
        <label id="headache_label" for="headache" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="shoulderpain" type="checkbox" class="css-checkbox">
        <label id="shoulderpain_label" for="shoulderpain" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="elbowpain" type="checkbox" class="css-checkbox">
        <label id="elbowpain_label" for="elbowpain" class="css-label"></label>
      </div>
    </div>
    <div class="row">
      <div class="form-grou col-xs-4">
        <input id="hippain" type="checkbox" class="css-checkbox">
        <label id="hippain_label" for="hippain" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="thighpain" type="checkbox" class="css-checkbox">
        <label id="thighpain_label" for="thighpain" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="kneepain" type="checkbox" class="css-checkbox">
        <label id="kneepain_label" for="kneepain" class="css-label"></label>
      </div>
      <div class="form-group col-xs-4">
        <input id="shinpain" type="checkbox" class="css-checkbox">
        <label id="shinpain_label" for="shinpain" class="css-label"></label>
      </div>
    </div>

    {{Form::submit('submit')}}
  {!!Form::close() !!}
@endsection
