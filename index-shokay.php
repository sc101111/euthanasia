<?php
/**
 * Copyright 2014 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

/**
 * You only need this file if you are not using composer.
 * Why are you not using composer?
 * https://getcomposer.org/
 */

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
  throw new Exception('The Facebook SDK v4 requires PHP version 5.4 or higher.');
}

/**
 * Register the autoloader for the Facebook SDK classes.
 * Based off the official PSR-4 autoloader example found here:
 * https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
spl_autoload_register(function ($class)
{
  // project-specific namespace prefix
  $prefix = 'Facebook\\';

  // base directory for the namespace prefix
  $base_dir = defined('FACEBOOK_SDK_V4_SRC_DIR') ? FACEBOOK_SDK_V4_SRC_DIR : __DIR__ . '/src/Facebook/';

  // does the class use the namespace prefix?
  $len = strlen($prefix);
  if (strncmp($prefix, $class, $len) !== 0) {
    // no, move to the next registered autoloader
    return;
  }

  // get the relative class name
  $relative_class = substr($class, $len);

  // replace the namespace prefix with the base directory, replace namespace
  // separators with directory separators in the relative class name, append
  // with .php
  $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

  // if the file exists, require it
  if (file_exists($file)) {
    require $file;
  }
});
<!DOCTYPE html>
<html lang="en" slick-uniqueid="3" class="SHOKAY_com"><head>
<style>
h2 {
  font-size: 48px;
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.05em;
}

.iframe-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  pointer-events: none;
  overflow: hidden;
}

.iframe-wrapper iframe {
  width: 100vw;
  height: 56.25vw; /* Given a 16:9 aspect ratio, 9/16*100 = 56.25 */
  min-height: 100vh;
  min-width: 177.77vh; /* Given a 16:9 aspect ratio, 16/9*100 = 177.77 */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
 
<link rel="preconnect" href="https://player.SHOKAY.com/">
<link rel="preconnect" href="https://i.SHOKAYcdn.com/">
<link rel="preconnect" href="https://f.SHOKAYcdn.com/">
<meta property="fb:app_id" content="19884028963">

   <meta property="og:image" content="https://f.SHOKAYcdn.com/images_v6/logo.png">
  

 <meta name="description" content="Join the web’s most supportive community of creators and get high-quality tools for hosting, sharing, and streaming videos in gorgeous HD with no ads.">



 <link rel="canonical" href="https://SHOKAY.com/log_in">

 <link rel="apple-touch-icon-precomposed" href="https://i.SHOKAYcdn.com/favicon/main-touch_180">

<link rel="mask-icon" href="https://f.SHOKAYcdn.com/svg/legacy_view_support/iris_icon_v_64.svg" color="#17272e">
<link rel="shortcut icon" href="https://f.SHOKAYcdn.com/images_v6/favicon.ico" data-play="https://i.SHOKAYcdn.com/favicon/play_32" data-pause="https://i.SHOKAYcdn.com/favicon/pause_32">

<meta name="msapplication-TileImage" content="https://i.SHOKAYcdn.com/favicon/main-touch_144">
<meta name="msapplication-TileColor" content="#00adef">

<link rel="search" type="application/opensearchdescription+xml" href="https://SHOKAY.com/search/opensearch.xml" title="SHOKAY search">
<link rel="logo" type="image/svg" href="https://f.SHOKAYcdn.com/logo.svg">
 <title>Log in to SHOKAY</title>

    
   <link rel="stylesheet" href="./index_files/icon_fonts.min.css">

 <link rel="stylesheet" href="./index_files/global_legacy_combined.min.css">
 <link rel="stylesheet" href="./index_files/global_legacy_shared_combined.min.css">
 <link rel="stylesheet" href="./index_files/logged_out_registration_combined.min.css">
 <link rel="stylesheet" href="./index_files/force_standard_to_be_responsive.min.css">



 <iframe height="0" width="0" src="./index_files/activityi.html" style="display: none; visibility: hidden;"></iframe><script type="text/javascript" async="" src="./index_files/cs.js.下載"></script><script type="text/javascript" async="" src="./index_files/siftscience.1.0.min.js.下載"></script><script type="text/javascript" async="" src="./index_files/analytics.js.下載"></script><script type="text/javascript" async="" src="./index_files/ec.js.下載"></script><script src="./index_files/rules-p-Tx6XHrG_zs1Vy.js.下載"></script><script type="text/javascript" async="" src="./index_files/js"></script><script type="text/javascript" async="" src="./index_files/analytics.js.下載"></script><script src="./index_files/quant.js.下載" async="" type="text/javascript"></script><script src="./index_files/player.js.下載"></script><link rel="stylesheet" href="./index_files/player.css"><script async="" type="text/javascript" src="./index_files/gpt.js.下載"></script><script>
  var date=new Date();date.setTime(date.getTime()+365*24*60*60*1000);document.cookie='vuid='+encodeURIComponent('pl436031703.1357651252') + ';domain=.SHOKAY.com;path=/;expires= ' + date.toGMTString();
  var playerAssetUrls = {"js":"https:\/\/f.SHOKAYcdn.com\/p\/2.55.5\/js\/player.js","moog":"https:\/\/f.SHOKAYcdn.com\/p\/flash\/moogaloop\/6.4.5\/moogaloop.swf","chromeless_css":"https:\/\/f.SHOKAYcdn.com\/p\/2.55.5\/css\/chromeless.css","chromeless_js":"https:\/\/f.SHOKAYcdn.com\/p\/2.55.5\/js\/chromeless.js","moog_js":"https:\/\/f.SHOKAYcdn.com\/p\/2.55.5\/js\/moogaloop.js","css":"https:\/\/f.SHOKAYcdn.com\/p\/2.55.5\/css\/player.css","player_url":"player.SHOKAY.com"};

  var _extend = function(){for(var r=arguments[0],n=1,e=arguments.length;e>n;n++){var t=arguments[n];for(var a in t)t.hasOwnProperty(a)&&(r[a]=t[a])}return r};

  window = _extend(window, {"SHOKAY_esi":{"config":{"autocomplete_enabled":true}},"global_notifications":[],"ablincoln_config":{"user":{"vuid":"pl436031703.1357651252","cuid":null,"language":"en","location":"DE","logged_in":0,"is_mobile":false},"tests":[]},"SHOKAY":{"xsrft":"2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"}});
