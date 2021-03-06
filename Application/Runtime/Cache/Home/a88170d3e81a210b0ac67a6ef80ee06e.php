<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>CompanyManagementSystem</title>
  <meta charset="utf-8"> 
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="expires" content="0">    
  <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
  <meta http-equiv="description" content="This is my page">
   <script src="/StudentMS/Public/Department/Js/jquery1.9.js"></script>
  <link rel="stylesheet" href="/StudentMS/Public/Department/css/jquery.datetimepicker.css">
  <script src="/StudentMS/Public/Department/Js/jquery.datetimepicker.full.js"></script>
  <link rel="stylesheet" type="text/css" href="/StudentMS/Public/Department/css/index.css">
  <link rel="stylesheet" type="text/css" href="/StudentMS/Public/Department/css/font-awesome.css">
  
  <script src="/StudentMS/Public/Department/Js/input.js"></script>
  </head>
  
  <body>
       <header>
         <!-- logo -->
         <a href="" class="logo">
           <i class="fa fa-skyatlas fa-lg" style="color: #fff;"></i> &nbsp;CMS
           </a>
          <ul>
            <li><a href="">查看站点</a></li>
            <li><a href="">清楚缓存</a></li>
            <li><a href="">使用帮助</a></li>
            <li class="user">
              <a href="">
                <img src="/StudentMS/Public/Department/Img/avtar.png" alt="用户头像"/>
                <span>您好，<strong>Admin</strong>!</span>
              </a>
              <!-- 下拉菜单 -->
              <div class="dropDown">
                <a href="">中心</a>
                <a href="">注销登录</a>
              </div>
            </li>
            <li><a href="">退出登录</a></li>
          </ul>
       </header>

       <div class="leftBar">
          <ul>
            <li class="active"><a href="../Department/index"><i class="fa fa-home fa-lg  fa-fw"></i>系统首页</a></li>
            <li><a href="../Department/notice"><i class="fa fa-graduation-cap fa-lg  fa-fw"></i>查看通知</a></li>
            <li><a href="../Department/input"><i class="fa fa-file-text-o fa-lg  fa-fw"></i>信息录入</a></li>
            <li><a href="../Department/modify"><i class="fa fa-user fa-lg  fa-fw"></i>修改记录</a></li>
            <li><a href="../Department/query"><i class="fa fa-cog fa-lg  fa-fw"></i>记录查询</a></li>
            <li><a href="../Department/record"><i class="fa fa-refresh fa-lg  fa-fw"></i>活动记录</a></li>
            <li><a href="../Department/manage"><i class="fa fa-refresh fa-lg  fa-fw"></i>部门管理</a></li>
          </ul>
       </div><!-- leftBar -->
       
       <div class="main" style="text-align: center;">
          <p class="url"> 管理中心</p>
          <div class="container">
            <div class="alert">欢迎，<strong> Admin </strong>! 如果您是第一次登录信息管理系统，请点击<a href=""> 修改密码 </a>更改初始密码。<i class="fa fa-close fa-lg"></i>
            </div><!-- alert -->
            <div class="tableinput">
                <div class="tableheader">
                  <div class="grade sel">
                    <span class="title">按年级选择</span>
                    <select id="grade">
                    </select>
                  </div>
                  <div class="place sel">
                    <span class="title">按寝室位置选择</span>
                    <select id="place">
                    </select>
                  </div>
                  <div class="class sel">
                    <span class="title">按照班级选择</span>
                    <select id="class">
                    </select>
                  </div>
                  <div class="time sel">
                    <span class="title">选择日期</span>
                    <div class="class sel">
                   <input id="datetimepicker" type="text" >
                  </div>
                  </div>
                  <button id="sure">Search</button>
                </div>
                <div class="tablemain">
                   <table border='1' cellpadding='1'>
                      <tr>
                        <th class='head'>寝室号<p class='score'></p></th>
                        <th class='head'>地面<p class='score'>（10）</p></th>
                        <th class='head'>桌面，书架<p class='score'>（25）</p></th>
                        <th class='head'>卫生间，阳台<p class='score'>（10）</p></th>
                        <th class='head'>床铺<p class='score'>（20）</p></th>
                        <th class='head'>门窗，墙面<p class='score'>（10）</p></th>
                        <th class='head'>安全<p class='score'>（10）</p></th>
                        <th class='head'>整体<p class='score'>（25）</p></th>
                        <th class='head'>其他<p class='score'></p></th>
                        <th class='head'>备注<p class='score'></p></th>
                      </tr> 
                  </table>
                  <table border='1' cellpadding='1' id="tablehead">
                  </table>
                  <div class="controller">
                      <button id='submit' class='but'>提交记录</button><button id='reset' class='re'>重新选择</button>
                  </div>
              </div>
            </div>
            <div class="block"></div>
          </div><!-- container -->
          
          <footer>
            Copyright © 2016 cms All rights reserved. 
          </footer>
       </div><!-- main -->
  </body>
</html>