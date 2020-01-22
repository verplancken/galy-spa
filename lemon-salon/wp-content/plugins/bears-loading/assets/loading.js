jQuery(document).ready(function(){
	jQuery('body').prepend('<div class="fakeloader" style="background:'+option_loading.color+'"></div>');
	if(option_loading.skin == 'image'){
		jQuery(".fakeloader").fakeLoader({  
			bgColor: option_loading.color,
			imagePath: option_loading.image,
			zIndex: '9999999',
		}); 
	}else{
		jQuery(".fakeloader").fakeLoader({  
			spinner: option_loading.skin,
			bgColor: option_loading.color,
			zIndex: '9999999',
		}); 
	}
	
}); 