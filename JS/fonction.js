$(document).ready(function(){
	$("#bt-1 #bt-ef-1").on('mouseover',function(){
		$("#bt-ef-1").hide();
		$("#bt-ef-2").show();


	});

	$("#bt-1 #bt-ef-2").on('mouseleave',function(){
		$("#bt-ef-2").hide();
		$("#bt-ef-1").show();
	});

	 $("#slide-bout").carousel('pause');
	var larg2=$('#nenu').css('width');

	if (larg2=='1024px') {
		$('.carousel-item #image').css('width','1024px');
		$('#slide-3').css('display','none');
	}else if(larg2=='720px'){
		$('.carousel-item #image').css('width','720px');
		$('.carousel-item #image').css('margin-left','128px');
		
		$('#slide-3').css('display','none');
	}else if (larg2=='414px') {
		$('.carousel-item #image').css('width','100%');
		$('.carousel-item #image').removeClass("d-block w-55");
		$('.carousel-item #image').addClass("d-block w-100"); 
		$('#slide-3').show();
		$('#lien-2').css('display','none');
		$('#table').css('display','none');
		$('#foot-f').css('display','none');
	}

	if (larg2=='720px') {
		$('#bt-ef-2').remove();
		$('#bt-ef-1').attr('src','image/shop-19.png');	
		$('#bt-ef-1').removeAttr('id');
		$('#lien-2').attr('id','lien-2-2');	
		$('#lien-2').removeAttr('id','lien-2');
		$('#bt-1 img').attr('id','anim')	
     $('#anim').on('mouseover',function(){

     	$(this).css('border','solid gray 2px');

     }); $('#anim').on('mouseleave',function(){

     	$(this).css('border','none');
     }); 
        
	}
	if (larg2=='414px') {
		$('#logo-big').hide();
		$('#cadi').hide();
		$('#bt-ef-2').remove();
		$('#bt-ef-1').attr('src','image/shop-19.png');	
		$('#bt-ef-1').removeAttr('id');
		$('#lien-2').attr('id','lien-2-2');	
		$('#lien-2').removeAttr('id','lien-2');
		$('#bt-1 img').attr('id','anim')	
     $('#anim').on('mouseover',function(){

     	$(this).css('border','solid gray 2px');

     }); $('#anim').on('mouseleave',function(){

     	$(this).css('border','none');
     }); 
	
	}

});

