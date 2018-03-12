<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>(주)코드바이스</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->


    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
<style>

    @font-face {
        font-family: BMDOHYEON_ttf;
        src:url("vendor/baemin/BMDOHYEON_ttf.ttf");

    } @font-face {
        font-family: NotoSans-Black!important;
        src:url("vendor/baemin/NotoSans/NotoSans-Black.ttf");

    }
    html:lang(en) {
        font-family: sans-serif!important;
    }
    html{
        font-size: 100%;
        font-family:BMDOHYEON_ttf!important;
    }
    .intro-text{
        text-align: left;
        line-height: 170%;
        font-size: 1.7vw;
    }
    .servicetitle{
        text-align: center;
        font-family:sans-serif;
        padding:5%;
        font-size: 2vw;
    }
    .sysdeveloptitle{
        text-align: center;
        font-family:sans-serif;
        padding:5%;
        font-size: 2vw;
    }

    #sysdevelop{
        margin-bottom: 0px;
    }
    #sysdevelop h2{
        font-size:2vw;
    }


    .developedlists img{
        width:55%;

    }
    #service h3{
        padding:3.7vw;
        font-size:2vw;
    }
    #servicealign{
        display:grid;
        grid-template-columns: 25% 25% 25% 25%;
        padding:10px;
        font-family: BMDOHYEON_ttf;
        text-align: center;
    }
    #servicealign img{
        width: 50%;
    }
    #servicealign h4{
        font-size:75%;
        font-weight:400;
        color:grey;
    }
    #servicealign p{
        font-size: 1.3vw;
        color:black!important;

    }
    ul{
        list-style-type:none;

    }
    .developdescs ul li:before {

        content: '';

        display: inline-block;

        height: 15px;

        width: 30px;

        background-size: 20px;

        background-image: url('img/additionalimage/check.png');

        background-repeat: no-repeat;

        margin-right: 5px;
    }
    li{
        font-size: 1.4vw;
    }


    #consultingtitle{
        font-size:2vw;
        padding-bottom: 5%;

    }

    .itconsulting{
        width: 100%;
        height: 100%;
        padding: 5% 15%;
    }
    .itconsultingdesc p,h3 {
        font-family: NotoSans-Black!important;

    }
    .itconsultingdesc{
        display:grid;
        grid-template-columns: 44.5% 11% 44.5%;
        width: 100%;
        height:38vw;
        padding-top: 0.5vw;
    }
    .consulting1text{
        background-image:url("img/additionalimage/Model_consulting.png");
        background-repeat: no-repeat;
        background-size: 100%;
        width: 100%;
        height: 100%;
        font-family: NotoSans-Black!important;
        color:white;
        align-items: center;
        justify-content: center;
        text-align:center;
        padding:30% 5% 70% 5%;

    }
    .consulting2text{  background-image:url("img/additionalimage/Policy_consulting.png");
        background-repeat: no-repeat;
        background-size: 100%;
        width: 100%;
        height: 100%;
        color:white;
        font-family: NotoSans-Black!important;
        align-items: center;
        justify-content: center;
        text-align:center;
        padding:30% 5% 70% 5%;
      }
    #contact_title{
        text-align: center;
        font-family:sans-serif;
        padding:5%;
        font-size: 2vw;
    }


    #contactus{
       display:grid;
        grid-template-columns: 47.5% 5% 47.5%;
        font-family: BMDOHYEON_ttf;
        padding:30px 0px;
        width: 100%;
        height:100%;
    }
    #contactdesc{
        padding: 20px 0px;
        font-family: BMDOHYEON_ttf;
        font-size: 1.4vw;

    }
    .developdescs{
        display:grid;
        grid-template-columns: 40% 20% 40%;
        padding:50px;
        text-align:-webkit-center;
        text-align: center;
        font-weight: bold;

    }
    .developlist{
        display:grid;
        grid-template-columns: 33.3% 33.3% 33.3%;
        padding:10px;
        text-align: center;
    }
    .developedlists{


    }
    td img{
        width:100%;
        height:100%;

    }

    #contact{
        padding:0px;
        margin:20px;

    }
