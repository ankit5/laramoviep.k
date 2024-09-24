@php
$movie['field_image_urls'] = str_replace('https://www.watch-movies.com.pk','https://img.watch-download.shop',$movie['field_image_urls']);
if(@$movie['field_publushdate']){
$year = date("Y", $movie['field_publushdate']);
}
@endphp
<div class="postbox">
<div class="boxtitle">
<h2><a href="{{ $movie['view_node'] }}" title="{{ $movie['title'] }} Watch Online HD Print Free Download">{{ $movie['title'] }} </a></h2>
<a href="{{ $movie['view_node'] }}" title="{{ $movie['title'] }} Watch Online HD Print Free Download" class="thumnail-imagee">
<span></span>
<img width="200" height="200" src="{{ asset('wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif') }}" data-lazy-type="image" data-src="{{ $movie['field_image_urls'] }}" class="lazy lazy-hidden attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Allahr Vres (2024) Punjabi" decoding="async" loading="lazy" srcset data-srcset="{{ $movie['field_image_urls'] }} 200w, {{ $movie['field_image_urls'] }} 150w, {{ $movie['field_image_urls'] }} 65w" sizes="(max-width: 200px) 100vw, 200px" /><noscript><img width="200" height="200" src="{{ $movie['field_image_urls'] }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="{{ $movie['title'] }}" decoding="async" loading="lazy" srcset="{{ $movie['field_image_urls'] }} 200w, {{ $movie['field_image_urls'] }} 150w, {{ $movie['field_image_urls'] }} 65w" sizes="(max-width: 200px) 100vw, 200px" /></noscript>
</a>
</div>
<div class="boxmetadata">
<div class="metalft">
<span class="views">Views : {{ $movie['field_views'] }}</span>
</div>
<div class="metargt">
<span class="year">{{ @$year }}</span>
</div>
</div>
</div>