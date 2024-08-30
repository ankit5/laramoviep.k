<div id="sidebar">
<div class="sidebarcont">
<div id="text-7" class="widget_text"> 
</div><div id="block-5" class="widget_block"><div class="popular-posts"><h2>This Week Most Viewed Movies</h2><ul class="wpp-list wpp-list-with-thumbnails">
@foreach ($most_view as $movie)
@php
$movie['field_image_urls'] = str_replace('https://www.watch-movies.com.pk','http://localhost:8001/sites/default/files',$movie['field_image_urls']);
$year = date("Y", $movie['field_publushdate']);
@endphp
<li>
<a href="{{ $movie['view_node'] }}" title="{{ $movie['view_node'] }}" target="_self"><img src="{{ asset('wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif') }}" data-lazy-type="image" data-src="{{ $movie['field_image_urls'] }}" width="55" height="45" alt="{{ $movie['title'] }}" class="lazy lazy-hidden wpp-thumbnail wpp_featured wpp_cached_thumb" decoding="async" loading="lazy"></a>
<a href="{{ $movie['view_node'] }}" title="{{ $movie['view_node'] }}" class="wpp-post-title" target="_self">{{ $movie['title'] }}</a>
</li>
@endforeach


</ul></div></div><div id="text-6" class="widget_text"> <div class="textwidget"><div class="widget_extended-categories" id="extended-categories-3"><h2>Movies By Type</h2><ul><li class="cat-item cat-item-547"><div class="avhec-widget-line"><a title="View all Action Movies" href="/genre/action-movies">Action Movies</a></div></li><li class="cat-item cat-item-4"><div class="avhec-widget-line"><a title="View all Funny Movies" href="/genre/indian-movies/funny-movies">Funny Movies</a></div></li><li class="cat-item cat-item-50"><div class="avhec-widget-line"><a title="View all Romantic Movies" href="/genre/romantic-movies">Romantic Movies</a></div></li><li class="cat-item cat-item-51"><div class="avhec-widget-line"><a title="View all Horror Movies" href="/genre/horror-movies">Horror Movies</a></div></li><li class="cat-item cat-item-52"><div class="avhec-widget-line"><a title="View all posts Hindi Dubbed" href="/genre/hindi-dubbed-movies">Hindi Dubbed </a></div></li><li class="cat-item cat-item-53"><div class="avhec-widget-line"><a title="View all Old Movies" href="/genre/old-bollywood-movies">Old Movies</a></div></li><li class="cat-item cat-item-53" style="width: 278px !important;"><div class="avhec-widget-line"><a title="View all posts South Indian Hindi Dubbed Movies" href="/genre/indian-movies/south-indian-dubbed-hindi">South Indian Hindi Dubbed Movies</a></div></li></ul></div></div>
</div><div id="text-3" class="widget_text"> <div class="textwidget"><div class="widget_extended-categories" id="extended-categories-3"><h2>Search Movies By Year</h2><ul>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under 2024 Movies" href="/genre/indian-movies/2024-movies">2024 Movies</a></div></li>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under 2023 Movies" href="/genre/indian-movies/2023-movies">2023 Movies</a></div></li>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under 2022 Movies" href="/genre/indian-movies/2022-movies">2022 Movies</a></div></li>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under 2021 Movies" href="/genre/indian-movies/2021-movies">2021 Movies</a></div></li>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under 2020 Movies" href="/genre/indian-movies/2020-movies">2020 Movies</a></div></li>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under 2019 Movies" href="/genre/indian-movies/2019-full-movies">2019 Movies</a></div></li>
<li class="cat-item cat-item-869"><div class="avhec-widget-line"><a title="View all posts filed under 2018 Movies" href="/genre/indian-movies/2018-full-movies">2018 Movies</a></div></li>
<li class="cat-item cat-item-869"><div class="avhec-widget-line"><a title="View all posts filed under 2017 Movies" href="/genre/indian-movies/2017-full-movies">2017 Movies</a></div></li>
<li class="cat-item cat-item-869"><div class="avhec-widget-line"><a title="View all posts filed under 2016 Movies" href="/genre/indian-movies/2016-movies">2016 Movies</a></div></li>
<li class="cat-item cat-item-547"><div class="avhec-widget-line"><a title="View all posts filed under 2015 Movies" href="/genre/indian-movies/2015-movies">2015 Movies</a></div></li>
<li class="cat-item cat-item-4"><div class="avhec-widget-line"><a title="View all posts filed under 2014 Movies" href="/genre/indian-movies/2014-movies">2014 Movies</a></div></li>
<li class="cat-item cat-item-50"><div class="avhec-widget-line"><a title="View all posts filed under 2013 Movies" href="/genre/indian-movies/2013-movies">2013 Movies</a></div></li>
<li class="cat-item cat-item-51"><div class="avhec-widget-line"><a title="View all posts filed under 2012 Movies" href="/genre/indian-movies/2012-movies">2012 Movies</a></div></li>
<li class="cat-item cat-item-52"><div class="avhec-widget-line"><a title="View all posts filed under 2011 Movies" href="/genre/indian-movies/2011-movies">2011 Movies</a></div></li>
<li class="cat-item cat-item-53"><div class="avhec-widget-line"><a title="View all posts filed under 2010 Movies" href="/genre/indian-movies/2010-movies">2010 Movies</a></div></li>
<li class="cat-item cat-item-639"><div class="avhec-widget-line"><a title="View all posts filed under 2009 Movies" href="/genre/indian-movies/2009-movies">2009 Movies</a></div></li>
<li class="cat-item cat-item-899"><div class="avhec-widget-line"><a title="View all posts filed under 2008 Movies" href="/genre/indian-movies/2008-movies-list">2008 Movies</a></div></li>
<li class="cat-item cat-item-795"><div class="avhec-widget-line"><a title="View all posts filed under 2007 Movies" href="/genre/indian-movies/2007-movies">2007 Movies</a></div></li>
<li class="cat-item cat-item-771"><div class="avhec-widget-line"><a title="View all posts filed under 2006 Movies" href="/genre/indian-movies/2006-movies">2006 Movies</a></div></li>
<li class="cat-item cat-item-896"><div class="avhec-widget-line"><a title="View all posts filed under old bollywood Movies" href="/genre/old-bollywood-movies">Old Movies</a></div></li>
</ul></div></div>
</div><div id="text-4" class="widget_text"> <div class="textwidget"><div class="widget_extended-categories" id="extended-categories-2">
<h2>Search Movies By Actors</h2>
<ul><li class="cat-item cat-item-14">
<div class="avhec-widget-line"><a title="View all posts filed under Aamir Khan Movies List" href="/genre/indian-movies/amir-khan-movies-list">Aamir Khan Movies List</a></div>
</li><li class="cat-item cat-item-1747">
<div class="avhec-widget-line"><a title="View all posts filed under Abhay Deol movies list" href="/genre/indian-movies/abhay-deol-movies-list">Abhay Deol movies list</a></div>
</li><li class="cat-item cat-item-29">
<div class="avhec-widget-line">
<a title="View all posts filed under Abhishek Bachchan movies list" href="/genre/indian-movies/abhishek-bachchan-movies-list">Abhishek Bachchan movies list</a></div></li>
<li class="cat-item cat-item-29">
<div class="avhec-widget-line">
<a title="View all posts filed under Aditya Roy Kapur movies list" href="/genre/indian-movies/aditya-roy-kapur-movies-list">Aditya Roy Kapur Movies List</a></div>
</li><li class="cat-item cat-item-1278">
<div class="avhec-widget-line">
<a title="View all posts filed under Aftab Shivdasani movies list" href="/genre/indian-movies/aftab-shivdasani-movies-list">Aftab Shivdasani movies list</a></div></li>
<li class="cat-item cat-item-20">
<div class="avhec-widget-line"><a title="View all posts filed under ajay devgan movies list" href="/genre/indian-movies/ajay-devgan-movies-list">ajay devgan movies list</a>
</div>
</li><li class="cat-item cat-item-15"><div class="avhec-widget-line">
<a title="View all posts filed under Akshay Kumar Movies List" href="/genre/indian-movies/akshay-kumar-movies-list">Akshay Kumar Movies List</a></div></li>
<li class="cat-item cat-item-1051">
<div class="avhec-widget-line">
<a title="View all posts filed under Akshaye Khanna movies list" href="/genre/indian-movies/akshaye-khanna-movies-list">Akshaye Khanna movies list</a></div></li>
<li class="cat-item cat-item-17"><div class="avhec-widget-line">
<a title="View all posts filed under Amitabh Bachchan Movies List" href="/genre/indian-movies/amitabh-bachchan-movies-list">Amitabh Bachchan Movies List</a></div>
</li><li class="cat-item cat-item-32"><div class="avhec-widget-line">
<a title="View all posts filed under amrish puri movies list" href="/genre/indian-movies/amrish-puri-movies-list">amrish puri movies list</a></div></li>
<li class="cat-item cat-item-23"><div class="avhec-widget-line">
<a title="View all posts filed under anil kapoor movies list" href="/genre/indian-movies/anil-kapoor-movies-list">anil kapoor movies list</a></div></li>
<li class="cat-item cat-item-565"><div class="avhec-widget-line">
<a title="View all posts filed under Arjun Kapoor Movies list" href="/genre/indian-movies/arjun-kapoor-movies-list">Arjun Kapoor Movies list</a></div></li>
<li class="cat-item cat-item-935">
<div class="avhec-widget-line"><a title="View all posts filed under Arjun Rampal Movies list" href="/genre/indian-movies/arjun-rampal-movies-list">Arjun Rampal Movies list</a>
</div></li><li class="cat-item cat-item-945"><div class="avhec-widget-line">
<a title="View all posts filed under Arshad Warsi Movies list" href="/genre/indian-movies/arshad-warsi-movies-list">Arshad Warsi Movies list</a></div>
</li><li class="cat-item cat-item-362">
<div class="avhec-widget-line"><a title="View all posts filed under Bobby Deol movies list" href="/genre/indian-movies/bobby-deol-movies-list">Bobby Deol movies list</a></div>
</li><li class="cat-item cat-item-21">
<div class="avhec-widget-line"><a title="View all posts filed under dilip kumar movies list" href="/genre/indian-movies/dilip-kumar-movies-list">dilip kumar movies list</a></div>
</li><li class="cat-item cat-item-47"><div class="avhec-widget-line">
<a title="View all posts filed under Emraan Hashmi movies list" href="/genre/indian-movies/emraan-hashmi-movies-list">Emraan Hashmi movies list</a></div>
</li><li class="cat-item cat-item-875"><div class="avhec-widget-line">
<a title="View all posts filed under Fardeen khan Movies list" href="/genre/indian-movies/fardeen-khan-movies-list">Fardeen khan Movies list</a></div></li>
<li class="cat-item cat-item-1773"><div class="avhec-widget-line">
<a title="View all posts filed under Farhan Akhtar movies" href="/genre/indian-movies/farhan-akhtar-movies">Farhan Akhtar movies</a></div></li><li class="cat-item cat-item-48">
<div class="avhec-widget-line"><a title="View all posts filed under Govinda Movies List" href="/genre/indian-movies/govinda-movies-list">Govinda Movies List</a></div>
</li><li class="cat-item cat-item-18"><div class="avhec-widget-line">
<a title="View all posts filed under hrithik roshan Movies List" href="/genre/indian-movies/hrithik-roshan-movies-list">hrithik roshan Movies List</a></div>
</li><li class="cat-item cat-item-383"><div class="avhec-widget-line">
<a title="View all posts filed under imran khan movies list" href="/genre/indian-movies/imran-khan-movies-list">imran khan movies list</a></div></li>
<li class="cat-item cat-item-27"><div class="avhec-widget-line">
<a title="View all posts filed under john abraham movies list" href="/genre/indian-movies/john-abraham-movies-list">john abraham movies list</a></div></li>
<li class="cat-item cat-item-752"><div class="avhec-widget-line">
<a title="View all posts filed under johnny lever movies list" href="/genre/indian-movies/johnny-lever-movies-list">johnny lever movies list</a></div></li>
<li class="cat-item cat-item-49"><div class="avhec-widget-line">
<a title="View all posts filed under Nana Patekar movies list" href="/genre/indian-movies/nana-patekar-movies-list">Nana Patekar movies list</a></div></li>
<li class="cat-item cat-item-501"><div class="avhec-widget-line">
<a title="View all posts filed under Paresh Rawal movies list" href="/genre/indian-movies/paresh-rawal-movies-list">Paresh Rawal movies list</a></div></li>
<li class="cat-item cat-item-19"><div class="avhec-widget-line">
<a title="View all posts filed under rajinikanth Movies List" href="/genre/indian-movies/rajinikanth-movies-list">rajinikanth Movies List</a></div></li>
<li class="cat-item cat-item-500"><div class="avhec-widget-line">
<a title="View all posts filed under Rajpal Yadav Movies List" href="/genre/indian-movies/rajpal-yadav-movies-list">Rajpal Yadav Movies List</a></div></li>
<li class="cat-item cat-item-16">
<div class="avhec-widget-line">
<a title="View all posts filed under Ranbir Kapoor Movies List" href="/genre/indian-movies/ranbir-kapoor-movies-list">Ranbir Kapoor Movies List</a></div></li>
<li class="cat-item cat-item-134"><div class="avhec-widget-line">
<a title="View all posts filed under Ranveer Singh movies list" href="/genre/indian-movies/ranveer-singh-movies-list">Ranveer Singh movies list</a></div></li>
<li class="cat-item cat-item-1371"><div class="avhec-widget-line">
<a title="View all posts filed under Riteish Deshmukh Movies List" href="/genre/indian-movies/riteish-deshmukh-movies-list">Riteish Deshmukh Movies List</a></div>
</li><li class="cat-item cat-item-25">
<div class="avhec-widget-line">
<a title="View all posts filed under saif ali khan movies list" href="/genre/indian-movies/saif-ali-khan-movies-list">saif ali khan movies list</a></div></li>
<li class="cat-item cat-item-13">
<div class="avhec-widget-line">
<a title="View all posts filed under Salman Khan Movies List" href="/genre/indian-movies/salman-khan-movies">Salman Khan Movies List</a></div></li>
<li class="cat-item cat-item-30"><div class="avhec-widget-line">
<a title="View all posts filed under sanjay dutt movies list" href="/genre/indian-movies/sanjay-dutt-movies-list">sanjay dutt movies list</a></div></li>
<li class="cat-item cat-item-24"><div class="avhec-widget-line">
<a title="View all posts filed under shahid kapoor movies list" href="/genre/indian-movies/shahid-kapoor-movies-list">shahid kapoor movies list</a></div></li>
<li class="cat-item cat-item-12"><div class="avhec-widget-line">
<a title="View all posts filed under Shahrukh Khan Movies list" href="/genre/indian-movies/shahrukh-khan-movies-list">Shahrukh Khan Movies list</a></div></li>
<li class="cat-item cat-item-989">
<div class="avhec-widget-line"><a title="View all posts filed under Sharman Joshi Movies list" href="/genre/indian-movies/sharman-joshi-movies-list">Sharman Joshi Movies list</a>
</div></li><li class="cat-item cat-item-45"><div class="avhec-widget-line">
<a title="View all posts filed under Sunil Shetty movies list" href="/genre/indian-movies/sunil-shetty-movies-list">Sunil Shetty movies list</a>
</div></li><li class="cat-item cat-item-33"><div class="avhec-widget-line">
<a title="View all posts filed under sunny deol movies list" href="/genre/indian-movies/sunny-deol-movies-list">sunny deol movies list</a></div></li>
<li class="cat-item cat-item-46">
<div class="avhec-widget-line">
<a title="View all posts filed under Vivek Oberoi movies list" href="/genre/indian-movies/tiger-shroff">Tiger Shroff Movies List</a></div>
</li>
<li class="cat-item cat-item-781"><div class="avhec-widget-line">
<a title="View all posts filed under Tusshar Kapoor movies list" href="/genre/indian-movies/tusshar-kapoor-movies-list">Tusshar Kapoor movies list</a></div></li>
<li class="cat-item cat-item-46"><div class="avhec-widget-line">
<a title="View all Varun Dhawan Movies List" href="/genre/indian-movies/varun-dhawan-movies-list">Varun Dhawan movies list</a></div>
</li>
<li class="cat-item cat-item-46">
<div class="avhec-widget-line">
<a title="View all posts filed under Vivek Oberoi movies list" href="/genre/indian-movies/vidyut-jammwal-movies-list">Vidyut Jammwal Movies </a></div>
</li>
<li class="cat-item cat-item-46">
<div class="avhec-widget-line">
<a title="View all posts filed under Vivek Oberoi movies list" href="/genre/indian-movies/vivek-oberoi-movies-list">Vivek Oberoi movies list</a></div>
</li>
</ul></div></div>
</div><div id="text-5" class="widget_text"> <div class="textwidget"><div class="widget_extended-categories" id="extended-categories-4"><h2>Search Movies By Actress</h2><ul><li class="cat-item cat-item-26"><div class="avhec-widget-line"><a title="View All Movies filed under Alia Bhatt movies list" href="/genre/indian-movies/alia-bhatt-movies-list">Alia Bhatt movies list</a></div></li><li class="cat-item cat-item-26"><div class="avhec-widget-line"><a title="View All Movies filed under aishwarya rai movies list" href="/genre/indian-movies/aishwarya-rai-movies-list">aishwarya rai movies list</a></div></li><li class="cat-item cat-item-870"><div class="avhec-widget-line"><a title="View All Movies filed under ameesha patel movies list" href="/genre/indian-movies/ameesha-patel-movies-list">ameesha patel movies list</a></div></li><li class="cat-item cat-item-926"><div class="avhec-widget-line"><a title="View All Movies filed under Amrita Rao Movies List" href="/genre/indian-movies/amrita-rao-movies-list">Amrita Rao Movies List</a></div></li><li class="cat-item cat-item-34"><div class="avhec-widget-line"><a title="View All Movies filed under Anushka Sharma Movies List" href="/genre/indian-movies/anushka-sharma-movies-list">Anushka Sharma Movies List</a></div></li><li class="cat-item cat-item-43"><div class="avhec-widget-line"><a title="View All Movies filed under asin thottumkal movies list" href="/genre/indian-movies/asin-thottumkal-movies-list">asin thottumkal movies list</a></div></li><li class="cat-item cat-item-1811"><div class="avhec-widget-line"><a title="View All Movies filed under Ayesha Takia Movies List" href="/genre/indian-movies/ayesha-takia-movies-list">Ayesha Takia Movies List</a></div></li><li class="cat-item cat-item-35"><div class="avhec-widget-line"><a title="View All Movies filed under bipasha basu movies list" href="/genre/indian-movies/bipasha-basu-movies-list">bipasha basu movies list</a></div></li><li class="cat-item cat-item-1795"><div class="avhec-widget-line"><a title="View All Movies filed under Celina Jaitly Movies List" href="/genre/indian-movies/celina-jaitly-movies-list">Celina Jaitly Movies List</a></div></li><li class="cat-item cat-item-28"><div class="avhec-widget-line"><a title="View All Movies filed under deepika padukone movies list" href="/genre/indian-movies/deepika-padukone-movies-list">deepika padukone movies list</a></div></li><li class="cat-item cat-item-873"><div class="avhec-widget-line"><a title="View All Movies filed under dia mirza movies list" href="/genre/indian-movies/dia-mirza-movies-list">dia mirza movies list</a></div></li><li class="cat-item cat-item-1681"><div class="avhec-widget-line"><a title="View All Movies filed under Jacqueline Fernandez movies" href="/genre/indian-movies/jacqueline-fernandez-movies-list">Jacqueline Fernandez movies</a></div></li><li class="cat-item cat-item-813"><div class="avhec-widget-line"><a title="View All Movies filed under Juhi Chawla movies list" href="/genre/indian-movies/juhi-chawla-movies-list">Juhi Chawla movies list</a></div></li><li class="cat-item cat-item-42"><div class="avhec-widget-line"><a title="View All Movies filed under kajol movies list" href="/genre/indian-movies/kajol-movies-list">kajol movies list</a></div></li><li class="cat-item cat-item-22"><div class="avhec-widget-line"><a title="View All Movies filed under kareena kapoor movies list" href="/genre/indian-movies/kareena-kapoor-movies-list">kareena kapoor movies list</a></div></li><li class="cat-item cat-item-806"><div class="avhec-widget-line"><a title="View All Movies filed under Karishma Kapoor Movies list" href="/genre/indian-movies/karishma-kapoor-movies-list">Karishma Kapoor Movies list</a></div></li><li class="cat-item cat-item-92"><div class="avhec-widget-line"><a title="View All Movies filed under Katrina Kaif Movies List" href="/genre/indian-movies/katrina-kaif-movies-list">Katrina Kaif Movies List</a></div></li><li class="cat-item cat-item-1797"><div class="avhec-widget-line"><a title="View All Movies filed under Lara Dutta Movies List" href="/genre/indian-movies/lara-dutta-movies-list">Lara Dutta Movies List</a></div></li><li class="cat-item cat-item-37"><div class="avhec-widget-line"><a title="View All Movies filed under madhuri dixit movies list" href="/genre/indian-movies/madhuri-dixit-movies-list">madhuri dixit movies list</a></div></li><li class="cat-item cat-item-1748"><div class="avhec-widget-line"><a title="View All Movies filed under Neha Dhupia movies list" href="/genre/indian-movies/neha-dhupia-movies-list">Neha Dhupia movies list</a></div></li><li class="cat-item cat-item-1353"><div class="avhec-widget-line"><a title="View All Movies filed under Parineeti Chopra Movies list" href="/genre/indian-movies/parineeti-chopra-movies-list">Parineeti Chopra Movies list</a></div></li><li class="cat-item cat-item-44"><div class="avhec-widget-line"><a title="View All Movies filed under preity zinta movies list" href="/genre/indian-movies/preity-zinta-movies-list">preity zinta movies list</a></div></li><li class="cat-item cat-item-31"><div class="avhec-widget-line"><a title="View All Movies filed under priyanka chopra movies list" href="/genre/indian-movies/priyanka-chopra-movies-list">priyanka chopra movies list</a></div></li><li class="cat-item cat-item-38"><div class="avhec-widget-line"><a title="View All Movies filed under rani mukerji movies list" href="/genre/indian-movies/rani-mukerji-movies-list">rani mukerji movies list</a></div></li><li class="cat-item cat-item-852"><div class="avhec-widget-line"><a title="View All Movies filed under Rekha Movies list" href="/genre/indian-movies/rekha-movies-list">Rekha Movies list</a></div></li><li class="cat-item cat-item-26"><div class="avhec-widget-line"><a title="View All Movies filed under Shraddha Kapoor movies list" href="/genre/indian-movies/shraddha-kapoor-movies-list">Shraddha Kapoor movies list</a></div></li><li class="cat-item cat-item-1494"><div class="avhec-widget-line"><a title="View All Movies filed under Shilpa Shetty movies list" href="/genre/indian-movies/shilpa-shetty-movies-list">Shilpa Shetty movies list</a></div></li><li class="cat-item cat-item-39"><div class="avhec-widget-line"><a title="View All Movies filed under sonakshi sinha movies list" href="/genre/indian-movies/sonakshi-sinha-movies-list">sonakshi sinha movies list</a></div></li><li class="cat-item cat-item-1799"><div class="avhec-widget-line"><a title="View All Movies filed under Sonali Bendre Movies List" href="/genre/indian-movies/sonali-bendre-movies-list">Sonali Bendre Movies List</a></div></li><li class="cat-item cat-item-40"><div class="avhec-widget-line"><a title="View All Movies filed under sonam kapoor movies list" href="/genre/indian-movies/sonam-kapoor-movies-list">sonam kapoor movies list</a></div></li><li class="cat-item cat-item-41"><div class="avhec-widget-line"><a title="View All Movies filed under sunny leone movies list" href="/genre/indian-movies/sunny-leone-movies-list">sunny leone movies list</a></div></li><li class="cat-item cat-item-872"><div class="avhec-widget-line"><a title="View All Movies filed under sushmita sen movies list" href="/genre/indian-movies/sushmita-sen-movies-list">sushmita sen movies list</a></div></li><li class="cat-item cat-item-871"><div class="avhec-widget-line"><a title="View All Movies filed under twinkle khanna movies list" href="/genre/indian-movies/twinkle-khanna-movies-list">twinkle khanna movies list</a></div></li><li class="cat-item cat-item-36"><div class="avhec-widget-line"><a title="View All Movies filed under vidya balan movies list" href="/genre/indian-movies/vidya-balan-movies-list">vidya balan movies list</a></div></li></ul></div></div>
</div><div id="text-9" class="widget_text"> <div class="textwidget"><div id="extended-categories-2" class="widget_extended-categories">
<h2>Movies By SouthIndian Actors</h2>
<ul>
<li class="cat-item cat-item-14">
<div class="avhec-widget-line"><a title="Rajinikanth Movies List" href="/genre/indian-movies/rajinikanth-movies-list">Rajinikanth Movies List</a></div>
</li>
<li class="cat-item cat-item-1747">
<div class="avhec-widget-line"><a title="Nagarjuna Akkineni Movies List" href="/genre/indian-movies/nagarjuna-akkineni-movies-list">Nagarjuna Akkineni Movies List</a></div>
</li>
<li class="cat-item cat-item-29">
<div class="avhec-widget-line"><a title="Ravi Teja Movies List" href="/genre/indian-movies/ravi-teja-movies-list">Ravi Teja Movies List</a></div>
</li>
<li class="cat-item cat-item-29">
<div class="avhec-widget-line"><a title="Allu Arjun Movies List" href="/genre/indian-movies/allu-arjun-movies-list">Allu Arjun Movies List</a></div>
</li>
<li class="cat-item cat-item-1278">
<div class="avhec-widget-line"><a title="Dhanush Movies List" href="/genre/indian-movies/dhanush-movies-list">Dhanush Movies List</a></div>
</li>
<li class="cat-item cat-item-20">
<div class="avhec-widget-line"><a title="Ram Charan Movies List" href="/genre/indian-movies/ram-charan-movies-list">Ram Charan Movies List</a></div>
</li>
<li class="cat-item cat-item-15">
<div class="avhec-widget-line"><a title="N.T. Rama Rao Jr. Movies List" href="/genre/indian-movies/n-t-rama-rao-jr-movies-list">N.T. Rama Rao Jr. Movies List</a></div>
</li>
<li class="cat-item cat-item-1051">
<div class="avhec-widget-line"><a title="Mahesh Babu Movies List" href="/genre/indian-movies/mahesh-babu-movies-list">Mahesh Babu Movies List</a></div>
</li>
<li class="cat-item cat-item-17">
<div class="avhec-widget-line"><a title="Prabhas Movies List" href="/genre/indian-movies/prabhas-movies-list">Prabhas Movies List</a></div>
</li>
<li class="cat-item cat-item-32">
<div class="avhec-widget-line"><a title="Suriya Movies List" href="/genre/indian-movies/suriya-movies-list">Suriya Movies List</a></div>
</li>
<li class="cat-item cat-item-23">
<div class="avhec-widget-line"><a title="Kamal Haasan Movies list" href="/genre/indian-movies/kamal-haasan-movies-list">Kamal Haasan Movies list</a></div>
</li>
<li class="cat-item cat-item-23">
<div class="avhec-widget-line"><a title="Ajith Kumar Movies List" href="/genre/indian-movies/ajith-kumar-movies-list">Ajith Kumar Movies List</a></div>
</li>
<li class="cat-item cat-item-23">
<div class="avhec-widget-line"><a title="Joseph Vijay Movies List" href="/genre/indian-movies/joseph-vijay-movies-list">Joseph Vijay Movies List</a></div>
</li>
</ul>
</div>
</div>
</div> </div>
</div>