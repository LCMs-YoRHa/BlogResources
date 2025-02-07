 <!-- 用法
    在footer.php中</body>标签前引用下列命令即可：第一个!记得去掉！
    <!?php require('./specialEffects/common.php'); ?>
-->
 
 
<!-- 数学公式支持-->
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [['$','$'], ['\\(','\\)']],
      processEscapes: true
    }
  });
</script>
 
 
<!-- 设备判断JS脚本
    用法：https://github.com/hgoebl/mobile-detect.js#readme
    也可至bloghelper取得： https://fastly.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/mobile-detect.js
-->
<script src="https://fastly.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/mobile-detect.js"></script>
 
<!--全页特效开始-->
<script type="text/javascript">
 
    // 设备检测
    var md = new MobileDetect(window.navigator.userAgent);
 
    // PC生效，手机/平板不生效
    // md.mobile(); md.phone(); 
    if(!md.phone()){
 
        if(!md.tablet()){
 
            // 雪花
            // $.getScript("https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/xiaxue.js");
 
            // 樱花
            // $.getScript("https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/yinghua.js");
 
            // 小烟花特效
            // $.getScript("https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/mouse-click.js");
 
            // 大烟花特效 z-index:217483647; pointer-events: none; 
            // $.getScript("https://fastly.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/mouse/mouse-click-02/mouse-canvas.js");
            // document.write('<style>#mouse-canvas {z-index:217483647; pointer-events: none;  box-sizing: border-box !important; display: block !important; position: fixed !important; left: 0; right: 0; top: 0; bottom: 0; width: 100%; height: 100vh;}</style>')
 
 // 鼠标移动的仙女棒特效。
$.getScript("https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/mouse/halo-dream/fairyDustCursor.min.js");

            // 鼠标移动的泡泡特效
            // $.getScript("https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/mouse/joe/censor10.js");
 
        }
 
        // 春节灯笼
        // document.write('<link href="https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/css/deng.css" rel="stylesheet">');
        // document.write('<div class="deng-box"><div class="deng"><div class="xian"></div><div class="deng-a"><div class="deng-b"><div class="deng-t">春节</div></div></div><div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div></div></div>');
        // document.write('<div class="deng-box1"><div class="deng"><div class="xian"></div><div class="deng-a"><div class="deng-b"><div class="deng-t">快乐</div></div></div><div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div></div></div>');  
 
        // 随机图API之动态壁纸
        // document.write('<style type="text/css" id="wp-custom-css">#content:before{opacity: 0;}</style>');
        // document.write('<video src="https://blognas.hwb0307.com/imgapi/index-animated.php" class="bg-video" autoplay="" loop="loop" muted=""></video>');
        // document.write('<style> video.bg-video {position: fixed; z-index: -1;left: 0;right: 0;top: 0;bottom: 0;width: 100vw;height: 100vh; object-fit: cover;pointer-events: none;transition: opacity .3s ease;}</style>')
    }
</script>
<!--全页特效结束-->
 
