@extends('movie.html')

@section('head')
<link rel="stylesheet" id="addtoany-css" href="{{ asset('wp-content/plugins/add-to-any/addtoany.min.css?ver=1.16') }}" type="text/css" media="all">
<style id="addtoany-inline-css" type="text/css">
.addtoany_share_save_container
{
text-align: center !important;
}
</style>
<script type="text/javascript" id="addtoany-core-js-before">
/* <![CDATA[ */
window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};
/* ]]> */
</script>
<script type="text/javascript" async="" src="https://static.addtoany.com/menu/page.js" id="addtoany-core-js"></script>
@endsection
@section('content')

<div itemtype="http://schema.org/Movie" itemscope="" class="descabpost">
<div class="descabposttt">
<div id="entry_info">
<h1 itemprop="name">{{ $meta['meta-title'] }}</h1>
<div class="buffernn">To play Movie Click on Play icon on Player 2-3 times until Movie Starts, During this Few Useless windows opened just close them they are ADS.<br><br>If the Movie keeps buffering, Just pause it for 5-10 minutes then continue playing!. </div>
<div style="margin-top:5px;" class="singcont" itemprop="description">
<div class="addtoany_share_save_container addtoany_content addtoany_content_top">
<div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="{{ $meta['url'] }}" data-a2a-title="{{ $meta['title'] }}" style="line-height: 32px;"><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl={{ $meta['url'] }}%2F&amp;linkname={{ $meta['meta-title'] }}&amp;linknote=" title="Facebook" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(8, 102, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path></svg></span><span class="a2a_label">Facebook</span></a><a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a10 10 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.7 9.7 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.94 4.94 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a5 5 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174q-.476-.001-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.9 9.9 0 0 1-6.114 2.107q-.597 0-1.175-.068a13.95 13.95 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013q0-.32-.015-.637c.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label">Twitter</span></a><a class="a2a_button_pinterest" href="/#pinterest" title="Pinterest" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_pinterest" style="background-color: rgb(230, 0, 35);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M15.995 4C9.361 4 4 9.37 4 15.995c0 5.084 3.16 9.428 7.622 11.176-.109-.948-.198-2.41.039-3.446.217-.938 1.402-5.963 1.402-5.963s-.356-.72-.356-1.777c0-1.668.968-2.912 2.172-2.912 1.027 0 1.52.77 1.52 1.688 0 1.027-.65 2.567-.996 3.998-.287 1.195.602 2.172 1.777 2.172 2.132 0 3.771-2.25 3.771-5.489 0-2.873-2.063-4.877-5.015-4.877-3.416 0-5.42 2.557-5.42 5.203 0 1.027.395 2.132.888 2.735a.36.36 0 0 1 .08.345c-.09.375-.297 1.195-.336 1.363-.05.217-.178.266-.405.158-1.481-.711-2.409-2.903-2.409-4.66 0-3.781 2.745-7.257 7.928-7.257 4.156 0 7.394 2.962 7.394 6.931 0 4.137-2.606 7.464-6.22 7.464-1.214 0-2.36-.632-2.744-1.383l-.75 2.854c-.267 1.046-.998 2.35-1.491 3.149a12 12 0 0 0 3.554.533C22.629 28 28 22.63 28 16.005 27.99 9.37 22.62 4 15.995 4"></path></svg></span><span class="a2a_label">Pinterest</span></a><a class="a2a_button_whatsapp" href="/#whatsapp" title="WhatsApp" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" fill-rule="evenodd" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.24 11.24 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292m0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.35 9.35 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4s9.397 4.22 9.397 9.4c0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055s0-.445.15-.584c.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297s.287-1.24.22-1.363c-.07-.123-.26-.203-.54-.357z" clip-rule="evenodd"></path></svg></span><span class="a2a_label">WhatsApp</span></a><a class="a2a_button_skype" href="/#skype" title="Skype" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_skype" style="background-color: rgb(0, 175, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="m27.15 18-.02.126-.04-.24zc.124-.678.19-1.37.19-2.06 0-1.53-.3-3.013-.892-4.41a11.3 11.3 0 0 0-2.43-3.602 11.3 11.3 0 0 0-8.012-3.32c-.72 0-1.443.068-2.146.203h-.005c.04.023.08.04.118.063l-.238-.037.12-.026a6.7 6.7 0 0 0-3.146-.787 6.67 6.67 0 0 0-4.748 1.965A6.7 6.7 0 0 0 4 10.738c0 1.14.293 2.262.844 3.253l.02-.12.04.238-.06-.114c-.112.643-.17 1.3-.17 1.954a11.3 11.3 0 0 0 3.32 8.012c1.04 1.04 2.25 1.86 3.602 2.43 1.397.592 2.882.89 4.412.89.666 0 1.334-.06 1.985-.175l-.116-.063.242.04q-.068.014-.13.02a6.7 6.7 0 0 0 3.3.87 6.66 6.66 0 0 0 4.743-1.963A6.67 6.67 0 0 0 28 21.26c0-1.145-.295-2.27-.85-3.264zm-11.098 4.885c-4.027 0-5.828-1.98-5.828-3.463 0-.76.562-1.294 1.336-1.294 1.723 0 1.277 2.474 4.49 2.474 1.647 0 2.556-.893 2.556-1.808 0-.55-.27-1.16-1.355-1.426l-3.58-.895c-2.88-.723-3.405-2.282-3.405-3.748 0-3.043 2.865-4.186 5.556-4.186 2.478 0 5.4 1.37 5.4 3.192 0 .783-.677 1.237-1.45 1.237-1.472 0-1.2-2.035-4.163-2.035-1.47 0-2.285.666-2.285 1.618 0 .95 1.16 1.254 2.17 1.484l2.65.587c2.905.647 3.64 2.342 3.64 3.94 0 2.47-1.895 4.318-5.726 4.318z"></path></svg></span><span class="a2a_label">Skype</span></a></div></div>

