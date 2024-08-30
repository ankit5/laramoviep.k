@if(@$pager['total_results'])
<div class="navigation">
<div class="wp-pagenavi" role="navigation">
<span class="pages">Page 1 of {{ $pager['total_pages'] }}</span>
@php
$pager['current_page'] = $pager['current_page']+1;
$search = (isset($_GET['s']))?'?s='.$_GET['s']:'';

$limit = 18;

$last       = ceil( $pager['total_results'] / $limit );
$links = 5;
 $start      = ( ( $pager['current_page'] - $links ) > 0 ) ? $pager['current_page'] - $links : 1;
 $end        = ( ( $pager['current_page'] + $links ) < $last ) ? $pager['current_page'] + $links : $last;
 $list_class = 'page_nav';
 $html       = '';

 $class      = ( $pager['current_page'] == 1 ) ? "current" : "";
 $html       .= ( $pager['current_page'] == 1 )?'':'<a class="previouspostslink" rel="prev" aria-label="Previous Page" data-page="' . ( $pager['current_page'] - 1 ) . '" href="' . $meta['path'] . '/page/' . ( $pager['current_page'] - 1 ) .$search . '">«</a>';

 if ( $start > 1 ) {
     $html   .= '<a class="page larger" data-page="1" href="' . $meta['path'] . '/page/1'. $search .'">1</a>';
     $html   .= '<span class="extend">...</span>';
 }



 for ( $i = $start ; $i <= $end; $i++ ) {
     
     $html   .= ( $pager['current_page'] == $i )?'<span aria-current="page" class="current">'.$i.'</span>':'<a class="page larger" data-page="' . $i . '" href="' . $meta['path'] . '/page/' . $i . $search . '">' . $i . '</a>';
 }

 if ( $end < $last ) {
     $html   .= '<span class="extend">...</span>';
     $html   .= '<a class="page larger" data-page="' . $last . '" href="' . $meta['path'] . '/page/' . $last . $search .'">' . $last . '</a>';
 }

 
 


 $class      = ( $pager['current_page'] == $last ) ? "current" : "";
 $html       .= ( $pager['current_page'] == $last )?'':'<a class="nextpostslink" rel="next" aria-label="Next Page" data-page="' . ( $pager['current_page'] + 1 ) . '" href="' . $meta['path'] . '/page/' . ( $pager['current_page'] + 1 ). $search .'">&raquo;</a>';

 $html       .= '';
 
print $html;

@endphp
</div> </div>
@endif