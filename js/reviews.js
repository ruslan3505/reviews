$( document) .ready(function() {
	$("#reviews").click(
        function(){
        	let email = $("#email").val();
        	let fullName = $("#fullName").val();
        	let grade = $("input:radio[name=grade]:checked").val();
        	let comment = $("#comment").val();



        	$.ajax({
            url:  "addReview",
            type: "POST",
            data: {
             email: email,
             fullName: fullName,
             grade: grade,
             comment:comment,
            },
            cache: false,
            success: function(dataResult){
                 alert(dataResult['result']);
                     if(dataResult['result'] === 'Done'){
                        window.location = '/'
				    }
                }
            });
        });
    });