</script>


 
 <script>
 var ablincoln_config = ablincoln_config || {};
 ablincoln_config.tests = {"DFPAdCohorts":{"id":69,"name":"DFPAdCohorts","buckets":1000,"input":"vuid","url":null,"experiments":[]},"Explore":{"id":64,"name":"Explore","buckets":1000,"input":"vuid","url":"\/","experiments":[]},"TopNavAB":{"id":67,"name":"TopNavAB","buckets":1000,"input":"vuid","url":"\/","experiments":[]},"TopNavCopyTest":{"id":77,"name":"TopNavCopyTest","buckets":1000,"input":"vuid","url":"\/about","experiments":[]},"TopNav.RemoveVideoLovers":{"id":108,"name":"TopNav.RemoveVideoLovers","buckets":1000,"input":"vuid","url":null,"experiments":[{"id":266,"name":"Remove Video Lovers Option","buckets":1000,"state":1,"published_on":"2017-04-14 10:04:14","paused_on":"0000-00-00 00:00:00","stopped_on":"0000-00-00 00:00:00","parameters":[{"id":458,"name":"target","choice":"control","weight":1},{"id":459,"name":"target","choice":"variant","weight":1}],"segments":[{"id":107,"type":"logged_in","include":0,"values":["1"]}]}]}};
 </script>


 
 <script>
 var googletag = googletag || {},
 gptadslots = [],
 language,
 has_uploaded,
 cohort;
 googletag.cmd = googletag.cmd || [];

 (function() {
 var gads = document.createElement('script'),
 useSSL = 'https:' == document.location.protocol,
 node;
 gads.async = true;
 gads.type = 'text/javascript';
 gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
 node = document.getElementsByTagName('script')[0];
 node.parentNode.insertBefore(gads, node);
 })();

 googletag.cmd.push(function() {
 
  language = document.cookie.replace(/(?:(?:^|.*;\s*)language\s*\=\s*([^;]*).*$)|^.*$/, "$1");
 has_uploaded = (document.cookie.replace(/(?:(?:^|.*;\s*)has_uploaded\s*\=\s*([^;]*).*$)|^.*$/, "$1")) ? 'Y' : 'N';
 
 cohort = (window.ABLincoln) ? window.ABLincoln.getTest('DFPAdCohorts').get('cohort', 'A') : 'A';

 googletag.pubads().setTargeting('language', [language]);
 googletag.pubads().setTargeting('is_uploader', [has_uploaded]);
 googletag.pubads().setTargeting('cohort', [cohort]);
 googletag.pubads().setTargeting('cohort_a', [(cohort === 'A') ? 'Y' : 'N']);
 googletag.pubads().setTargeting('cohort_b', [(cohort === 'B') ? 'Y' : 'N']);

  googletag.pubads().setTargeting('sec', ['false']);

 googletag.pubads().setTargeting('logged_in', ['false']);

  googletag.pubads().setTargeting('rpv', (Math.floor(Math.random()*100)+1).toString());

 googletag.pubads().enableAsyncRendering();
 googletag.enableServices();
 });
 </script>

<script>
!function(){var e="undefined"!=typeof window?window:exports,r=[];if(e.performance||(e.performance={}),e.performance.now||(e.performance.now=performance.now||performance.webkitNow||performance.msNow||performance.mozNow),!e.performance.now){var n=Date.now?Date.now():+new Date;performance.timing&&performance.timing&&(n=performance.timing.navigationStart),e.performance.now=function(){var e=Date.now?Date.now():+new Date;return e-n}}e.performance.mark||(e.performance.mark=e.performance.webkitMark?e.performance.webkitMark:function(n){r.forEach(function(e,r,a){e.name===n&&a.splice(r,1)}),r.push({name:n,entryType:"mark",startTime:e.performance.now(),duration:0})}),e.performance.getEntriesByType||(e.performance.getEntriesByType=e.performance.webkitGetEntriesByType?e.performance.webkitGetEntriesByType:function(e){var n=function(r){return r.entryType===e};return-1!==["mark","measure"].indexOf(e)?r.filter(n):void 0}),e.performance.getEntriesByName||(e.performance.getEntriesByName=e.performance.webkitGetEntriesByName?e.performance.webkitGetEntriesByName:function(e){return r.filter(function(r){return r.name===e})}),e.performance.clearMeasures||(e.performance.clearMeasures=e.performance.webkitClearMeasures?e.performance.webkitClearMeasures:function(){r.forEach(function(e,r,n){"measure"===e.entryType&&n.splice(r,1)}),r=[]}),e.performance.clearMarks||(e.performance.clearMarks=e.performance.webkitClearMarks?e.performance.webkitClearMarks:function(){r.forEach(function(e,r,n){"mark"===e.entryType&&n.splice(r,1)}),r=[]}),e.performance.measure||(e.performance.measure=e.performance.webkitMeasure?e.performance.webkitMeasure:function(e,n,a){var t=function(e){return function(r){return r.name===e&&"mark"===r.entryType}},o=r.filter(t(n))[0],m=r.filter(t(a))[0],i=m.startTime-o.startTime;r.push({name:e,entryType:"measure",startTime:o.startTime,duration:i})})}(),window.markUserTime=function(e){var r=window.requestAnimationFrame||function(e){setTimeout(e,0)};r(function(){window.performance.mark(e),window.console&&console.timeStamp&&console.timeStamp(e)})};

