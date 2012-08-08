<h1>Content layouts</h1>

<nav>
	<h5>Sections</h5>
	<dl class="link-list-horz">
		<dd><a href="#horzcenter">Horizontal centering</a><span class="pipe">|</span></dd>
		<dd><a href="#imagefloat">Image floating</a><span class="pipe">|</span></dd>
		<dd><a href="#keylines">Keylines</a><span class="pipe">|</span></dd>
		<dd><a href="#measures">Unit measures</a></dd>
	</dl>
</nav>
<hr />

<? include "include/layout_nav.php";?>

<p>The grid is composed of a total of 24 units seperated by a gutter of 20px. The last unit in the series has no gutter. Optimal reading length can be achieved with a 2 column ( 66% | 33% ) design: 16 units for column 1 &amp; 8 units for column 2.</p>

<hr />

<article class="col-24">
	<h2>1 column layout: 100% (24 units)</h2>
	<img src="/framework/images/cl_img_916x300.png" alt="916x300" title="916x300" />
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa.</p>
</article>

<!-- 2 column: 66|33 layout -->
<article class="col-24">
	<h2>2 column layout: 66% | 33% (16 units + 8 units)</h2>
	<section class="col-16">
		<img src="/framework/images/cl_img_604x200.png" alt="604x200" title="604x200" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a.</p>
	</section>
	<section class="col-8 last">
		<aside class="ui-box-rnd-shadow-adv">
			<header class="box-hdr">
				<h6>Box with round corners and shadow</h6>
			</header>
			<section class="box-bdy">  
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec id laoreet augue.</p>
			</section>
			<footer class="box-ftr"></footer>
		</aside>
	</section>
</article>

<!-- 2 column: 50|50 layout -->
<article class="col-24">
	<h2>2 column layout: 50% | 50% (12 units + 12 units)</h2>
	<section class="col-12">
		<img src="/framework/images/cl_img_448x100.png" alt="448x100" title="448x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
	</section>
	<section class="col-12 last">
		<img src="/framework/images/cl_img_448x100.png" alt="448x100" title="448x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
	</section>
</article>

<!-- 3 column: 33|33|33 layout -->
<article class="col-24">
	<h2>3 column layout: 33% | 33% | 33% (8 units + 8 units + 8 units)</h2>
	<section class="col-8">
		<img src="/framework/images/cl_img_293x100.png" alt="293x100" title="293x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
	</section>
	<section class="col-8">
		<img src="/framework/images/cl_img_293x100.png" alt="293x100" title="293x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
	</section>
	<section class="col-8 last">
		<img src="/framework/images/cl_img_293x100.png" alt="293x100" title="293x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
	</section>
</article>

<!-- 3 column: 50|25|25 layout -->
<article class="col-24">
	<h2>3 column layout: 50% | 25% | 25% (16 units + 4 units + 4 units)</h2>
	<section class="col-16">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper.</p>
	</section>
	<section class="col-4">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-4 last">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
</article>

<!-- 4 column: 25|25|25|25 layout -->
<article class="col-24">
	<h2>4 column layout: 25% | 25% | 25% | 25% (6 units + 6 units + 6 units + 6 units)</h2>
	<section class="col-6">
		<img src="/framework/images/cl_img_215x100.png" alt="215x100" title="215x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-6">
		<img src="/framework/images/cl_img_215x100.png" alt="215x100" title="215x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-6">
		<img src="/framework/images/cl_img_215x100.png" alt="215x100" title="215x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-6 last">
		<img src="/framework/images/cl_img_215x100.png" alt="215x100" title="215x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
</article>

<!-- 6 column layout -->
<article class="col-24">
	<h2>6 column layout</h2>
	<section class="col-4">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-4">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-4">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-4">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-4">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
	<section class="col-4 last">
		<img src="/framework/images/cl_img_137x100.png" alt="137x100" title="137x100" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
	</section>
</article>

<!-- 8 column layout -->
<article class="col-24">
	<h2>8 column layout</h2>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-3 last">
		<img src="/framework/images/cl_img_98x75.png" alt="98x75" title="98x75" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
</article>

<!-- 12 column layout -->
<article class="col-24">
	<h2>12 column layout</h2>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
	<section class="col-2 last">
		<img src="/framework/images/cl_img_59x40.png" alt="59x40" title="59x40" />
		<p>Lorem ipsum dolor sit amet.</p>
	</section>
</article>

<? include "include/back_to_top.php";?>

<hr />

