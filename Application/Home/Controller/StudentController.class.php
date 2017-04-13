<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
    public function getdor()
    {
      $tmp=explode(":", $_GET['key']);
      $grade=$tmp[0];
      $class=$tmp[1];
      $place=$tmp[2];       
      //dump($result);
      $m=M('student');
      $data=$m->distinct(true)->field('s_department,s_class')->select();
      //dump($data);
      
      if($this->isUse($place))
      {
        $result=array();
        for($i=0;$i<count($data);$i++)
        {
          $key=substr($data[$i]['s_department'],-3,strlen($data[$i]['s_department']));
          $src=$data[$i]['s_department'];
          $tmp=str_replace($key
          ,'',$src);
          if($tmp==$place)
          {
            $result[$i]=$data[$i]['s_department'];
          }
        }
         $result=array_unique($result); 
         $result=implode(':',$result);
         $this->ajaxReturn($result);
      }
      else if($this->isUse($grade))
      {
        $result=array();
        for($i=0;$i<count($data);$i++)
        {
          $tmp=substr($data[$i]['s_class'],-4,-2);
          if($tmp==$grade)
          {
            $result[$i]=$data[$i]['s_department'];
          }
        
        }
           $result=array_unique($result); 
           $result=implode(':',$result);
           $this->ajaxReturn($result);
      }
      else if($this->isUse($class))
      {
        $result=array();
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
        $key=substr($data[$i]['s_department'],-3,strlen($data[$i]['s_department']));
        $src=$data[$i]['s_department'];
        $tmp=str_replace($key
          ,'',$src);
 
      $result[$i]=$tmp;
      }
      $result=array_unique($result);//unique domority number
      $result=implode(':',$result);
      $this->ajaxReturn($result);
    }
    public function isUse($tmp)
    {
      if($tmp!='NoSelect'&&$tmp!=null&&$tmp!='')
      {
          return true;
      }
      else
      {
          return false;
      } 
    }
    //以上是信息查询接口
    //---------------------------------信息录入函数-----
    public function Hyecheck()
    {
        $postd=$_POST['data'];
         $checker="2014317200303";
        $result=explode(':',$postd);
        //dump($result);
        $time=$result[0];
        $row=count($result);
        $m=M('hygiene_check');
        $score=0;
        for($i=1;$i<$row;$i++)
        {
            $tmp=explode('|',$result[$i]);
            //dump($tmp);
            $col=count($tmp);
                for($j=1;$j<=8;$j++)
                {
                  if($j==8){}
                    else{$score+=(int)$tmp[$j];}
                }
                $data['ground']=$tmp[1];
                $data['table']=$tmp[2];
                $data['bed']=$tmp[4];
                $data['window']=$tmp[5];
                $data['safe']=$tmp[6];
                $data['remarks_mark']=$tmp[8];
                $data['remarks']=$tmp[9];
                $data['balcony']=$tmp[3];
                $data['dorm_number']=$tmp[0];
                $data['whole']=100+(int)$score;
                $data['date']=$time;
                $data['checker']=$checker;
                $result_tmp=$m->where("dorm_number='".$tmp[0]."'")->select();
                //dump($result_tmp);
                for($k=0;$k<count($result_tmp);$k++)
                {
                    if($result_tmp[$k]['date']==$time)
                      {
                        
                        $this->ajaxReturn($tmp[0]);
                        exit;
                      }
                }
                   $sign+=$m->add($data);
        }
        $this->ajaxReturn('success');
      }
}