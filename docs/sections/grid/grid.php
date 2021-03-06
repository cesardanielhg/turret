<section id="grid" class="section">

<div class="title-group">
	<h1 class="title">Grid</h1>
	<p class="lead">A demonstration of the 12 column grid system with columns, nested columns, offsets, and push/pull examples.</p>
</div>

<h2 class="section-title">Grid<code>grid/grid.less</code></h2>

<h3 class="section-sub-title">Container</h3>
<p>Content wrapper with <code>max-width</code> set at differing sizes at various media query breakpoints.</p>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">...</div>'); ?></code></pre>

<h3 class="section-sub-title">Row</h3>
<p>Containing element for children with <code>.column-1*</code> attributes set.</p>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="row">...</div>'); ?></code></pre>


<h3 class="section-sub-title">Grid</h3>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1-2">...</div>
		<div class="column-1-2">...</div>
	</div>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Gutters</h3>
<div class="grid">
	<div class="row">
		<div class="column-1 no-gutter"><div class="grid-item">No Gutter</div></div>
		<div class="column-1 gutter-top"><div class="grid-item">Top Gutter</div></div>
		<div class="column-1 gutter-left"><div class="grid-item">Left Gutter</div></div>
		<div class="column-1 gutter-bottom"><div class="grid-item">Bottom Gutter</div></div>
		<div class="column-1 gutter-right"><div class="grid-item">Right Gutter</div></div>
	</div>
</div>
<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="container">
	<div class="row">
		<div class="column-1 no-gutter">...</div>
		<div class="column-1 gutter-top">...</div>
		<div class="column-1 gutter-left">...</div>
		<div class="column-1 gutter-bottom">...</div>
		<div class="column-1 gutter-right">...</div>
	</div>
</div>'); ?></code></pre>

</section>