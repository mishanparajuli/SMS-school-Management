
function validation(){

  var vfname =document.getElementById("vfname").value;
  if(vfname.length <2){
    document.getElementById("err_fname").innerHTML ="***Name should contain atleast 2 character"
    return false;
  }
  var check_name =/^[A-Za-z]+$/;
  if(!vfname.match(check_name)){
    document.getElementById("err_fname").innerHTML ="***Only character allowed"
    return false;
  }
  
  var vlname =document.getElementById("vlname").value;
  if(vlname.length <2){
    document.getElementById("err_lname").innerHTML ="***Name should contain atleast 2 character"
    return false;
  }
  if(!vlname.match(check_name)){
    document.getElementById("err_lname").innerHTML ="***Only character allowed"
    return false;
  }
  
  var vcontact = document.getElementById("vcontact").value;
  if(vcontact.length !=10){
    document.getElementById("err_contact").innerHTML ="***Number should be 10"
    return false;
  }
  if(isNaN(vcontact)){
    document.getElementById("err_contact").innerHTML ="***Only number  are allowed"
    return false;
  }
  
  var vemail = document.getElementById("vemail").value;
  console.log(vemail);
  if((vemail.search('.') == '-1') || (vemail.search('@') == '-1')){
    document.getElementById("err_email").innerHTML = "***Email not valid";
    return false;
  }
  if(vemail.indexOf('@')<=0){
    console.log(vemail);
    document.getElementById("err_email").innerHTML ="***Position of @ is not valid "
    return false;
  }
  if((vemail.charAt(vemail.length-4)!='.')&&(vemail.charAt(vemail.length-3)!='.')){
    document.getElementById("err_email").innerHTML ="***Position of . is not valid "
    return false;
  }
}    