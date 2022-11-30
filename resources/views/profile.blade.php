@extends('layout')
@section('title') Профиль @endsection
@section('main_content')
<?php
use App\Models\Ticket;
$user = auth()->user();
$tickets = new Ticket();
$tickets = $tickets->all()->where('idUser', $user->id);
?>
<div class="container">
  <div class="QmrM1BpKzwJBiWVcQyz7IA==">
          <div class="ATxV1Om0sePp4lDLnAq3uw==">
                  <div class="b1RziSFTnQbb3ZOTu1biwA==">
                          <div class="vPib8WA0Q1LBbqmrmssw9w==">
                                  <div class="jsOTYX0pH3oBjSKDdxqB+g==">
                                          <div class="vM5TY03rTJnyg7crh8SJog==">
                                            @if($user->avatar == null)
                                                  <img src="{{ Storage::url('users/default.png') }}" alt=""
                                                  class="_9Vd+W3TCjDmuEV7tOCemNA==">
                                                  @else
                                                  <img src="{{ Storage::url($user->avatar) }}" alt=""
                                                  class="_9Vd+W3TCjDmuEV7tOCemNA==">
                                                  @endif
                                          </div>
                                  </div>
                                  <div class="utcEQVpG2CxaNe0m6hZgMQ==">
                                          <div class="pIc9rKTJpEdd7VciCWj3iw==">
                                                  <h1 class="zCppf7+M8jUHTA54On7Qbg==">
                                                          {{$user->name}}
                                                  </h1>
                                          </div>
                                  </div>
                                  <div class="_3GrDbIeCB6CT1u2UFMXBug==">
                                          <div class="rcHM9OILKxbxImTkB1pK3w==">
                                                  <ul class="crIyOI3mLKETpDMVzHGm8A==">
                                                          <li class="ch0kxyCKroW+uLE+V2Wwuw==">
                                                                  <div class="ChjoCmoILbNVHvINAaI22w==">
                                                                          Дата регистрации:
                                                                  </div>
                                                                  <div class="PbfbBzFoBaCyzC8lPAjUOg==">
                                                                  {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('d.m.Y')}}
                                                                  </div>
                                                          </li>
                                                  </ul>
                                          </div>
                                  </div>
                          </div>
                  </div>
                  <div class="_9aekm2jQ5+f1Ik8amrZyKw==">
                          <h2 class="BP6fAExrzlfYbjx4KdVO2w==">
                                  Купленные билеты
                          </h2>
                          <div class="+BiLLE7SLOmMkRUMNLiNKg==">
                          @foreach($tickets as $el)
                          {{$el->id}}
                          {{$el->buyDate}}
                          {{$el->status}}
                          <br>
                          @endforeach
                          </div>
                  </div>
          </div>
  </div>
  </div>
@endsection