<!--鼠标悬停3D效果start-->
<div class="article.post:not(.post-full)" data-tilt></div>
<div class=".shuoshuo-preview-container" data-tilt></div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/vanilla3D/vanilla-tilt.js"></script>
<script type="text/javascript">
    // 设备检测
    var md = new MobileDetect(window.navigator.userAgent);
 
    // PC生效，手机/平板不生效
    // md.mobile(); md.phone(); 
    if(!md.phone() && !md.tablet()){
        window.pjaxLoaded = function(){
            // 正文卡片
            VanillaTilt.init(document.querySelectorAll("article.post:not(.post-full)"),{
                reverse:                true,  // reverse the tilt direction
                max:                    8,     // max tilt rotation (degrees)
                startX:                 0,      // the starting tilt on the X axis, in degrees.
                startY:                 0,      // the starting tilt on the Y axis, in degrees.
                perspective:            1000,   // Transform perspective, the lower the more extreme the tilt gets.
                scale:                  1.02,      // 2 = 200%, 1.5 = 150%, etc..
                speed:                  600,    // Speed of the enter/exit transition
                transition:             false,   // Set a transition on enter/exit.
                axis:                   "y",    // What axis should be banned. Can be "x", "y", or null
                reset:                  true,   // If the tilt effect has to be reset on exit.
                easing:                 "cubic-bezier(.03,.98,.52,.99)",    // Easing on enter/exit.
                glare:                  false,  // if it should have a "glare" effect
                "max-glare":            0.8,      // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                "glare-prerender":      false,  // false = VanillaTilt creates the glare elements for you, otherwise
                                                // you need to add .js-tilt-glare>.js-tilt-glare-inner by yourself
                "mouse-event-element":  null,   // css-selector or link to HTML-element what will be listen mouse events
                gyroscope:              true,   // Boolean to enable/disable device orientation detection,
                gyroscopeMinAngleX:     -45,    // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
                gyroscopeMaxAngleX:     45,     // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
                gyroscopeMinAngleY:     -45,    // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
                gyroscopeMaxAngleY:     45,     // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
            })
 
            // 说说卡片
            // VanillaTilt.init(document.querySelectorAll(".shuoshuo-preview-container"),{
            //     reverse:                true,  // reverse the tilt direction
            //     max:                    5,     // max tilt rotation (degrees)
            //     startX:                 0,      // the starting tilt on the X axis, in degrees.
            //     startY:                 0,      // the starting tilt on the Y axis, in degrees.
            //     perspective:            2000,   // Transform perspective, the lower the more extreme the tilt gets.
            //     scale:                  1.02,      // 2 = 200%, 1.5 = 150%, etc..
            //     speed:                  300,    // Speed of the enter/exit transition
            //     transition:             false,   // Set a transition on enter/exit.
            //     axis:                   "y",    // What axis should be banned. Can be "x", "y", or null
            //     reset:                  true,   // If the tilt effect has to be reset on exit.
            //     easing:                 "cubic-bezier(.03,.98,.52,.99)",    // Easing on enter/exit.
            //     glare:                  false,  // if it should have a "glare" effect
            //     "max-glare":            0.8,      // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
            //     "glare-prerender":      false,  // false = VanillaTilt creates the glare elements for you, otherwise
            //                                     // you need to add .js-tilt-glare>.js-tilt-glare-inner by yourself
            //     "mouse-event-element":  null,   // css-selector or link to HTML-element what will be listen mouse events
            //     gyroscope:              true,   // Boolean to enable/disable device orientation detection,
            //     gyroscopeMinAngleX:     -45,    // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
            //     gyroscopeMaxAngleX:     45,     // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
            //     gyroscopeMinAngleY:     -45,    // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
            //     gyroscopeMaxAngleY:     45,     // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
            // })
        }
        $(window.pjaxLoaded);
        $(document).on('pjax:end', window.pjaxLoaded); 
    }
</script>
<!--鼠标悬停3D效果end-->
 
