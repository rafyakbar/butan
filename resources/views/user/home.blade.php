@extends('layouts.app')
@section('content')
    <form action="" method="post" enctype="multipart/form-data" data-ajax="false">
        {{ csrf_field() }}
        <textarea id="caption" name="caption" placeholder="Apa yang sedang kamu pikirkan?"></textarea>
        <input type="submit" value="Bagikan" data-inline="true">
    </form>
    <hr style="margin-bottom: 4%">
    <div class="ui-corner-all custom-corners">
        <div class="ui-bar ui-bar-a">
            <h3><a>Nama</a></h3>
        </div>
        <div class="ui-body ui-body-a">
            <p>Content</p>
        </div>
    </div>
@endsection