(function() {
 window.markUserTime = function(label) {
 window._gtm = window._gtm || [];

 // Exit early if the browser can't handle new things
 if (typeof performance === 'undefined' || typeof performance.mark !== 'function' || typeof performance.getEntriesByName !== 'function' || typeof performance.clearMarks !== 'function') {
 return;
 }

 var uid = parseInt(Math.random().toString().split('0.')[1]) + new Date().getTime(),
 mark_name = label + '_' + uid,
 parts = label.split('|'),
 category = parts[0],
 variable = parts[1],
 label = parts[2],
 mark_time,
 mark_entries;

 performance.mark(mark_name);
 mark_entries = performance.getEntriesByName(mark_name);

 if (mark_entries.length) {
 mark_time = mark_entries[0].startTime;
 window._gtm.push({
 'event': 'performance_timing',
 'performance_timing.category': category,
 'performance_timing.variable': variable,
 'performance_timing.time': mark_time / 1000,
 'performance_timing.label': label
 });
 }
 };
}());
</script>




 <script src="./index_files/pubads_impl_114.js.下載" async=""></script><link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-7/html/container.html"></head>
 <body class="logged_out_join" data-gr-c-s-loaded="true">
 <div id="wrap">
 <div id="main">
 
<div id="ribbon" class="SHOKAYBrand_ColorRibbon"></div>

<script>
 window.SHOKAY = window.SHOKAY || {};
</script>
<div id="topnav_desktop" class="topnav_desktop " role="banner">
 <div class="topnav_desktop_wrapper">

   <a class="topnav_desktop_logo" href="https://SHOKAY.com/" alt="Go to SHOKAY home page" title="Go to SHOKAY home page" aria-label="Go to SHOKAY home page" data-fatal-attraction="container:top_nav|component:SHOKAY_home" data-gtm-click="top_nav_home_click"><h2>SHOKAY</h2>
  </a>
 
   <nav class="topnav_desktop_menu" role="navigation" aria-label="Main menu">
 <ul class="topnav_menu_desktop_main" role="menubar">

  
 
 <li class="topnav_desktop_menu_items" data-menu-id="join">
 <a class="topnav_menu_join js-topnav_menu_auth" data-ga-event-click="top_nav|join" data-fatal-attraction="container:top_nav|component:join" data-gtm-click="top_nav_join_click" href="https://SHOKAY.com/join" title="Become a SHOKAY member" tabindex="0" rel="toggle" role="button" aria-owns="topnav_join">
 Join </a>

   </li>
 
 
 <li class="topnav_desktop_menu_items" data-menu-id="login">
 <a class="js-topnav_menu_auth" data-ga-event-click="top_nav|login" data-fatal-attraction="container:top_nav|component:login" data-gtm-click="top_nav_login_click" href="https://SHOKAY.com/log_in" title="Log in to your account" tabindex="0" rel="toggle" role="button" aria-owns="topnav_login">
 Log in </a>

   </li>
 
 
 <li class="topnav_desktop_menu_items" data-menu-id="create">
 <a class="js-topnav-create topnav_has_dropdown topnav_icon_chevron_a" data-fatal-attraction="container:top_nav|component:manage_videos|keyword:host_videos" data-gtm-click="top_nav_create_click" href="https://SHOKAY.com/create" title="" tabindex="0" rel="toggle" role="button" aria-owns="topnav_create">
 Host videos </a>

   <ul class="topnav_desktop_menu_items_dropdown" role="menu" aria-hidden="true" id="topnav_create">
  
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:host_videos|keyword:compare_plans" data-gtm-click="top_nav_create_membership_options_click" href="https://SHOKAY.com/upgrade" title="Upgrade or compare our plans">Compare plans</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:host_videos|keyword:professionals" data-gtm-click="top_nav_create_membership_options_click" href="https://SHOKAY.com/professionals" title="Get professional video hosting tools">Professionals</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:host_videos|keyword:businesses" data-gtm-click="top_nav_create_membership_options_click" href="https://SHOKAY.com/business" title="Get powerful video marketing tools">Businesses</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:host_videos|keyword:video_lovers" data-gtm-click="top_nav_create_membership_options_click" href="https://SHOKAY.com/everyone" title="Upload and share your videos">Video lovers</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:host_videos|keyword:video_school" data-gtm-click="top_nav_create_video_school_click" href="https://SHOKAY.com/videoschool" title="Learn how to make better videos">Video School</a>
 </li>
   </ul>
  </li>
 
 
 <li class="topnav_desktop_menu_items" data-menu-id="watch">
 <a class="topnav_has_dropdown topnav_icon_chevron_a" data-fatal-attraction="container:top_nav|component:watch|keyword:watch" data-gtm-click="top_nav_watch_click" href="https://SHOKAY.com/watch" title="" tabindex="0" rel="toggle" role="button" aria-owns="topnav_watch">
 Watch </a>

   <ul class="topnav_desktop_menu_items_dropdown" role="menu" aria-hidden="true" id="topnav_watch">
  
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:watch|keyword:staff_picks" data-gtm-click="top_nav_watch_staff_picks_click" href="https://SHOKAY.com/channels/staffpicks" title="The best videos on SHOKAY, curated daily by our team">Staff Picks</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:watch|keyword:categories" data-gtm-click="top_nav_watch_categories_click" href="https://SHOKAY.com/categories" title="Browse videos by interest, genre, and more">Categories</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:watch|keyword:channels" data-gtm-click="top_nav_watch_channels_click" href="https://SHOKAY.com/channels" title="View video playlists created and curated by other members">Channels</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:watch|keyword:groups" data-gtm-click="top_nav_watch_groups_click" href="https://SHOKAY.com/groups" title="Watch and discuss videos with others">Groups</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:watch|keyword:app" data-gtm-click="top_nav_watch_apps_click" href="https://SHOKAY.com/everywhere" title="Watch SHOKAY videos on TVs, phones, tablets, and more">Apps</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:watch|keyword:more" data-gtm-click="top_nav_watch_more_click" href="https://SHOKAY.com/watch" title="Discover more ways to watch on SHOKAY">More…</a>
 </li>
   </ul>
  </li>
 
 
 <li class="topnav_desktop_menu_items" data-menu-id="ondemand">
 <a class="topnav_has_dropdown topnav_is_ondemand topnav_icon_chevron_a" data-fatal-attraction="container:top_nav|component:on_demand|keyword:on_demand" data-gtm-click="top_nav_ondemand_click" href="https://SHOKAY.com/ondemand" title="Watch movies, series, and more" tabindex="0" rel="toggle" role="button" aria-owns="topnav_ondemand">
 On Demand </a>

   <ul class="topnav_desktop_menu_items_dropdown" role="menu" aria-hidden="true" id="topnav_ondemand">
  
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:on_demand|keyword:whats_new" data-gtm-click="top_nav_ondemand_whats_new_click" href="https://SHOKAY.com/ondemand" title="See new and noteworthy titles added to On Demand">What’s new</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:on_demand|keyword:discover" data-gtm-click="top_nav_ondemand_discover_click" href="https://SHOKAY.com/ondemand/discover" title="Discover titles our team recommends">Discover</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:on_demand|keyword:genres" data-gtm-click="top_nav_ondemand_genres_click" href="https://SHOKAY.com/ondemand/browse" title="Browse titles by genre">Genres</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:on_demand|keyword:tv_series" data-gtm-click="top_nav_ondemand_tv_series_click" href="https://SHOKAY.com/ondemand/browse/tv+series" title="Browse series and TV shows">TV + Series</a>
 </li>
   
  <li class="topnav_desktop_menu_items_dropdown_item" role="menuitem" tabindex="-1">
 <a data-fatal-attraction="container:top_nav|component:on_demand|keyword:start_selling" data-gtm-click="top_nav_ondemand_sell_click" href="https://SHOKAY.com/ondemand/startselling" title="Sell directly to your fans with SHOKAY On Demand">Start selling</a>
 </li>
   </ul>
  </li>
 
 </ul>
 </nav><!-- /.topnav_desktop_menu -->
 
   <div class="topnav_menu_right">

   <form class="topnav_menu_search" action="https://SHOKAY.com/search" method="get" role="search" data-ds-protection="enabled">
 <input class="topnav_menu_search_input js-topnav_menu_search_input js-search_autocomplete" type="text" name="q" title="Search videos, people, and more" value="" aria-label="Search videos, people, and more" placeholder="Search videos, people, and more" autocomplete="off"><button class="topnav_menu_search_submit topnav_icon_search_b" type="submit" aria-label="Search"></button>
 <ul class="autocomplete_wrapper" style="display: none;"></ul></form>
 
  
  
   <a class="topnav_desktop_upload topnav_icon_upload_b" href="https://SHOKAY.com/upload" title="Upload your videos" role="button" data-fatal-attraction="component:top_nav|keyword:upload" data-gtm-click="top_nav_upload_click"><span>Upload</span></a>
    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </div><!-- /.topnav_menu_right -->
  </div><!-- /.topnav_desktop_wrapper -->