</style>

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black; padding: 1px;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:white; font-family: BMDOHYEON_ttf">Codvice</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sysdevelop">System Develop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#itconsulting">IT Consulting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
          <p style="font-family: BMDOHYEON_ttf;"><p style="font-size: 3.5vw">"고객 중심의 개발 회사"</p>
          <br>

            - 가장 편하고 가장 알아듣기 쉽게 개발에 관련된 기획을 진행해 드립니다.<br>
            - 처음 접하는 기술적 영역에 대해 고객과 하나하나 함께 공유하며<br>&nbsp;&nbsp; 조금은 느리지만 오류 없는 개발을 지향합니다.</p>
    </div>
        </div>
</header>

<!-- Services -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" style="padding: 0px 0px 66px 0px;">
                <h3 class="service_title">Service</h3>
                <p style="font-size: 1.27vw;">교육(Education) + 기술(Technology) = 에듀테크(EduTech)<br>
               코드바이스는 에듀테크 전문 기업으로 다양한 IT 기술을 활용해 교육 산업을 변화시키고 있습니다.</p>
            </div>
        </div>

            <div id="servicealign">
                <div>
                    <img src="img/additionalimage/Editalk.png">
                <h4 class="servicetitle">서비스 중</h4>
                <p class="text-muted">중국어 가상 채팅<br>교육 서비스.</p>
                </div>
                <div>
                    <img src="img/additionalimage/Chiyou.png" >
                <h4 class="service-heading">서비스 중</h4>
                <p class="text-muted">HSK 전문 <br>첨삭 서비스</p>
                </div>
                <div>
                    <img src="img/additionalimage/Chinaroad.png">
                <h4 class="service-heading">오픈 준비중</h4>
                <p class="text-muted">중국어 첨삭 및<br>스피킹 교육 서비스</p>
                </div>
                <div>
                    <img src="img/additionalimage/Hanchat.png">
                    <h4 class="service-heading">서비스 개발 중</h4>
                    <p class="text-muted">한국어 교육 서비스</p>
                </div></div>

    </div>
</section>

<!-- system development Grid -->
<section class="bg-light" id="sysdevelop" style="width:100%; height:100%">
    <div class="container">

            <div class="col-lg-12 text-center">
                <h2 class=sysdeveloptitle>System Development</h2>
            </div>
            <div class="developdescs">
                <div><ul><li>어플리케이션 맞춤 개발</li><li>홈페이지 맞춤 개발</li></ul></div>
                <div></div>
                <div><ul><li>쇼핑몰 맞춤 개발</li><li>앱으로 업그레이드</li></ul></div>
            </div>
            <div class="developlist">
                <div class="developedlists"><img src="img/additionalimage/Hired.png">
                </div>
                <div class="developedlists"><img src="img/additionalimage/Medical.png">
                </div>
                <div class="developedlists"><img src="img/additionalimage/Modudatoss.png">
                </div>
            </div>

    </div>
</section>
<!-- IT Consulting -->
<section id="itconsulting" class="itconsulting">
    <h2 id="consultingtitle" style="text-align: center; font-family: sans-serif;">IT Consulting</h2>
    <div class="itconsultingdesc">

            <div class="consulting1text">
                <h3 style="font-size:2.3vw;">IT 비즈니스 모델 컨설팅</h3>
                <br>
                <br>
                <br>
                <br>
                <p style="font-size:1.5vw;">대기업, 공공기관 등에서 기술창업 강의 진행 중<br>정확한 목적을 찾고 그에 걸맞은 모델을 잡아드립니다.</p></div>
        <div></div>
            <div class="consulting2text">
                <h3 style="font-size:2.3vw;">IT 정책자금 컨설팅</h3>
                <br>
                <br>
                <br>
                <br>
                <p style="font-size:1.5vw;">나한테 딱 맞는 정책 자금 추천<br>너무나 어려운 준비 작업의 멘토가<br>되어드립니다.</p></div>
    </div>
