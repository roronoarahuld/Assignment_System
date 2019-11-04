//Notifications click function
$(document).ready(function(){
	$("#notify-sub").click(function () {
		$(".notify-drop").fadeToggle();
		$(".name-drop").fadeOut();
		e.stopPropagation();
	});
});

//settings click function
$(document).ready(function(){
	$("#name-sub").click(function () {
		$(".name-drop").fadeToggle();
		$(".notify-drop").fadeOut();
	});
});