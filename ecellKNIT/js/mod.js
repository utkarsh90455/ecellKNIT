

$(document).ready(function(){
	$("#btnmod").click(function(){
		if($(this).html()=="Read More"){
			$(this).html("Close");
			$("#mod1").show();
			
			
		}
		else{
			
			$(this).html("Read More");
			$("#mod1").hide();
			
		}
		
	});
	
});

$(document).ready(function(){
	$("#btnmod1").click(function(){
		if($(this).html()=="Read More"){
			$(this).html("Close");
			$("#mod2").show();
			
			
		}
		else{
			
			$(this).html("Read More");
			$("#mod2").hide();
			
		}
		
	});
	
});
$(document).ready(function(){
	$("#btnblog1").click(function(){
		if($(this).html()=="Read More"){
			$(this).html("Close");
			$("#blog1").show();
			
			
		}
		else{
			
			$(this).html("Read More");
			$("#blog1").hide();
			
		}
		
	});
	
});$(document).ready(function(){
	$("#btnblog2").click(function(){
		if($(this).html()=="Read More"){
			$(this).html("Close");
			$("#blog2").show();
			
			
		}
		else{
			
			$(this).html("Read More");
			$("#blog2").hide();
			
		}
		
	});
	
});