<!--鼠标名单开始-->
<!-- <script type="text/javascript">
    var a_idx = 0;
    jQuery(document).ready(function($) {
    $("body").click(function(e) {
    //        var a = new Array("❤腿堡-苯苯❤","❤ALSO STARRING-榕榕❤","❤腿堡-亚伯❤","❤腿堡-银露❤","❤腿堡-枫叶❤","❤腿堡-培根❤","❤腿堡-老丘❤","❤腿堡-倩倩❤","❤腿堡-小o❤","❤腿堡-蛇蛇❤","❤腿堡-培根❤","❤腿堡-十九❤","❤腿堡-萝卜卜❤","❤腿堡-千泓❤","❤腿堡-萌波❤","❤腿堡-经历❤","❤letter-韩露❤","❤腿堡-记忆❤","❤叛徒-绝恋❤","❤腿堡-小离❤","❤腿堡-七秒❤","❤腿堡/剑花-U哥❤","❤大佬-幕哥❤","❤退谷-糕糕❤","❤退谷-肥鸡❤","❤退谷-气气❤","❤退谷-小幻❤","❤退谷-狂总❤","❤剑花-君故-会刷buff❤","❤剑花-肥少❤","❤剑花-太阳❤","❤剑花-我腿❤","❤剑花-笙哥❤","❤剑花-零点夫妇❤","❤还有很多小伙伴记不太清了❤");     
        // var a = new Array("富强", "民主", "文明", "和谐", "自由", "平等", "公正", "法治", "爱国", "敬业", "诚信", "友善");
        // var a = new Array("❤为汝祈福❤", "❤早日康复❤");
        var a = new Array("❤身体健康❤", "❤万事如意❤", "❤心想事成❤", "❤笑口常开❤", "❤年年有余❤", "❤金榜题名❤", "❤前程似锦❤", "❤一帆风顺❤");
        var $i = $("<span/>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
        var x = e.pageX,
        y = e.pageY;
        $i.css({
            "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
            // "z-index": -1,
            "top": y - 20,
            "left": x,
            "position": "absolute",
            "font-weight": "bold",
            "color": "#ff6651"
        });
        $("body").append($i);
        $i.animate({
            "top": y - 180,
            "opacity": 0
        },
        1500,
        function() {
            $i.remove();
        });
    });
    });
</script> -->
<!--鼠标名单结束-->
 
<!--鼠标指针特效2-->
<style type="text/css">
    .main-content img,body{cursor:url(https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/mouse/halo-dream/cursor/breeze/Arrow.cur),auto}.actions>div,.expand-done,.main-content figure>figcaption div,.navbar-above .navbar-nav .item,.navbar-searchicon,.navbar-slideicon,.photos .picture-details,.widget .ad-tag .click-close,a,button{cursor:url(https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/mouse/halo-dream/cursor/breeze/Hand.cur),auto}blockquote,code,h1,h2,h3,h4,h5,h6,hr,input[type=text],li,p,td,textarea,th{cursor:url(https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/mouse/halo-dream/cursor/breeze/IBeam.cur),auto}
</style>
 
 
<!--网站输入效果-->
<script src="https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/input-with-fire.js"></script>
 
<!--主题搞笑字符-->
<!-- <script src="https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/js/onfocus.js"></script> -->
 
<!--文字抖动特效-->
<link href="https://cdn.jsdelivr.net/gh/LCMs-YoRHa/BlogResources@latest/css/myface.css" rel="stylesheet">
 
<!--WordPress防镜像-->
<!-- <img style="display:none" src=" " onerror='this.onerror=null;var currentDomain="blognas." + "hwb0307" + ".com"; var str1=currentDomain; str2="docu"+"ment.loca"+"tion.host"; str3=eval(str2) ;if( str1!=str3 ){ do_action = "loca" + "tion." + "href = loca" + "tion.href" + ".rep" + "lace(docu" +"ment"+".loca"+"tion.ho"+"st," + "currentDomain" + ")";eval(do_action) }' /> -->
 
<!--正文自动编号-->
<style type="text/css">h1:not(.title){counter-reset:h2counter;counter-increment:h1counter;}h1:not(.title)::before{content:counter(h1counter) " ";}h2{counter-reset:h3counter;counter-increment:h2counter;}h2:not(.comments-title)::before{content:counter(h1counter) "." counter(h2counter) " ";}h3{counter-reset:h4counter;counter-increment:h3counter;}h3::before{content:counter(h1counter) "." counter(h2counter) "." counter(h3counter) " ";}h4{counter-reset:h5counter;counter-increment:h4counter;}h4::before{content:counter(h1counter) "." counter(h2counter) "." counter(h3counter) "." counter(h4counter) " ";}h5{counter-reset:h6counter;counter-increment:h5counter;}h5::before{content:counter(h1counter) "." counter(h2counter) "." counter(h3counter) "." counter(h4counter) "." counter(h5counter) " ";}h6:not(#leftbar_overview_author_name):not(#leftbar_overview_author_description){counter-increment:h6counter;}h6:not(#leftbar_overview_author_name):not(#leftbar_overview_author_description)::before{content:counter(h1counter) "." counter(h2counter) "." counter(h3counter) "." counter(h4counter) "." counter(h5counter) "." counter(h6counter) " ";}body{counter-reset:h1counter;}h3.text-black {counter-reset: none;}h3.text-black::before {content: none;}</style>
 
<!--滚动模糊-->
<!-- <script>
window.addEventListener("scroll", function (e) {
  if (window.scrollY > window.innerHeight * 0.5) {
    document.querySelector("#content").classList.add("scrolled");
  } else {
    document.querySelector("#content").classList.remove("scrolled");
  }
});</script>
<style>
#content.scrolled::before, #content.scrolled::after {
  filter: blur(4px);
  transform: scale(1.02);
}
#content::before, #content::after {
  transition: filter .3s ease, transform .3s ease !important;
  filter: blur(0px);
  transform: scale(1.02);
}</style> -->