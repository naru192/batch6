<?php
class DiseaseController extends Controller{
    public $dis;
    public function __construct(){
        parent::__construct();
        check_login();
        $this->dis=$this->loadModel('disease');
    }
    public function index()
    { 

           $data=$this->dis->all();  
           $this->view->load("disease.index",compact('data'));  
    }
    public function create()
    {
         $this->view->load("disease.create");
    } 
    public function store()
    {
        $file="";
        if($_FILES['pics']['name']){
            $file=move($_FILES['pics']['name'],time()."_".$_FILES['pics']['name']);
        }
        $storeinfo=[
            'name'=>request('name'),
             'symptoms'=>request('symptoms'),
             'prescription'=>request('prescription'),
             'pics'=>$file,
        ];
        if($this->dis->save($storeinfo)){
            Session::set('gmsg',"Data saved successfuly");
            redirect('disease.index');
        }
        else{
        redirect('disease.create');
        }
        // $this->dis->save($storeinfo);
        // redirect('disease');
    }
    public function edit($id)
    {
       $info=$this->dis->find($id);
       //print_r($info);
       $this->view->load('disease.edit',compact('info'));
    
       
    } 
    public function update($id)
    {
            $storeinfos=[
                'name'=>request('name'),
                'symptoms'=>request('symptoms'),
                'prescription'=>request('prescription'),
            ];
            $this->dis->updated($storeinfos,$id);
            Session::set('gmsg',"Data updated successfuly");

            redirect('disease.index');
    }
     public function destroy($id)
    {
        $this->dis->delete($id);
        Session::set('emsg',"Data deleted successfuly");

        redirect('disease.index');
           
    }
}
?>