// Funcion validar datos de Registro
function validateRegister() 
{
	let userReg = document.getElementById('user').value.trim();
	let nameReg = document.getElementById('name').value.trim();
	let emailReg = document.getElementById('email').value.trim();
	let pwdReg = document.getElementById('pwd').value.trim();
	let pwd_confirmReg = document.getElementById('pwd-confirm').value.trim();
	let control = 1;

	if (control == 1) 
	{
		if (userReg == '') 
		{
			control = 0;
			document.getElementById("alert-desable").style.display = "block";
			document.getElementById("alert-desable").innerHTML = "<strong>Error!</strong> Por Favor Ingresa Usuario.";		
		}
	}

	if (control == 1) 
	{
		if (nameReg == '') 
		{
			control = 0;
			document.getElementById("alert-desable").style.display = "block";
			document.getElementById("alert-desable").innerHTML = "<strong>Error!</strong> Por Favor Ingresa Nombre y apellido.";		
		}
	}

	if (control == 1) 
	{
		if (ValidateEmail(emailReg) == false) 
		{
			control = 0;
			document.getElementById("alert-desable").style.display = "block";
			document.getElementById("alert-desable").innerHTML = "<strong>Error!</strong> Email invalido.";		
		}
	}
	
	if (control == 1) 
	{
		if (pwdReg == '' || pwd_confirmReg == '') 
		{
			control = 0;
			document.getElementById("alert-desable").style.display = "block";
			document.getElementById("alert-desable").innerHTML = "<strong>Error!</strong> Por favor ingresa contraseña";		
		}
	}	

	if (control == 1) 
	{
		if (pwdReg.length <= 5 || pwd_confirmReg <= 5) 
		{
			control = 0;
			document.getElementById("alert-desable").style.display = "block";
			document.getElementById("alert-desable").innerHTML = "<strong>Error!</strong> Por favor ingresa minimo 6 caracteres";		
		}
	}
	
	if (control == 1) 
	{
		if (pwdReg != pwd_confirmReg) 
		{
			control = 0;
			document.getElementById("alert-desable").style.display = "block";
			document.getElementById("alert-desable").innerHTML = "<strong>Error!</strong> Las contraseñas no coincidén..";		
		}
	}	

	if (control == 1) 
	{
        require(["dojo/_base/xhr","dojo/dom"], function(xhr,dom) {
        dojo.xhrPost({
        url: "../backend/registroController.php",
        handleAs: "text",
        content: {
        	form_userReg: userReg,
            form_nameReg: nameReg,
            form_emailReg: emailReg,
            form_pwdReg: pwdReg,
            form_pwd_confirmReg: pwd_confirmReg,
        },
            load: function(response) {
              if (response == 'ok')
              {
              	document.getElementById('user').value = '';
				document.getElementById('name').value = '';
				document.getElementById('email').value = '';
				document.getElementById('pwd').value = '';
				document.getElementById('pwd-confirm').value = '';
				document.getElementById("alert-success").style.display = "block";
              }
            },
            error: function(e) {
                
            },
            handle: function() {
              
            }
          });
        });

	}
}

// Funcion para validar email
function ValidateEmail(mail)
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))  
	{  
  		return (true)  
	}    
	return (false)  
} 

// Funciones para limpiar alertas formulario registro

function clearUser()
{
	document.getElementById ('alert-desable').style.display = "none";
}
function clearName()
{
	document.getElementById ('alert-desable').style.display = "none";
}
function clearEmail()
{
	document.getElementById ('alert-desable').style.display = "none";
}
function clearPwd()
{
	document.getElementById ('alert-desable').style.display = "none";
}
function clearPwdConfirm()
{
	document.getElementById ('alert-desable').style.display = "none";
}


// Funcion validar datos de Ingreso

function validateIngreso() 
{
	let emailIng = document.getElementById('email-ingreso').value.trim();
	let pwdIng = document.getElementById('pwd-ingreso').value.trim();
	let controlIngreso = 1;

	if (controlIngreso == 1) 
	{
		if (ValidateEmail(emailIng) == false) 
		{
			controlIngreso = 0;
			document.getElementById("alert-desable-ingreso").style.display = "block";
			document.getElementById("alert-desable-ingreso").innerHTML = "<strong>Error!</strong> Email invalido.";		
		}
	}
	
	if (controlIngreso == 1) 
	{
		if (pwdIng == '') 
		{
			controlIngreso = 0;
			document.getElementById("alert-desable-ingreso").style.display = "block";
			document.getElementById("alert-desable-ingreso").innerHTML = "<strong>Error!</strong> Por favor ingresa tu contraseña";		
		}
	}	
	

	if (controlIngreso == 1) 
	{
        require(["dojo/_base/xhr","dojo/dom"], function(xhr,dom) {
        dojo.xhrPost({
        url: "../backend/ingresoController.php",
        handleAs: "text",
        content: {
        	form_emailIng: emailIng,
            form_pwdIng: pwdIng,
        },
            load: function(response) {             
              console.log(response);
              if (response == 'ingreso')
              {
              	window.location.replace("list.php");  
              }
              else
              {
				document.getElementById("alert-desable-ingreso").style.display = "block";
				document.getElementById("alert-desable-ingreso").innerHTML = "<strong>Error!</strong> Datos invalidos.";	
              }
            },
            error: function(e) {
                
            },
            handle: function() {
              
            }
          });
        });

	}
}

