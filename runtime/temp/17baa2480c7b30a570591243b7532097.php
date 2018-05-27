<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:41:"G:\coolphp/app/home\view\index_index.html";i:1527351657;s:41:"G:\coolphp/app/home\view\common_head.html";i:1527351657;s:48:"G:\coolphp/app/home\view\common_photography.html";i:1527351657;s:43:"G:\coolphp/app/home\view\common_footer.html";i:1527351657;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="M_Adnan">
    <title><?php if($info['title']): ?><?php echo $info['title']; ?>-<?php echo $sys['title']; elseif($title): ?><?php echo $title; ?>-<?php echo $sys['title']; else: ?><?php echo $sys['title']; ?>_服务最好的网站建设公司<?php endif; ?></title>
    <meta name="keywords" content="<?php if($info[ 'keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info[ 'description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
    <meta name="author" content="wzs">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="__HOME__/rs-plugin/rs-plugin/css/settings.css" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="__HOME__/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="__HOME__/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="__HOME__/css/ionicons.min.css" rel="stylesheet">
    <link href="__HOME__/css/main.css" rel="stylesheet">
    <link href="__HOME__/css/style.css" rel="stylesheet">
    <link href="__HOME__/css/responsive.css" rel="stylesheet">

    <!-- COLORS -->
    <link rel="stylesheet" id="color" href="__HOME__/css/default.css">

    <!-- JavaScripts -->
    <script src="__HOME__/js/jquery-1.11.3.min.js"></script>
    <script src="__HOME__/js/modernizr.js"></script>

    <!-- Online Fonts -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="animated infinite">

    <!-- Wrap -->
    <div id="wrap">

        <!-- header -->
        <header class="header-normal">
            <div class="sticky">
                <div class="container">
                    <!-- Logo -->
                    <div class="logo"><a href="/index.html"><img class="img-responsive" src="__HOME__/images/logo.png" alt=""></a></div>

                    <!-- Navigation -->
                    <nav class="navbar webimenu">
                        <!-- MENU BUTTON RESPONSIVE -->
                        <div class="menu-toggle"><i class="fa fa-bars"> </i></div>
                        <!-- NAV -->
                        <ul class="nav ownmenu">
                            <li <?php if($controller == 'index'): ?>class="active meganav" <?php endif; ?>>
                                <a href="<?php echo url('home/index/index'); ?>" title="网站首页">网站首页</a>
                            </li>
                            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" title="<?php echo $vo['catname']; ?>"><?php echo $vo['catname']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </nav>

                    <!-- Social Icons -->
                    <div class="social_icons"><a href="#." target="_blank"><i class="fa fa-weibo"></i></a> <a href="tencent://message/?uin=2503072299&Site=&Menu-=yes" target="_blank"><i
                        class="fa fa-qq"></i></a> <a href="/contact_16.html#content" target="_blank"><i class="fa fa-weixin"></i></a> <a href="#."
                            target="_blank"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </header>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<!--======= HOME MAIN SLIDER =========-->
<section class="home-slider">
    <!-- Slider Loader -->
    <div id="loader" class="hom-slie">
        <div class="tp-loader spinner0"><span class="dot1"></span> <span class="dot2"></span> <span class="bounce1"></span> <span class="bounce2"></span>            <span class="bounce3"></span></div>
    </div>

    <!-- SLIDE Start -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
 <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="__HOME__/images/slide-2.jpg" alt="home_slider2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="600" data-y="center" data-voffset="-60"
                        data-speed="800" data-start="800" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; font-size:45px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                        我们能做什么？
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="600" data-y="center" data-voffset="0"
                        data-speed="800" data-start="1300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; font-size:45px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                        多元化的产品，全方位的服务
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5" data-x="left" data-hoffset="600" data-y="center" data-voffset="60"
                        data-speed="800" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; font-size:14px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">丰富的产品种类，领先的技术实力，为您提供最全面的服务 !
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="600" data-y="center" data-voffset="150" data-speed="800"
                        data-start="2200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                        data-scrolloffset="0" style="z-index: 8;"><a href="#." class="btn margin-right-20">了解更多</a></div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="__HOME__/images/slide-1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="600" data-y="center" data-voffset="-60"
                        data-speed="800" data-start="800" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; font-size:45px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                        营销型网站
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="600" data-y="center" data-voffset="0"
                        data-speed="800" data-start="1300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; font-size:45px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                        让您的产品更具有竞争力
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5" data-x="left" data-hoffset="600" data-y="center" data-voffset="60"
                        data-speed="800" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; font-size:14px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                        领先一步，打造企业独特竞争力，为您带来更多销量！
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="600" data-y="center" data-voffset="150" data-speed="800"
                        data-start="2200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                        data-scrolloffset="0" style="z-index: 8;"><a href="#." class="btn margin-right-20">了解更多</a></div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="__HOME__/images/slide-3.jpg" alt="home_slider3" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="center" data-hoffset="0" data-y="center" data-voffset="-180"
                        data-speed="500" data-start="1300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; font-size:45px; color:#fff; text-transform:uppercase; white-space: nowrap;">全力以赴，互促共生 </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5" data-x="center" data-hoffset="0" data-y="center" data-voffset="-120"
                        data-speed="500" data-start="1300" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; font-size:14px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">专业电子商务设计、营销团队。为客户赢得客户</div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption skewfromleft tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-60" data-speed="500"
                        data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                        data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; "><a href="about.html" class="btn">了解更多</a></div>
                </li>
            </ul>
        </div>
    </div>

    <!-- GO DOWN -->
    <div class="scroll"><a href="#content" class="go-down"><img src="__HOME__/images/go-down.png" alt=""></a></div>
