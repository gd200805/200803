
<?php 
//$t_url=$_GET['url']; //此代码无法支持带请求参数的目的地址，已弃用！
$t_url = preg_replace('/^url=(.*)$/i','$1',$_SERVER["QUERY_STRING"]); //这个支持
if(!empty($t_url)) {
    preg_match('/(http|https):\/\//',$t_url,$matches);
    if($matches){
        $url=$t_url;
        $title='页面加载中,请稍候...';
    } else {
        preg_match('/\./i',$t_url,$matche);
        if($matche){
            $url='http://'.$t_url;
            $title='页面加载中,请稍候...';
        } else {
            $url='//player.alicdn.com/video/aliyunmedia.mp4';
            $title='参数错误，正在返回首页...';
        }
    }
} else {
    $title='参数缺失，正在返回首页...';
    $url='//player.alicdn.com/video/aliyunmedia.mp4';
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://www.taiwanyan.xyz/favicon.ico" rel="icon">
  <title><?php echo $url;?>在线播放</title>

	<link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='youshang_css-css'  href='https://www.taiwanyan.xyz/wp-content/plugins/you-shang/static/youshang.css?ver=1.0.1' type='text/css' media='screen' />
<link rel='stylesheet' id='external-css'  href='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/css/external.css?ver=6.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='sweetalert2-css'  href='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/css/sweetalert2.min.css?ver=6.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='app-css'  href='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/css/app2.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='diy-css'  href='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/css/diy.css?ver=6.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/css/jquery.fancybox.min.css?ver=6.2.0' type='text/css' media='all' />
<script type='text/javascript' src='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/js/jquery-2.2.4.min.js?ver=2.2.4'></script>
<script type='text/javascript' src='https://www.taiwanyan.xyz/wp-content/plugins/links-auto-replacer/public/js/lar-public.js?ver=2.0.0'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/js/plugins/sweetalert2.min.js?ver=6.2.0'></script>
<style> .lar_social_share_icon{
 				margin: 2px;
 				}</style><meta name="keywords" content="M3U8视频播放API">
<meta name="description" content="M3U8视频播放API">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="https://www.taiwanyan.xyz/wp-content/themes/ripro/assets/js/html5shiv.js"></script>
      <script src="https://www.taiwanyan.xyz/wp-content/themes/ripro/assets/js/respond.min.js"></script>
    <![endif]-->
    </head>

<body class="post-template-default single single-post postid-10510 single-format-standard  max_width navbar-sticky navbar-slide sidebar-right pagination-infinite_button no-off-canvas">

<div class="site">
    
<header class="site-header">
      <div class="container">
      <div class="navbar">
      <div class="logo-wrapper">
              <a href="https://www.taiwanyan.xyz/">
          <img class="logo regular tap-logo" src="https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png" data-dark="" alt="湾湾眼">
        </a>
            </div>
      <div class="sep"></div>
      
      <nav class="main-menu hidden-xs hidden-sm hidden-md">
        <ul id="menu-menu-1" class="nav-list u-plain-list"><li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="/"><span><i class="fa fa-home"></i> 首页</span></a></li>
<li id="menu-item-22" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22"><a href="https://www.taiwanyan.xyz/skzqs/"><span><i class="fa fa-youtube-play"></i> 少康战情室</span></a></li>
<li id="menu-item-25" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-25"><a href="https://www.taiwanyan.xyz/guandian/"><span><i class="fa fa-eye"></i> 观点</span></a>
<ul class="sub-menu">
	<li id="menu-item-118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-118"><a href="https://www.taiwanyan.xyz/guandian/lxtx/"><i class="fa fa-youtube-play"></i> 龙行天下</a></li>
	<li id="menu-item-2056" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2056"><a href="https://www.taiwanyan.xyz/guandian/qqpd/"><i class="fa fa-youtube-play"></i> 全球派对</a></li>
	<li id="menu-item-152" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-152"><a href="https://www.taiwanyan.xyz/guandian/txlsj/"><i class="fa fa-youtube-play"></i>唐湘龙时间</a></li>
	<li id="menu-item-2575" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2575"><a href="https://www.taiwanyan.xyz/guandian/cjqch/"><i class="fa fa-youtube-play"></i>  财经起床号</a></li>
	<li id="menu-item-24" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24"><a href="https://www.taiwanyan.xyz/guandian/zjlfp/"><i class="fa fa-youtube-play"></i>  正经龙凤配</a></li>
	<li id="menu-item-893" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-893"><a href="https://www.taiwanyan.xyz/guandian/xdzxh/"><i class="fa fa-youtube-play"></i> 小董真心话</a></li>
	<li id="menu-item-2017" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2017"><a href="https://www.taiwanyan.xyz/guandian/zhaoshaokangguandian/"><i class="fa fa-youtube-play"></i> 赵少康观点</a></li>
	<li id="menu-item-2018" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2018"><a href="https://www.taiwanyan.xyz/guandian/chwsj/"><i class="fa fa-youtube-play"></i> 陈挥文时间</a></li>
</ul>
</li>
<li id="menu-item-26" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26"><a href="https://www.taiwanyan.xyz/hzxyw/"><i class="fa fa-youtube-play"></i> 黄智贤夜问</a></li>
<li id="menu-item-237" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-237"><a href="https://www.taiwanyan.xyz/xwshl/"><i class="fa fa-youtube-play"></i> 新闻深喉咙</a></li>
<li id="menu-item-892" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-892"><a href="https://www.taiwanyan.xyz/qsj/"><i class="fa fa-youtube-play"> </i> 寰宇全视界</a></li>
<li id="menu-item-2016" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2016"><a href="https://www.taiwanyan.xyz/xwljf/"><i class="fa fa-youtube-play"></i> 新闻龙卷风</a></li>
<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-17"><a href="https://www.taiwanyan.xyz/zhuanti/"><i class="fa fa-list-ul" aria-hidden="true"></i> 更多栏目</a>
<ul class="sub-menu">
	<li id="menu-item-453" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-453"><a href="https://www.taiwanyan.xyz/news/"><span><i class="fa fa-newspaper-o" aria-hidden="true"></i>  新闻</span></a></li>
	<li id="menu-item-1210" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-1210"><a href="https://www.taiwanyan.xyz/wusejuexing/"><i class="fa fa-youtube-play"></i> 无色觉醒</a></li>
	<li id="menu-item-2012" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2012"><a href="https://www.taiwanyan.xyz/xmlck/"><i class="fa fa-youtube-play"></i> 乡民来冲康</a></li>
	<li id="menu-item-131" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-131"><a href="https://www.taiwanyan.xyz/guandian/jincanrong/"><i class="fa fa-youtube-play"></i> 金灿荣频道</a></li>
	<li id="menu-item-2014" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2014"><a href="https://www.taiwanyan.xyz/ysgdxsy/"><i class="fa fa-youtube-play"></i> 杨世光的新视野</a></li>
	<li id="menu-item-9502" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9502"><a href="https://www.taiwanyan.xyz/94/">战神94强</a></li>
	<li id="menu-item-9503" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9503"><a href="https://www.taiwanyan.xyz/wqsjzb/">文茜世界周报</a></li>
	<li id="menu-item-9505" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9505"><a href="https://www.taiwanyan.xyz/qql/">谦秋论</a></li>
	<li id="menu-item-9507" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9507"><a href="https://www.taiwanyan.xyz/dsj/">大世界周末版</a></li>
	<li id="menu-item-9506" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9506"><a href="https://www.taiwanyan.xyz/yetai/">野台</a></li>
</ul>
</li>
<li id="menu-item-10230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10230"><a href="https://www.taiwanyan.xyz/top-news/">最新内容</a></li>
</ul>      </nav>
      
      <div class="main-search">
        <form method="get" class="search-form inline" action="https://www.taiwanyan.xyz/">
  <input type="search" class="search-field inline-field" placeholder="输入关键词，回车..." autocomplete="off" value="" name="s" required="required">
  <button type="submit" class="search-submit"><i class="mdi mdi-magnify"></i></button>
</form>        <div class="search-close navbar-button"><i class="mdi mdi-close"></i></div>
      </div>

      <div class="actions">
                  <!-- user -->
                        <div class="login-btn navbar-button"><i class="mdi mdi-account"></i> 登录</div>
                          <!-- user end -->
        <div class="search-open navbar-button"><i class="mdi mdi-magnify"></i></div>
                <div class="tap-dark navbar-button"><i class="mdi mdi-brightness-4"></i></div>
                <div class="burger"></div>
      </div>
    </div>
      </div>
  </header>

<div class="header-gap"></div>    
    <div class="site-content">
    

<div class="container">
	<div class="breadcrumbs">
		</div>
	<div class="row">
		<div class="content-column col-lg-9">
			<div class="content-area">
				<main class="site-main">
					<article id="post-10510" class="article-content">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/qq165529094/twycdn/assets/css/DPlayer.min.css" />
<div id="ripro-mse">
  <div id="mse-video"></div>
</div>

<script src="https://cdn.jsdelivr.net/gh/qq165529094/twycdn/assets/js/plugins/hls.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/qq165529094/twycdn/assets/js/plugins/DPlayer.min.js"></script>
<script type="text/javascript">
  const dp = new DPlayer({
      container: document.getElementById('ripro-mse'),
      logo: 'https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png',  //LOGO
      video: {
          url: '<?php echo $url;?>',  //视频地址
          type: 'auto', //视频类型
          pic: '', //视频类型
      },
      contextmenu: [{text: '湾湾眼',link: 'https://www.taiwanyan.xyz',}],
  });

      var notice = $(".dplayer-notice")
    if (notice.hasClass('dplayer-notice')) {
      notice.css("opacity","0.8"); //设置透明度
      notice.append('<i class="fa fa-unlock-alt"></i> 您已获得当前视频观看权限');
    }
    dp.on('play', function() {
      notice.css("opacity","0"); //设置透明度
    });
    dp.on('pause', function() {
      notice.css("opacity","0.8"); //设置透明度
    });
  </script>
  <div class="container">
  <div class="cao_entry_header"></div>
  </div>  <div class="container">
    <div class="entry-wrapper">
      <div id="pay-single-box"></div>
        <div class="article-copyright"><br>
1、在网站以及论坛里发表的文章仅代表作者本人的观点，与本网站立场无关。<br>
2、网站以及论坛的所有内容都不保证其准确性，有效性，时间性。阅读本站内容因误导等因素而造成的损失本站不承担连带责任。<br>
3、当政府机关依照法定程序要求披露信息时，网站以及论坛均得免责。<br>
4、若因线路及非本站所能控制范围的故障导致暂停服务期间造成的一切不便与损失，网站以及论坛不负任何责任。<br>
5、注册会员通过任何手段和方法针对网站以及论坛进行破坏，我们有权对其行为作出处理。并保留进一步追究其责任的权利。<br/></div>

<div class="article-footer">
    <div class="author-box">
    <div class="author-image">
      <img alt='CN' data-src='https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/avatar/avatar-1.jpg' class='lazyload avatar avatar-140 photo gravatar' height='140' width='140' />    </div>
    <div class="author-info"></div>
  </div>
      <div class="xshare">
      <span class="xshare-title">分享到：</span>
                 <a href="javascript:;" title="收藏文章" etap="star" data-postid="10510" class="ripro-star"><i class="fa fa-star-o"></i></a>
            <a href="" etap="share" data-share="qq" class="share-qq"><i class="fa fa-qq"></i></a>
      <a href="" etap="share" data-share="weibo" class="share-weibo"><i class="fa fa-weibo"></i></a>
              <a href="javascript:;" class="btn-bigger-cover share-weixin" data-nonce="cb5f869bff" data-id="10510" data-action="create-bigger-image" id="bigger-cover"><i class="fa fa-paper-plane"></i></a>
        </div>
   
</div>    </div>
  </div>
</article>


  <div class="entry-navigation"></div>

      <!-- # 标准网格模式... -->
				</main>
			</div>
		</div>
					<div class="sidebar-column col-lg-3">
				
<aside class="widget-area">
  <div id="magsy_category_widget-2" class="widget widget_magsy_category_widget">        <ul>
                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/sjybz/" title="View all posts in 世界一把抓">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                世界一把抓              </span>
              <span class="category-count">18</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/xmlck/" title="View all posts in 乡民来冲康">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                乡民来冲康              </span>
              <span class="category-count">48</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/qqpd/" title="View all posts in 全球派对">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                全球派对              </span>
              <span class="category-count">20</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/gonggao/" title="View all posts in 公告">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                公告              </span>
              <span class="category-count">5</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/%e5%85%b0%e8%90%b1%e8%a7%82%e7%82%b9/" title="View all posts in 兰萱观点">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                兰萱观点              </span>
              <span class="category-count">14</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/txh/" title="View all posts in 同鞋会">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                同鞋会              </span>
              <span class="category-count">18</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/txlsj/" title="View all posts in 唐湘龙时间">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                唐湘龙时间              </span>
              <span class="category-count">136</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/dsj/" title="View all posts in 大世界">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                大世界              </span>
              <span class="category-count">19</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/qsj/" title="View all posts in 寰宇全视界">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                寰宇全视界              </span>
              <span class="category-count">134</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/xdzxh/" title="View all posts in 小董真心话">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                小董真心话              </span>
              <span class="category-count">103</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/skzqs/" title="View all posts in 少康战情室">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                少康战情室              </span>
              <span class="category-count">486</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/ynj/" title="View all posts in 尹乃菁时间">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                尹乃菁时间              </span>
              <span class="category-count">11</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/94/" title="View all posts in 战神94强">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                战神94强              </span>
              <span class="category-count">7</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/wqsjzb/" title="View all posts in 文茜世界周报">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                文茜世界周报              </span>
              <span class="category-count">32</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/news/" title="View all posts in 新闻">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                新闻              </span>
              <span class="category-count">264</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/xwshl/" title="View all posts in 新闻深喉咙">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                新闻深喉咙              </span>
              <span class="category-count">152</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/xwljf/" title="View all posts in 新闻龙卷风">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                新闻龙卷风              </span>
              <span class="category-count">101</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/wusejuexing/" title="View all posts in 无色觉醒">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                无色觉醒              </span>
              <span class="category-count">112</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/ysgjqb/" title="View all posts in 杨世光在金钱爆">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                杨世光在金钱爆              </span>
              <span class="category-count">4</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/ysgdxsy/" title="View all posts in 杨世光的新视野">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                杨世光的新视野              </span>
              <span class="category-count">50</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/zjlfp/" title="View all posts in 正经龙凤配">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                正经龙凤配              </span>
              <span class="category-count">85</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/" title="View all posts in 观点">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                观点              </span>
              <span class="category-count">59</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/qql/" title="View all posts in 谦秋论">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                谦秋论              </span>
              <span class="category-count">51</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/cjqch/" title="View all posts in 财经起床号">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                财经起床号              </span>
              <span class="category-count">27</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/zhaoshaokangguandian/" title="View all posts in 赵少康观点">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                赵少康观点              </span>
              <span class="category-count">40</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/yetai/" title="View all posts in 野台">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                野台              </span>
              <span class="category-count">17</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/jincanrong/" title="View all posts in 金灿荣">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                金灿荣              </span>
              <span class="category-count">26</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/chwsj/" title="View all posts in 陈挥文时间">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                陈挥文时间              </span>
              <span class="category-count">84</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/jingguantianxia/" title="View all posts in 靖观天下">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                靖观天下              </span>
              <span class="category-count">2</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/hzxyw/" title="View all posts in 黄智贤夜问">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                黄智贤夜问              </span>
              <span class="category-count">154</span>
            </a>
          </li>

                  <li class="category-item">
            <a href="https://www.taiwanyan.xyz/guandian/lxtx/" title="View all posts in 龙行天下">
              <span class="category-name">
                <i class="dot" style="background-color: #ff7473;"></i>
                龙行天下              </span>
              <span class="category-count">26</span>
            </a>
          </li>

        
        </ul> </div></aside>			</div>
			</div>
</div>


</div><!-- end sitecoent --> 

	
	<div class="module parallax">
		<img class="jarallax-img lazyload" data-srcset="https://www.taiwanyan.xyz/wp-content/themes/ripro/assets/images/background/bg-1.jpg" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="">
		<div class="container">
			<h4 class="entry-title">
				提供最优质的资源集合			</h4>
							<a target="_blank" class="button" href="#">立即查看</a>
										<a target="_blank" class="button transparent" href="#">了解详情</a>
					</div>
	</div>
	
	<footer class="site-footer">
		<div class="container">
			
			<div class="footer-widget">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 widget--about">
            <div class="widget--content">
                <div class="footer--logo mb-20">
                    <img class="tap-logo" src="https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png" data-dark="https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png" alt="湾湾眼">
                </div>
                <p class="mb-10">湾湾眼 https://www.taiwanyan.xyz/</p>
            </div>
        </div>
        <!-- .col-md-2 end -->
        <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links">
            <div class="widget--title">
                <h5>本站导航</h5>
            </div>
            <div class="widget--content">
			<div style="display:none;"><a href="https://www.loowp.com
 "></a></div>
                <ul class="list-unstyled mb-0">
                    <li><a target="_blank" href="https://www.taiwanyan.com/sitemap.html">网站地图</a></li><li><a target="_blank" href="https://www.taiwanyan.com/sitemap.xml">XML地图</a></li>                </ul>
            </div>
        </div>
        <!-- .col-md-2 end -->
        <div class="col-xs-12 col-sm-3 col-md-2 widget--links">
            <div class="widget--title">
                <h5>友情链接</h5>
            </div>
            <div class="widget--content">
                <ul class="list-unstyled mb-0">
                    <li><a target="_blank" href="https://taiwanyan.cc/">少康战情室</a></li>                </ul>
            </div>
        </div>
        <!-- .col-md-2 end -->
        <div class="col-xs-12 col-sm-12 col-md-4 widget--newsletter">
            <div class="widget--title">
                <h5>快速搜索</h5>
            </div>
            <div class="widget--content">
                <form class="newsletter--form mb-30" action="https://www.taiwanyan.xyz/" method="get">
                    <input type="text" class="form-control" name="s" placeholder="关键词">
                    <button type="submit"><i class="fa fa-arrow-right"></i></button>
                </form>
                <h6>Email: taiwanyan.com#gmail.com （#换成@）</h6>
            </div>
        </div>

    </div>
</div>						  <div class="site-info">
			    © 2020 台湾眼 - https://www.taiwanyan.xyz/  All rights reserved			    			  </div>
					</div>
	</footer>
	
<div class="rollbar">
	
	<div class="rollbar-item" etap="to_full" title="全屏页面"><i class="fa fa-arrows-alt"></i></div>

	
	    <div class="rollbar-item tap-dark" etap="tap-dark" title="夜间模式"><i class="mdi mdi-brightness-4"></i></div>
    	<div class="rollbar-item" etap="to_top" title="返回顶部"><i class="fa fa-angle-up"></i></div>
</div>

<div class="dimmer"></div>

    <div id="popup-signup" class="popup-signup fade" style="display: none;">
    <div class="register-login-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img class="popup-logo" src="https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png" data-dark="https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png" alt="湾湾眼">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login" data-toggle="login">登录</a>
                        </li>
                        <li><a href="#signup" data-toggle="signup">注册</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="login">
                            <div class="signup-form-container text-center">
                                <form class="mb-0">
                                                                                                                <div class="form-group">
                                            <input type="text" class="form-control" name="username" placeholder="*用户名或邮箱">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="*密码">
                                        </div>
                                        <button type="button" class="go-login btn btn--primary btn--block"><i class="fa fa-bullseye"></i> 安全登录</button> 
                                        <!-- <a href="#" class="forget-password">忘记密码?</a> -->
                                                                    </form>
                                <!-- form  end -->
                            </div>
                            <!-- .signup-form end -->
                        </div>
                        <div class="tab-pane fade in" id="signup">
                            <form class="mb-0">
                                                                                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_name" placeholder="输入英文用户名">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="user_email" placeholder="绑定邮箱">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="user_pass" placeholder="密码最小长度为6">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="user_pass2" placeholder="再次输入密码">
                                    </div>
                                                                        <button type="button" class="go-register btn btn--primary btn--block"><i class="fa fa-bullseye"></i> 立即注册</button>
                                                                
                            </form>
                            <!-- form  end -->
                        </div>
                    </div>
                    <a target="_blank" href="https://www.taiwanyan.xyz/wp-login.php?action=lostpassword" class="rest-password">忘记密码？</a>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>


<div class="off-canvas">
  <div class="canvas-close"><i class="mdi mdi-close"></i></div>
  <div class="logo-wrapper">
      <a href="https://www.taiwanyan.xyz/">
      <img class="logo regular" src="https://cdn.jsdelivr.net/gh/icechang87/twycdn/uploads/2020/07/1595864380-96d6f2e7e1f705a.png" alt="湾湾眼">
    </a>
    </div>
  <div class="mobile-menu hidden-lg hidden-xl"></div>
  <aside class="widget-area">
      </aside>
</div>
<script>
    console.log("\n %c RiPro V6.2.0 %c https://www.loowp.com \n\n", "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3; padding:5px 0;");
    console.log("SQL 请求数：37");
    console.log("页面生成耗时： 0.22146");
</script>


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?3dc58eb450bc3cf052455e5896b3d0bb";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?eac0e926427cab3821042c158c776ca7";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


  
 <div style="display:none;">
  <script type="text/javascript" src="https://s9.cnzz.com/z_stat.php?id=1278554627&web_id=1278554627"></script> 
  </div>
<script data-ad-client="ca-pub-1320199158765698" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type='text/javascript' src='https://www.taiwanyan.xyz/wp-content/plugins/you-shang/static/youshang.js?ver=1.0.1'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/js/plugins.js?ver=6.2.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var caozhuti = {"site_name":"\u6e7e\u6e7e\u773c","home_url":"https:\/\/www.taiwanyan.xyz","ajaxurl":"https:\/\/www.taiwanyan.xyz\/wp-admin\/admin-ajax.php","is_singular":"1","tencent_captcha":{"is":"","appid":""},"infinite_load":"\u52a0\u8f7d\u66f4\u591a","infinite_loading":"<i class=\"fa fa-spinner fa-spin\"><\/i> \u52a0\u8f7d\u4e2d...","site_notice":{"is":"1","color":"#38b5f4","html":"<div class=\"notify-content\"><h3>\u53f0\u6e7e\u773c\u516c\u544a<\/h3><div><h3 align=\"center\"><a href=\"\/gaiming\/\">\u6e7e\u6e7e\u773c\u5b98\u65b9QQ\u7fa4\uff1a46103160 (\u52a1\u5fc5\u52a0)<a target=\"_blank\" href=\"https:\/\/qm.qq.com\/cgi-bin\/qm\/qr?k=13DgxVAdbtuus_84KUt879C_oYUtWVFI&jump_from=webapi\"><img border=\"0\" src=\"\/\/pub.idqqimg.com\/wpa\/images\/group.png\" alt=\"\u6e7e\u6e7e\u773c\u4f1a\u54581\u7fa4 \" title=\"\u6e7e\u6e7e\u773c\u4f1a\u54581\u7fa4 \"><\/a> <\/a> <\/h3>\r\n\r\n\r\n<P>\u6700\u8fd1\u6211\u4eec\u7684\u57df\u540d\u4e00\u76f4\u88ab\u5c4f\u853d\uff0c\u4e3a\u4e86\u4e0d\u5931\u8054\uff0c\u8bf7\u52a0QQ\u7fa4\u6216\u8005\u6536\u85cf\u5ba2\u670d\u90ae\u7bb1\uff0c\u65b9\u4fbf\u4f60\u627e\u5230\u6211\u4eec\u3002<\/P>\r\n\r\n<P>\u624b\u673a\u7aef\u5f88\u591a\u670b\u53cb\u4e0d\u4f1a\u8d5e\u52a9\u626b\u63cf\uff0c\u8d5e\u52a9\u4e8c\u7ef4\u7801\u51fa\u6765\u4e4b\u540e\uff0c\u957f\u6309\u56fe\u7247\u4f1a\u51fa\u73b0\u4e8c\u7ef4\u7801\u8bc6\u522b\uff0c\u9009\u62e9\u4e4b\u540e\uff0c\u4f1a\u81ea\u5df1\u6253\u5f00\u652f\u4ed8\u5b9d\u3002<\/P>\r\n\u6709\u60f3\u8d5e\u52a9\u6216\u8005\u5546\u6237\u5408\u4f5c\u7684\u8001\u677f\uff0c\u53ef\u4ee5\u901a\u8fc7\u4e0b\u9762\u7684\u90ae\u7bb1\u8054\u7cfb\u6211\u4eec\uff0c\u8c22\u8c22\u3002<p>\u8054\u7cfb\u65b9\u5f0f Email: <a href=\"https:\/\/mail.qq.com\/cgi-bin\/qm_share?t=qm_mailme&email=taiwanyan.com@gmail.com\" target=\"_blank\" rel=\"\"><strong>taiwanyan.com@gmail.com\u3010\u70b9\u51fb\u3011<\/strong><\/a><\/p>\r\n\r\n<p>\u4e16\u754c\u4e0a\u53ea\u6709\u4e00\u4e2aCN\uff0c\u53f0\u6e7e\u662fCN\u7684\u4e00\u90e8\u5206,\u575a\u51b3\u7ef4\u62a4\u7956\u56fd\u7edf\u4e00\uff01<br>\r\n  \u7ad9\u5185\u6240\u6709\u89c6\u9891\u5185\u5bb9\u90fd\u662f\u7f51\u53cb\u4ece\u4e92\u8054\u7f51\u641c\u96c6\u8f6c\u8f7d\u4e0a\u4f20\u800c\u6765\uff0c\u6807\u9898\u89c6\u9891\u5185\u5bb9\u90fd\u6ca1\u6709\u66f4\u6539\uff0c\u5185\u5bb9\u4e3a\u771f\u5b9e\u53f0\u6e7e\u5a92\u4f53\u62a5\u9053\u3002<\/p>\r\n<p>1\u3001\u5982\u6807\u9898\u89c6\u9891\u5185\u5bb9\u4e2d\u51fa\u73b0\u201c\u603b\u7edf\u201d\u6216\u8005\u4ed6\u4eec\u79f0CNCN\u4e3aCN\uff0c\u79f0\u53f0\u6e7e\u4e3a\u201c\u6211\u56fd\u201d\u4e0d\u7ba1\u4ed6\u4eec\u600e\u4e48\u79f0\u547c\u90fd\u6539\u53d8\u4e0d\u4e86\u53f0\u6e7e\u5c5e\u4e8eCN\u7684\u4e8b\u5b9e\uff1b\u67d0\u4e9b\u6807\u9898\u89c6\u9891\u5185\u5bb9\u5bf9CN\u62a5\u9053\u90fd\u662f\u4e0d\u5b9e\u8a00\u8bba\u5927\u5bb6\u8bf7\u52ff\u76f8\u4fe1\uff0c\u5c31\u5f53\u770b\u4e2a\u7b11\u8bdd\u3002<br>\r\n  2\u3001\u5982\u4e0d\u7ecf\u610f\u6d89\u53ca\u4fb5\u6743\u8fdd\u89c4\u7b49\u4e8b\u5b9c\uff0c\u8bf7\u5728\u7f51\u7ad9\u5e95\u90e8\u2018\u610f\u89c1\u5efa\u8bae\u2019\u53cd\u9988\uff0c\u6211\u4eec\u5c06\u5728\u7b2c\u4e00\u65f6\u95f4\u5185\u5220\u9664\u3002\u7ad9\u5185\u89c6\u9891\u5185\u5bb9\u4ec5\u4f9b\u5bbd\u5e26\u6d4b\u8bd5\u5b66\u4e60\u7814\u7a76\u53c2\u8003\u4e4b\u7528\uff0c\u7981\u6b62\u4f20\u64ad\uff0c\u8bf7\u5728\u4e0b\u8f7d\u5b8c\u6bd5\u6d4b\u8bd5\u540e24\u5c0f\u65f6\u5185\u5fc5\u987b\u5220\u9664\uff01<\/p>\r\n\r\n<\/div><\/div>"},"pay_type_html":{"html":"<div class=\"pay-button-box\"><div class=\"pay-item\" id=\"alipay\" data-type=\"1\"><i class=\"alipay\"><\/i><span>\u652f\u4ed8\u5b9d<\/span><\/div><\/div><p style=\"font-size: 13px; padding: 0; margin: 0;\">\u514d\u8d39\u6216VIP\u514d\u8d39\u8d44\u6e90\u4ec5\u9650\u4f59\u989d\u652f\u4ed8<\/p>","alipay":1,"weixinpay":0}};
/* ]]> */
</script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/js/app.js?ver=6.2.0'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/gh/icechang87/twycdn/assets/js/plugins/jquery.fancybox.min.js?ver=6.2.0'></script>
<script type='text/javascript' src='https://www.taiwanyan.xyz/wp-includes/js/comment-reply.min.js?ver=5.4.2'></script>

</body>
</html>
<!-- Performance optimized by Redis Object Cache. Learn more: https://wprediscache.com -->

<!-- Dynamic page generated in 0.221 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2020-08-03 14:04:22 -->

<!-- Compression = gzip -->