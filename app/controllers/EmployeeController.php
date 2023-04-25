<?php
class EmployeeController extends Controller{
       public $emp;
       public function __construct(){
           parent::__construct();
           check_login();
           $this->emp=$this->loadModel('employee');
       }
    public function index()
    {
       $data=$this->emp->all();  
       $this->view->load("employee.index",compact('data')); 
           
    }
    public function create()
    {
       $this->view->load("employee.create");
    } 
    public function store()
    {
       $storeinfo=[
              'name'=>request('name'),
               'city'=>request('city'),
               'phone_number'=>request('phone_number'),
               'adhar_card_number'=>request('adhar_card_number'),
               'email'=>request('email'),
          ];
          if($this->emp->save($storeinfo)){
              Session::set('gmsg',"Data saved successfuly");
              redirect('employee.index');
          }
          else{
          redirect('employee.create');
  
          }
    }
    public function edit($id)
    {
       $info=$this->emp->find($id);
       //print_r($info);
       $this->view->load('employee.edit',compact('info'));
       //redirect('employee.index');
       
    } 
    public function update($id)
    {
       $storeinfos=[
              'name'=>request('name'),
              'city'=>request('city'),
              'phone_number'=>request('phone_number'),
              'adhar_card_number'=>request('adhar_card_number'),
              'email'=>request('email'),
         ];
          $this->emp->updated($storeinfos,$id);
          Session::set('gmsg',"Data updated successfuly");
  
          redirect('employee.index');
    }
     public function destroy($id)
    {
       $this->emp->delete($id);
       Session::set('emsg',"Data deleted successfuly");

       redirect('employee.index');
       
    }
}
?>






