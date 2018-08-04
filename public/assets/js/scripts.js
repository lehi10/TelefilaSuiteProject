
//var key  = false;
$(document).ready(function(){
    $("#user").keyup(checkUsername);
});

$(document).ready(function(){
    $("#psw").keyup(checkPassword);
});
$(document).ready(function(){
    $("#name_hosp").keyup(checkNameHosp);
});
$(document).ready(function(){
    $("#ruc").keyup(checkRuc);
});
$(document).ready(function(){
    $("#telf_hosp").keyup(checkTelf);
});

$(document).ready(function(){
    $("#name_per").keyup(checkNamePer);
});
$(document).ready(function(){
  $("#email_per").keyup(checkEmail);
});
$(document).ready(function(){
    $("#ciudad").keyup(ciudad);
});
$(document).ready(function(){
    $("#direc_hosp").keyup(direccion);
});
$(document).ready(function(){
    $("#tari").keyup(tarifa);
});



function checkUsername() {
   var username = document.getElementById("user").value;
   if(username == null || username.length == 0 || /^\s+$/.test(username)){
           $("#user").attr("class","form-control is-invalid");
           $("#v_user").html("<i class='fa fa-close'></i>  Este campo es requerido");           
           $('#guardar').attr('disabled','disabled');
   }
   else{
           $("#user").attr("class","form-control is-valid");
           $("#v_user").html("");
           $('#guardar').removeAttr('disabled');

   }
   
}

function checkPassword(){
  var password = document.getElementById("psw").value;
  if(password.length < 7 ||password == null  ){
    $("#psw").attr("class","form-control is-invalid");
    $("#v_psw").html("<i class='fa fa-close'></i> La contraseña debe tener como mínimo 6 caracteres. ");    
    $('#guardar').attr('disabled','disabled');
  } else{
    if(password.match(/[A-z]/) && password.match(/\d/)){  
      $("#psw").attr("class","form-control is-valid");
      $("#v_psw").html("");
      $('#guardar').removeAttr('disabled');
    }else{
      $("#psw").attr("class","form-control is-invalid");
      $("#v_psw").html("<i class='fa fa-close'></i> La contraseña debe tener como mínimo una letra y un número. ");
      $('#guardar').attr('disabled','disabled');
    }
  }
}
function vacio(val) {
  if(val == null || val.length == 0){
    return true;
  }
  else {
    return false;
  }
}
function checkNameHosp(){
  var value = document.getElementById("name_hosp").value;
  if(vacio(value)){
    $("#name_hosp").attr("class","form-control is-invalid");
    $("#v_name_hosp").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');    
  }
  else {
    $("#name_hosp").attr("class","form-control is-valid");
    $("#v_name_hosp").html("");
    $('#guardar').removeAttr('disabled');
  }
}

function checkRuc(){
  var value = document.getElementById("ruc").value;
  if(vacio(value)){
    $("#ruc").attr("class","form-control is-invalid");
    $("#v_ruc").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{
    if(value.match(/[A-z]/) || value.length < 9){
      $("#ruc").attr("class","form-control is-invalid");
      $("#v_ruc").html("<i class='fa fa-close'></i>Ruc invalido.");
      $('#guardar').attr('disabled','disabled');
    }else {      
      $("#ruc").attr("class","form-control is-valid");
      $("#v_ruc").html("");
      $('#guardar').removeAttr('disabled');
    }
  }
}
function checkTelf(){
  var value = document.getElementById("telf_hosp").value;
  if(vacio(value)){
    $("#telf_hosp").attr("class","form-control is-invalid");
    $("#v_telf_hosp").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{
    if(value.match(/[A-z]/) || value.length < 6){
      $("#telf_hosp").attr("class","form-control is-invalid");
      $("#v_telf_hosp").html("<i class='fa fa-close'></i>Teléfono invalido.");
      $('#guardar').attr('disabled','disabled');
    }else {    
      $("#telf_hosp").attr("class","form-control is-valid");
      $("#v_telf_hosp").html("");
      $('#guardar').removeAttr('disabled');
    }
  }
}

function checkNamePer(){
  var value = document.getElementById("name_per").value;
  if(vacio(value)){
    $("#name_per").attr("class","form-control is-invalid");
    $("#v_name_per").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{      
      $("#name_per").attr("class","form-control is-valid");
      $("#v_name_per").html("");
      $('#guardar').removeAttr('disabled');

  }
}

function checkEmail(){
  var value = document.getElementById("email_per").value;
  if(vacio(value)){
    $("#email_per").attr("class","form-control is-invalid");
    $("#v_email_per").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{
      if(value.match(/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/)){
        $("#email_per").attr("class","form-control is-valid");
        $("#v_email_per").html("");
        $('#guardar').removeAttr('disabled');
      }else{
        $("#email_per").attr("class","form-control is-invalid");
        $("#v_email_per").html("<i class='fa fa-close'></i>Correo inválido ");
        $('#guardar').attr('disabled','disabled');
      }

  }
}


function direccion(){
  var value = document.getElementById("direc_hosp").value;
  if(vacio(value)){
    $("#direc_hosp").attr("class","form-control is-invalid");
    $("#v_direc").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{      
      $("#direc_hosp").attr("class","form-control is-valid");
      $("#v_direc").html("");
      $('#guardar').removeAttr('disabled');

  }
}
function ciudad(){
  var value = document.getElementById("ciudad").value;
  if(vacio(value)){
    $("#ciudad").attr("class","form-control is-invalid");
    $("#v_ciudad").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{
      $("#ciudad").attr("class","form-control is-valid");
      $("#v_ciudad").html("");
      $('#guardar').removeAttr('disabled');

  }
}
function tarifa(){
  var value = document.getElementById("tari").value;
  if(vacio(value)){
    $("#tari").attr("class","form-control is-invalid");
    $("#v_tari").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{
    if(value.match(/[A-z]/)){
      $("#tari").attr("class","form-control is-invalid");
      $("#v_tari").html("<i class='fa fa-close'></i>Tarífa invalida.");
      $('#guardar').attr('disabled','disabled');
    }else {      
      $("#tari").attr("class","form-control is-valid");
      $("#v_tari").html("");
      $('#guardar').removeAttr('disabled');
    }
  }
}
//---------------------------------------------------
$(document).ready(function(){
  $("#cmd").keyup(checkCmd);
});

function checkCmd(){
  var value = document.getElementById("cmd").value;
  if(vacio(value)){
    $("#tari").attr("class","form-control is-invalid");
    $("#v_tari").html("<i class='fa fa-close'></i> Este campo es requerido. ");
    $('#guardar').attr('disabled','disabled');
  }else{
    if(value.match(/[A-z]/)){
      $("#tari").attr("class","form-control is-invalid");
      $("#v_tari").html("<i class='fa fa-close'></i>Tarífa invalida.");
      $('#guardar').attr('disabled','disabled');
    }else {      
      $("#tari").attr("class","form-control is-valid");
      $("#v_tari").html("");
      $('#guardar').removeAttr('disabled');
    }
  }
}


