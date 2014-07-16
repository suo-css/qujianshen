<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/git/qujianshen/wwwroot/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/git/qujianshen/wwwroot/Public/home/css/base.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/git/qujianshen/wwwroot/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/git/qujianshen/wwwroot/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/git/qujianshen/wwwroot/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/git/qujianshen/wwwroot/Public/static/bootstrap/js/bootstrap.min.js"></script>
<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<style type="text/css">
        #Nutri_nav,#Index_nav,#User_nav,#Exercise_nav,#Around_nav,#Mall_nav{
    font-size:20px;
    color:white;
    font-weight:800;
}

</style>
<nav class="navbar navbar-default " role="navigation" style="
  background: #3399FF; 
  background: -webkit-gradient(linear, left top, left bottom, from(#3399FF), to(#336699));
  background: -moz-linear-gradient(top,  #faa51a,  #3399FF); 
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorStr='#e9e9e9', EndColorStr='#cccccc');padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
    
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            
            <a class="navbar-brand" href="<?php echo U('Index/Index');?>" style="font-size:20px;font-weight:800;color: #2a6496;background-color: #0aa;">去健身啦.com......</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-top: 3px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo U('Index/Index');?>" id="Index_nav" style="margin-left:3px">主页</a></li>
                <li><a href="<?php echo U('BodySpace/Index');?>" id="User_nav" >空间</a></li>
                <li><a href="<?php echo U('Exercise/exc_common');?>" id="Exercise_nav">健身</a></li>
                <li><a href="<?php echo U('Index/Index');?>" id="Nutri_nav">饮食</a></li>
                <li><a href="<?php echo U('User/login');?>" id="Around_nav">周边</a></li>
                <li><a href="#" id="Mall_nav">商城</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="文章,計劃..">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row" style="margin-top:-28px">
        <div class="col-md-12" style="background-color: white">
            <p>&nbsp</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#Index_nav").mouseover(function(){
  $("#Index_nav").css({"background-color":"white","color":"#3399FF"});
});
$("#Index_nav").mouseleave(function(){
  $("#Index_nav").css({"background-color":"#3399FF","color":"white"});
});
 $("#User_nav").mouseover(function(){
  $("#User_nav").css({"background-color":"white","color":"#3399FF"});
});
$("#User_nav").mouseleave(function(){
  $("#User_nav").css({"background-color":"#3399FF","color":"white"});
});
 $("#Exercise_nav").mouseover(function(){
  $("#Exercise_nav").css({"background-color":"white","color":"#3399FF"});
});
$("#Exercise_nav").mouseleave(function(){
  $("#Exercise_nav").css({"background-color":"#3399FF","color":"white"});
});
 $("#Nutri_nav").mouseover(function(){
  $("#Nutri_nav").css({"background-color":"white","color":"#3399FF"});
});
$("#Nutri_nav").mouseleave(function(){
  $("#Nutri_nav").css({"background-color":"#3399FF","color":"white"});
});
$("#Around_nav").mouseover(function(){
  $("#Around_nav").css({"background-color":"white","color":"#3399FF"});
});
$("#Around_nav").mouseleave(function(){
  $("#Around_nav").css({"background-color":"#3399FF","color":"white"});
});
$("#Mall_nav").mouseover(function(){
  $("#Mall_nav").css({"background-color":"white","color":"#3399FF"});
});
$("#Mall_nav").mouseleave(function(){
  $("#Mall_nav").css({"background-color":"#3399FF","color":"white"});
});
    
