<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>industry</title>
	<link href="/shanghua/Public/home/css/new-company.css" type="text/css" rel="stylesheet" />
	<link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="/shanghua/Public/home/css/pagnation.css" type="text/css">
	<script type="text/javascript" src="/shanghua/Public/home/js/jquery.min.js"></script>
	<link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
	<script>
$(function () {
$(".box ul li").hover(
	function () {
		$(this).find(".dask").stop().delay(50).animate({"top":0,opacity:0.6},300)
	 },
	function () {
		$(this).find(".dask").stop().animate({"top":-200,opacity:0},300)
	}
	
)
});
</script>
  <style type="text/css">
  .nav ul li a{
    color: white;
    text-decoration: none;
  }
  </style>
</head>
<body>

	<div id="nav-header">
    <div id="img">
       <img src="/shanghua/Public/home/images/logo.jpg" width="100%" height="45px">
    </div>
    <div id="nav-center">
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/Index/indexe">Home</a></li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/Honor/jianjiee">About&nbsp;SH</a>
              <ul>
                <li><a href="/shanghua/index.php/Home/Honor/jianjiee">Profile</a></li>
                <li><a href="/shanghua/index.php/Home/Honor/wenhuae">Culture</a></li>
                <li><a href="/shanghua/index.php/Home/Honor/rongyue">Honor</a></li>
                <li><a href="/shanghua/index.php/Home/Job/join1e">Join&nbsp;Us</a></li>
              </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/Product/producte">Products</a>
              <ul>
                <li><a href="/shanghua/index.php/Home/Product/intergradee">Integrated</a></li>
                <li><a href="/shanghua/index.php/Home/Product/operatione">Maintenance</a></li>
                <li><a href="/shanghua/index.php/Home/Product/lvsee">Green&nbsp;Building</a></li>
                <li><a href="/shanghua/index.php/Home/Product/zhushoue">DWGHelp</a></li>
                <li><a href="/shanghua/index.php/Home/Product/zonghee">PDMS&nbsp;Synthetic</a></li>
                <li><a href="/shanghua/index.php/Home/Product/fenglie">PDMS&nbsp;Wind</a></li>
                <li><a href="/shanghua/index.php/Home/Product/gongyie">Process</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/New/companye">News</a>
               <ul>
                <li><a href="/shanghua/index.php/Home/New/companye">Company</a></li>
                <li><a href="/shanghua/index.php/Home/Industry/industrye">Industry</a></li> 
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/Success/gle">Success</a>
               <ul>
                <li><a href="/shanghua/index.php/Home/Success/gle">Pipe&nbsp;Sallery</a></li>
                <li><a href="/shanghua/index.php/Home/Success/VEe">VE</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/Apply/applye">Consulting</a>
               <ul>
                <li><a href="/shanghua/index.php/Home/Apply/applye">Apply</a></li>
                <li><a href="/shanghua/index.php/Home/Advice/suggeste">Advice</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/shanghua/index.php/Home/Contact/contacte">Contact</a></li>
        </ul>
    </div>
    </div>
    <div id="nav-right">
      <p><a href="/shanghua/index.php/Home/Industry/industry">中文&nbsp;</a>|<a href="/shanghua/index.php/Home/Industry/industrye">&nbsp;English</a></p>
    </div>
     
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/z13.png">
  </div>
  <div id="bread">
    <div id="bread-left">News</div>
      <div id="bread-right"><a href="/shanghua/index.php/Home/Index/indexe">Home&nbsp;</a>>><a href="/shanghua/index.php/Home/New/companye">&nbsp;News&nbsp;</a>>>&nbsp;Industry</div>
  </div>

	<div id="new-company">
		<div id="new-company-left">
      <div id="new-company-new">
        <h4>News</h4>
        <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
        <ul class="new">
          <li><a href="new-company.html" ><em class='em2'></em>Company</a></li>
          <li><a href="new-industry.html" class='active' style="color:#FFBB77"><em class="em1"></em>Industry</a></li>
        </ul>
      </div>
      <div id="new-company-product">
        <h4>Recommended products</h4>
        <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
        <ul>
          <li class="new-company-img1"><a href="zonghe.html"><img src="/shanghua/Public/home/images/left1.jpg"></a>
            <p class="new-goods">PDMS</p>
            <p class="new-more"><a href="zonghe.html" id="product1">MORE</a></p>
          </li>
          <li class="new-company-img2"><a href="lvse.html"><img src="/shanghua/Public/home/images/left2.jpg"></a>
            <p class="new-goods">Green Building</p>
            <p class="new-more"><a href="lvse.html" id="product2">MORE</a><p>
          </li>
          <li class="new-company-img3"><a href="zhushou.html"><img src="/shanghua/Public/home/images/left3.png"></a>
            <p class="new-goods">设计软件</p>
            <p class="new-more"><a href="zhushou.html" id="product3">MORE</a></p>
          </li>
        </ul>
      </div>
      <div id="new-company-hot">
         <h4>Hot key words</h4>
         <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
          <ul class="p0 clouds">
              <li><a href="" target='_self'>VE</a></li>
              <li><a href="" target='_self'>Intelligent pipe gallery</a></li>
              <li><a href="" target='_self'>Process design software</a></li>
              <li><a href="" target='_self'>Green building</a></li>
              <li><a href="" target='_self'>Design assistant</a></li>
              <li><a href="" target='_self'>Hydraulic calculation of wind pipe</a></li>
          </ul>
      </div>
    </div>
		<div id="new-company-right">
			<h2>Industry</h2>
			<HR align="left" width="5%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
				<div id="new-company-content">
					<div class="box">
						<ul>
							<li>
								<a href="new-content-en.html"><img src="/shanghua/Public/home/images/industry1.png" alt="" /></a>
								<div class="dask">
								</div>
								<div>
									<div class="new-company-article-time">
										<p>25<br/>Nov</p>
									</div>
									<div class="new-company-article-title">
										<h4><a href="s1-en.html">To carry out the "engine" culture to be a "running man"</a></h4>
										<p>2016-11-25&nbsp;/&nbsp;Click: 123</p>
									</div>
									<div class="new-company-article-content" style="width:100%">
										<p>In November 26th, received a letter of Lenovo Liu total 30 years "to all employees, finance will be the first time the mail to send email to every employee, and organized learning seminars, conscientiously study and implement the spirit of General Liu letter. Meeting chaired by the chairman and President of the company Yu Nenghong, chairman of the company's Office...</p>
									</div>
									<div class="new-company-btn">
										
										<a href="s1-en.html" id="more1">See more&nbsp;>></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li >
								<a href="s2-en.html"><img src="/shanghua/Public/home/images/industry3.jpg" alt="" /></a>
								<div class="dask" style="background-color:#F0F0F0;">
									<!-- <a href="#">公司新闻</a> -->
								</div>
								<div>
									<div class="new-company-article-time">
										<p>24<br/>Nov</p>
									</div>
									<div class="new-company-article-title">
										<h4><a href="s2-en.html">Help partners seize the new opportunities in Transition Era</a></h4>
										<p>2016-11-24&nbsp;/&nbsp;Click: 234</p>
									</div>
									<div class="new-company-article-content">
										<p>Nearly 400 from the financial, retail, entrepreneurs and company record executives clothing, education, communication, training, business and other dozens of industries in minimally invasive building, development trend of interpretation of traditional enterprise transformation Internet plus strategic layout and operation mode, the successful practice of sharing Internet thinking in different industries, business process and application in the scene....</p>
									</div>
									<div class="new-company-btn">
										
										<a href="s2-en.html" id="more2">See more&nbsp;>></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<a href="s3-en.html"><img src="/shanghua/Public/home/images/industry2.jpg" alt="" /></a>
								<div class="dask" style="background-color:#E1C4C4">
									<!-- <a href="#">公司新闻</a> -->
								</div>
								<div>
									<div class="new-company-article-time">
										<p>23<br/>Nov</p>
									</div>
									<div class="new-company-article-title">
										<h4><a href="s3-en.html">Opportunities are left to the people of innovation, only innovation can seize the opportunity</a></h4>
										<p>2016-11-23&nbsp;/&nbsp;Click: 125</p>
									</div>
									<div class="new-company-article-content">
										<p>Comrade Xi Jinping put forward the opportunity is left to the people of innovation, only innovation can seize the opportunity". Our chief designer of Comrade Deng Xiaoping is also proposed "innovation in reform and opening up", to seize the opportunity the trend of global economic development, the China economy has made great progress, and ultimately the China economy has the world's second largest economy position. We want to be a creative worker in the work, only in this way can be good at seizing the opportunity, will be successful....</p>
									</div>
									<div class="new-company-btn">
										
										<a href="s3-en.html" id="more3">See more&nbsp;>></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
        <div class="pagnation" id="pagnation">
          <a href="#" target="_blank" class="page-prev">上一页</a>
          <a href="#" target="_blank" class="current">1</a>
          <a href="#" target="_blank">2</a>
          <a href="#" target="_blank">3</a>
          <a href="#" target="_blank" class="page-next">下一页</a>
        </div>
		</div>
	</div>

  



    <div id="footer">
  <div id="footer1">
    <div class="footer-top">
      <h5>About&nbsp;SH</h5>
      <hr class="footer-hr">
      <p>&nbsp;&nbsp;Beijing Shanghua Software Co., Ltd. is a new high-tech information company, a service in the field of development survey and design information.</p>
    </div>
    <div id="footer-top2">
        <ul>
          <li style="list-style-type:none"><h5>Industry link</h5></li>
          <hr class="footer-hr">
          <li><a href="http://www.chszxh.org/">China Municipal Engineering Association</a></li>
          <li><a href="http://www.chinaeda.org/">Survey and design of China</a></li>
          <li><a href="http://www.supec.org/">Shanghai Planning Bureau</a></li>
          <li><a href="http://www.chinabim.com/">China BIM portal</a></li>
          
        </ul>
    </div>
    <div class="footer-top3">
        <ul>
          <li><h5>Contact</h5></li>
          <hr class="footer-hr">
          <li><img src="/shanghua/Public/home/images/footer1.png"height="12px"width="12px">&nbsp;Beijing City, Fengtai District Jianhua Street</li>
          <li><img src="/shanghua/Public/home/images/footer2.png"height="12px"width="12px">&nbsp;15289016539</li>
          <li><img src="/shanghua/Public/home/images/footer3.png"height="12px"width="12px">&nbsp;802742100</li>
          <li><img src="/shanghua/Public/home/images/footer4.png"height="12px"width="12px">&nbsp;www.shanghua.com</li>
          
        </ul>
    </div>
    <div class="footer-top4" >
        <ul>
          <li><h5>Product</h5></li>
          <hr class="footer-hr">
          <li class="footer-img"><img src="/shanghua/Public/home/images/1.jpg" width="50px" height="50px"></li>
          <li class="footer-img"><img src="/shanghua/Public/home/images/3.jpg" width="50px" height="50px"></li>
          <li class="footer-img"><img src="/shanghua/Public/home/images/4.jpg" width="50px" height="50px"></li>
          <li class="footer-img"><img src="/shanghua/Public/home/images/5.png" width="50px" height="50px"></li>
          <li class="footer-img"><img src="/shanghua/Public/home/images/6.png" width="50px" height="50px"></li>
          <li class="footer-img"><img src="/shanghua/Public/home/images/7.png" width="50px" height="50px"></li>
        </ul>
    </div>
    </div>
    <div id="footer-bottom">
      <div id="footer-bottom1"><p><br/>This page content for the website demonstration data, front page content can be modified in the background.
      </p></div>
    </div>
    </div>
    <div id="top"></div>



<div id="top"></div>
</body>
<script>
  var pagnation=$("#pagnation");
  $(document).on("keydown",function(event){
    switch(event.keyCode){
       case 37 : window.location.href = pagnation.find(".page-prev").attr("href");break;
       case 39 : window.location.href = pagnation.find(".page-next").attr("href");break
    }
  });
</script>
</html>