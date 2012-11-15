;(function($){
	
	var f = function(){};
	var p = f.prototype;
	var curSize;
	
	p.updatePage= function(){
		/*
		var tgt = window.location.pathname;
		var size = jQuery(window).width();
		var newSize = p.checkThreshold(size);
		if(curSize != newSize){
			json.send({
			url: "/update_page?callback=?",
			data:"tgt="+tgt+"&size="+newSize,
			success: p.updatePageCallback				
			})
		}*/
	};
	
	p.updatePageCallback= function(xhr){
		for(var key in xhr.update_page){
			if (xhr.update_page.hasOwnProperty(key)){
				if(key.indexOf("div")==0)
					jQuery(xhr.update_page[key]['id']).html(xhr.update_page[key]['html']);
			}	
		}
		if(xhr.update_page.js_script !="") eval(xhr.update_page.js_script);		
		curSize = xhr.update_page.size;
	}
	
	p.checkThreshold = function(size){
		if(size<=480){
			return 320;
		}else if(size > 480 && size<=768){
			return 480;
		}else if(size > 768 && size<=1024){
			return 768;
		}else{
			return 0;
		}
	}
	
 	p.init = function(){
 	};
	
	$T.mobile = new f();
 	$T.registerInit($T.mobile.init);

})(jQuery);
