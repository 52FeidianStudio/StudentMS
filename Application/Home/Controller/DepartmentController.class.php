<?php
namespace Home\Controller;
use Think\Controller;
class DepartmentController extends Controller {
    public function index(){
        $this->show();
        //Main Page
    }
    public function manage()
    {
    	$this->display(); 
    }
    public function input()
    {
      $this->display(); 
    }
    public function exercise()
    {
      $this->display(); 
    }
    public function de_all()
    {
    	//department id get from session
    	$pager = json_decode($_GET["pager"]);
   		$page=$pager->page;
   		$Capacity = $pager->pageCapacity;
   		$p=($page-1)*$Capacity;
   		$Model = new \Think\Model();
    	$result=$Model->query("select s_name,s_code,s_sex,s_department,s_phone,s_qq,s_origin,s_passwd,d_p_identify from student,department_people_list where student.s_code = department_people_list.d_p_code
    		 ");
    	$total=count($result);
    	$rows = array();
    	foreach ($result as $ListRow) {
    		if($ListRow['s_sex']==1){$ListRow['s_sex']='Man';}else{$ListRow['s_sex']='Woman';}
        	$rows[] = array(
	            'id' => $ListRow['s_code'],
	            'name' => $ListRow['s_name'],
	            'sex' => $ListRow['s_sex'],
	            'qq' => $ListRow['s_qq'],
	            'tel' => $ListRow['s_phone'],
	            'department' => $ListRow['s_department'],
	            'Origin' =>$ListRow['s_origin'],
	            'identify'=> $ListRow['d_p_identify']
	            );

   		}
   		$data = array('total' => $total, 'rows' => $rows);
   		//dump($data);
    	echo json_encode($data);
    }
}