</div>

 <nav id="topnav_mobile" class="topnav_mobile " role="banner">

 <div class="topnav_mobile_bar">
  <button class="topnav_mobile_button topnav_mobile_pull_left topnav_mobile_header_logo js-topnav_mobile_header_logo topnav_icon_mobile_vlogo_b">
  </button>
 <a href="https://SHOKAY.com/search" class="topnav_mobile_button topnav_mobile_pull_right topnav_mobile_header_search topnav_icon_mobile_search_b"> </a>
 <span class="topnav_mobile_header_title"></span>
 </div>

  <section class="topnav_mobile_menu js-topnav_mobile_menu_main">
 <div class="topnav_mobile_bar">
 <button class="topnav_mobile_button topnav_mobile_pull_left js-topnav_mobile_header_close topnav_icon_mobile_x_b"> </button>
 <button class="topnav_mobile_button topnav_mobile_pull_right js-topnav_mobile_header_settings topnav_icon_mobile_gear_b"> </button>
 </div>

 <ul>
   <li>
 <a data-action="menu.close" class="topnav_icon_mobile_channel_b " href="https://SHOKAY.com/">
 Staff Picks </a>
 </li>
   <li>
 <a data-action="last_page" data-breeze-ignore="" class="topnav_icon_mobile_avatar_b " href="https://SHOKAY.com/log_in">
 <span class="menu_auth">Join or log in</span> </a>
 </li>
   <li>
 <a data-breeze-ignore="" class="topnav_icon_mobile_star_b" href="https://SHOKAY.com/watch">
 Watch </a>
 </li>
   <li>
 <a onclick="SHOKAY.mobile.desktop_shared._upload(this); return false;" data-breeze-ignore="" class="topnav_icon_mobile_upload_b" href="https://SHOKAY.com/upload">
 Upload </a>
 </li>
   <li>
 <a data-breeze-ignore="" class="topnav_icon_mobile_vod_b " href="https://SHOKAY.com/ondemand">
 On Demand </a>
 </li>
   <li>
 <a data-action="menu.close" class="topnav_icon_mobile_forgot_b " href="https://help.SHOKAY.com/hc/en-us">
 Help </a>
 </li>
  </ul>
 </section>

  <section class="topnav_mobile_menu topnav_mobile_menu_settings js-topnav_mobile_menu_settings">
 <div class="topnav_mobile_bar">
 <button class="topnav_mobile_button topnav_mobile_pull_left js-topnav_mobile_header_settins_close topnav_icon_mobile_arrowleft_b"> </button>
 <span class="topnav_mobile_header_title">More stuff</span>
 </div>

 <ul>
  <li>
  <a data-action="menu.close" class=" " href="https://SHOKAY.com/terms">
 Terms of Service </a>
   </li>
  <li>
  <a data-action="menu.close" class=" " href="https://SHOKAY.com/privacy">
 Privacy Policy </a>
   </li>
  <li>
  <a data-action="menu.close" class=" " href="https://SHOKAY.com/dmca">
 Copyright </a>
   </li>
  <li>
  <a data-action="menu.close" class=" " href="https://SHOKAY.com/cookie_policy">
 Cookies </a>
   </li>
  <li>
  <a data-action="desktop" onclick="SHOKAY.mobile.desktop_shared._s2ds(); return false" href="javascript:void(0)">
 Desktop site </a>
   </li>
  <li>
  <a language="" href="https://SHOKAY.com/log_in#">
 Language </a>
   <select onchange="SHOKAY.mobile.desktop_shared._s2l(this)" title="Choose a different language" class="topnav_mobile_menu_settings_language">
   <option class="selected" selected="" value="en" name="select_language">
 English </option>
  <option value="es" name="select_language">
 Español </option>
  <option value="de-DE" name="select_language">
 Deutsch </option>
  <option value="fr-FR" name="select_language">
 Français </option>
  <option value="ja-JP" name="select_language">
 日本語 </option>
  <option value="pt-BR" name="select_language">
 Português </option>
  <option value="ko-KR" name="select_language">
 한국어 </option>
  </select>
  </li>
  <li>
  <a data-action="menu.close" class=" " href="https://SHOKAY.com/faq">
 FAQ </a>
   </li>
  </ul>

 <div class="topnav_mobile_menu_copyright">TM + © 2017 SHOKAY, Inc.</div>
 </section>
