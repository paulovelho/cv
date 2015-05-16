function toggleTechnology(item){
	var tech = $(item).attr("data-rel");
	$(".tech-box").addClass("chirrion");
	$("#show-all").fadeIn("slow");
	$(item).removeClass("chirrion");

	$(".tech").slideUp("slow");
	$(".tech-"+tech).slideDown("slow");
}
function showAll(){
	$("#show-all").fadeOut("slow");
	$(".tech-box").removeClass("chirrion");
	$(".tech").slideDown("slow");
}

var callback = function(){
	resizeSkills('.item-skills');
	$('.icons-red').each(function(){
		height = $(this).height();
    $(this).animate({
        height: 14,
    }, 2000);
	});

	$(".lbPhotoshop").lightBox();
	$(".lbSonora").lightBox();
	$(".lbTva").lightBox();
	$(".lbMetro").lightBox();
	$(".lbIPT").lightBox();
	$(".lbParmalat").lightBox();
	$(".lbCaras").lightBox();

};
$(document).ready(callback);

function resizeSkills(resizeThis){
	$(resizeThis).each(function(){
		newWidth = $(this).parent().width() * $(this).data('percent');
		$(this).width(0);
	    $(this).animate({
	        width: newWidth,
	    }, 1000);
	});
}

var resize;
window.onresize = function() {
	clearTimeout(resize);
	resize = setTimeout(function(){
		callback();
	}, 100);
};

function expandSkills(skillname){
	$('#' + skillname).toggle('slow', function(){
		resizeSkills('#'+skillname+' .item-skills');
	});
}

function expandProject(element){
	$(element).parent().find(".project_desc").slideToggle("slow");
}

function expandProjectDetail(element){
	$(element).parent().find(".projectDetails").slideToggle("slow");
}