</script>

	<!-- /头部 -->
	
	<!-- 主体 -->
	<div id="main-container" class="container">
    <style type="text/css">
        .glyphicon{
            color:darkslategrey;
            background-color: white;
        }
        #sidenav_panel_1,#sidenav_panel_2,#sidenav_panel_3,#sidenav_panel_4{
            background-color:white;
        }
        [data-toggle=collapse]{
            color:darkslategrey;
        }
        #setting_list{
            margin-left: -15px;
        }
    </style>
    <div class="row" style="margin-top:-20px">
        
            <!-- 左侧 nav
            ================================================== -->
            <div class="col-md-2 bs-docs-sidebar" style="font-size:16px;color:darkslategrey;font-weight:800; padding-top: 0px;padding-right:0px;padding-bottom:0px;padding-left: 0px;">

                <div class="user_space">
                    <div class="user_information" style="color:white;font-weight:800;background-color:darkslategrey padding-top: 3px;padding-right:3px;padding-bottom:3px;padding-left:3px;border-style: solid;" >
                        <p>..........</p>
                        <p>..........</p>
                        <p>..........</p>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="sidenav_panel_1">
                                <h4 class="panel-title"> 
                                    <span class="glyphicon glyphicon-home"></span> &nbsp
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        我的主页
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <a href="<?php echo U('User/login');?>">登陆</a>
                                     <a href="<?php echo U('User/password');?>">修改</a>
                                      <a href="<?php echo U('User/register');?>">注册</a>
                                       <a href="<?php echo U('User/logout');?>">退出</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="sidenav_panel_2">
                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-calendar"></span> &nbsp
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        我的计划
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche ch 3 wolf moonente ea le, raw denim aestheabore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="sidenav_panel_3">
                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-user"></span> &nbsp
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        健身小组
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche atatquer farm-to-tablee sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="sidenav_panel_4">
                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-wrench"></span> &nbsp
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        设置
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                            <a href="<?php echo U('User/profile');?>">个人信息</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        

      
            <div class="col-md-8" style="background-color:#FFF; height:150px; ">
                   <div  class="col-md-12" style=" height:330px; ">
                              <div  class="col-md-3" style="background-color:#FFF; height:160px;  border:0.3px; border-color:#D5D5D5; 
                                                                                        border-style:dashed none solid none;   border-radius: 20px; ">
                                         <div  class="col-md-12" style="background-color:#BABABA; height:20px;  text-align:center;  
                                                                  border-radius: 7px; ">STEP1</div>
                                       <div  class="col-md-12" style="height:100px;  text-align:center;"></div>
                                       <div  class="col-md-12" style=" height:40px;  text-align:center;">aababcadftg</div>
                              </div>
                              <div  class="col-md-3" style="background-color:#FFF; height:160px;  border:0.3px; border-color:#D5D5D5; 
                                                                                        border-style:dashed none solid none; ">
                                         <div  class="col-md-12" style="background-color:#BABABA; height:20px;  text-align:center;
                                                                                                        border-radius: 7px; ">STEP1</div>
                                       <div  class="col-md-12" style=" height:100px;  text-align:center;"></div>
                                       <div  class="col-md-12" style=" height:40px;  text-align:center;">aababcadftg</div>
                              </div>
                               <div  class="col-md-3" style="background-color:#FFF; height:160px;  border:0.3px; border-color:#D5D5D5; 
                                                                                        border-style:dashed none solid none; ">
                                         <div  class="col-md-12" style="background-color:#BABABA; height:20px;  text-align:center;
                                                                                                        border-radius: 7px; ">STEP1</div>
                                       <div  class="col-md-12" style=" height:100px;  text-align:center;"></div>
                                       <div  class="col-md-12" style=" height:40px;  text-align:center;">aababcadftg</div>
                              </div>
                               <div  class="col-md-3" style="background-color:#FFF; height:160px;  border:0.3px; border-color:#D5D5D5; 
                                                                                        border-style:dashed none solid none; ">
                                         <div  class="col-md-12" style="background-color:#BABABA; height:20px;  text-align:center;
                                                                                                        border-radius: 7px; ">STEP1</div>
                                       <div  class="col-md-12" style=" height:100px;  text-align:center;"></div>
                                       <div  class="col-md-12" style=" height:40px;  text-align:center;">aababcadftg</div>
                              </div>
                               <div    id="week"  class="col-md-12" style="background-color:#FFF; height:350px; margin-top: 10px; padding: 0; ">
                                                                                                                              
                               </div>
                              <!--  <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"   class="col-md-12"  style="background-color:#A7C0DC; height:50px; margin-top: 60px; padding: 0; " ></div>
 -->
                                                             
                   </div>

             </div>
                            
          

         
             <div class="col-md-2" >
                  <div class="col-md-2"  style=" border: 1px solid #BABABA; height:500px;  position:fixed;" >
                    <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--  <?php echo ($vo["ename"]); ?> --><?php endforeach; endif; else: echo "" ;endif; ?>
                    <span  id="drag1" draggable="true" ondragstart="drag(event)">拖拽我把</span>
                    
                 </div>
           </div>
  

    </div>
</div>

<script type="text/javascript">
    $(function() {
        $(window).resize(function() {
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>


	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p> 本站由 <strong><a href="http://www.onethink.cn" target="_blank">OneThink</a></strong> 强力驱动</p>
      </div>
    </footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/git/qujianshen/wwwroot", //当前网站地址
		"APP"    : "/git/qujianshen/wwwroot/index.php?s=", //当前项目地址
		"PUBLIC" : "/git/qujianshen/wwwroot/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>

 <script type="text/javascript">
       var day=0;
     $(function() {
          for (i = 0; i < 20; i++) {
            day=day+1;
            if(day%8==0){
                  day=1;
            }

            $("#week")
                .append(
                    "<div    id='div1'  ondrop='drop(event)'  ondragover='allowDrop(event)'   class='col-md-2'   style='height:300px; border: 1px solid  #BABABA; padding: 0; width:102px;>"
                     +"<div  style='text-align: right;'>"
                     +"<img src='/git/qujianshen/wwwroot/Public/Home/images/exc/close.png'  width:20px; height:20px;>"
                     +"<div>"
                     +"<div style='text-align: center; margin-top: 5px;'>"
                     + "<span>"+"aaaa"+"</span>"
                     +"<div style='text-align: center;'>"
                     +"<img src='/git/qujianshen/wwwroot/Public/Home/images/exc/close.png'  width:20px; height:20px;>"
                     +"<div>"
                     +"<div>"
                     + "<div  class='col-md-12'   style='height:70px; border: 1px solid  #BABABA; padding: 0; margin-top: 163px; text-align: center;'>" 
                     +"<div style='width:80px; height:25px; background-color:#004F7D; margin: 5px auto; color:#FFF;'>"

                     +" 星期 "+day
                     + "<div>"
                     +"<div style='width:80px; height:25px;  margin: 5px auto; color:#FFF'>"

                     +"<img src='/git/qujianshen/wwwroot/Public/Home/images/exc/up2.png' alt='copy copy ' >"
                     + "<div>"
                     + "<div>"
                     + "<div>"
                
                       
         );
                       
          }
    })
     

 function allowDrop(ev)
{
ev.preventDefault();
}
 
function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}
 
function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
ev.target.appendChild(document.getElementById(data));
}    
</script>
   <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>