/*
 * ///////////////////////////////////////////////////////////////
 * Baseline - Javascript Framework
 * ///////////////////////////////////////////////////////////////
 */
  
 /** supress errors if no jquery */
 try{if($);}catch(jqe){
	function empty(){}
	cht.prototype.ready=function(a){}
	$ = function(){return new empty()};
 }

 /**
  * Define $T - Core Object
  */
 ;(function(){
 
 	var f = function(){};
 	var p = f.prototype;
 	
 	/*
 	 * The registered array holds all the functions that
 	 * are called through the $T.registerInit method
 	 */
 	p.registered = [];
 	p.afterStack = []; // functions registered after all has been init'd
 	
 	/*
 	 * The websites array holds all the various web sites
 	 * that load into the DOM
 	 */
 	p.websites = [];
 	
 	/**
 	 * global params; 
 	 * @rootPath - root path defines brand
 	 * @debugMode - debug mode dictates if logger displays
 	 */
 	p.global = {
 		rootPath: "/",
 		debugMode: false,
		stamp: Math.ceil((0xABCDEF123)*Math.random())
 	};
 	
 	/*
	 * evoke all the registered init functions
	 * would it be simpler to just let everyone call document.ready?
	 * at least here we could spit out who is calling
	*/
	p.documentReady = function(){
		var d1 = new Date().valueOf();
		var registered = $T.registered;
		//log.debug("HERE WE GO",registered.length+" utils");
		for(reg in registered){
			//var start = new Date().valueOf();
			registered[reg]();
			var func = registered[reg];
			//log.debug("@"+(new Date().valueOf()-start),func);
		}
		var afterStack = $T.afterStack;
		for(as in afterStack){
			afterStack[as]();
		}
		var d2 = new Date().valueOf()-d1;
		log.debug("DOC READY: "+d2+"ms");
		jQuery('.js-is-mobile').click(p.checkMobile);		
		jQuery(window).resize(function() {
			$T.mobile.updatePage();	 			
		});
		if(typeof(mobile)!="undefined" && mobile){
			$T.mobile.updatePage();
		};
	};
	
	
	p.checkMobile = function(){
		var oldText = 'version='+jQuery(this).text();
		json.send({
			url: "/js_toggle_mobile?callback=?",
			data: oldText,
			success: function(){window.location.reload()}
		});
	};

	/*
	 * register a function to be called on document.ready
	 */
	p.registerInit = function(what){
		var registered = $T.registered;
		if(typeof(what) == "function")
			registered[registered.length] = what;
		else log.error("not a function:"+what);
	};
	
	p.initAfterStack = function(func){
		var afterStack = $T.afterStack;
		if(typeof(func) == "function")
			afterStack[afterStack.length] = func;
	};
	 	
 	/**
 	 * Function returns true if the parameter 
 	 * is undefined
 	 * @param what - any thing
 	 */
 	p.notDefined = function(what) { 
 		return what===undefined;
 	};
 	
 	/**
 	 * merge a object with a template
 	 */
 	p.mergeTemplate = function(tmplHTML, data){
		var html = tmplHTML;
		for(d in data){
			var reg = new RegExp("[\%]"+d+"[\%]", "g");
			html = html.replace(reg, data[d]);
		}
		return html;
 	};
 	
 	// setup $T 
 	$T = new f();
 	
 	// debugging helper to use registerInit
 	// on a page without a velocity conflict 
 	registerInit = $T.registerInit;
 	
 })();
 
 /*
  * call register
  */
  $(document).ready($T.documentReady);
  
  /** PLUGINS FOR JQUERY REQUIRED X-PLATFORM **/
  ;(function($){
	  /**
	   * Assign attributes on elements that are data driven
	   * with a prefix of "data-"X.
	   * 
	   * This getter method allows for the abstraction of 
	   * having to write '.getAttr("data-X")' and instead
	   * provides a method, '.getData("X")'
	   */
	  	$.fn.getData = function(attr) { 
	  		return $(this).attr("data-"+attr);
	  	}
  })(jQuery);
