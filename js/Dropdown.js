<script src="https://kit.fontawesome.com/b99e675b6e.js" charset="utf-8"></script>
	<script src="js/searchbox.js"></script>
	
	<script>
		$(document).ready(function(){
			$(".default_option").click(function(){
				$(".dropdown ul").toggleClass("active");
			});
			
			$(".dropdown ul li").click(function(){
				var text = $(this).text();
				$(".default_option").text(text);
				$(".dropdown ul").removeClass("active");
			})
			
		});
	</script>