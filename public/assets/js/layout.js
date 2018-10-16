

$(document).ready(function(){

	hiddenNav();
	addBlankOption();
});


function hiddenNav(){

	var p =  document.getElementById("barra_menu").value;
	if(p === "0"){

		$("#barra_menu").click(function(){

			$("#side-menu").hide();
			p = document.getElementById('barra_menu').value = "1" ; 
			hiddenNav();
		});
	}

	if(p === "1"){
		$("#barra_menu").click(function(){

			$("#side-menu").show();
			p = document.getElementById('barra_menu').value = "0" ; 
			hiddenNav();
		});
	}
}


	$("#archivoAfiliado").click(function(){

		var filename = $('#nombre_archivo').val();
		// var fileName =  document.getElementById("archivoAfiliado").value;
		console.log(filename);

		 $('#archivoAfiliado').html(filename);

// 		$('#select_file').click(function() {
//     $('#image_file').show();
//     $('.btn').prop('disabled', false);
//     $('#image_file').change(function() {
//         var filename = $('#image_file').val();
//         $('#select_file').html(filename);
//     });
// });​

	});


function addBlankOption(){

	$("#cargo").prepend("<option value=' ' selected='selected'> --SELECCIONE--- </option>");
	$("#empleado").prepend("<option value=' ' selected='selected'> --SELECCIONE--- </option>");
	$("#asesor").prepend("<option value=' ' selected='selected'> --SELECCIONE--- </option>");
	$("#eps").prepend("<option value=' ' selected='selected'> --SELECCIONE--- </option>");
	$("#arl").prepend("<option value=' ' selected='selected'> --SELECCIONE--- </option>");
	$("#caja").prepend("<option value=' ' selected='selected'> --SELECCIONE---  </option>");

}

