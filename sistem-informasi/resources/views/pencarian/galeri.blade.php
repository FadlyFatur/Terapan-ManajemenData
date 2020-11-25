@extends('layout.main')
@section('title','Galeri')
@section('halaman','Galeri')

@section('content')
<div class="container">
    <!-- <a class="chocolat-image" href="assets/img/news/img05.jpg" title="image caption a">
        <img src="assets/img/news/img05.jpg" />
    </a> -->
    <!-- <a class="chocolat-image" href="img/b.jpg" title="image caption b"> -->
         <!-- you can display a thumbnail here : <img src="thumb/b.jpg" /> -->
    <!-- </a> -->

    <div class="chocolat-parent" data-chocolat-title="set title">
      <a class="chocolat-image" href="assets/img/news/img05.jpg" title="caption image 1">
          <img class="chocolat-open" width="100" src="assets/img/news/img05.jpg" />
      </a>
      <a class="chocolat-image" href="assets/img/news/img01.jpg" title="caption image 2">
          <img width="100" src="assets/img/news/img01.jpg" />
      </a>
      <a class="chocolat-image" href="assets/img/news/img02.jpg.jpg" title="caption image 3">
          <img width="100" src="assets/img/news/img03.jpg"/>
      </a>
    </div>

</div>
@endsection

@section('js')
  <script>
    $(document).ready(function(){
        var instance = $('.chocolat-parent').Chocolat({
        loop: true,
        fullScreen : true,
        imageSize: 'cover',
        }).data('chocolat');
        instance.api().open();
        window.setInterval(function(){
            instance.api().next();
        },2000);
    });
  </script>
@endsection