</section>
<!-- Contact -->
<section id="contact" >
<h2 id="contact_title">Contact us</h2>
    <div id="contactus" style="font-family: BMDOHYEON_ttf"><div style="align:center;">
            <table cellpadding="0" cellspacing="0" width="400px" style="float: right;">
                <tr>
                    <td style="border:1px solid #cecece;"><a href="https://map.naver.com/?searchCoord=afeb07d7745ec052347227120e0f9e4ed46fa3ac5466b4653b31380c21d297f8&query=6rK96riw64%2BEIOyEseuCqOyLnCDspJHsm5Dqtawg6rSR66qF66GcIDM3Nywg7Iug6rWs64yA7ZWZ6rWQIOywveyXheq0gCA1MDftmLg%3D&tab=1&lng=97238233372d9fac0625f8cd5cd0a468&mapMode=0&mpx=02133540%3A37.4462711%2C127.164028%3AZ11%3A0.0198688%2C0.0087770&lat=aed90835461d40a12b0d72603d987d86&dlevel=12&enc=b64&menu=location" target="_blank">
                            <img src="http://prt.map.naver.com/mashupmap/print?key=p1520484834574_-1367476952" alt="지도 크게 보기" title="지도 크게 보기" border="0" style="vertical-align:top; align:center;"/></a></td> </tr>
                <tr><td><table cellpadding="0" cellspacing="0" width="100%"> <tr> <td height="28" bgcolor="#f9f9f9" align="left" style="padding-left:9px; border-left:1px solid #cecece; border-bottom:1px solid #cecece;">
                                    <span style="font-family: tahoma; font-size: 11px; color:#666;">2018.3.8</span>&nbsp;
                                    <span style="font-size: 11px; color:#e5e5e5;">|</span>&nbsp;
                                    <a style="font-family: dotum,sans-serif; font-size: 11px; color:#666; text-decoration: none; letter-spacing: -1px;" href="https://map.naver.com/?searchCoord=afeb07d7745ec052347227120e0f9e4ed46fa3ac5466b4653b31380c21d297f8&query=6rK96riw64%2BEIOyEseuCqOyLnCDspJHsm5Dqtawg6rSR66qF66GcIDM3Nywg7Iug6rWs64yA7ZWZ6rWQIOywveyXheq0gCA1MDftmLg%3D&tab=1&lng=97238233372d9fac0625f8cd5cd0a468&mapMode=0&mpx=02133540%3A37.4462711%2C127.164028%3AZ11%3A0.0198688%2C0.0087770&lat=aed90835461d40a12b0d72603d987d86&dlevel=12&enc=b64&menu=location" target="_blank">지도 크게 보기</a>
                                </td> <td width="px" bgcolor="#f9f9f9" align="right" style="text-align:right;; border-right:1px solid #cecece; border-bottom:1px solid #cecece;">
                                    <span style="float:right;"><span style="font-size:9px; font-family:Verdana, sans-serif; color:#444;">&copy;&nbsp;</span>&nbsp;
                                        <a style="font-family:tahoma; font-size:9px; font-weight:bold; color:#2db400; text-decoration:none;" href="http://www.nhncorp.com" target="_blank">NAVER Corp.</a></span> </td> </tr> </table> </td> </tr> </table></div>
    <div></div><div id="contactdesc" style="font-family: BMDOHYEON_ttf"><p><b>회사명</b>   |   주식회사 코드바이스</p><p><b>사업자번호</b>   |   129-86-88413</p><p><b>대표</b>   |   송인혁</p><p><b>주소</b>   |   경기도 성남시 중원구 광명로 377, 신구대학교 창업관 507호</p>
            <p><b>대표전화</b>   |   031-747-4709</p><p><b>문의</b>   |   codvice@gmail.com</p></div></div>


</section>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>

</html>
