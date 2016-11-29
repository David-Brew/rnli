
function showHint(str) {
    
    $.ajaxSetup({
        beforeSend: function(xhr) {
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        }
    });
     
        alert: 'dsdsd';
        timer = setTimeout(function(){
            var keywords = str;
            var token = $('#token').val();
            
            if (keywords.length > 3) { 
                $.post('search', {keywords: keywords, _token: token}, function(data){
                    console.log(data);
                    $('#txtHint').html(data);
                });
            }
            
        }, 500);

        $("#txtHint").show()

                
    
};
$(document).ready(function(){
    
    $("#menu-icon i").click(function (e){
		$(".menu").addClass("visible");
		$(this).fadeOut();
		if($(window).width() < 992){
			$("body").css("overflow", "hidden");
		}
    });
    $(".menu i").click(function (e){
		$(".menu").removeClass("visible");
		$("#menu-icon i").fadeIn();
		if($(window).width() < 992){
			$("body").css("overflow", "visible");
		}
    });
    
                             
                             
                             

    $(document).on("click",".txt",function(e){
            var serachresult =  $(this).text();
            $("#search-field").val(serachresult)
            $("#txtHint").hide()
            $("svg").width(100).height(100);
    });
    
    
    


    // $('.txt').css('cursor','pointer');
    $(document).on("touchstart click",".txt",function(e){
        
        var serachterm =  $("#search-field").val();
        var serachtermlength = serachterm.length;
        var firstChar = $("#search-field").val().substr(2, 1);
        // alert(firstChar);

            if (serachtermlength >= 3 && firstChar.match(/[a-b]/i)) {
                $("svg").hide();
                $("svg.sparkle2").show();
            } else if (serachtermlength >= 3 && firstChar.match(/[c-d]/i)) {
                $("svg").hide();
                $("svg.sparkle3").show();
            } else if (serachtermlength >= 3 && firstChar.match(/[e-g]/i)){
                $("svg").hide();
                $("svg.sparkle5").show();
                
            }else if (serachtermlength >= 3 && firstChar.match(/[h-j]/i)){
                $("svg").hide();
                $("svg.sparkle6").show();
                
            } else if (serachtermlength >= 3 && firstChar.match(/[k-m]/i)){
                $("svg").hide();
                $("svg.sparkle7").show();
                
            } else if (serachtermlength >= 3 && firstChar.match(/[n-n]/i)){
                $("svg").hide();
                $("svg.sparkle9").show();
                
            } else if (serachtermlength >= 3 && firstChar.match(/[o-r]/i)){
                $("svg").hide();
                $("svg.sparkle12").show();
                
            } else if (serachtermlength >= 3 && firstChar.match(/[s-v]/i)){
                $("svg").hide();
                $("svg.sparkle14").show();
                
            } else if (serachtermlength >= 3 && firstChar.match(/[w-z]/i)){
                $("svg").hide();
                $("svg.sparkle15").show();
                
            }
    });
    


});