<!-- Horizontal Centering -->
<article class="col-24">
	<h2><span class="bookmark" id="horzcenter"></span>Horizontal centering - block</h2>
	<p>Use class of "ui-center-block" on block element you want to center.</p>
	<aside style="width:400px;" role="complementary" class="ui-box-rnd-shadow-adv ui-center-block">
		<header class="box-hdr">
			<h6>Advanced UI box with round corners and shadow</h6>
		</header>
		<section class="box-bdy">
			<p>
				Using the <strong>"ui-box-rnd-shadow"</strong> will result in this display.<br />
				In Sublime editor use <strong>uibox-adv</strong> to trigger snippet
			</p>
		</section>
		<footer class="box-ftr"></footer>
	</aside>

	<h2>Horizontal centering - inline</h2>
	<div class="col-24">
		<p>Use class of "ui-center-inline" on containing element of the inline element you want to center.</p>
		<h1 class="ui-center-inline">This text should be centered.</h1>
	</div>
</article>

<? include "include/back_to_top.php";?>

<hr />

<!-- Image floating -->
<article class="col-24">
	<h2><span class="bookmark" id="imagefloat"></span>Image floating</h2>
	<section class="col-24">
		<h3>Image floated left</h3>
		<p>Use class of "left" on images you want to float left.</p>
		<img class="left" src="/framework/images/cl_img_604x200.png" alt="604x200" title="604x200" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
	<section class="col-24">
		<h3>Image floated right</h3>
		<p>Use class of "right" on images you want to float right.</p>
		<img class="right" src="/framework/images/cl_img_604x200.png" alt="604x200" title="604x200" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium.</p>
	</section>
</article>

<? include "include/back_to_top.php";?>

<hr />

<!-- Keylines -->
<article class="col-24">
	<h2><span class="bookmark" id="keylines"></span>Keylines</h2>
	<section class="col-24">
		<h3>3 column keyline right</h3>
		<p>Use class of "ui-keyline-right" for elements where you want a keyline on the right.</p>
		<div class="col-8 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-8 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-8 last">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Donec id laoreet.</p>
		</div>
	</section>

	<section class="col-24">
		<h3>2 column keyline right</h3>
		<div class="col-12 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-12 last">
			<blockquote>
				<p>&ldquo;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&rdquo;</p>
				<p class="author">&mdash; John Doe, Expert</p>
			</blockquote>
		</div>
	</section>

	<section class="col-24">
		<h3>3 column keyline left</h3>
		<p>Use class of "ui-keyline-left" for elements where you want a keyline on the left.</p>
		<div class="col-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-8 ui-keyline-left">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-8 ui-keyline-left last">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Donec id laoreet.</p>
		</div>
	</section>

	<section class="col-24">
		<h3>2 column keyline left</h3>
		<div class="col-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-12 ui-keyline-left last">
			<blockquote>
				<p>&ldquo;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.&rdquo;</p>
				<p class="author">&mdash; John Doe, Expert</p>
			</blockquote>
		</div>
	</section>

	<section class="col-24">
		<h3>3 column keyline right and keyline left</h3>
		<div class="col-8 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Suspendisse potenti. Nam in est et nibh accumsan porta in eget lacus. Maecenas vestibulum scelerisque diam, nec tristique enim interdum a. Fusce eget sem justo. Mauris ultricies sapien id dolor lacinia porta. Etiam egestas pharetra molestie. Donec ullamcorper laoreet nisi et pulvinar.</p>
		</div>
		<div class="col-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
		</div>
		<div class="col-8 ui-keyline-left last">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit. Donec id laoreet.</p>
		</div>
	</section>

	<section class="col-24">
		<h3>4 column keyline right</h3>
		<div class="col-6 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
		</div>
		<div class="col-6 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
		</div>
		<div class="col-6 ui-keyline-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar. Donec id laoreet augue. Nulla suscipit arcu vitae metus pellentesque cursus eu nec massa. Donec nec quam velit.</p>
		</div>
		<div class="col-6 last">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis justo dictum justo accumsan pretium. Vestibulum sodales massa id dolor eleifend in bibendum odio pulvinar.</p>
		</div>
	</section>

	<section class="col-24">
		<h3>6 column keyline right</h3>
		<div class="col-4 ui-keyline-right ui-center-inline">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<a class="ui-btn" id="" href="#" name="" tabindex="20" title="Button">
				<span class="large">
					<span class="ui-btn-icn"></span>Button
				</span>
			</a>
		</div>
		<div class="col-4 ui-keyline-right ui-center-inline">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<a class="ui-btn" id="" href="#" name="" tabindex="20" title="Button">
				<span class="large">
					<span class="ui-btn-icn"></span>Button
				</span>
			</a>
		</div>
		<div class="col-4 ui-keyline-right ui-center-inline">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<a class="ui-btn" id="" href="#" name="" tabindex="20" title="Button">
				<span class="large">
					<span class="ui-btn-icn"></span>Button
				</span>
			</a>
		</div>
		<div class="col-4 ui-keyline-right ui-center-inline">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<a class="ui-btn" id="" href="#" name="" tabindex="20" title="Button">
				<span class="large">
					<span class="ui-btn-icn"></span>Button
				</span>
			</a>
		</div>
		<div class="col-4 ui-keyline-right ui-center-inline">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<a class="ui-btn" id="" href="#" name="" tabindex="20" title="Button">
				<span class="large">
					<span class="ui-btn-icn"></span>Button
				</span>
			</a>
		</div>
		<div class="col-4 ui-keyline-right ui-center-inline last">
			<img src="/framework/images/cl_img_fpo.png" alt="FPO" title="FPO" />
			<a class="ui-btn" id="" href="#" name="" tabindex="20" title="Button">
				<span class="large">
					<span class="ui-btn-icn"></span>Button
				</span>
			</a>
		</div>
	</section>
	<br />
