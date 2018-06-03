@extends('layouts.app')

@section('content')
  <h1>Vandaag: {{$daynr}} {{$monthstr}}</h1>

  {!!Form::model($diaryentry, ['action'=>'DiaryEntryController@store'])!!}
    {{Form::token()}}
    <div class="form-group">
      <label for="test">test123</label>
      <input id="test" type="text">
    </div>
    <div class="form-group">
      <input id="headache" type="checkbox" class="css-checkbox">
      <label id="headache_label"for="headache" class="css-label"></label>
    </div>
    <div class="form-group">
      <input id="shoulderpain" type="checkbox" class="css-checkbox">
      <label id="shoulderpain_label"for="shoulderpain" class="css-label"></label>
    </div>
    <div class="form-group">
      <input id="elbowpain" type="checkbox" class="css-checkbox">
      <label id="elbowpain_label"for="elbowpain" class="css-label"></label>
    </div>
    {{Form::submit('submit')}}
  {!!Form::close() !!}
@endsection
