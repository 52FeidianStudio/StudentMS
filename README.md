要实现的共功能主要分三个模块
门户页面 login index
部门模块 depaerment
个人模块 person
-----------------门户页面
预留其余模块的接口
实现公告的显示（包含每一天的查课，查操记录，显示以及月末的公示和每一次的卫生检查结果的公示）
还有活动的显示，由部门申报活动，学生可以查看活动的参与情况
以及学习资料共享窗口，只需要显示有哪一些
登录界面
-----------------部门模块
生保，女生，体育部
卫生检查 以及 早操
学科部
旷课统计 以及学习资料共享的链接管理
其他部门
活动的参与记录 以及发布近期活动
----------------个人模块
个人信息的修改（规定时间，而且有审核机制，部分信息不可以修改）
密码的修改 设置初始密码
查看个人旷操 旷课 以及本寝室卫生检查情况
个人信息的导入功能（这个我做了，留个接口呗）
相关模块的数据库可以修改提交的时候备注一下是否有修改数据库文件
----------------后台管理员以及老师的最后再开发吧
数据库
activity
活动表
activity_people_list
活动参与成员表
center中心表
class班级表
class_check班级检查表（暂时不用）
class_mark班级分数表（也暂时不用）
department部门表
department_people_list部门成员表
dormitory寝室表
hygiene_check卫生检查表
leave 以及leave_check(晚归表暂时不用)
notice公告表 
project 项目表（暂时不用）
right权限表（华旗用户部分你随便修改就好）
skip_exercise旷操表
student学生表 其余表基本都需要学号作为键值