</article>

<? include "include/back_to_top.php";?>

<hr />

<!-- Unit Measures -->
<article class="col-24">
	<h2><span class="bookmark" id="measures"></span>Unit measures</h2>
	<section class="col-24 unit last">24</section>
	<section class="col-1 unit">1</section><section class="col-23 unit last">23</section>
	<section class="col-2 unit">2</section><section class="col-22 unit last">22</section>
	<section class="col-3 unit">3</section><section class="col-21 unit last">21</section>
	<section class="col-4 unit">4</section><section class="col-20 unit last">20</section>
	<section class="col-5 unit">5</section><section class="col-19 unit last">19</section>
	<section class="col-6 unit">6</section><section class="col-18 unit last">18</section>
	<section class="col-7 unit">7</section><section class="col-17 unit last">17</section>
	<section class="col-8 unit">8</section><section class="col-16 unit last">16</section>
	<section class="col-9 unit">9</section><section class="col-15 unit last">15</section>
	<section class="col-10 unit">10</section><section class="col-14 unit last">14</section>
	<section class="col-11 unit">11</section><section class="col-13 unit last">13</section>
	<section class="col-12 unit">12</section><section class="col-12 unit last">12</section>
	<section class="col-13 unit">13</section><section class="col-11 unit last">11</section>
	<section class="col-14 unit">14</section><section class="col-10 unit last">10</section>
	<section class="col-15 unit">15</section><section class="col-9 unit last">9</section>
	<section class="col-16 unit">16</section><section class="col-8 unit last">8</section>
	<section class="col-17 unit">17</section><section class="col-7 unit last">7</section>
	<section class="col-18 unit">18</section><section class="col-6 unit last">6</section>
	<section class="col-19 unit">19</section><section class="col-5 unit last">5</section>
	<section class="col-20 unit">20</section><section class="col-4 unit last">4</section>
	<section class="col-21 unit">21</section><section class="col-3 unit last">3</section>
	<section class="col-22 unit">22</section><section class="col-2 unit last">2</section>
	<section class="col-23 unit">23</section><section class="col-1 unit last">1</section>
</article>

<? include "include/back_to_top.php";?>

<hr />

<article class="col-24">
	<h2>Unit measures (no margins)</h2>

	<div class="grid-nomargin">
		<section class="col-24 unit last">24</section>
		<section class="col-1 unit">1</section><section class="col-23 unit last">23</section>
		<section class="col-2 unit">2</section><section class="col-22 unit last">22</section>
		<section class="col-3 unit">3</section><section class="col-21 unit last">21</section>
		<section class="col-4 unit">4</section><section class="col-20 unit last">20</section>
		<section class="col-5 unit">5</section><section class="col-19 unit last">19</section>
		<section class="col-6 unit">6</section><section class="col-18 unit last">18</section>
		<section class="col-7 unit">7</section><section class="col-17 unit last">17</section>
		<section class="col-8 unit">8</section><section class="col-16 unit last">16</section>
		<section class="col-9 unit">9</section><section class="col-15 unit last">15</section>
		<section class="col-10 unit">10</section><section class="col-14 unit last">14</section>
		<section class="col-11 unit">11</section><section class="col-13 unit last">13</section>
		<section class="col-12 unit">12</section><section class="col-12 unit last">12</section>
		<section class="col-13 unit">13</section><section class="col-11 unit last">11</section>
		<section class="col-14 unit">14</section><section class="col-10 unit last">10</section>
		<section class="col-15 unit">15</section><section class="col-9 unit last">9</section>
		<section class="col-16 unit">16</section><section class="col-8 unit last">8</section>
		<section class="col-17 unit">17</section><section class="col-7 unit last">7</section>
		<section class="col-18 unit">18</section><section class="col-6 unit last">6</section>
		<section class="col-19 unit">19</section><section class="col-5 unit last">5</section>
		<section class="col-20 unit">20</section><section class="col-4 unit last">4</section>
		<section class="col-21 unit">21</section><section class="col-3 unit last">3</section>
		<section class="col-22 unit">22</section><section class="col-2 unit last">2</section>
		<section class="col-23 unit">23</section><section class="col-1 unit last">1</section>
	</div>

</article>
