@php
$rand = 'czcs1ds';
$meta['image'] = str_replace('https://www.watch-movies.com.pk','http://localhost:8001/sites/default/files',$meta['image']);
@endphp
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="{{ asset('wp-content/themes/dramatvpk/style.css') }}?{{ $rand }}" type="text/css" media="screen" />
<style id="responsive-menu-inline-css" type="text/css">
/** This file is major component of this plugin so please don't try to edit here. */
#rmp_menu_trigger-346197 {
width: 55px;
height: 55px;
position: fixed;
top: 20px;
border-radius: 5px;
display: none;
text-decoration: none;
right: 5%;
background: #0a77b8;
transition: transform 0.5s, background-color 0.5s;
}
#rmp_menu_trigger-346197:hover, #rmp_menu_trigger-346197:focus {
background: #0098ff;
text-decoration: unset;
}
#rmp_menu_trigger-346197.is-active {
background: #0a77b8;
}
#rmp_menu_trigger-346197 .rmp-trigger-box {
width: 26px;
color: #ffffff;
}
#rmp_menu_trigger-346197 .rmp-trigger-icon-active, #rmp_menu_trigger-346197 .rmp-trigger-text-open {
display: none;
}
#rmp_menu_trigger-346197.is-active .rmp-trigger-icon-active, #rmp_menu_trigger-346197.is-active .rmp-trigger-text-open {
display: inline;
}
#rmp_menu_trigger-346197.is-active .rmp-trigger-icon-inactive, #rmp_menu_trigger-346197.is-active .rmp-trigger-text {
display: none;
}
#rmp_menu_trigger-346197 .rmp-trigger-label {
color: #ffffff;
pointer-events: none;
line-height: 32px;
font-family: inherit;
font-size: 18px;
display: inline;
text-transform: inherit;
}
#rmp_menu_trigger-346197 .rmp-trigger-label.rmp-trigger-label-top {
display: block;
margin-bottom: 12px;
}
#rmp_menu_trigger-346197 .rmp-trigger-label.rmp-trigger-label-bottom {
display: block;
margin-top: 12px;
}
#rmp_menu_trigger-346197 .responsive-menu-pro-inner {
display: block;
}
#rmp_menu_trigger-346197 .responsive-menu-pro-inner, #rmp_menu_trigger-346197 .responsive-menu-pro-inner::before, #rmp_menu_trigger-346197 .responsive-menu-pro-inner::after {
width: 26px;
height: 3px;
background-color: #ffffff;
border-radius: 4px;
position: absolute;
}
#rmp_menu_trigger-346197.is-active .responsive-menu-pro-inner, #rmp_menu_trigger-346197.is-active .responsive-menu-pro-inner::before, #rmp_menu_trigger-346197.is-active .responsive-menu-pro-inner::after {
background-color: #ffffff;
}
#rmp_menu_trigger-346197:hover .responsive-menu-pro-inner, #rmp_menu_trigger-346197:hover .responsive-menu-pro-inner::before, #rmp_menu_trigger-346197:hover .responsive-menu-pro-inner::after {
background-color: #ffffff;
}
#rmp_menu_trigger-346197 .responsive-menu-pro-inner::before {
top: 6px;
}
#rmp_menu_trigger-346197 .responsive-menu-pro-inner::after {
bottom: 6px;
}
#rmp_menu_trigger-346197.is-active .responsive-menu-pro-inner::after {
bottom: 0;
}
/* Hamburger menu styling */
@media screen and (max-width: 500px) {
/** Menu Title Style */
/** Menu Additional Content Style */
.menubar {
display: none !important;
}
#rmp_menu_trigger-346197 {
display: block;
}
#rmp-container-346197 {
position: fixed;
top: 0;
margin: 0;
transition: transform 0.5s;
overflow: auto;
display: block;
width: 75%;
background-color: #0a77b8;
background-image: url("");
height: 100%;
left: 0;
padding-top: 0px;
padding-left: 0px;
padding-bottom: 0px;
padding-right: 0px;
}
#rmp-menu-wrap-346197 {
padding-top: 0px;
padding-left: 0px;
padding-bottom: 0px;
padding-right: 0px;
background-color: #0a77b8;
}
#rmp-menu-wrap-346197 .rmp-menu, #rmp-menu-wrap-346197 .rmp-submenu {
width: 100%;
box-sizing: border-box;
margin: 0;
padding: 0;
}
#rmp-menu-wrap-346197 .rmp-submenu-depth-1 .rmp-menu-item-link {
padding-left: 10%;
}
#rmp-menu-wrap-346197 .rmp-submenu-depth-2 .rmp-menu-item-link {
padding-left: 15%;
}
#rmp-menu-wrap-346197 .rmp-submenu-depth-3 .rmp-menu-item-link {
padding-left: 20%;
}
#rmp-menu-wrap-346197 .rmp-submenu-depth-4 .rmp-menu-item-link {
padding-left: 25%;
}
#rmp-menu-wrap-346197 .rmp-submenu.rmp-submenu-open {
display: block;
}
#rmp-menu-wrap-346197 .rmp-menu-item {
width: 100%;
list-style: none;
margin: 0;
}
#rmp-menu-wrap-346197 .rmp-menu-item-link {
height: 40px;
line-height: 40px;
font-size: 13px;
border-bottom: 1px solid #ffffff;
font-family: inherit;
color: #ffffff;
text-align: left;
background-color: #0a77b8;
font-weight: normal;
letter-spacing: 0px;
display: block;
box-sizing: border-box;
width: 100%;
text-decoration: none;
position: relative;
overflow: hidden;
transition: background-color 0.5s, border-color 0.5s, 0.5s;
padding: 0 5%;
padding-right: 50px;
}
#rmp-menu-wrap-346197 .rmp-menu-item-link:after, #rmp-menu-wrap-346197 .rmp-menu-item-link:before {
display: none;
}
#rmp-menu-wrap-346197 .rmp-menu-item-link:hover, #rmp-menu-wrap-346197 .rmp-menu-item-link:focus {
color: #ffffff;
border-color: #ffffff;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-menu-item-link:focus {
outline: none;
border-color: unset;
box-shadow: unset;
}
#rmp-menu-wrap-346197 .rmp-menu-item-link .rmp-font-icon {
height: 40px;
line-height: 40px;
margin-right: 10px;
font-size: 13px;
}
#rmp-menu-wrap-346197 .rmp-menu-current-item .rmp-menu-item-link {
color: #ffffff;
border-color: #ffffff;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-menu-current-item .rmp-menu-item-link:hover, #rmp-menu-wrap-346197 .rmp-menu-current-item .rmp-menu-item-link:focus {
color: #ffffff;
border-color: #ffffff;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow {
position: absolute;
top: 0;
bottom: 0;
text-align: center;
overflow: hidden;
background-size: cover;
overflow: hidden;
right: 0;
border-left-style: solid;
border-left-color: #212121;
border-left-width: 1px;
height: 40px;
width: 40px;
color: #ffffff;
background-color: #000000;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow svg {
fill: #ffffff;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow:hover {
color: #ffffff;
border-color: #3f3f3f;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow:hover svg {
fill: #ffffff;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow .rmp-font-icon {
margin-right: unset;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow * {
vertical-align: middle;
line-height: 40px;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow-active {
display: block;
background-size: cover;
color: #ffffff;
border-color: #212121;
background-color: #000000;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow-active svg {
fill: #ffffff;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow-active:hover {
color: #ffffff;
border-color: #3f3f3f;
background-color: #3f3f3f;
}
#rmp-menu-wrap-346197 .rmp-menu-subarrow-active:hover svg {
fill: #ffffff;
}
#rmp-menu-wrap-346197 .rmp-submenu {
display: none;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-item-link {
height: 40px;
line-height: 40px;
letter-spacing: 0px;
font-size: 13px;
border-bottom: 1px solid #ffffff;
font-family: inherit;
font-weight: normal;
color: #ffffff;
text-align: left;
background-color: #0a77b8;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-item-link:hover, #rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-item-link:focus {
color: #ffffff;
border-color: #ffffff;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-current-item .rmp-menu-item-link {
color: #ffffff;
border-color: #ffffff;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-current-item .rmp-menu-item-link:hover, #rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-current-item .rmp-menu-item-link:focus {
color: #ffffff;
border-color: #ffffff;
background-color: #0098ff;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-subarrow {
right: 0;
border-right: unset;
border-left-style: solid;
border-left-color: #1d4354;
border-left-width: 0px;
height: 39px;
line-height: 39px;
width: 40px;
color: #fff;
background-color: inherit;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-subarrow:hover {
color: #fff;
border-color: #3f3f3f;
background-color: inherit;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-subarrow-active {
color: #fff;
border-color: #1d4354;
background-color: inherit;
}
#rmp-menu-wrap-346197 .rmp-submenu .rmp-menu-subarrow-active:hover {
color: #fff;
border-color: #3f3f3f;
background-color: inherit;
}
#rmp-menu-wrap-346197 .rmp-menu-item-description {
margin: 0;
padding: 5px 5%;
opacity: 0.8;
color: #ffffff;
}
#rmp-search-box-346197 {
display: block;
padding-top: 0px;
padding-left: 5%;
padding-bottom: 0px;
padding-right: 5%;
}
#rmp-search-box-346197 .rmp-search-form {
margin: 0;
}
#rmp-search-box-346197 .rmp-search-box {
background: #ffffff;
border: 1px solid #dadada;
color: #333333;
width: 100%;
padding: 0 5%;
border-radius: 30px;
height: 45px;
-webkit-appearance: none;
}
#rmp-search-box-346197 .rmp-search-box::placeholder {
color: #c7c7cd;
}
#rmp-search-box-346197 .rmp-search-box:focus {
background-color: #ffffff;
outline: 2px solid #dadada;
color: #333333;
}
#rmp-menu-title-346197 {
background-color: #212121;
color: #ffffff;
text-align: left;
font-size: 13px;
padding-top: 10%;
padding-left: 5%;
padding-bottom: 0%;
padding-right: 5%;
font-weight: 400;
transition: background-color 0.5s, border-color 0.5s, color 0.5s;
}
#rmp-menu-title-346197:hover {
background-color: #212121;
color: #ffffff;
}
#rmp-menu-title-346197 > .rmp-menu-title-link {
color: #ffffff;
width: 100%;
background-color: unset;
text-decoration: none;
}
#rmp-menu-title-346197 > .rmp-menu-title-link:hover {
color: #ffffff;
}
#rmp-menu-title-346197 .rmp-font-icon {
font-size: 13px;
}
#rmp-menu-additional-content-346197 {
padding-top: 0px;
padding-left: 5%;
padding-bottom: 0px;
padding-right: 5%;
color: #ffffff;
text-align: center;
font-size: 16px;
}
}
/**
This file contents common styling of menus.
*/
.rmp-container {
display: none;
visibility: visible;
padding: 0px 0px 0px 0px;
z-index: 99998;
transition: all 0.3s;
/** Scrolling bar in menu setting box **/
}
.rmp-container.rmp-fade-top, .rmp-container.rmp-fade-left, .rmp-container.rmp-fade-right, .rmp-container.rmp-fade-bottom {
display: none;
}
.rmp-container.rmp-slide-left, .rmp-container.rmp-push-left {
transform: translateX(-100%);
-ms-transform: translateX(-100%);
-webkit-transform: translateX(-100%);
-moz-transform: translateX(-100%);
}
.rmp-container.rmp-slide-left.rmp-menu-open, .rmp-container.rmp-push-left.rmp-menu-open {
transform: translateX(0);
-ms-transform: translateX(0);
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
}
.rmp-container.rmp-slide-right, .rmp-container.rmp-push-right {
transform: translateX(100%);
-ms-transform: translateX(100%);
-webkit-transform: translateX(100%);
-moz-transform: translateX(100%);
}
.rmp-container.rmp-slide-right.rmp-menu-open, .rmp-container.rmp-push-right.rmp-menu-open {
transform: translateX(0);
-ms-transform: translateX(0);
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
}
.rmp-container.rmp-slide-top, .rmp-container.rmp-push-top {
transform: translateY(-100%);
-ms-transform: translateY(-100%);
-webkit-transform: translateY(-100%);
-moz-transform: translateY(-100%);
}
.rmp-container.rmp-slide-top.rmp-menu-open, .rmp-container.rmp-push-top.rmp-menu-open {
transform: translateY(0);
-ms-transform: translateY(0);
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
}
.rmp-container.rmp-slide-bottom, .rmp-container.rmp-push-bottom {
transform: translateY(100%);
-ms-transform: translateY(100%);
-webkit-transform: translateY(100%);
-moz-transform: translateY(100%);
}
.rmp-container.rmp-slide-bottom.rmp-menu-open, .rmp-container.rmp-push-bottom.rmp-menu-open {
transform: translateX(0);
-ms-transform: translateX(0);
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
}
.rmp-container::-webkit-scrollbar {
width: 0px;
}
.rmp-container ::-webkit-scrollbar-track {
box-shadow: inset 0 0 5px transparent;
}
.rmp-container ::-webkit-scrollbar-thumb {
background: transparent;
}
.rmp-container ::-webkit-scrollbar-thumb:hover {
background: transparent;
}
.rmp-container .rmp-menu-wrap .rmp-menu {
transition: none;
border-radius: 0;
box-shadow: none;
background: none;
border: 0;
bottom: auto;
box-sizing: border-box;
clip: auto;
color: #666;
display: block;
float: none;
font-family: inherit;
font-size: 14px;
height: auto;
left: auto;
line-height: 1.7;
list-style-type: none;
margin: 0;
min-height: auto;
max-height: none;
opacity: 1;
outline: none;
overflow: visible;
padding: 0;
position: relative;
pointer-events: auto;
right: auto;
text-align: left;
text-decoration: none;
text-indent: 0;
text-transform: none;
transform: none;
top: auto;
visibility: inherit;
width: auto;
word-wrap: break-word;
white-space: normal;
}
.rmp-container .rmp-menu-additional-content {
display: block;
word-break: break-word;
}
.rmp-container .rmp-menu-title {
display: flex;
flex-direction: column;
}
.rmp-container .rmp-menu-title .rmp-menu-title-image {
max-width: 100%;
margin-bottom: 15px;
display: block;
margin: auto;
margin-bottom: 15px;
}
button.rmp_menu_trigger {
z-index: 999999;
overflow: hidden;
outline: none;
border: 0;
display: none;
margin: 0;
transition: transform 0.5s, background-color 0.5s;
padding: 0;
}
button.rmp_menu_trigger .responsive-menu-pro-inner::before, button.rmp_menu_trigger .responsive-menu-pro-inner::after {
content: "";
display: block;
}
button.rmp_menu_trigger .responsive-menu-pro-inner::before {
top: 10px;
}
button.rmp_menu_trigger .responsive-menu-pro-inner::after {
bottom: 10px;
}
button.rmp_menu_trigger .rmp-trigger-box {
width: 40px;
display: inline-block;
position: relative;
pointer-events: none;
vertical-align: super;
}
.admin-bar .rmp-container, .admin-bar .rmp_menu_trigger {
margin-top: 32px !important;
}
@media screen and (max-width: 782px) {
.admin-bar .rmp-container, .admin-bar .rmp_menu_trigger {
margin-top: 46px !important;
}
}
/*  Menu Trigger Boring Animation */
.rmp-menu-trigger-boring .responsive-menu-pro-inner {
transition-property: none;
}
.rmp-menu-trigger-boring .responsive-menu-pro-inner::after, .rmp-menu-trigger-boring .responsive-menu-pro-inner::before {
transition-property: none;
}
.rmp-menu-trigger-boring.is-active .responsive-menu-pro-inner {
transform: rotate(45deg);
}
.rmp-menu-trigger-boring.is-active .responsive-menu-pro-inner:before {
top: 0;
opacity: 0;
}
.rmp-menu-trigger-boring.is-active .responsive-menu-pro-inner:after {
bottom: 0;
transform: rotate(-90deg);
}
</style>
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
<script src="{{ asset('wp-content/cache/wpfc-minified/4w6mftj/9jck0.js') }}?{{ $rand }}" type="text/javascript"></script>
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

@include('movie.templates.res-menu')

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