<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
    public function getdor()
    {
      $result=explode(":", $_GET['key']);
      $grade=$result[0];
      $class=$result[1];
      $place=$result[2];
      dump($result);
      $m=M('student');
      $data=$m->distinct(true)->field('s_department,s_class')->select
      
      if($this->isUse($class))
      {
        for($i=0;$i<count($data);$i++)
        {
          if($data[$i]['s_class']==$class)
          {
            $result[$i]=$data[$i]['s_department'];
          }
        }
         $result=array_unique($result); 
         $result=implode(':',$result);
         $this->ajaxReturn($result);
      }
    }//return dormitory number
    public function getgrade()
    {
      $m=M('student');
      $data=$m->distinct(true)->field('s_class')->select();
      $result=array();
      for($i=0;$i<count($data);$i++)
      {
        $tmp=substr($data[$i]['s_class'],-4,-2);
        if($tmp!=false||$tmp!=null)
        {
          $result[$i]=substr($data[$i]['s_class'],-4,-2);
        }
      
      }
      //var_dump($result);
      $result=array_unique($result); 
      $result=implode(':',$result);
      $this->ajaxReturn($result);
    }
    public function getcname()
    {
      $m=M('student');
      $data=$m->distinct(true)->field('s_class')->select();
      $result=array();
      for($i=0;$i<count($data);$i++)
      {
      $result[$i]=$data[$i]['s_class'];
      }
      $result=implode(':',$result);
      $this->ajaxReturn($result); 
    }
    public function getplace()
    {
      $m=M('student');
      $data=$m->distinct(true)->field('s_department')->select();
      $result=array();
      for($i=0;$i<count($data);$i++)
      {
      $result[$i]=substr($data[$i]['s_department'],0,6);
      }
      $result=array_unique($result);//unique domority number
      $result=implode(':',$result);
      $this->ajaxReturn($result);
    }
    public function isUse($tmp)
    {
      if($tmp!='NoSelect'||$tmp==null)
      {
          return true;
      }
      else
      {
          return false;
      }
    }
}