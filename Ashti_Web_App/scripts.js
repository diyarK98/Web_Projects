	$("#uns").on("click", function(){
		$.post('logout.php', {fun:"logout"}, function(responce){
			window.location.href = "index.php";
		})
	})

	$("#home").on("click", function(){
		$("#homeli").addClass("active");
		$("#inqli").removeClass("active");
		$("#finishli").removeClass("active");
		$("#profileli").removeClass("active");
	})

	$("#inq").on("click", function(){
		$("#inqli").addClass("active");
		$("#homeli").removeClass("active");
		$("#finishli").removeClass("active");
		$("#profileli").removeClass("active");
	})

	$("#finish").on("click", function(){
		$("#finishli").addClass("active");
		$("#inqli").removeClass("active");
		$("#homeli").removeClass("active");
		$("#profileli").removeClass("active");
	})

	$("#profile").on("click", function(){
		$("#profileli").addClass("active");
		$("#inqli").removeClass("active");
		$("#finishli").removeClass("active");
		$("#homeli").removeClass("active");
	})