@foreach($movie['field_player'] as $key => $player)
@if(preg_match('(embedpk|d0000d)', $player) != 1)
<h2>Watch {{ $movie['title'] }} From Player {{ $key+1 }} Below </h2>
<p><iframe class="lazy-loaded" width="640" height="360" data-lazy-type="iframe" data-src="{{ $player }}" frameborder="0" allow="autoplay" allowfullscreen="" src="{{ $player }}"></iframe><noscript><iframe width="640" height="360" src="{{ $player }}" frameborder="0" allow="autoplay" allowfullscreen></iframe></noscript></p>
@endif
@endforeach

{{ $meta['meta-title'] }},{{ $meta['title'] }} Watch Online DVD Download.</p>
<script type="text/javascript">
jQuery(document).ready(function($) {
$.post('/admin-ajax.php', {action: 'wpt_view_count', id: '413453'});
});
</script>
<div class="addtoany_share_save_container addtoany_content addtoany_content_bottom">
<div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="{{ $meta['url'] }}" data-a2a-title="Sarfira (2024) Hindi Full Movie Watch Online HD Print Free Download" style="line-height: 32px;"><a class="a2a_button_facebook" href="/#facebook" title="Facebook" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(8, 102, 255);">
<svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path></svg></span><span class="a2a_label">Facebook</span></a><a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a10 10 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.7 9.7 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.94 4.94 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a5 5 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174q-.476-.001-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.9 9.9 0 0 1-6.114 2.107q-.597 0-1.175-.068a13.95 13.95 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013q0-.32-.015-.637c.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label">Twitter</span></a><a class="a2a_button_pinterest" href="/#pinterest" title="Pinterest" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_pinterest" style="background-color: rgb(230, 0, 35);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M15.995 4C9.361 4 4 9.37 4 15.995c0 5.084 3.16 9.428 7.622 11.176-.109-.948-.198-2.41.039-3.446.217-.938 1.402-5.963 1.402-5.963s-.356-.72-.356-1.777c0-1.668.968-2.912 2.172-2.912 1.027 0 1.52.77 1.52 1.688 0 1.027-.65 2.567-.996 3.998-.287 1.195.602 2.172 1.777 2.172 2.132 0 3.771-2.25 3.771-5.489 0-2.873-2.063-4.877-5.015-4.877-3.416 0-5.42 2.557-5.42 5.203 0 1.027.395 2.132.888 2.735a.36.36 0 0 1 .08.345c-.09.375-.297 1.195-.336 1.363-.05.217-.178.266-.405.158-1.481-.711-2.409-2.903-2.409-4.66 0-3.781 2.745-7.257 7.928-7.257 4.156 0 7.394 2.962 7.394 6.931 0 4.137-2.606 7.464-6.22 7.464-1.214 0-2.36-.632-2.744-1.383l-.75 2.854c-.267 1.046-.998 2.35-1.491 3.149a12 12 0 0 0 3.554.533C22.629 28 28 22.63 28 16.005 27.99 9.37 22.62 4 15.995 4"></path></svg></span><span class="a2a_label">Pinterest</span></a><a class="a2a_button_whatsapp" href="/#whatsapp" title="WhatsApp" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" fill-rule="evenodd" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.24 11.24 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292m0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.35 9.35 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4s9.397 4.22 9.397 9.4c0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055s0-.445.15-.584c.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297s.287-1.24.22-1.363c-.07-.123-.26-.203-.54-.357z" clip-rule="evenodd"></path></svg></span><span class="a2a_label">WhatsApp</span></a><a class="a2a_button_skype" href="/#skype" title="Skype" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_skype" style="background-color: rgb(0, 175, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="m27.15 18-.02.126-.04-.24zc.124-.678.19-1.37.19-2.06 0-1.53-.3-3.013-.892-4.41a11.3 11.3 0 0 0-2.43-3.602 11.3 11.3 0 0 0-8.012-3.32c-.72 0-1.443.068-2.146.203h-.005c.04.023.08.04.118.063l-.238-.037.12-.026a6.7 6.7 0 0 0-3.146-.787 6.67 6.67 0 0 0-4.748 1.965A6.7 6.7 0 0 0 4 10.738c0 1.14.293 2.262.844 3.253l.02-.12.04.238-.06-.114c-.112.643-.17 1.3-.17 1.954a11.3 11.3 0 0 0 3.32 8.012c1.04 1.04 2.25 1.86 3.602 2.43 1.397.592 2.882.89 4.412.89.666 0 1.334-.06 1.985-.175l-.116-.063.242.04q-.068.014-.13.02a6.7 6.7 0 0 0 3.3.87 6.66 6.66 0 0 0 4.743-1.963A6.67 6.67 0 0 0 28 21.26c0-1.145-.295-2.27-.85-3.264zm-11.098 4.885c-4.027 0-5.828-1.98-5.828-3.463 0-.76.562-1.294 1.336-1.294 1.723 0 1.277 2.474 4.49 2.474 1.647 0 2.556-.893 2.556-1.808 0-.55-.27-1.16-1.355-1.426l-3.58-.895c-2.88-.723-3.405-2.282-3.405-3.748 0-3.043 2.865-4.186 5.556-4.186 2.478 0 5.4 1.37 5.4 3.192 0 .783-.677 1.237-1.45 1.237-1.472 0-1.2-2.035-4.163-2.035-1.47 0-2.285.666-2.285 1.618 0 .95 1.16 1.254 2.17 1.484l2.65.587c2.905.647 3.64 2.342 3.64 3.94 0 2.47-1.895 4.318-5.726 4.318z"></path></svg></span><span class="a2a_label">Skype</span></a></div></div><div class="wprc-container red-colorscheme">