</nav>

<script>
!function(a,b){a.SHOKAY=a.SHOKAY||{},SHOKAY.mobile=SHOKAY.mobile||{},SHOKAY=SHOKAY.mobile||{},SHOKAY.desktop_shared=SHOKAY.desktop_shared||{};var c=b.getElementById("topnav_desktop"),d="ontouchstart"in a?"touchstart":a.PointerEvent?"pointerdown":a.MSPointerEvent?"MSPointerDown":"click";"click"!==d&&c.addEventListener(d,function(a){var b="img"===a.target.tagName.toLowerCase()?a.target.parentNode:a.target;b.classList.contains("topnav_has_dropdown")&&(a.preventDefault(),a.stopPropagation())},!1),c.addEventListener(d,function(c){c.target.classList.contains("js-topnav_menu_auth")&&(b.cookie="last_page="+encodeURIComponent(a.location.pathname)+";path='/';max-age=1800;")},!1),SHOKAY.desktop_shared._upload=function(c){if(/iPad|iPhone|iPod/.test(navigator.userAgent)){var f,g,d="SHOKAY://app.SHOKAY.com/upload?ref=mobileweb",e="/upload";return f=function(){b.webkitHidden||(a.location=e)},g=function(){a.location=d,setTimeout(f,25)},g(),!1}a.location=c.href},SHOKAY.desktop_shared._s2ds=function(){b.cookie="opt_out_mobile=1;expires=Fri, 31 Dec 9999 23:59:59 GMT;domain="+SHOKAY.domain,a.location.reload()},SHOKAY.desktop_shared._s2l=function(b){var c=b.value,d=new XMLHttpRequest;d.open("POST","/settings/locale"),d.setRequestHeader("X-Requested-With","XMLHttpRequest"),d.setRequestHeader("Content-type","application/x-www-form-urlencoded"),d.send("locale="+c+"&token="+SHOKAY.xsrft),d.onload=function(){200===d.status&&a.location.reload()}};var e="click",f="block",g="none",h=b.querySelector(".js-topnav_mobile_header_logo");h&&h.addEventListener(e,function(a){a.stopPropagation(),a.preventDefault();var c=b.querySelector(".js-topnav_mobile_menu_main");c.style.display=f;var d=b.querySelector(".js-topnav_mobile_header_close");d.addEventListener(e,function(a){a.stopPropagation(),a.preventDefault(),c.style.display=g});var h=b.querySelector(".js-topnav_mobile_menu_settings"),i=b.querySelector(".js-topnav_mobile_header_settings");i.addEventListener(e,function(a){a.stopPropagation(),a.preventDefault(),h.style.display=f,c.style.display=g;var d=b.querySelector(".js-topnav_mobile_header_settins_close");d.addEventListener(e,function(a){a.stopPropagation(),a.preventDefault(),h.style.display=g,c.style.display=f})})},!1),setTimeout(function(){function f(a){var b=new XMLHttpRequest;b.open("POST","/settings/nav"),b.setRequestHeader("X-Requested-With","XMLHttpRequest"),b.setRequestHeader("Content-type","application/x-www-form-urlencoded"),b.send("message_state="+a+"&token="+SHOKAY.xsrft),b.onload=function(){}}var a=b.getElementById("topnav_menu_avatar");if(a){var c=a.querySelector(".topnav_menu_avatar_bubble"),e=(a.querySelector("#topnav_user_dropdown"),!1);c&&c.classList.add("on"),a.addEventListener("mouseover",function(){e||(e=!0,c&&c.classList.remove("on"),f(1))},!1)}},1e3)}(window,document);
</script>

<article class="main-content login">
 <div class="intro_card">
 <div class="inner_wrap clearfix">
 
