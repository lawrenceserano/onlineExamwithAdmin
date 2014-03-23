$(document).ready(function(){
	var bilang = 0;
	var answer;
	$('#start').click(function(){
		if($('#A').is(":checked")){
			answer = $('#A').val();
		}
		else if($('#B').is(":checked")){
			answer = $('#B').val();
		}		
		else if($('#C').is(":checked")){
			answer = $('#C').val();
		}	
		else if($('#D').is(":checked")){
			answer = $('#D').val();
		}
		else{
			alert("Enter your answer!");
			return false;
		}
		if(bilang != 10){
			bilang++;
			$('#back').slideDown(1000);
			$.ajax({
				url: 'question2.php',
				data: {id:bilang},
				dataType: 'JSON',
				method: 'GET',
				success:function(response){
					$('#Question').html("<span id = 'question'>"+response.question+"</span>");
					$('#una').html("<input type = 'radio' name = 'choices' value = 'a' id = 'A'>"+response.choiceA);
					$('#pangalawa').html("<input type = 'radio' name = 'choices' value = 'b' id = 'B'>"+response.choiceB);
					$('#pangatlo').html("<input type = 'radio' name = 'choices' value = 'c' id = 'C'>"+response.choiceC);
					$('#pangapat').html("<input type = 'radio' name = 'choices' value = 'd' id = 'D'>"+response.choiceD);
				}
			});
		}else{
			alert("naka 10 question kana!"); 
		}
	});
	$('#hoi').click(function(){
		if(bilang = 1){
			bilang++;
			$('#back').fadeOut(2000);
			$('#back').slideDown(1000);
			$('#hoi').fadeOut(1000);
			$.ajax({
				url: 'question2.php',
				data: {id:bilang},
				dataType: 'JSON',
				method: 'GET',
				success:function(lawrence){
					$('#Question').html("<span id = 'question'>"+lawrence.question+"</span>");
					$('#una').html("<input type = 'radio' name = 'choices' value = 'a' id = 'a'>"+lawrence.choiceA);
					$('#pangalawa').html("<input type = 'radio' name = 'choices' value = 'b' id = 'B'>"+lawrence.choiceB);
					$('#pangatlo').html("<input type = 'radio' name = 'choices' value = 'c' id = 'C'>"+lawrence.choiceC);
					$('#pangapat').html("<input type = 'radio' name = 'choices' value = 'd' id = 'D'>"+lawrence.choiceD);
				}
			});
		}
});});