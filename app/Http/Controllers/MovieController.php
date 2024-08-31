<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class MovieController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index($page=0){
       // print config('services.basic_auth.user');
        
        $page = $page-1;
        $movie['title'] = 'Hi';
        $latest = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/allfilms?page='.@$page.'&title='.@$_REQUEST['s'])
            ->json();
            // print_r($latest);
            // exit;
        $featured = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/allfilms?field_tag_target_id=5&page='.@$page)
            ->json();
        $most_view = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/allfilms?sort_by=field_views&sort_order=DESC&page='.@$page)
            ->json();
        $pager = isset($latest['pager']) ? $latest['pager'] : [];
        $next = ($page+1<$pager['total_pages'])?$pager['current_page']+2:'';
        $latest = isset($latest['results']) ? $latest['results'] : [];
        $featured = isset($featured['results']) ? $featured['results'] : [];
        $featured = isset($_REQUEST['s'])?[]:$featured;
        $search_title = isset($_REQUEST['s'])?$_REQUEST['s'].' ':'';
        $most_view = isset($most_view['results']) ? $most_view['results'] : [];
        $meta['meta-title']=$search_title.'Watch Free Movies Online | HD Download Movies In DVD Print';
        $meta['title']=($search_title)?'Video for '.$search_title:'Latest Movies';
        $meta['description']=$search_title.'Watch Free Movies Online in HD Print Quality Download,Watch Free Full Movies Online Bollywood Movies Download Latest Hollywood Movies in DVD Print Hd Quality Free.';
        $meta['og-title']=$search_title.'Watch Free Movies Online |HD Download Movies In DVD Print';
        $meta['canonical']=URL::to('');
        $meta['url']=URL::to('');
        $meta['site-url']=URL::to('');
        $meta['og-type'] = 'website';
        $meta['image']=@$latest[0]['field_image_urls'];
        $meta['og-image-width'] = '200';
        $meta['og-image-height'] = '200';
        $meta['og-image-type'] = 'image/jpeg';
        $meta['path']=URL::to('');
        $meta['next']=($next)?$meta['canonical'].'/page/'.$next:'';
        
        // print_r($pager);
        // exit;
        return view('movie.front',compact('latest','featured','pager','meta','most_view'));

    }

    public function tag($tag,Request $request){
        $tag = $request->getRequestUri();
        $tag = (str_contains($tag,'/page'))?strstr($tag, '/page', true):$tag;
        // print $tag;
        // exit;
        $page = explode('page/',$request->getRequestUri());
        $page = @$page[1];
        // print $page;
        // exit;
        $page = ($page>0)?$page-1:0;
        
        $tag = ($tag=='hot-series')?'tv-shows':$tag;
       // $tag = str_replace('-',' ',$tag);
       // $tag = str_replace('amp',' & ',$tag);
        
        $tag_detail = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/term_detail?alias='.$tag)
            ->json();
        
        $tag_detail = isset($tag_detail['results']) ? $tag_detail['results'] : [];
        // print_r($tag_detail);
        // exit;
        $tag_name = $tag_detail[0]['name'];
        $latest = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/allfilms?tag_id='.@$tag_detail[0]['tid'].'&page='.@$page)
            ->json();
        $most_view = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/allfilms?sort_by=field_views&sort_order=DESC&page='.@$page)
            ->json();
        //     print_r($latest);
        // exit;
            $pager = isset($latest['pager']) ? $latest['pager'] : [];
            //print_r($pager);
            $next = ($page+1<$pager['total_pages'])?$pager['current_page']+2:'';
            //exit;
            $tag_title = ($tag_detail[0]['field_title'])?$tag_detail[0]['field_title']:'';
        $latest = isset($latest['results']) ? $latest['results'] : [];
        $most_view = isset($most_view['results']) ? $most_view['results'] : [];
        $meta['meta-title']=@$tag_title;
        $meta['title']='Video For '.@$tag_name;
        $meta['description']=$tag_detail[0]['field_description'];
        $meta['og-title']=$meta['meta-title'];
        $meta['og-type'] = 'article';
        $meta['og-image-width'] = '200';
        $meta['og-image-height'] = '200';
        $meta['og-image-type'] = 'image/jpeg';
        $tag_url = explode('/page',URL::current());
        $meta['canonical']=(@$tag_url[0])?$tag_url[0]:URL::current();
        $meta['url']=$meta['canonical'];
        $meta['site-url']=URL::to('');
        $meta['image']=@$latest[0]['field_image_urls'];
        $meta['path']=$meta['canonical'];
        $meta['next']=($next)?$meta['canonical'].'/page/'.$next:'';
        
        // print_r($pager);
        // exit;
        return view('movie.page',compact('latest','pager','meta','most_view'));

    }

    public function show($url=''){

        $url = str_replace("-watch-online-hd-quality-free-download","",$url);
        
        $movie = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/movie?alias=/'.$url)
        ->json();
        $most_view = Http::withBasicAuth(config('services.basic_auth.user'), config('services.basic_auth.pwd'))
        ->get(config('services.basic_auth.api_url').'api/allfilms?sort_by=field_views&sort_order=DESC&page='.@$page)
            ->json();
        
        $most_view = isset($most_view['results']) ? $most_view['results'] : [];
        $movie = $movie[0];
        $meta['meta-title']=$movie['title'].' Watch Online and Free Download in HD';
        $meta['title']=$movie['title'];
        $meta['description']=$movie['title'].' Watch Online HD Print Free Download,'.$movie['title'].' Watch Online DVD Download.';
        $meta['og-title']=$meta['meta-title'];
        $meta['og-type'] = 'article';
        $meta['og-image-width'] = '200';
        $meta['og-image-height'] = '200';
        $meta['og-image-type'] = 'image/jpeg';
        $meta['canonical']=URL::current();
        $meta['url']=URL::current();
        $meta['site-url']=URL::to('');
        $meta['image']=$movie['field_image_urls'];
        $meta['published_time']=date("c", $movie['field_publushdate']);
        $meta['modified_time']=date("c", @$movie['changed']);
        return view('movie.show',compact('movie','most_view','meta'));

    }

}