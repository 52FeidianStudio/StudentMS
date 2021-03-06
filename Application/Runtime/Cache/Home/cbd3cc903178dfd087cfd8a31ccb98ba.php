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
  <link rel="stylesheet" type="text/css" href="/StudentMS/Public/Department/css/index.css">
  <link rel="stylesheet" type="text/css" href="/StudentMS/Public/Department/css/font-awesome.css">
  <script src="/StudentMS/Public/Department/Js/jquery1.9.js"></script>
  <script src="/StudentMS/Public/Department/Js/jquery.dataTable.min.js"></script>
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
          </div><!-- container -->
          <div class="tablecontent">
            <div id="Table"></div>
          </div>
          </div><!-- container -->

          <footer>
            Copyright © 2016 cms All rights reserved. 
          </footer>
       </div><!-- main -->
       
       <script type="text/javascript">
          $(function(){
             $("#Table").dataTable({
                    debug: true,
                    check: true,
                    pageCapacity:7,
                    loading:false,
                    oddEven:false,
                    url: "../Department/de_all",
                    style: {"font-size": "20px", "width": "100%","margin-left":"20px"},
                    align:"center",
                    ButtonStyle:{fontColor:"#ffffff",backgroundColor:"#10AA9C"},
                    columns: [
                        {ColumnName: "id", title: "Code", width: '155'},
                        {ColumnName: "name", title: "Name", width: '155'},
                        {ColumnName: "sex", title: "Sex", width: '155'},
                        {ColumnName: "qq", title: "QQ", width: '155'},
                        {ColumnName: "tel", title: "Tel", width: '155'},
                        {ColumnName: "department", title: "Department", width: '155'},
                        {ColumnName: "Origin", title: "Origin", width: '155'},
                        {ColumnName: "identify", title: "Identity", width: '155'},
                        {title: "查看", button: "show", buttonName: "查看", width: 70},
                        {title: "编辑", button: "edit", buttonName: "编辑", width: 70},
                        {title: "删除", button: "del", buttonName: "删除", width: 70}
                    ],
                    Click: function (row) {
                        alert("单击："+row.id);
                    },
                    doubleClick: function (row) {
                        alert("双击："+row.id);
                    }
                    ,
                    editClick: function (row) {
                        alert("自定义编辑："+row.id);
                    }
                    ,
                    delClick: function (row) {
                        alert("自定义删除："+row.id);
                    },
                    showClick: function (row) {
                        alert("自定义查看："+row.name);
                    }
            });
          });
       </script>
  </body>
</html>