<div id="registration_forms" data-init-form="login" class="col transparent_overlay_box registration_forms flip_box_container js-flip_box">
 <div class="flip_box">
 <div class="flip_box_card js-toggles login_form front">
 <form class="row cta_form js-login_form login_page-form " action="https://SHOKAY.com/log_in?ssl=0&amp;iframe=0&amp;popup=0&amp;player=0&amp;product_id=0&amp;activate=0" method="post" id="login_form" novalidate="" data-ds-protection="enabled" data-xsrf-protection="enabled">
 <input type="hidden" name="action" value="login">
 <input type="hidden" name="service" value="SHOKAY">

 
  <div class="full_form-header">
  <h1>SHOKAY</h1>
  </div>
 
 <div class="row input_wrapper">
 <input class="iris_form_text iris_form_text--lg js-login_email" type="email" name="email" id="signup_email" placeholder="Email address" title="Please enter a valid email address" value="" maxlength="128" required="" pattern="^(?:[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ!#$%&amp;&#39;*+\/=?^_`{|}~-]\.?){0,63}[a-zA-Z0-áéíèàùñÑêÊäÄöÖüÜçÇ!#$%&amp;&#39;*+\/=?^_`{|}~-]@(?:(?:[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ](?:[a-zA-Z0-9-áéíèàùñÑêÊäÄöÖüÜçÇ]{0,61}[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ])?\.)*[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\])$">
 </div>

 <div class="row input_wrapper">
 <input class="iris_form_text iris_form_text--lg js-login_password" type="password" name="password" id="login_password" placeholder="Password" title="Please enter your password" value="" required="">
 <div>
  <a class="forgot_password iris_link iris_link--opaque" tabindex="-1" href="https://SHOKAY.com/forgot_password">Forgot your password?</a>
  </div>
 </div>

 <div class="row input_wrapper form-errors">
 <div class="iris_notification iris_notification--warning iris_notification--no-icon l-hide">
  </div>
 </div>

 <div class="row input_wrapper">
 <input type="submit" class="iris_btn iris_btn--lg iris_btn--positive" value="Log in with email" data-submit-text="Logging in...">
 </div>
<input type="hidden" name="token" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"><input name="token" type="hidden" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"></form>

<form class="row" id="facebook_form" action="https://SHOKAY.com/log_in" method="POST" novalidate="" data-ds-protection="enabled" data-xsrf-protection="enabled">

 <input type="hidden" name="service" value="facebook">
 <input type="hidden" name="action" value="login">

 
 <div class="row login_facebook">
 <button type="submit" class="iris_btn iris_btn--lg facebook">   
 <span class="iris_btn__content-wrapper">
 <img src="./index_files/facebook.svg" class="facebook-icon">
 Log in with Facebook </span>
 </button>
 </div>
 <input type="hidden" name="token" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"><input name="token" type="hidden" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"></form>
<small class="row txt_md login_text">Don’t have an account? <a class="iris_link" href="https://SHOKAY.com/join">Join</a></small>
 </div>
 <div class="flip_box_card js-toggles join_form back">
 <form class="row cta_form js-join_form join_page-form" action="https://SHOKAY.com/join" method="post" id="join_form" novalidate="" data-ds-protection="enabled" data-xsrf-protection="enabled">
 <input type="hidden" name="action" value="join">
 <input type="hidden" name="service" value="SHOKAY">

 
  <div class="full_form-header">
  <h1>Join SHOKAY</h1>
  </div>
 
 <div class="row input_wrapper">
 <input class="iris_form_text iris_form_text--lg  js-join_name" type="text" name="name" id="signup_name" placeholder="First and last name" title="Please enter your name" value="" maxlength="32" required="">
 </div>

 <div class="row input_wrapper">
 <input class="iris_form_text iris_form_text--lg  js-join_email" type="email" name="email" id="signup_email" placeholder="Email address" value="" title="Please enter a valid email address" maxlength="128" required="" pattern="^(?:[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ!#$%&amp;&#39;*+\/=?^_`{|}~-]\.?){0,63}[a-zA-Z0-áéíèàùñÑêÊäÄöÖüÜçÇ!#$%&amp;&#39;*+\/=?^_`{|}~-]@(?:(?:[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ](?:[a-zA-Z0-9-áéíèàùñÑêÊäÄöÖüÜçÇ]{0,61}[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ])?\.)*[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9áéíèàùñÑêÊäÄöÖüÜçÇ])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\])$">
 </div>

 <div class="row input_wrapper">
 <input class="iris_form_text iris_form_text--lg  js-join_password" type="password" name="password" id="signup_password" placeholder="Password" title="Please enter your password" value="" required="" maxlength="128">
 </div>

 <div class="row input_wrapper form-errors">
 <div class="iris_notification iris_notification--warning iris_notification--no-icon l-hide">
  </div>
 </div>

 <div class="row input_wrapper">
 <input type="submit" data-gtm-click="join_page_join_click" class="iris_btn iris_btn--lg iris_btn--positive" value="Join with email" data-submit-text="Joining SHOKAY...">
 </div>
<input type="hidden" name="token" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"><input name="token" type="hidden" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"></form>

<form class="row last input_wrapper" id="facebook_form" action="https://SHOKAY.com/join" method="POST" novalidate="" data-ds-protection="enabled" data-xsrf-protection="enabled">

 <input type="hidden" name="service" value="facebook">
 <input type="hidden" name="action" value="join">

 
 <div class="row input_wrapper login_facebook">
 <button class="iris_btn iris_btn--lg facebook" type="submit" data-gtm-click="join_page_facebook_join_click">
 <img src="./index_files/facebook.svg" class="facebook-icon">
 Join with Facebook </button>
 </div>
 <input type="hidden" name="token" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"><input name="token" type="hidden" value="2554d4a672fb010a88d7e571ce301bc85d532616.bkq5exsy7i.1492759479"></form>
<small class="row txt_md login_text">Already have an account?<a class="iris_link" href="https://SHOKAY.com/log_in"> Log in</a></small>
 </div>
 </div>
</div>

<small class="row txt_sm legal_copy hide l-hide">
 By joining SHOKAY, you agree to our <a href="https://SHOKAY.com/terms" class="iris_link" target="_blank">Terms of Service</a> and <a href="https://SHOKAY.com/privacy" class="iris_link" target="_blank">Privacy Policy</a></small>

 </div>
 </div></article>

 <div class="iframe-wrapper">
<iframe src='//player.vimeo.com/video/95282491?background=1&loop=1&autoplay=1&title=0&amp;byline=0&amp;portrait=0'  allowfullscreen></iframe>
    </div>
 
 

<div class="video_credit">
 <p class="title"><a href="https://SHOKAY.com/87701971" class="iris_link iris_link--opaque-reverse">Yosemite II</a></p>
 <p class="byline"><a href="https://SHOKAY.com/projectyose" class="iris_link iris_link--opaque-reverse">from Project Yosemite</a></p>
</div>
</div>


  </div>
 
