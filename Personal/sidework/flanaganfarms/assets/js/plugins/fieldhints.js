// FORM FIELD HINTS
function fieldHintInit(){
	var checkInput = function(){
		var $this = jQuery(this);
		if($this.val()=="")$this.val($this.attr("fieldhint")).addClass('fieldhint-color');
	};
	jQuery("[fieldhint]").bind("focus", function(){
		var $this = jQuery(this);
		if($this.val()==$this.attr("fieldhint"))$this.val("").removeClass('fieldhint-color');
	}).bind("blur",checkInput).each(checkInput);
};