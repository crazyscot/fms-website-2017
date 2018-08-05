

$(document).ready(function(){

	if($(".eventScheduleHeader").size() > 0) return;



	
	$(".ftFooter").before('<div id=\"tabset\"></div>');
	$("#tabset").append( $(".roundDiv") );
	
	$("#tabset").prepend("<ul></ul>");
	$(".roundDiv").each(function(i){
		var newid = "roundDiv-" + i;
		$(this).attr("id", newid);
		
		var title = $(this).find(".roundName").text();
		$(this).find(".roundName").remove();
		
		$("#tabset>ul").append("<li><a href=\"#"+newid+"\">"+title+"</a></li>");
		
		
		if($("#"+newid).children(".roundPart").size() > 0){
			$(this).prepend("<ul></ul>");
			$(this).children(".roundPart").each(function(j){
				var newid_c="roundPart-"+i+"-"+j;
				
				$(this).attr("id", newid_c);
				
				var title= $(this).find(".roundPartName").text();
				
				$(this).find(".roundPartName").remove();
				$("#"+newid+ " > ul").append("<li><a href=\"#"+newid_c+"\">"+title+"</a></li>");
				
			});
			$("#"+newid).tabs();
		}
		
	});
	

	
	$("#tabset").tabs();
	
	$(".sideBySideColumn").parent().append("<hr />");
	
	$(".pageTitle").prepend( $(".backBox") );
	

});

