//ace for source
var editor = ace.edit("editor");
editor.setTheme("ace/theme/iplastic");
editor.session.setMode("ace/mode/c_cpp");

//ace for input
var input = ace.edit("input");
input.setTheme("ace/theme/iplastic");
input.session.setMode("ace/mode/plain_text");
input.renderer.setShowGutter(false);
input.getSession().setUseWrapMode(true);

//SOME FUNCTIONS
var blang = $('.lang');
var slang = $("#selang");
blang.on("click", function() {
	$('#sub').removeClass("disabled");
	blang.removeClass("btn-info active");
  	$(this).addClass("btn-success active").siblings().addClass("btn-info");
  	slang.val($(this).val());
	if($(this).val() == "c" || $(this).val() == "cpp") editor.session.setMode("ace/mode/c_cpp");
	else if($(this).val() == "java") editor.session.setMode("ace/mode/java");
	else if($(this).val() == "pas") editor.session.setMode("ace/mode/pascal");
	else editor.session.setMode("ace/mode/python");
});

//POST TO COMPILER

//vars declaration
var plang = $('#selang');
var pinpot = $('#inpot');
var oout = $('#out');
var ores = $('#res');

input.getSession().on('change', function () {
	if($('#inputTab').hasClass("active")) {
		pinpot.val(input.getSession().getValue());
	}
}); //fixing input bugs

$('#sub').on("click", function(){
	$(".tabbies").addClass("disabled").removeClass("active");
	$.post("idx-ciw.php", {kode: editor.getSession().getValue(), input: pinpot.val(), lang: plang.val()}, function(result) {
		oout.val(result.out);
		ores.val(result.cres);
		pinpot.val(result.inpot);
		$(".tabbies").removeClass("disabled");
		$("#outputTab").addClass("active");
		input.getSession().setValue(oout.val());
	}, "json");
});

$(".tabbies").on("click", function() {
	var ini = $(this);
	ini.addClass("active").siblings().removeClass("active");
	if(ini.attr('id')=="inputTab") input.getSession().setValue(pinpot.val());
	else if(ini.attr('id')=="outputTab") input.getSession().setValue(oout.val());
	else if(ini.attr('id')=="comTab") input.getSession().setValue(ores.val());
});
