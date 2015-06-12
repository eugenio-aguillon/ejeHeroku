// just for the demos, avoids form submit
//validando el formulario de regP
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#regp" ).validate({
  rules: {
  	fecha: { required: true},
    c1: { required: true, number: true},
    n1: { required: true, number: false},
    ca1: { required: true, number: true},
    c2: { required: true, number: true},
    n2: { required: true, number: false},
    ca2: { required: true, number: true},
    c3: { required: true, number: true},
    n3: { required: true, number: false},
    ca3: { required: true, number: true}
  },
      errorElement: "div"
});

//validando el formulario de regV
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#regv" ).validate({
  rules: {
  	fecha: { required: true},
    c1: { required: true, number: true},
    n1: { required: true, number: false},
    ca1: { required: true, number: true},
    p1: { required: true, number: true},
    c2: { required: true, number: true},
    n2: { required: true, number: false},
    ca2: { required: true, number: true},
    p2: { required: true, number: true}
   
  },
      errorElement: "div"
});

//validando el formulario de regC
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#regc" ).validate({
  rules: {
  	fecha: { required: true},
    c1: { required: true, number: true},
    n1: { required: true, number: false},
    ca1: { required: true, number: true},
    p1: { required: true, number: true},
    c2: { required: true, number: true},
    n2: { required: true, number: false},
    ca2: { required: true, number: true},
    p2: { required: true, number: true},
    p3: { required: true, number: true},
    p4: { required: true, number: true}
   
  },
      errorElement: "div"
});


//validando el formulario de busP
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#busp" ).validate({
  rules: {
  	fechai: { required: true},
  	fechaf: { required: true},
  	lista: { required: true},
  	val: { required: true}
  },
      errorElement: "div"
});


//validando el formulario de busV
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#busv" ).validate({
  rules: {
  	fechai: { required: true},
  	fechaf: { required: true},
  },
      errorElement: "div"
});


//validando el formulario de busC
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#busc" ).validate({
  rules: {
  	fechai: { required: true},
  	fechaf: { required: true},
  },
      errorElement: "div"
});


//validando el formulario de reporV
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#reporv" ).validate({
  rules: {
  	fechai: { required: true},
  	fechaf: { required: true},
  },
      errorElement: "div"
});

//validando el formulario de reporC
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#reporc" ).validate({
  rules: {
  	fechai: { required: true},
  	fechaf: { required: true},
  },
      errorElement: "div"
});


//validando el formulario de regU
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#regu" ).validate({
  rules: {
  	
    nombre: { required: true, number: false},
    apellido: { required: true, number: false},
    login: { required: true},
    tipo: { required: true},
    contra: { required: true},
    recontra: { required: true}
  },
      errorElement: "div"
});


function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789";
       especiales = [8,37,39,46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = [8,37,39,46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }