@extends('layouts.front')

@section('content') 
<div class="container">
        <hr color="#c0c0c0">
<h2>プロフィール</h2>
@if ($profile !=NULL)
  <div class="row">
  <div class="text col-md-6">
      氏名
      </div>
 <div class="text col-md-6">
      {{$profile->name}}
      </div>
      <div class="row">
  <div class="text col-md-6">
      性別
      </div>
 <div class="text col-md-6">
      {{$profile->gender}}
      </div>
      <div class="row">
  <div class="text col-md-6">
      趣味
      </div>
 <div class="text col-md-6">
      {{$profile->hobby}}
      </div>
      <div class="row">
  <div class="text col-md-6">
      自己紹介
      </div>
 <div class="text col-md-6">
      {{$profile->introductions}}
      </div>
@else
プロフィールが見つかりません
@endif
</div>        
@endsection