@extends('profile.app')
@section('title', 'Page Title')
@section('header')
@parent
<div class="row">
    <nav class="p-tabs">
        <ul class="p-tabs__list" role="tablist">
        <li class="p-tabs__item" role="presentation">
            <a href="#section1" class="p-tabs__link" tabindex="0" role="tab" aria-controls="section1">Profile</a>
        </li>
        <li class="p-tabs__item" role="presentation">
            <a href="#section2" class="p-tabs__link" tabindex="-1" role="tab" aria-controls="section2">Education</a>
        </li>
        <li class="p-tabs__item" role="presentation">
            <a href="#section3" class="p-tabs__link" tabindex="-1" role="tab" aria-controls="section3" aria-selected="true">Career</a>
        </li>
        <li class="p-tabs__item" role="presentation">
            <a href="#section4" class="p-tabs__link" tabindex="-1" role="tab" aria-controls="section4">Messages</a>
        </li>
        </ul>
    </nav>
</div>
@endsection
@section('content')
<div id="app">
    <com-career></com-career>
</div>
@endsection