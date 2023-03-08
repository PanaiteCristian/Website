function showPass(){
    let elStyle=document.getElementById('thePassword');
    if(elStyle.type==='password'){
        elStyle.type="text";
    }else{
        elStyle.type="password";
    }
}