</section>

<!-- Content -->
<div id="content">
    <!-- Our Story -->
    <section class="story padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Heading -->
                    <div class="heading text-left margin-bottom-40 margin-top-20">
                        <h4>关于我们</h4>
                        <hr> <?php echo getcontent(2); ?>
                    </div>
                    <div>

                        <!-- Tab -->
                        <ul class="tabs margin-top-20 margin-bottom-30" role="tablist">
                            <?php $result = db("debris")->where("type_id = 6")->limit(3)->order("")->select();foreach ($result as $i=>$list):if($i == 0): ?>
                            <li role="presentation" class="active">
                                <?php else: ?>
                                <li role="presentation">
                                    <?php endif; ?>
                                    <a href="#retina<?php echo $i; ?>" aria-controls="home" role="tab" data-toggle="tab">
                                     <?php if($i == 0): ?>
                                    <i class="icon-phone"></i>
                                    <?php elseif($i == 1): ?>
                                    <i class="icon-tools-2"></i>
                                    <?php else: ?>
                                    <i class="icon-tools"></i>
                                     <?php endif; ?>
                                    0<?php echo $i+1; ?>. <?php echo $list['title']; ?>
                                </a>
                                </li>
                                <?php endforeach ?>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?php $result = db("debris")->where("type_id = 6")->limit(3)->order("")->select();foreach ($result as $i=>$list):if($i == 0): ?>
                            <div role="tabpanel" class="tab-pane fade in active" id="retina<?php echo $i; ?>">
                                <?php echo $list['content']; ?>
                            </div>
                            <?php else: ?>
                            <div role="tabpanel" class="tab-pane fade" id="retina<?php echo $i; ?>">
                                <?php echo $list['content']; ?>
                            </div>
                            <?php endif; endforeach ?>
                        </div>
                    </div>
                </div>

                <!-- Story Img -->
                <div class="col-md-4">
                    <div class="single-slide">
                        <?php $result = db("debris")->where("type_id = 7")->limit(3)->order("")->select();foreach ($result as $i=>$list):?>
                        <div><?php echo $list['content']; ?></div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome -->
    <section class="padding-top-100 padding-bottom-100" style=" background: url(__HOME__/images/build-feature1.jpg) repeat-y;background-size: 100%;">
        <div class="container">

            <!-- Heading -->
            <div class="heading text-center"><span style="color:#fff;">WHAT WE DO</span>
                <h4 style="color:#fff;">我们提供最好的产品</h4>
                <hr>
                <p style="color:#fff;">
                    提供高端网站建设一条龙服务！丰富的产品种类，领先的技术实力，为您提供最全面的服务！
                </p>
            </div>

            <!-- SERVICES -->
            <div class="services best-services">
                <ul class="row list">

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c1">
                        <article><i class="lnr lnr-laptop-phone"></i>
                            <hr>
                            <h6>网站建设</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c2">
                        <article style="background: url(__HOME__/images/ser-bg-2.jpg) no-repeat;"><i class="lnr lnr-eye"></i>
                            <hr>
                            <h6>淘宝美工</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c3">
                        <article style="background: url(__HOME__/images/ser-bg-3.jpg) no-repeat;"><i class="lnr lnr-rocket"></i>
                            <hr>
                            <h6>平面设计</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c4">
                        <article style="background: url(__HOME__/images/ser-bg-4.jpg) no-repeat;"><i class="icon-tools-2"></i>
                            <hr>
                            <h6>微营销</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c5">
                        <article style="background: url(__HOME__/images/ser-bg-5.jpg) no-repeat;"><i class=" icon-pencil"></i>
                            <hr>
                            <h6>SEO优化</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c6">
                        <article style="background: url(__HOME__/images/ser-bg-6.jpg) no-repeat;"><i class="icon-wine"></i>
                            <hr>
                            <h6>手机站</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c7">
                        <article style="background: url(__HOME__/images/ser-bg-7.jpg) no-repeat;"><i class="icon-trophy"></i>
                            <hr>
                            <h6>H5场景秀</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>

                    <!-- SERVICES -->
                    <li class="col-md-3" data-content="#colio_c8">
                        <article style="background: url(__HOME__/images/ser-bg-8.jpg) no-repeat;"><i class="icon-layers"></i>
                            <hr>
                            <h6>视频制作</h6>
                            <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                        </article>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Colio Tab Open 1 网站建设 -->
        <div id="colio_c1" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big lnr lnr-laptop-phone"></i>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>高端网站建设</h4>
                                <hr>
                                <p>
                                    全球现在约有15亿的用户接入了因特网，今后会更为壮大。通过建设一个网站，可以更好的展示企业/个人或者机构。在当前门户博客、网店、微博等平台虽然可以更好的对自己展示。但是网站仍然是最重要的自我展示的方案。因此，建设一个与自身形象相称或者更新颖的网站，是当前时代必不可少的选择！
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>HTML5+CSS3</li>
                                        <li>响应式设计&nbsp;多终端呈现</li>
                                        <li>舒适的用户体验</li>
                                        <li>营销效果</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>

                                </div>
                            </div>
                            <div class="col-md-5"><img src="__HOME__/images/cp1.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 2 淘宝美工 -->
        <div id="colio_c2" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big icon-right lnr lnr-eye"></i>
                    <div class="container">
                        <div class="row">

                            <!-- Colio Image -->
                            <div class="col-md-5"><img src="__HOME__/images/cp2.png" alt=""></div>
                            <!-- Colio Content -->
                            <div class="col-md-7">
                                <h4>天猫&淘宝店铺装修</h4>
                                <hr>
                                <p>
                                    如今电子商务行业竞争越来越大。想要赢得一席之地，必须费尽心思。一个好的店铺设计，能够给客户带来的不只是产品更是一种视觉上的享受。
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>品牌识别&nbsp;增加回头率</li>
                                        <li>良好的产品展示</li>
                                        <li> 引入流量&nbsp;提升销售</li>
                                        <li> 装修好的网店更赚钱</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 3 平面 -->
        <div id="colio_c3" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big lnr lnr-rocket"></i>
                    <div class="container">
                        <div class="row">

                            <!-- Colio Content -->
                            <div class="col-md-7">
                                <h4>界面/品牌设计</h4>
                                <hr>
                                <p>界面是人与物体互动的媒介，界面就是设计师赋予物体的新面孔，深入剖析企业需求，致力于树立良好的企业品牌形象。</p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>好的创意，创造好的作品</li>
                                        <li>新颖合理的排版布局</li>
                                        <li>画面色彩搭配合理</li>
                                        <li>细心校稿&nbsp;完美印刷</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>

                            <!-- Colio Img -->
                            <div class="col-md-5"><img src="__HOME__/images/cp3.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 4 微营销 -->
        <div id="colio_c4" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big icon-right icon-tools-2"></i>
                    <div class="container">
                        <div class="row">
                            <!-- Colio Image -->
                            <div class="col-md-5"><img src="__HOME__/images/cp4.png" alt=""></div>

                            <!-- Colio Content -->
                            <div class="col-md-7">
                                <h4>微信深度定制</h4>
                                <hr>
                                <p>
                                    在微信框架内的定制与二次开发，提供微官网、微商城、微活动等各类行业定制方案并提供后续的营销与推广服务。
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>高品质视觉设计</li>
                                        <li>强大多样的功能组件</li>
                                        <li>定制功能开发</li>
                                        <li>挖掘潜在客户&nbsp;增强粉丝黏度</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 1 SEO-->
        <div id="colio_c5" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big icon-pencil"></i>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>SEO优化推广</h4>
                                <hr>
                                <p>
                                    优化网站页面信息，符合搜索引擎收录规律。使网站排名更加靠前，让客户更容易搜索到您。让网站获取有效流量，从而产生 订单转化。
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>多搜索引擎排名靠前</li>
                                        <li>一次投资&nbsp;一次投资价格低</li>
                                        <li>零成本点击&nbsp;避免恶意点击</li>
                                        <li>全天在线24小时</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>
                            <div class="col-md-5"><img src="__HOME__/images/cp5.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 2 手机站 -->
        <div id="colio_c6" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big icon-right icon-wine"></i>
                    <div class="container">
                        <div class="row">

                            <!-- Colio Image -->
                            <div class="col-md-5"><img src="__HOME__/images/cp6.png" alt=""></div>
                            <!-- Colio Content -->
                            <div class="col-md-7">
                                <h4>移动网站/应用</h4>
                                <hr>
                                <p>
                                    移动应用随时、随地、随心的特征决定了它不同于PC产品的设计理念，移动应用的从业者需要从全新的视角来思考设计。
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>在手机上展示企业全部信息</li>
                                        <li>强大实用功能</li>
                                        <li>业务快速高效传播</li>
                                        <li>微信无缝对接&nbsp;全方位营销</li>

                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 3 APP-->
        <div id="colio_c7" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big icon-trophy"></i>
                    <div class="container">
                        <div class="row">

                            <!-- Colio Content -->
                            <div class="col-md-7">
                                <h4>H5场景秀</h4>
                                <hr>
                                <p>
                                    专门针对微信做的h5互动开发，主要应用于朋友圈传播，具有营销性质的互动。与一般的图文链接相比，微信互动h5表现形式更独特，带有互动效果。
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>信息展示灵活炫酷</li>
                                        <li>移动营销新热点</li>
                                        <li>微信快速传播</li>
                                        <li>传播广泛</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>

                            <!-- Colio Img -->
                            <div class="col-md-5"><img src="__HOME__/images/cp7.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colio Tab Open 4 视频制作 -->
        <div id="colio_c8" class="colio-content">
            <div class="main">

                <!-- Colio Inside -->
                <div class="inside-colio">
                    <!-- Big Icon -->
                    <i class="icon-big icon-right icon-layers"></i>
                    <div class="container">
                        <div class="row">
                            <!-- Colio Image -->
                            <div class="col-md-5"><img src="__HOME__/images/cp8.png" alt=""></div>

                            <!-- Colio Content -->
                            <div class="col-md-7">
                                <h4>视频制作</h4>
                                <hr>
                                <p>
                                    包括企业宣传片、公司形象片、专题片、产品介绍片、微电影、MV、婚礼剪辑等。我们秉承客户至上的理念，无论您从事什么行业，我们将紧贴需求，最精良的视频制作，为您创造最大价值。
                                </p>

                                <!-- Feature List Check -->
                                <div class="feature-list-check margin-top-30">
                                    <h5>产品特点</h5>
                                    <ul class="margin-top-20">
                                        <li>丰富的视觉效果</li>
                                        <li>制造合适的节奏感</li>
                                        <li>专业的录制设备</li>
                                        <li>一流的后期技术</li>
                                    </ul>
                                    <a href="#" class="btn margin-top-20">查看详情</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section>
        <div class="container">

            <!-- Heading -->
            <div class="heading text-center" style="margin-top: 100px;"><span>OUR AMAZING WORKS</span>
                <h4>我们惊人的作品</h4>
                <hr>
                <p>
                    这些都是我们有信心赢得顾客良好口碑和满意信赖的依据，唯有客户的满意才是我们努力上进的原动力！
                </p>
            </div>

            <!-- PORTOFLIO ITEMS FILTER -->
            <div class="text-center portfolio-filter margin-bottom-50">
                <div id="ajax-work-filter" class="cbp-l-filters-buttonCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> 全部
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <?php $result = db("category")->where("parentid = 10")->limit(3)->order("")->select();foreach ($result as $k=>$list):?>
                    <div data-filter=".w<?php echo $list['id']; ?>" class="cbp-filter-item"> <?php echo $list['catname']; ?>
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <!-- PORTFOLIO ITEMS -->
        <div class="ajax-work">
            <div class="col-4 gallery">
                <?php $result = db("case")->alias("a")->join("cool_category c","a.catid = c.id","left")
            ->where("")
            ->field("a.*,c.catdir")
            ->limit(8)
            ->order("listorder asc,createtime desc")
            ->select();foreach ($result as $k=>$list):?>
                <!-- ITEM -->
                <div class="cbp-item item portfolio-item w<?php echo $list['catid']; ?>">
                    <div class="port-item"><img src="<?php echo imgUrl($list['thumb']); ?>" alt="">
                        <div class="hover-info">
                            <div class="hover-in">
                                <div class="position-center-center"><span><?php echo getcatname($list['catid']); ?></span>
                                    <hr>
                                    <h6><?php echo $list['title']; ?></h6>
                                    <a class="cbp-singlePage" href="<?php echo url('home/'.$list['catdir'].'/info',array('id'=>$list['id'],'catId'=>$list['catid'])); ?>">
                                        <i class="lnr lnr-link"></i>
                                    </a>
                                    <a href="<?php echo imgUrl($list['thumb']); ?>" class="cbp-lightbox">
                                        <i class="lnr lnr-frame-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>

        <!-- UNDER PORTFOLIO -->
        <div class="text-center under-port">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h6><i class="margin-right-20   icon-pencil"></i>想看到更多令人惊叹的作品吗?</h6>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div id="ajax-loadMore">
                            <a href="caseload" class="cbp-l-loadMore-link btn-1" rel="nofollow">
                                <span class="cbp-l-loadMore-defaultText">查看更多
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                                <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORK
                                    <i class="lnr lnr-cross"></i>
                                </span>
                            </a>
                            <a href="/contact_16.html" class="btn-1 btn-2 margin-left-30">
                                联系我们<i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="some-graphics">
                        <div class="heading text-left margin-bottom-40">
                            <h4>一站式互联网信息化服务专家</h4>
                            <hr>
                            <h6>PC网站、移动网站、微信网站、APP，四网合一</h6>
                        </div>
                        <p>
                            公司都需要支持嵌入到微博、微信等社交平台以及任意APP客户端 ,多终端兼容
                            <br>支持电脑、手机、IPad等显示设备，无障碍浏览
                            <br>随时随地任意浏览，内容信息完美实现
                            <br>同一域名，不同平台完美显示
                        </p>
                        <a href="/index.html#contact" class="btn">现在预定</a></div>
                </div>

                <!-- iBundle -->
                <div class="col-md-6"><img class="img-responsive" src="__HOME__/images/i-bundle.jpg" alt=""></div>
            </div>
        </div>
    </section>

    <!-- BUILD A AMAZING WEBSITE -->
    <section class="build-feature padding-top-100 padding-bottom-100" data-stellar-background-ratio="0.3" style="background-size: 100%;">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center margin-bottom-30"><span>we deliver results</span>
                <h4>和我们建立一个神奇的网站</h4>
                <hr>
                <p>我们承诺给客户最有价值的服务</p>
            </div>
            <div class="row">

                <!-- FULLY RESPONSIVE -->
                <div class="col-md-3">
                    <div class="feature-list-check margin-top-50">
                        <h6>01. 高端订制</h6>
                        <ul class="margin-top-20">
                            <li>网站建设</li>
                            <li>电商平台</li>
                            <li>APP开发</li>
                            <li>按需订制</li>
                        </ul>
                    </div>
                </div>

                <!-- RETINA READY -->
                <div class="col-md-3">
                    <div class="feature-list-check margin-top-50">
                        <h6>02. 项目策划</h6>
                        <ul class="margin-top-20">
                            <li>专业需求分析师</li>
                            <li>专属项目经理</li>
                            <li>自身行业策划师</li>
                            <li>专属的策划方案</li>
                        </ul>
                    </div>
                </div>

                <!-- 03. UNIQUE DESIGN -->
                <div class="col-md-3">
                    <div class="feature-list-check margin-top-50">
                        <h6>03. 视觉体验 </h6>
                        <ul class="margin-top-20">
                            <li>顶尖设计团队</li>
                            <li>响应式布局</li>
                            <li>多设备浏览</li>
                            <li>HTML5动画</li>
                        </ul>
                    </div>
                </div>

                <!-- FULLY RESPONSIVE -->
                <div class="col-md-3">
                    <div class="feature-list-check margin-top-50">
                        <h6>04. 整合营销</h6>
                        <ul class="margin-top-20">
                            <li>SEO优化</li>
                            <li>多渠道推广</li>
                            <li>量身定制营销方案</li>
                            <li>移动端推广</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- IPHONE LANDSCAPE -->
            <!--<div class="text-center margin-top-80"><img class="img-responsive" src="__HOME__/images/iphone-land.png" alt="">
            </div> -->
        </div>
    </section>

    <!-- Key Features -->
    <section class="parallax-bg padding-bottom-150 padding-top-100" style="background:url(__HOME__/images/bg-key-feature.jpg) repeat-y;"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <!-- Key Features Mac Pro -->
                <div class="col-md-5"><img class="feature-img" src="__HOME__/images/mac-pro-img.png" alt=""></div>

                <!-- Key Features TEXT -->
                <div class="col-md-7">

                    <!-- Heading -->
                    <div class="heading text-left margin-top-20">
                        <h4>我们的服务</h4>
                        <hr>
                        <p>为您的企业和消费者带来最满意的售后服务。一等一客户，一等一服务！ </p>
                    </div>

                    <!-- Feature Item -->
                    <div class="feature-item">
                        <ul>
                            <li>
                                <p><i class="lnr lnr-rocket"></i> 定时的项目 </p>
                            </li>
                            <li>
                                <p><i class="lnr lnr-laptop-phone"></i> 网站维护</p>
                            </li>
                            <li>
                                <p><i class="lnr lnr-cog"></i>内部质检 </p>
                            </li>
                            <li>
                                <p><i class="lnr lnr-keyboard"></i>操作培训</p>
                            </li>
                            <li>
                                <p><i class="icon-share"></i> 品牌规划</p>
                            </li>
                            <li>
                                <p><i class="lnr lnr-screen"></i> 内部质检</p>
                            </li>
                            <li>
                                <p><i class="lnr lnr-eye"></i> 耐心的售后</p>
                            </li>
                            <li>
                                <p><i class="lnr lnr-license"></i> 实惠的套餐</p>
                            </li>
                            <li>
                                <p><i class="icon-mouse"></i>问题解答</p>
                            </li>
                        </ul>
                    </div>
                    <a href="/services_13.html" class="btn margin-top-10 margin-right-10">更多优势</a></div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial padding-top-150 padding-bottom-100" style="background:url(__HOME__/images/testi-bg.jpg) repeat-y; background-size: 100%;background-attachment:fixed"
        data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Test Slider -->
                    <div class="testi">
                        <div class="two-slider">
                            <?php $result = db("fuwukehu")->alias("a")->join("cool_category c","a.catid = c.id","left")
            ->where("catid=22 ")
            ->field("a.*,c.catdir")
            ->limit(10)
            ->order("listorder
                            asc,createtime desc")
            ->select();foreach ($result as $k=>$vo):?>
                            <!-- Slider 1 -->
                            <div class="in-testi">

                                <!-- Avatars -->
                                <div class="avatars"><img src="__PUBLIC__<?php echo $vo['thumb']; ?>" alt=""></div>
                                <div class="testi-name"><i class="fa fa-quote-left"></i>
                                    <h5><?php echo $vo['title']; ?>&nbsp;&nbsp;&nbsp;<?php echo $vo['zhiwei']; ?></h5>
                                    <?php echo $vo['content']; ?>
                                </div>
                                <span><?php echo $vo['xingming']; ?></span>
                            </div>

                            <!-- Slider 1 -->

                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog light-gray-bg padding-bottom-100 padding-top-100">
        <div class="container">

            <!-- Heading -->
            <div class="heading text-center"><span>LATEST NEWS</span>
                <h4>博客资讯</h4>
                <hr>
                <p>
                    这里有最新的公司动态及签约合作客户信息，这里有最新行业资讯与您分享。
                </p>
            </div>

            <!-- Row -->
            <div class="row">
                <?php $result = db("blog")->alias("a")->join("cool_category c","a.catid = c.id","left")
            ->where("catid in(17,18,19,20,21,30) ")
            ->field("a.*,c.catdir")
            ->limit(3)
            ->order("listorder
                asc,createtime desc")
            ->select();foreach ($result as $k=>$vo):?>
                <!-- BLOG POST -->
                <div class="col-md-4">
                    <article>
                      <a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>" title="<?php echo $vo['title']; ?>" >
                        <img class="img-responsive" alt="<?php echo $vo['title']; ?> " src="__PUBLIC__<?php echo $vo['thumb']; ?>" alt="" width="100%">
                        <div class="post-info">
                            <div class="post-in">
                                <div class="extra">
                                    <span><i class="icon-calendar"></i><?php echo toDate($vo['createtime'],'Y-m-d'); ?></span>
                                    <span class="margin-left-15"><i class="icon-user"></i><?php echo $vo['zuozhe']; ?></span>
                                    <span class="margin-left-15"><i class="icon-bubbles"></i><?php echo getcatname($vo['catid']); ?></span>
                                </div>
                                <div class="tittle-post"> <?php echo $vo['title']; ?> </div>
                                <p><?php echo str_cut($vo['content'],118,'...'); ?></p>
                                <div class="btn-1">阅读更多<i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                      </a>
                    </article>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="row">

            <!-- MAP -->
            <div class="col-lg-6">
                <div id="map"></div>
            </div>

            <!-- Number -->
            <div class="col-lg-6">

                <!-- Address -->
                <div class="number"><i class="lnr  lnr-phone-handset"></i>
                    <h1>0451-51035164</h1>
                    <p>13359982928&nbsp;靳欣</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info-office">
                            <h5>公司地址</h5>
                            <p>哈尔滨市南岗区文景街86号</p>
                            <h5>公司邮箱</h5>
                            <p>hrbkcwl@163.com</p>
                            <h5>工作时间</h5>
                            <p>周一至周五: 8:00-17:00</p>
                            <p>星期六: 10:00-14:00</p>
                            <p>星期日: 休息</p>
                        </div>
                    </div>

                    <!-- img -->
                    <div class="col-sm-6"><img class="img-responsive" src="__HOME__/images/conatct-img.jpg" alt=""></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-info light-gray-bg padding-top-100 padding-bottom-100" id="contact">
        <div class="container">

            <!-- Heading -->
            <div class="heading text-center"><span>say hello</span>
                <h4>在线留言</h4>
                <hr>
                <p>
                    请详细描述您的疑问，并留下您的联系方式，我们会在第一时间与您沟通。
                </p>
            </div>

            <!-- Contact  -->
            <div class="contact-us">
                <div class="contact-form">

                    <!-- FORM -->
                    <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                        <ul class="row">
                            <li class="col-sm-4">
                                <label>*姓名
                                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                                    </label>
                            </li>
                            <li class="col-sm-4">
                                <label>*邮箱
                                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                                    </label>
                            </li>
                            <li class="col-sm-4">
                                <label>电话
                                        <input type="text" class="form-control" name="tel" id="tel"
                                               placeholder="">
                                    </label>
                            </li>
                            <li class="col-sm-12">
                                <label>*留言
                                        <textarea class="form-control" name="content" id="msg" rows="5"
                                                  placeholder=""></textarea>
                                    </label>
                            </li>
                            <li class="col-sm-12 text-center no-margin">
                                <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">现在发送
                                    </button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- PHOTOGRAPHY -->
<!-- <section class="photography">
        <div class="container-fluid">
            <ul class="row">
                <li><img src="__HOME__/images/photo-1.jpg" alt=""> <a href="__HOME__/images/photo-1.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-2.jpg" alt=""> <a href="__HOME__/images/photo-2.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-3.jpg" alt=""> <a href="__HOME__/images/photo-3.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-4.jpg" alt=""> <a href="__HOME__/images/photo-4.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-5.jpg" alt=""> <a href="__HOME__/images/photo-5.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-6.jpg" alt=""> <a href="__HOME__/images/photo-6.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-7.jpg" alt=""> <a href="__HOME__/images/photo-7.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-8.jpg" alt=""> <a href="__HOME__/images/photo-8.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
            </ul>
        </div>
    </section>-->
</div>
<script>
    $('#btn_submit').click(function () {
        var name = $('#name').val();
        var email = $('#email').val();
        var tel = $('#tel').val();
        var content = $('#msg').val();
        if ($.trim(name) == '') {
            alert('称呼不能为空');
            return false;
        }
        if ($.trim(email) == '') {
            alert('邮箱不能为空');
            return false;
        }
        if ($.trim(tel) == '') {
            alert('电话不能为空');
            return false;
        }
        if ($.trim(content) == '') {
            alert('内容不能为空');
            return false;
        }
        $.post("/home_contact_senMsg.html", {
            tel: tel,
            name: name,
            email: email,
            content: content
        }, function (data) {
            if (data.status == 1) {
                alert('留言成功！感谢您对我们的支持！');
                window.location.href = "/contact_16.html"
            } else {
                alert('留言失败！重新提交试试！');
            }
        })
    })
</script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap() {
        createMap(); //创建地图
        setMapEvent(); //设置地图事件
        //addMapControl();//向地图添加控件
        addMarker(); //向地图中添加marker
    }

    //创建地图函数：
    function createMap() {
        var map = new BMap.Map("map"); //在百度地图容器中创建一个地图
        var point = new BMap.Point(126.656163, 45.74219); //定义一个中心点坐标
        map.centerAndZoom(point, 18); //设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map; //将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent() {
        map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
        // map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard(); //启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl() {
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({
            anchor: BMAP_ANCHOR_TOP_LEFT,
            type: BMAP_NAVIGATION_CONTROL_LARGE
        });
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({
            anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
            isOpen: 1
        });
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({
            anchor: BMAP_ANCHOR_BOTTOM_LEFT
        });
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{
        title: "哈尔滨酷创网络科技有限公司",
        content: "哈尔滨市南岗区文景街86号",
        point: "126.65623|45.742693",
        isOpen: 1,
        icon: {
            w: 23,
            h: 25,
            l: 0,
            t: 275,
            x: 9,
            lb: 12
        }
    }];
    //创建marker
    function addMarker() {
        for (var i = 0; i < markerArr.length; i++) {
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0, p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point, {
                icon: iconImg
            });
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title, {
                "offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
            });
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor: "#808080",
                color: "#333",
                cursor: "pointer"
            });

            (function () {
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click", function () {
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open", function () {
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close", function () {
                    _marker.getLabel().show();
                })
                label.addEventListener("click", function () {
                    _marker.openInfoWindow(_iw);
                })
                if (!!json.isOpen) {
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i) {
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title +
            "</b><div class='iw_poi_content'>" + json.content + "</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json) {
        var icon = new BMap.Icon("http://api.map.baidu.com/img/markers.png", new BMap.Size(json.w, json.h), {
            imageOffset: new BMap.Size(-json.l, -json.t),
            infoWindowOffset: new BMap.Size(json.lb + 5, 1),
            offset: new BMap.Size(json.x, json.h)
        })
        return icon;
    }

    initMap(); //创建和初始化地图
