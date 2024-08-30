@php
$rand = 'czcsds';
$meta['image'] = str_replace('https://www.watch-movies.com.pk','http://localhost:8001/sites/default/files',$meta['image']);
@endphp
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="{{ asset('wp-content/themes/dramatvpk/style.css') }}?{{ $rand }}" type="text/css" media="screen" />

<link rel="shortcut icon" href="{{ asset('wp-content/themes/dramatvpk/images/favicon.ico') }}" type="image/x-icon" />
<!--[if lte IE 6]>
<script type="text/javascript" src="{{ asset('wp-content/themes/dramatvpk/js/ie6PngFix.js') }}?{{ $rand }}" ></script>z
<![endif]-->
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name=googlebot content="index,follow">
<title>{{ $meta['meta-title'] }}</title>
<meta name="description" content="{{ $meta['description'] }}" />
<link rel="canonical" href="{{ $meta['canonical'] }}" />
@if(@$meta['next'])
<link rel="next" href="{{ $meta['next'] }}">
@endif
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="{{ $meta['og-type'] }}" />
@if(@$meta['published_time'])
<meta property="article:publisher" content="https://www.facebook.com/watchdownloadmovies.com.in">
<meta property="article:published_time" content="{{ $meta['published_time'] }}">
<meta property="article:modified_time" content="{{ @$meta['changed'] }}">
@endif
<meta property="og:title" content="{{ $meta['og-title'] }}" />
<meta property="og:description" content="{{ $meta['description'] }}" />
<meta property="og:url" content="{{ $meta['url'] }}" />
<meta property="og:site_name" content="Watch Free Movies Online" />
<meta property="og:image" content="{{ $meta['image'] }}" />
<meta property="og:image:width" content="{{ $meta['og-image-width'] }}" />
<meta property="og:image:height" content="{{ $meta['og-image-height'] }}" />
<meta property="og:image:type" content="{{ $meta['og-image-type'] }}" />
<link rel="sitemap" type="application/xml" title="Sitemap" href="{{ $meta['site-url'] }}/sitemap.xml">
<link rel="stylesheet" id="jquery-lazyloadxt-spinner-css-css" href="{{ asset('wp-content/plugins/a3-lazy-load/assets/css/jquery.lazyloadxt.spinner.css') }}?{{ $rand }}" type="text/css" media="all" />
<link rel="stylesheet" id="a3a3_lazy_load-css" href="{{ asset('wp-content/uploads/sass/a3_lazy_load.min.css') }}?{{ $rand }}" type="text/css" media="all" />

<script src="{{ asset('wp-content/cache/wpfc-minified/eivktcbt/9ug94.js') }}?{{ $rand }}" type="text/javascript"></script>

<script src="{{ asset('wp-content/cache/wpfc-minified/98bqmwst/9ug94.js') }}?{{ $rand }}" type="text/javascript"></script>

<meta name="generator" content="WordPress 7.6" />
<link rel="shortlink" href="{{ $meta['url'] }}" />
<link rel="stylesheet" href="{{ asset('wp-content/themes/dramatvpk/main.css') }}?{{ $rand }}" type="text/css" media="screen" />
<script src="{{ asset('wp-content/themes/dramatvpk/main.js') }}?{{ $rand }}" type="text/javascript"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6B00N39GNM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6B00N39GNM');
</script>
@yield('head')
</head>
<body class="home page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php page page-id-341159 responsive-menu-slide-left">
<div id="outerwrapper">
<div id="wrap">
@include('movie.templates.header')
<div id="maincont">
<div id="content">
<div class="contentbg"><div class="contenttop"><div class="contentbtm">
<div class="postcont" id="hpost">


@yield('content')


</div>
</div></div></div></div>
@include('movie.templates.right')
<div id="content">
<div class="contentbg"><div class="contenttop"><div class="contentbtm">
</div>
</div></div></div>
</div>
</div>
<div id="footercont">
<div id="footerbtmcont">
<div id="footerbtm">
<p>copyright By <a target="_blank" href="/" title="Watch Online Download Movies" alt="Watch Online Download Moviess">Watch Online Download Moviess</a> Visit <a target="_blank" href="/disclaimer" title="Disclaimer" alt="Disclaimer">Disclaimer</a> For Any Copyright Issue. <a target="_blank" href="/how-to-play-movies-from-all-players-guideline/" title="Read How To Watch OR Download Movies" alt="Read How To Watch OR Download Movies"> Read How To Watch OR Download Movies </a> </p>
</div>
</div>
</div>
<button id="responsive-menu-button" tabindex="1" class="responsive-menu-button responsive-menu-boring responsive-menu-accessible" type="button" aria-label="Menu"> <span class="responsive-menu-label responsive-menu-label-left">
<span class="responsive-menu-button-text">Menu</span> </span>
<span class="responsive-menu-box"><span class="responsive-menu-inner"></span>
</span>
</button>

<script type="text/javascript" id="jquery-lazyloadxt-js-extra">
/* <![CDATA[ */
var a3_lazyload_params = {"apply_images":"1","apply_videos":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('wp-content/plugins/a3-lazy-load/assets/js/jquery.lazyloadxt.extra.min.js') }}?{{ $rand }}" id="jquery-lazyloadxt-js"></script>
<script type="text/javascript" src="{{ asset('wp-content/plugins/a3-lazy-load/assets/js/jquery.lazyloadxt.srcset.min.js') }}?{{ $rand }}" id="jquery-lazyloadxt-srcset-js"></script>
<script type="text/javascript" id="jquery-lazyloadxt-extend-js-extra">
/* <![CDATA[ */
var a3_lazyload_extend_params = {"edgeY":"0","horizontal_container_classnames":""};
/* ]]> */
</script>
</div>
</body>
</html>