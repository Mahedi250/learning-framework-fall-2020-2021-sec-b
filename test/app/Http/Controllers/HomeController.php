<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( Request $req){

        $name = "alamin";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);

        // return view('home.index')
        //         ->with('name', 'alamin')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        if($req->session()->has('username')){
            return view('home.index', compact('id', 'name'));
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $req){
        
        $userlist= $this->getUserlist();
        $id= count($userlist)+1;
       
        $create = ['id'=> $id, 'name'=> $req->username, 'email'=>$req->email, 'password'=>$req->password];
        array_push($userlist,$create );
   

        return  view('home.list')->with('list',$userlist);







        //insert into DB or model...
        

        //return view('home.list')->with('list', $userlist);
       // return redirect('/home/userlist');

    }

    public function edit($id){
        $userlist= $this->getUserlist();
        $user = [];

        foreach($userlist as $u){
            if($u['id'] == $id ){
                $user = $u;
                break;
            }
        }

        //$user =  ['id'=>2, 'username'=>'22', 'email'=> 'abc@aiub.edu', 'password'=>'456'];
        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        
        //updating DB or model
        $userlist= $this->getUserlist();
        

        $updateuser = ['id'=> $id, 'name'=> $req->username, 'email'=>$req->email, 'password'=>$req->password];
  
        foreach($userlist as $u=>$value){
       

           if($value['id']==$id){

            
           $userlist[$u]= $updateuser;
         
        

           }
           
        
        }




       


      

       
    
          
                
          

             
            
        
       
        



        return  view('home.list')->with('list',$userlist);
   
        
    }

    

   

    

    public function userlist(){
        // db model userlist

       




    $userlist = $this->getUserlist();

    return view('home.list')->with('list', $userlist);



}

public function destroy($id){
    // db model userlist

    $userlist= $this->getUserlist();
    foreach($userlist as $u=>$value){
       

        if($value['id']==$id){

         
            unset($userlist[$u]);  
      
     

        }
        
     
     }

     return view('home.list')->with('list', $userlist);
   

}












        
    
public function getUserlist (){

    return [
            ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
            ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
            ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
        ];
}
           


       
       
    }

  

