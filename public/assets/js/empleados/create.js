$(document).on("ready", function () {
	console.log("imprime");
	addBlankOption();
});

function addBlankOption(){

	$("#cargo").prepend("<option value='' selected='selected'></option>");
	$("#empleado").prepend("<option value='' selected='selected'></option>");


}