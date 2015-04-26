/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 $(document).ready(function () {

 	/****** Close the cookies div *******/
 	$('#close-cookie').click(function () {
 		$('#cookies').hide();
 	});
 	/************ Slider call **************/
 	$('.bxslider').bxSlider({
 		controls: false,
 		auto: false
 	});

 	$("select").uniform();
//  $('.mySelectBoxClass').customSelect();
/********************/

$('.checkP input').iCheck();
/***************/
if ($("#service").hasClass(".mine")) {
	$('#uniform-service').addClass(".hmid");
}


if ($("select[name='service']").hasClass("wpcf7-not-valid")) {
	$("select[name='service']").parent().addClass("wpcf7-not-valid");
}

if ($("select[name='activites']").hasClass("wpcf7-not-valid")) {
	$("select[name='activites']").parent().addClass("wpcf7-not-valid");
}

/******************* Langue toggle bold ***************************/

$('.langs #eng').click(function(){
	$(this).addClass('langBold');
	$('.langs #fr').removeClass('langBold');
});
$('.langs #fr').click(function(){
	$(this).addClass('langBold');
	$('.langs #eng').removeClass('langBold');
});

});