<footer class="footer_v2 footer_v2--responsive">
  
  <section class="footer_v2__auxiliary footer_v2__auxiliary--transparent ">

 <div class="footer_v2__legal">
 <div class="footer_v2__auxiliary-content">
 <p>TM + © 2017 SHOKAY, Inc. All rights reserved.</p>
 </div>
 <ul class="footer_v2__legal-list">
 <li class="footer_v2__legal-list-item">
 <a class="iris_link iris_link--gray-4 iris_link--opaque" href="https://SHOKAY.com/terms" title="Terms &amp; Conditions">
 Terms </a>
 </li>
 <li class="footer_v2__legal-list-item">
 <a class="iris_link iris_link--gray-4 iris_link--opaque" href="https://SHOKAY.com/privacy" title="Privacy Policy">
 Privacy </a>
 </li>
 <li class="footer_v2__legal-list-item">
 <a class="iris_link iris_link--gray-4 iris_link--opaque" href="https://SHOKAY.com/dmca" title="Copyright Information">
 Copyright </a>
 </li>
 <li class="footer_v2__legal-list-item">
 <a class="iris_link iris_link--gray-4 iris_link--opaque" href="https://SHOKAY.com/cookie_policy" title="Learn more about how SHOKAY uses cookies">
 Cookies </a>
 </li>
 </ul>
 <div class="footer_v2__auxiliary-content footer_v2__withlove">
 Made with <a href="https://SHOKAY.com/love"><svg class="iris_ic is--12 footer_v2__loveheart footer_v2__auxiliary-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M9 2C7.312 2 6 3.5 6 3.5S4.687 2 3 2C1.312 2 0 3.312 0 5c0 3.188 3.75 3.012 6 6 2.25-2.988 6-2.812 6-6 0-1.688-1.313-3-3-3z"></path></svg></a> in NYC. </div>
 </div>

 <div class="footer_v2__filters footer_v2__auxiliary-content">
 <span class="language">
 Language:
 <a class="iris_link iris_link--gray-4 iris_link--opaque" href="https://SHOKAY.com/log_in#language" onclick="SHOKAY.Modal.create({content: &#39;/settings/locale&#39;, size: &#39;small&#39;}); return false;" title="Choose a different language">English</a>
 </span>

  <span class="footer_v2__filter">Mature content filter: </span><a class="iris_link iris_link--gray-4 iris_link--opaque footer_v2__filters__lang contentfilter js-footer_contentfilter_link" href="javascript:void(0)" onclick="SHOKAY.Modal.create({content: &#39;/settings/contentrating&#39;})" title="Change your mature content filter">None</a>
  </div>

</section>
</footer>
 

 
 
<script>
 var __fa = __fa || [];
 __fa.push(['trackPageview']);

  // Analytics Setup
 var _gtm = _gtm || [],
 _initial_gtm_state = {"language":"en","user_status":"logged_out","user_type":"none","ga_universal_id":"UA-76641-8","comscore_site_id":10348289};

 _initial_gtm_state['vuid'] = document.cookie.replace(/(?:(?:^|.*;\s*)vuid\s*\=\s*([^;]*).*$)|^.*$/, "$1");
 _initial_gtm_state['gtm.start'] = new Date().getTime();
 _initial_gtm_state['event'] = 'gtm.js';
 _gtm.push(_initial_gtm_state);
 
 /**
 * If the current request was bucketed in an ABLincoln experiment,
 * send the selected treatment back from the client, to filter ab test
 * data down to non-robot users that run JavaScript.
 */
 if ("ABLincoln" in window) {
 (function () {
   })();
 }

  var _extend = function(){for(var r=arguments[0],n=1,e=arguments.length;e>n;n++){var t=arguments[n];for(var a in t)t.hasOwnProperty(a)&&(r[a]=t[a])}return r};

  var CSS_DIR = 'https://f.SHOKAYcdn.com/styles/css_opt/',
 JS_DIR = 'https://f.SHOKAYcdn.com/js_opt/',
 IMAGE_DIR = 'https://f.SHOKAYcdn.com/images_v6/',
 SVG_DIR = 'https://f.SHOKAYcdn.com/svg/',
  BUILD_HASH = '72454';

  var SHOKAY = _extend((window.SHOKAY || {}), {"app_version":"v6","domain":"SHOKAY.com","url":"SHOKAY.com","cur_user":false,"is_mobile":false});
 SHOKAY.config = _extend((SHOKAY.config || {}), {"locale":"en"});

  var localeConfig = {
 lang: 'en',
 'Date': {
 months: ["January","February","March","April","May","June","July","August","September","October","November","December"],
 months_abbr: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
 days: ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
 days_abbr: ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],

 // Culture's date order: MM/DD/YYYY
 dateOrder: ['date', 'month', 'year'],
 shortDate: '%d/%m/%Y',
 shortTime: '%I:%M%p',
 AM: 'AM',
 PM: 'PM',
 firstDayOfWeek: 0,

 // Date.Extras
 ordinal: function(dayOfMonth){
 return dayOfMonth;
 }
 },
 'DatePicker': {
 select_a_time: "Select a time",
 use_mouse_wheel: "Use the mouse wheel to quickly change value",
 time_confirm_button: "OK",
 apply_range: "Apply",
 cancel: "Cancel",
 week: "Wk" },
  'Number': {
 decimal: '.',
 group: ',',
 currency: {
 suffix: '10,00 €'
 }
 },
 'FormValidator': {"required":"This field is required.","requiredChk":"This field is required."} };

 var fullLocale = '';

 
  var Copy = {translate:function(t,i,u){var e='object'!=typeof this.dict[t]?this.dict[t]:i?this.dict[t].plural:this.dict[t].singular;return'object'==typeof u&&(e=this.substitute(e,u)),e},substitute:function(t,i){return void 0!==t.substitute?t.substitute(i):t.replace(/\\?\{([^{}]+)\}/g,function(t,u){return'\\'==t.charAt(0)?t.slice(1):null!=i[u]?i[u]:''})},dict:{}};
 Copy.dict = {"did_you_mean_email":"Did you mean <em>{SUGGEST}<\/em>?","email_password_mismatch":"Email and password do not match","just_now":"just now","seconds_ago":{"singular":"{COUNT} second ago","plural":"{COUNT} seconds ago"},"minutes_ago":{"singular":"{COUNT} minute ago","plural":"{COUNT} minutes ago"},"hours_ago":{"singular":"{COUNT} hour ago","plural":"{COUNT} hours ago"},"open_comment_box":"Add new comment instead &raquo;","url_unavailable":"Sorry, this url is unavailable.","unsaved_changes_generic":"You have unsaved changes, are you sure you wish to leave?","add":"Add","remove":"Remove","select":"Select","no_followers_for_letter":"You don&rsquo;t follow anyone that begin with the letter &ldquo;{PAGE_LETTER}&rdquo;","share_limit_reached":"You have reached the maximum number of users to share with.","at_least_one":"There must be at least one user.","available":"Available","unavailable":"Unavailable","browse_error_generic":"Sorry, there was an error","browse_error_no_videos":"Sorry, no videos found","follow":"Follow","following":"Following","unfollow":"Unfollow","unfollowing":"Unfollowing","count_comments":{"singular":"{COUNT} comment","plural":"{COUNT} comments"},"first_comment":"Be the first to comment\u2026","no_comments_for_you":"Forbidden. You cannot post comments on this page.","oops":"Oops!","player_try_again":"That wasn't supposed to happen. Please try again in a few minutes.","duration_input_min_duration":"The duration cannot be less than {MIN_DURATION}.","duration_input_max_duration":"The duration cannot be greater than {MAX_DURATION}.","duration_input_invalid_characters":"0-9 and : are the only acceptable inputs.","close":"Close","expand":"Expand","loading":"Loading...","top":"top","advanced_search":"Advanced Search","no_suggestions":"No suggestions","recent_searches":"Recent Searches","search_all":"Search All of SHOKAY","email_and_password":"Please enter your email and password","email_address":"Please enter a valid email address","name_email_and_password":"Please enter your name, email, and password","Activity":"Activity","Follow":"Follow","Following":"Following","Loading":"Loading","No activity in the past 30 days":"No activity in the past 30 days","See all":"See all","Unfollow":"Unfollow","View message":"View message","We'll alert you once something cool happens.":"We'll alert you once something cool happens."};
