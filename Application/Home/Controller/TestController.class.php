<?php
namespace Home\Controller;
use Think\Controller;
class testController extends Controller {
    public function index(){
        $m=M('student');
      $data=$m->distinct(true)->field('s_department,s_class')->select();
      for($i=0;$i<count($data);$i++)
        {
        	$key=substr($data[$i]['s_department'],-3,strlen($data[$i]['s_department']));
        	 $src=$data[$i]['s_department'];
        	echo $tmp=str_replace($key,'', $src);
        	echo $tmp;
          if($data[$i]['s_department']==$place)
          {
            echo  $result[$i]=$data[$i]['s_department'];
          }
        }
       }
}