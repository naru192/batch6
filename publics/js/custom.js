function confirmt(url,msg=''){
    if(!msg){
      msg="do you really want to perform this action?";
    }
    if(confirm(msg)){
        location.href=ROOT +url;
    }
}

