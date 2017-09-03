@extends('layouts.app')

@section('content')
    <form class="ui-filterable">
        <input id="filterBasic-input" data-type="search" placeholder="Cari berdasarkan nama atau nim">
    </form>
    <ul data-role="listview" data-filter="true" data-input="#filterBasic-input">    
        @foreach(\App\User::orderBy('id')->orderBy('nama')->get() as $item)
            <li><a>{{ $item->id }} | {{ $item->nama }}</a></li>
        @endforeach
    </ul>
@endsection