</div> </div>
<div style="margin-top:5px;" class="singcont"> 
<p>
@foreach($movie['field_download_url'] as $key => $download_url)
@php
$download_url = explode("|",$download_url);
$download_name = explode("Link 1 ",$download_url[0]);
$download_name = explode(" ",$download_name[1]);
$download_url[1] = str_replace('https://embedpk.net/','https://play.123hdmovies2.xyz/?id=pk/',$download_url[1]);
@endphp
// {{ $download_name[0]}}---------------------------------------</p>
<h2 style="font-size: 12px !important;">{{ $download_name[1] }} Quality Links {{ $download_name[0] }}</h2><p>
<a target="_blank" href="{{ $download_url[1] }}">{{ $download_url[0] }}</a> <br>
@endforeach
</p>
</div>
<meta content="{{ $meta['url'] }}" itemprop="url">
<meta content="2024/07/12T16:21:57" itemprop="datePublished">
<div class="rightinfo">
@php

$movie['field_genre'] = str_replace('hreflang="en"','hreflang="en" itemprop="genre" ',$movie['field_genre']);
$add_date = date("M d, Y", $movie['field_publushdate']);
$movie['field_image_urls'] = str_replace('https://www.watch-movies.com.pk','http://localhost:8001/sites/default/files',$movie['field_image_urls']);
@endphp
<p> Genres : {!! html_entity_decode($movie['field_genre']) !!} </p>
<p><strong>Added on : </strong><span class="">{{ $add_date }}</span></p>
<p class="tags"><strong>Tags : </strong> {!! html_entity_decode($movie['field_tag']) !!}</p>
<div class="viewsforvid">
<p> <span class="views">Views : <span itemprop="interactionCount"> {{ $movie['field_views'] }} </span></span></p>
</div>
<div class="rightdirdur">
<div itemprop="director" itemscope="" itemtype="http://schema.org/Person">
Director: <span itemprop="name">N/A</span>
</div>
<div> Duration: <span itemprop="duration">N/A</span> </div>
</div></div>
<div class="leftinfo">
<img alt="{{ $meta['meta-title'] }}" src="{{ $movie['field_image_urls'] }}" itemprop="image">
</div>
</div>
</div>
<div>
</div>
</div>

@include('movie.templates.paggination')


@endsection