</script>
<!--======= FOOTER =========-->
<footer>
  <div class="container">

    <!-- FOOTER -->
    <div class="footer-info">
      <div class="row">

        <!-- keep in touch -->
        <div class="col-md-4">
          <div class="padding-right-50">
            <h6>关于我们</h6>
            <p>是一家专业从事网站建设，在线推广宣传，微营销，大项目定制的电子商务公司。</p>
            <ul class="personal-info">
              <li><i class=" icon-map"></i>哈尔滨市南岗区文景街86号</li>
              <li><i class="icon-envelope"></i>hrbkcwl@163.com</li>
              <li><i class="lnr lnr-phone-handset"></i>13359982928</li>
            </ul>
          </div>
        </div>

        <!-- Links -->
        <div class="col-md-2">
          <h6>网站导航</h6>
          <ul class="links">
            <li><a href="index.html">网站首页</a></li>
            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
              <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" title="<?php echo $vo['catname']; ?>"><?php echo $vo['catname']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>

        <!-- INSTAGRAM  -->
        <div class="col-md-3">
          <h6>最新活动</h6>
          <div class="flicker">
            <div class="single-slide">
              <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-1.jpg" alt=""></a></div>
              <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-2.jpg" alt=""></a></div>
              <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-3.jpg" alt=""></a></div>
              <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-4.jpg" alt=""></a></div>
              <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-5.jpg" alt=""></a></div>
            </div>
          </div>
        </div>

        <!-- keep in touch -->
        <div class="col-md-3">
          <h6>资讯通讯</h6>
          <div class="news-letter">
            <p>把我们的最新资讯、产品、活动，第一时间与您分享:</p>
            <form class="subscribe">
              <input type="tel" placeholder="邮箱">
              <button type="submit"><i class="fa fa-envelope"></i></button>
            </form>

            <!-- Social Icons -->
            <div class="social_icons"><a href="#." target="_blank"><i class="fa fa-weibo"></i></a> <a href="tencent://message/?uin=2503072299&Site=&Menu-=yes" target="_blank"><i class="fa fa-qq"></i></a> <a href="/contact_16.html#content" target="_blank"><i
                                    class="fa fa-weixin"></i></a> <a href="#." target="_blank"><i
                                    class="fa fa-youtube-play"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--======= RIGHTS =========-->
