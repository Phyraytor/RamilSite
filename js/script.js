
function closeKonf()
{
		$(".overlay").hide();
		$(".konf").hide();
}

function openKonf()
{
		$(".overlay").show();
		$(".konf").show();
}

function checkButton()
{
	if( $(".check-button").prop("checked") === true )
	{
		$("#send").prop("disabled", false);
		$("#send").removeClass("button--disabled");
		$('#send').addClass("button--active");
	} else {
		$("#send").prop("disabled", true);
		$('#send').removeClass("button--active");
		$("#send").addClass("button--disabled");
	}
}



$(document).ready(function(){

	$(".overlay").hide();
	$(".konf").hide();
	
});