<style scoped>
  body {
      background-image: initial;
      background-color: rgb(32, 34, 36);
      color: rgb(232, 230, 227);
  }
  .QmrM1BpKzwJBiWVcQyz7IA\=\= {
      min-height: 400px;
      padding-bottom: 24px;
      position: relative;
  }
  .ATxV1Om0sePp4lDLnAq3uw\=\= {
      padding-top: 36px;
  }
  ._2tZYHlF2\+gWqQWR1DpJc8g\=\=, .ATxV1Om0sePp4lDLnAq3uw\=\= {
      margin: 0 auto;
      max-width: 1300px;
      padding-left: 24px;
      padding-right: 24px;
      width: 100%;
  }
  .b1RziSFTnQbb3ZOTu1biwA\=\= {
      position: relative;
  }
  .vPib8WA0Q1LBbqmrmssw9w\=\= {
      grid-gap: 0 24px;
      display: grid;
      gap: 0 24px;
      grid-template-areas:
          "POSTER TITLE"
          "POSTER DESCRIPTION"
          "POSTER BUY";
      grid-template-columns: 1fr 3fr;
      position: relative;
  }
  .vPib8WA0Q1LBbqmrmssw9w\=\= .jsOTYX0pH3oBjSKDdxqB\+g\=\= {
      grid-area: POSTER;
  }
  .vM5TY03rTJnyg7crh8SJog\=\= {
      min-height: 450px;
      position: relative;
  }
  .vM5TY03rTJnyg7crh8SJog\=\= .AXbGlqIW8-xvJqlrhJG06g\=\= {
      position: absolute;
      right: 16px;
      top: 16px;
  }
  .vM5TY03rTJnyg7crh8SJog\=\= ._9Vd\+W3TCjDmuEV7tOCemNA\=\=, .vM5TY03rTJnyg7crh8SJog\=\= .xyAnrq\+0QwFpsmgTUiGJFg\=\= {
      border-radius: 16px;
      height: auto;
      overflow: hidden;
      width: 100%;
  }
  .BP6fAExrzlfYbjx4KdVO2w\=\= {
      margin-bottom: 25px;
      margin-top: 25px;
  }
  .vPib8WA0Q1LBbqmrmssw9w\=\= .utcEQVpG2CxaNe0m6hZgMQ\=\= {
      grid-area: TITLE;
  }
  .vPib8WA0Q1LBbqmrmssw9w\=\= ._3GrDbIeCB6CT1u2UFMXBug\=\= {
      grid-area: DESCRIPTION;
  }
  .pIc9rKTJpEdd7VciCWj3iw\=\= .zCppf7\+M8jUHTA54On7Qbg\=\= {
      margin: 0;
      padding-bottom: 8px;
  }
  .rcHM9OILKxbxImTkB1pK3w\=\= {
      padding-top: 16px;
  }
  .\+BiLLE7SLOmMkRUMNLiNKg\=\= {
      margin-bottom: 16px;
  }
  .nxntVeDQv-z4IZfaycC34A\=\= {
      height: 400px;
      width: 100%;
  }
  .rcHM9OILKxbxImTkB1pK3w\=\= .crIyOI3mLKETpDMVzHGm8A\=\= {
      grid-gap: 12px;
      display: grid;
      gap: 12px;
      margin: 0 0 16px;
      padding: 0;
  }
  .rcHM9OILKxbxImTkB1pK3w\=\= .ch0kxyCKroW\+uLE\+V2Wwuw\=\= {
      grid-gap: 24px;
      display: grid;
      gap: 24px;
      grid-template-columns: 1fr 2fr;
  }
  .ybbyOjyra9OK6pEYs0GTwA\=\=, .rcHM9OILKxbxImTkB1pK3w\=\= .ch0kxyCKroW\+uLE\+V2Wwuw\=\= .ChjoCmoILbNVHvINAaI22w\=\= {
      font-size: 16px;
      font-weight: 700;
      line-height: 20px;
  }
  .kaRdZQDlCIuHQz5e4H5f4A\=\=, .rcHM9OILKxbxImTkB1pK3w\=\= .ch0kxyCKroW\+uLE\+V2Wwuw\=\= .PbfbBzFoBaCyzC8lPAjUOg\=\=, .pIc9rKTJpEdd7VciCWj3iw\=\= .ZwQnWmCYFum0KJ-M7T89Pw\=\=, .pIc9rKTJpEdd7VciCWj3iw\=\= .tUe08bFdnrQqDUo8hGr8LA\=\= span, ._7TDk-AT3HlaUo5eO907zFg\=\= {
      font-size: 16px;
      line-height: 24px;
  }
  .vPib8WA0Q1LBbqmrmssw9w\=\= .Ro14HRU8UV7tl9Nli0GiUg\=\= {
      grid-area: BUY;
  }
  .s0yJuTknJkrvvHvKRx1h8w\=\= {
      grid-gap: 24px;
      display: grid;
      gap: 24px;
      grid-template-columns: 1fr 2fr;
      padding-top: 24px;
  }
  
  .ihOPr5gPPBXS8OHkFFwM2w\=\= {
      border: 1px solid red;
      border-radius: 8px;
      padding: 8px;
      text-align: center;
      color: azure;
      text-decoration: none;
      cursor: pointer;
  }
  </style>