<div class="rights">
  <div class="container">
    <p>版权所有 2017 哈尔滨酷创网络科技有限公司 黑ICP备17007278号</p>
    <div class="scroll"><a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a></div>
  </div>
</div>
</div>


<!-- JavaScripts -->

<script src="__HOME__/js/bootstrap.min.js"></script>
<script src="__HOME__/js/own-menu.js"></script>
<script src="__HOME__/js/jquery.lighter.js"></script>
<script src="__HOME__/js/jquery.colio.min.js"></script>
<script src="__HOME__/js/jquery.cubeportfolio.min.js"></script>
<script src="__HOME__/js/owl.carousel.min.js"></script>
<script src="__HOME__/js/color-switcher.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="__HOME__/rs-plugin/rs-plugin/js/jquery.tp.t.min.js"></script>
<script type="text/javascript" src="__HOME__/rs-plugin/rs-plugin/js/jquery.tp.min.js"></script>
<script src="__HOME__/js/main.js"></script>
<?php $list ="<script type=\"text/javascript\">
        var _hmt = _hmt || [];
       (function() {
        var hm = document.createElement(\"script\");
          hm.src = \"__HOME__/../common/js/tongji.min.js\";
          var s = document.getElementsByTagName(\"script\")[0];
          s.parentNode.insertBefore(hm, s);
        })();
       </script>
       ";echo $list;?>

</body>

</html>

