<script>
var defaultURL = 'http://localhost/Personal/framework/index.php?p=mediaquery_breakpoints';

//show loading graphic
function showLoader(id) {
  $('#' + id + ' img').fadeIn('slow');
}

//hdie loading graphic
function hideLoader(id) {
  $('#' + id + ' img').fadeOut('slow');
}
  
//function to check load state of each frame
function allLoaded(){
  var results = [];
  $('iframe').each(function(){
    if(!$(this).data('loaded')){results.push(false)}
  });
  var result = (results.length > 0) ? false : true;
  return result;
};

function loadPage($frame, url) {
  if ( url.substr(0,7) !== 'http://' && url.substr(0,8) !== 'https://' && url.substr(0, 7) !== 'file://' ) {
    url = 'http://'+url;
  }
  $('iframe').not($frame).each(function(){showLoader($(this).parent().attr('id'));})
  $('iframe').not($frame).data('loaded', false);
  $('iframe').not($frame).attr('src', url);
}

$('.frame').each(function(){showLoader($(this).attr('id'))});  


//when document loads
$(document).ready(function(){
  
  loadPage('', defaultURL);
  
  //query string
  var qsArray = window.location.href.split('?');
  var qs = qsArray[qsArray.length-1];
  
  if(qs != '' && qsArray.length > 1){    
    $('#url input[type=text]').val(qs);
    loadPage('', qs);
  }
  
  //set slidable div width
  $('#frames #inner').css('width', function(){
    var width = 0;
    $('.frame').each(function(){width += $(this).outerWidth() + 20});
    return width;
  });
  
  //add event handlers for options radio buttons
  $('input[type=radio]').change(function(){
    $frames = $('#frames');
    $inputs = $('input[type=radio]:checked').val();
    
    if($inputs == '1'){
      $frames.addClass('widthOnly');
    } else {
      $frames.removeClass('widthOnly');
    }
  });
  
  //when the url textbox is used
  $('.ui-form').submit(function(){
    loadPage('' , $('#url input[type=text]').val());
    return false;
  });
  
  //when frame loads
  $('iframe').load(function(){
    
    var $this = $(this);
    var url = '';
    var error = false;
    
    try{
      url = $this.contents().get(0).location.href;
    } catch(e) {
      error = true;
      if($('#url input[type=text]').val() != ''){
        url = $('#url input[type=text]').val();
      } else {
        url = defaultURL;
      }
    }
  
    //load other pages with the same URL
    if(allLoaded()){
      if(error){
        alert('Browsers prevent navigation from inside iframes across domains.\nPlease use the textbox at the top for external sites.');
        loadPage('', defaultURL);
      }else{
        loadPage($this, url);
      }
    }
    
    //when frame loads, hide loader graphic
    else{
      error = false;
      hideLoader($(this).parent().attr('id'));
      $(this).data('loaded',true);
    }
  });
  
});
</script>

<h1>Device sizes</h1>

<div id="url">
	<form class="ui-form" method="post">
		<fieldset>
			<ol>
				<li>
					<input type="text" title="Type your URL here..." fieldhint="Type your URL here..." />
				</li>
				<li class="ui-form-action">
					<button class="ui-btn" type="submit"  title="Submit">
						<span class="medium">
							Submit
						</span>
					</button>
				</li>
			</ol>
		</fieldset>
	</form>
</div>

<div id="frames" class="widthOnly">
	<div id="inner">
		<article id="f1" class="frame">
			<h2>320 x 480 <span class="small">(iPhone 4/4S - portrait)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
			<iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="320" height="480" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		</article>
    <article id="f2" class="frame">
      <h2>320 x 568 <span class="small">(iPhone 5 - portrait)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="320" height="568" marginheight="0" marginwidth="0" frameborder="0"></iframe>
    </article>
		<article id="f3" class="frame">
			<h2>480 x 320 <span class="small">(iPhone 4/4S - landscape)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
			<iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="480" height="320" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		</article>
    <article id="f4" class="frame">
      <h2>480 x 854 <span class="small">(SonyEricsson LT15i Xperia Arc - portrait)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="480" height="854"></iframe>
    </article>
    <article id="f5" class="frame">
      <h2>568 x 320 <span class="small">(iPhone 5 - landscape)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="568" height="320" marginheight="0" marginwidth="0" frameborder="0"></iframe>
    </article>
    <article id="f6" class="frame">
      <h2>768 x 1024 <span class="small">(iPad - portrait)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="768" height="1024"></iframe>
    </article>
    <article id="f7" class="frame">
      <h2>800 x 1280 <span class="small">(Asus - portrait)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="800" height="1280"></iframe>
    </article>
    <article id="f8" class="frame">
      <h2>854 x 480 <span class="small">(SonyEricsson LT15i Xperia Arc - landscape)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="854" height="480"></iframe>
    </article>
    <article id="f9" class="frame">
      <h2>980 x 768 <span class="small">(Desktop)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="980" height="768"></iframe>
    </article>
    <article id="f10" class="frame">
      <h2>1024 x 768 <span class="small">(iPad - Landscape)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
      <iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="1024" height="768"></iframe>
    </article>
		<article id="f11" class="frame">
			<h2>1280 x 800 <span class="small">(Asus - landscape)</span> <img src="../assets/images/break_point_indicator.gif" /></h2>
			<iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="1280" height="800"></iframe>
		</article>
	</div>
</div>
