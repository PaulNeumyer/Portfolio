// JavaScript Document

$(document).ready(function(){
    $(".slide").click(function(){
            $(".panel").slideToggle();

			if($(".slide").css("top") == "41px"){
				$(".slide").css("top","0px");;
				$(".slide").html('<a href="#" class="pull-me">Close</a>');
			}else{
				$(".slide").css("top","41px");
				$(".slide").html('<a href="#" class="pull-me">Apply Now!</a>');
			}
			});
	});