// Funciones para limpiar alertas formulario ingreso

function clearEmailIngreso()
{
	document.getElementById ('alert-desable-ingreso').style.display = "none";
}
function clearPwdIngreso()
{
	document.getElementById ('alert-desable-ingreso').style.display = "none";
}


// Funcion validar datos de Ingreso de Proceso

function validateProceso() 
{
	let numeroPro = document.getElementById('numero-proceso').value.trim();
	let descPro = document.getElementById('descripcion-proceso').value.trim();
	let sedePro = document.getElementById('sede').value.trim();
	let presPro = document.getElementById('presupuesto').value.trim();
	let controlProceso = 1;
	
	if (controlProceso == 1) 
	{
		if (numeroPro < 0 || numeroPro.length <= 7) 
		{
			controlProceso = 0;
			document.getElementById("alert-desable-proceso").style.display = "block";
			document.getElementById("alert-desable-proceso").innerHTML = "<strong>Error!</strong> Ingresa 8 caracteres para el número del proceso";		
		}
	}	

	if (controlProceso == 1) 
	{
		if (descPro == '' || descPro.length > 200) 
		{
			controlProceso = 0;
			document.getElementById("alert-desable-proceso").style.display = "block";
			document.getElementById("alert-desable-proceso").innerHTML = "<strong>Error!</strong> Ingresa una descripción de maximo 200 caracteres";		
		}
	}	
	

	if (controlProceso == 1) 
	{
        require(["dojo/_base/xhr","dojo/dom"], function(xhr,dom) {
        dojo.xhrPost({
        url: "../backend/ingresoProcesoController.php",
        handleAs: "text",
        content: {
        	form_numeroPro: numeroPro,
            form_descPro: descPro,
            form_sedePro: sedePro,
            form_presPro: presPro,
        },
            load: function(response) {             
              console.log(response);
              if (response == 'registro_proceso')
              {
              	window.location.replace("list.php");  
              }
              else
              {
				document.getElementById("alert-desable-ingreso").style.display = "block";
				document.getElementById("alert-desable-ingreso").innerHTML = "<strong>Error!</strong> Datos invalidos.";	
              }
            },
            error: function(e) {
                
            },
            handle: function() {
              
            }
          });
        });

	}
}

// Funciones para limpiar alertas formulario proceso

function clearNumeroProceso()
{
	document.getElementById ('alert-desable-proceso').style.display = "none";
}
function clearDescripcionProceso()
{
	document.getElementById ('alert-desable-proceso').style.display = "none";
}


// Funcion validar datos de Ingreso de Proceso actualizar

function validateProcesoUpdate() 
{
	let idProUpdate = document.getElementById('id-proceso-up').value.trim();
	let numeroProUpdate = document.getElementById('numero-proceso-up').value.trim();
	let descProUpdate = document.getElementById('descripcion-proceso-up').value.trim();
	let sedeProUpdate = document.getElementById('sede-up').value.trim();
	let presProUpdate = document.getElementById('presupuesto-up').value.trim();
	let controlProcesoUpdate = 1;
	
	if (controlProcesoUpdate == 1) 
	{
		if (numeroProUpdate < 0 || numeroProUpdate.length <= 7) 
		{
			controlProcesoUpdate = 0;
			document.getElementById("alert-desable-proceso-up").style.display = "block";
			document.getElementById("alert-desable-proceso-up").innerHTML = "<strong>Error!</strong> Ingresa 8 caracteres para el número del proceso";		
		}
	}	

	if (controlProcesoUpdate == 1) 
	{
		if (descProUpdate == '' || descProUpdate.length > 200) 
		{
			controlProcesoUpdate = 0;
			document.getElementById("alert-desable-proceso-up").style.display = "block";
			document.getElementById("alert-desable-proceso-up").innerHTML = "<strong>Error!</strong> Ingresa una descripción de maximo 200 caracteres";		
		}
	}	
	

	if (controlProcesoUpdate == 1) 
	{
        require(["dojo/_base/xhr","dojo/dom"], function(xhr,dom) {
        dojo.xhrPost({
        url: "../backend/actualizarProcesoController.php",
        handleAs: "text",
        content: {
        	form_idProUpdate: idProUpdate,
        	form_numeroProUpdate: numeroProUpdate,
            form_descProUpdate: descProUpdate,
            form_sedeProUpdate: sedeProUpdate,
            form_presProUpdate: presProUpdate,
        },
            load: function(response) {             
              console.log(response);
              if (response == 'actualizo_proceso')
              {
              	window.location.replace("list.php");  
              }
              else
              {
				document.getElementById("alert-desable-ingreso").style.display = "block";
				document.getElementById("alert-desable-ingreso").innerHTML = "<strong>Error!</strong> Datos invalidos.";	
              }
            },
            error: function(e) {
                
            },
            handle: function() {
              
            }
          });
        });

	}
}

// Funciones para limpiar alertas formulario proceso actualizar

function clearNumeroProcesoUpdate()
{
	document.getElementById ('alert-desable-proceso-up').style.display = "none";
}
function clearDescripcionProcesoUpdate()
{
	document.getElementById ('alert-desable-proceso-up').style.display = "none";
}