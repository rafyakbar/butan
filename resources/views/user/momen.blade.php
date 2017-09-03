<div data-role="panel" id="momen">
    <ul data-role="listview">
        <li data-icon="delete"><a href="#" data-rel="close">Tutup</a></li>
    </ul>
    <br><h3 style="text-align: center">Bagikan momen berhargamu di sini!</h3>
    <form action="" method="post" enctype="multipart/form-data" data-ajax="false">
        {{ csrf_field() }}
        <div class="ui-field-contain">
            <label for="video">Pilih video atau foto</label>
            <input type="file" id="video" name="video" accept="video/mp4,image/jpeg"><br>
            <label for="caption">Tulis captionmu</label>
            <textarea id="caption" name="caption"></textarea>
        </div>
        <input type="submit" value="Bagikan">
    </form>
    <p>Momen yang kamu bagikan akan muncul di halaman beranda</p>
</div>