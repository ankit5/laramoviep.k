@php
$rand = 'czcs1d2s';
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
<script type="text/javascript" id="rmp_menu_scripts-js-extra">
/* <![CDATA[ */
var rmp_menu = {"ajaxURL":"","wp_nonce":"dc56c7f2ac","menu":[{"menu_theme":"Default","theme_type":"default","theme_location_menu":"0","submenu_submenu_arrow_width":"40","submenu_submenu_arrow_width_unit":"px","submenu_submenu_arrow_height":"39","submenu_submenu_arrow_height_unit":"px","submenu_arrow_position":"right","submenu_sub_arrow_background_colour":"","submenu_sub_arrow_background_hover_colour":"","submenu_sub_arrow_background_colour_active":"","submenu_sub_arrow_background_hover_colour_active":"","submenu_sub_arrow_border_width":"","submenu_sub_arrow_border_width_unit":"px","submenu_sub_arrow_border_colour":"#1d4354","submenu_sub_arrow_border_hover_colour":"#3f3f3f","submenu_sub_arrow_border_colour_active":"#1d4354","submenu_sub_arrow_border_hover_colour_active":"#3f3f3f","submenu_sub_arrow_shape_colour":"#fff","submenu_sub_arrow_shape_hover_colour":"#fff","submenu_sub_arrow_shape_colour_active":"#fff","submenu_sub_arrow_shape_hover_colour_active":"#fff","use_header_bar":"off","header_bar_items_order":{"logo":"off","title":"on","additional content":"off","menu":"on","search":"off"},"header_bar_title":"Responsive Menu","header_bar_html_content":"","header_bar_logo":"","header_bar_logo_link":"","header_bar_logo_width":"","header_bar_logo_width_unit":"%","header_bar_logo_height":"","header_bar_logo_height_unit":"px","header_bar_height":"80","header_bar_height_unit":"px","header_bar_padding":{"top":"0px","right":"5%","bottom":"0px","left":"5%"},"header_bar_font":"","header_bar_font_size":"14","header_bar_font_size_unit":"px","header_bar_text_color":"#ffffff","header_bar_background_color":"#1d4354","header_bar_breakpoint":"8000","header_bar_position_type":"fixed","header_bar_adjust_page":"on","header_bar_scroll_enable":"off","header_bar_scroll_background_color":"#36bdf6","mobile_breakpoint":"600","tablet_breakpoint":"500","transition_speed":"0.5","sub_menu_speed":"0.2","show_menu_on_page_load":"off","menu_disable_scrolling":"off","menu_overlay":"off","menu_overlay_colour":"rgba(0,0,0,0.7)","desktop_menu_width":"","desktop_menu_width_unit":"%","desktop_menu_positioning":"absolute","desktop_menu_side":"left","desktop_menu_to_hide":"","use_current_theme_location":"off","mega_menu":{"225":"off","227":"off","229":"off","228":"off","226":"off"},"desktop_submenu_open_animation":"none","desktop_submenu_open_animation_speed":"100ms","desktop_submenu_open_on_click":"off","desktop_menu_hide_and_show":"off","menu_name":"Default Menu","menu_to_use":"58","different_menu_for_mobile":"off","menu_to_use_in_mobile":"main-menu","use_mobile_menu":"on","use_tablet_menu":"on","use_desktop_menu":"off","menu_display_on":"all-pages","menu_to_hide":".menubar","submenu_descriptions_on":"off","custom_walker":"","menu_background_colour":"#0a77b8","menu_depth":"5","smooth_scroll_on":"off","smooth_scroll_speed":"500","menu_font_icons":{"id":["225"],"icon":[""]},"menu_links_height":"40","menu_links_height_unit":"px","menu_links_line_height":"40","menu_links_line_height_unit":"px","menu_depth_0":"5","menu_depth_0_unit":"%","menu_font_size":"13","menu_font_size_unit":"px","menu_font":"","menu_font_weight":"normal","menu_text_alignment":"left","menu_text_letter_spacing":"","menu_word_wrap":"off","menu_link_colour":"#ffffff","menu_link_hover_colour":"#ffffff","menu_current_link_colour":"#ffffff","menu_current_link_hover_colour":"#ffffff","menu_item_background_colour":"#0a77b8","menu_item_background_hover_colour":"#0098ff","menu_current_item_background_colour":"#0098ff","menu_current_item_background_hover_colour":"#0098ff","menu_border_width":"1","menu_border_width_unit":"px","menu_item_border_colour":"#ffffff","menu_item_border_colour_hover":"#ffffff","menu_current_item_border_colour":"#ffffff","menu_current_item_border_hover_colour":"#ffffff","submenu_links_height":"40","submenu_links_height_unit":"px","submenu_links_line_height":"40","submenu_links_line_height_unit":"px","menu_depth_side":"left","menu_depth_1":"10","menu_depth_1_unit":"%","menu_depth_2":"15","menu_depth_2_unit":"%","menu_depth_3":"20","menu_depth_3_unit":"%","menu_depth_4":"25","menu_depth_4_unit":"%","submenu_item_background_colour":"#0a77b8","submenu_item_background_hover_colour":"#0098ff","submenu_current_item_background_colour":"#0098ff","submenu_current_item_background_hover_colour":"#0098ff","submenu_border_width":"1","submenu_border_width_unit":"px","submenu_item_border_colour":"#ffffff","submenu_item_border_colour_hover":"#ffffff","submenu_current_item_border_colour":"#ffffff","submenu_current_item_border_hover_colour":"#ffffff","submenu_font_size":"13","submenu_font_size_unit":"px","submenu_font":"","submenu_font_weight":"normal","submenu_text_letter_spacing":"","submenu_text_alignment":"left","submenu_link_colour":"#ffffff","submenu_link_hover_colour":"#ffffff","submenu_current_link_colour":"#ffffff","submenu_current_link_hover_colour":"#ffffff","inactive_arrow_shape":"\u25bc","active_arrow_shape":"\u25b2","inactive_arrow_font_icon":"","active_arrow_font_icon":"","inactive_arrow_image":"","active_arrow_image":"","submenu_arrow_width":"40","submenu_arrow_width_unit":"px","submenu_arrow_height":"40","submenu_arrow_height_unit":"px","arrow_position":"right","menu_sub_arrow_shape_colour":"#ffffff","menu_sub_arrow_shape_hover_colour":"#ffffff","menu_sub_arrow_shape_colour_active":"#ffffff","menu_sub_arrow_shape_hover_colour_active":"#ffffff","menu_sub_arrow_border_width":"1","menu_sub_arrow_border_width_unit":"px","menu_sub_arrow_border_colour":"#212121","menu_sub_arrow_border_hover_colour":"#3f3f3f","menu_sub_arrow_border_colour_active":"#212121","menu_sub_arrow_border_hover_colour_active":"#3f3f3f","menu_sub_arrow_background_colour":"#000000","menu_sub_arrow_background_hover_colour":"#0098ff","menu_sub_arrow_background_colour_active":"#000000","menu_sub_arrow_background_hover_colour_active":"#3f3f3f","fade_submenus":"off","fade_submenus_side":"left","fade_submenus_delay":"100","fade_submenus_speed":"500","use_slide_effect":"off","slide_effect_back_to_text":"Back","accordion_animation":"off","auto_expand_all_submenus":"off","auto_expand_current_submenus":"off","menu_item_click_to_trigger_submenu":"off","button_width":"55","button_width_unit":"px","button_height":"55","button_height_unit":"px","button_background_colour":"#0a77b8","button_background_colour_hover":"#0098ff","button_background_colour_active":"#0a77b8","toggle_button_border_radius":"5","button_transparent_background":"off","button_left_or_right":"right","button_position_type":"fixed","button_distance_from_side":"5","button_distance_from_side_unit":"%","button_top":"20","button_top_unit":"px","button_push_with_animation":"off","button_click_animation":"boring","button_line_margin":"6","button_line_margin_unit":"px","button_line_width":"26","button_line_width_unit":"px","button_line_height":"3","button_line_height_unit":"px","button_line_colour":"#ffffff","button_line_colour_hover":"#ffffff","button_line_colour_active":"#ffffff","button_font_icon":"","button_font_icon_when_clicked":"","button_image":"","button_image_when_clicked":"","button_title":"Menu","button_title_open":"","button_title_position":"left","menu_container_columns":"","button_font":"","button_font_size":"18","button_font_size_unit":"px","button_title_line_height":"32","button_title_line_height_unit":"px","button_text_colour":"#ffffff","button_trigger_type_click":"on","button_trigger_type_hover":"off","button_click_trigger":"#responsive-menu-button","items_order":{"title":"","menu":"on","search":"","additional content":""},"menu_title":"Menu","menu_title_link":"","menu_title_link_location":"_self","menu_title_image":"","menu_title_font_icon":"","menu_title_section_padding":{"top":"10%","right":"5%","bottom":"0%","left":"5%"},"menu_title_background_colour":"#212121","menu_title_background_hover_colour":"#212121","menu_title_font_size":"13","menu_title_font_size_unit":"px","menu_title_alignment":"left","menu_title_font_weight":"400","menu_title_font_family":"","menu_title_colour":"#ffffff","menu_title_hover_colour":"#ffffff","menu_title_image_width":"","menu_title_image_width_unit":"%","menu_title_image_height":"","menu_title_image_height_unit":"px","menu_additional_content":"","menu_additional_section_padding":{"top":"0px","right":"5%","bottom":"0px","left":"5%"},"menu_additional_content_font_size":"16","menu_additional_content_font_size_unit":"px","menu_additional_content_alignment":"center","menu_additional_content_colour":"#ffffff","menu_search_box_text":"Search","menu_search_box_code":"","menu_search_section_padding":{"top":"0px","right":"5%","bottom":"0px","left":"5%"},"menu_search_box_height":"45","menu_search_box_height_unit":"px","menu_search_box_border_radius":"30","menu_search_box_text_colour":"#333333","menu_search_box_background_colour":"#ffffff","menu_search_box_placeholder_colour":"#c7c7cd","menu_search_box_border_colour":"#dadada","menu_section_padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"menu_width":"75","menu_width_unit":"%","menu_maximum_width":"","menu_maximum_width_unit":"px","menu_minimum_width":"","menu_minimum_width_unit":"px","menu_auto_height":"off","menu_container_padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"menu_container_background_colour":"#0a77b8","menu_background_image":"","animation_type":"slide","menu_appear_from":"left","animation_speed":"0.5","page_wrapper":"","menu_close_on_body_click":"off","menu_close_on_scroll":"off","menu_close_on_link_click":"off","enable_touch_gestures":"off","hamburger_position_selector":"","menu_id":346197,"active_toggle_contents":"\u25b2","inactive_toggle_contents":"\u25bc"}]};
/* ]]> */
</script>
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
<button type="button" aria-controls="rmp-container-346197" aria-label="Menu Trigger" id="rmp_menu_trigger-346197" class="rmp_menu_trigger rmp-menu-trigger-boring">
<div class="rmp-trigger-label rmp-trigger-label-left">
<span class="rmp-trigger-text">Menu</span>
</div>
<span class="rmp-trigger-box">
<span class="responsive-menu-pro-inner"></span>
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