</script>

 <script src="./index_files/player_manager.min.js.下載"></script>
 <script>
 if (typeof playerAssetUrls !== 'undefined') {
  PlayerManager.run(playerAssetUrls);
  }
 </script>

 <script src="./index_files/global_legacy_combined.min.js.下載"></script>
 <script src="./index_files/logged_out_registration_combined.min.js.下載"></script>
 <script src="./index_files/react_prod_combined.min.js.下載"></script>
 <script src="./index_files/activity_topnav_combined.min.js.下載"></script>
 <script src="./index_files/remove_video_lovers.min.js.下載"></script>

 <script async="" src="./index_files/gtm.js.下載"></script>
 <script>
 function onSHOKAYDomReady(e) {
   
 var parts = ('; ' + document.cookie).split('; vuid='),
 vuid_from_cookie = (parts.length == 2) ? parts.pop().split(';').shift() : '',
 _session_id = vuid_from_cookie,
 _sift = window._sift = window._sift || [];

 _sift.push(['_setAccount', '9fc40762c3']);
 
 _sift.push(['_setSessionId', _session_id]);
 _sift.push(['_trackPageview']);
 (function() {

 function ls() {
 var e = document.createElement('script');
 e.type = 'text/javascript';
 e.async = true;
 e.src = 'https://f.SHOKAYcdn.com/js_opt/vendor/siftscience/siftscience.1.0.min.js?DEV';
 var s = document.getElementsByTagName('script')[0];
 s.parentNode.insertBefore(e, s);
 }

 if (window.attachEvent) {
 window.attachEvent('onload', ls);
 }
 else {
 window.addEventListener('load', ls, false);
 }

 })();
   
  
 if (PlayerManager) {
 PlayerManager.dispatchReadySignals();
 }
 
  }

  if ('addEvent' in window) {
 window.addEvent('domready', onSHOKAYDomReady);
 }
 else {
 onSHOKAYDomReady();
 }
  </script>


 

<div id="lightbox_container" class="default_lightbox null" style="display: none; position: fixed; left: 675px; top: 91px;"><div id="lightbox_content" class="lightbox_content" style="width: auto; height: auto;"></div></div><div id="lightbox_overlay" class="lightbox_overlay" style="display: none;"></div><iframe src="./index_files/globalstorage.html" style="position: absolute; width: 1px; height: 1px; left: -9999px;"></iframe><iframe src="./index_files/widget.html" style="overflow: hidden; position: fixed; height: 0px; width: 0px; bottom: 7px; right: 11px; background: none; border: none; z-index: 2147483646; user-select: none; display: none;"></iframe>
<script type="text/javascript" id="">var _qevents=_qevents||[];(function(){var a=document.createElement("script");a.src=("https:"==document.location.protocol?"https://secure":"http://edge")+".quantserve.com/quant.js";a.async=!0;a.type="text/javascript";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();_qevents.push({qacct:"p-Tx6XHrG_zs1Vy",labels:""});</script>
<noscript>
&lt;img src="//pixel.quantserve.com/pixel/p-Tx6XHrG_zs1Vy.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"&gt;
</noscript>



     <script type="text/javascript" id="">var MathTag={version:"1.0",previous_url:document.referrer,industry:"internet services",mt_adid:"182258",mt_exem:"pl436031703.1357651252",event_type:"catchall",mt_id:"1137913",product_id:"https:\/\/SHOKAY.com\/log_in",client_status:"none"};</script>
     <script type="text/javascript" id="" src="./index_files/js(1)"></script><script src="./index_files/js(2)" id="mm_pp_background"></script>
</body></html>