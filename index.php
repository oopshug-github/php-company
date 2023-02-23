<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>




<script>
    $(document).ready(function(){
      $('.slider-contents').bxSlider(
        {
            auto:true, //자동넘기기
            speed:500, //한페이지 넘기는 시간
            pause:2000, //한페이지에 머무르는 시간
            autoControls:true,//자동제어창
            pager:false,//페이지 바로가기
            mode : 'fade' //'horizontal','vertical','fade'
        }
      );
    });
  </script>
  












<!-- hd랑 wrapper 사이에 두 번째 새로운 층 생성-->

<div id="img-banner">    
        <div id="slide">            
            <div class="slider-contents">            
                <img src="./img/cat.png">
                <img src="./img/lantern.png">
                <img src="./img/street.png">                
            </div>
        </div>
    
</div>




<!-- 콘텐츠 시작 { -->
    <div id="wrapper">
    <div id="container_wr">
        
    
    
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }?>



<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_list2', 'list2', 4, 23);			// 최소설치시 자동생성되는 자유게시판
	echo latest('pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 자유게시판
	echo latest('pic_list', 'notice', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('pic_list', 'free', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block', 'gallery', 4, 23);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>


<?php
include_once(G5_PATH.'/tail.php');