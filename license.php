<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/mimetype.php';
  write_html_open();

  include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
  write_head_open();
  write_head_metadata("License",
		      "License covering work on http://kevinlocke.name");
  write_head_stylesheets();
  write_head_close();
?>
<body>
<div id="container">

<?php
include $_SERVER['DOCUMENT_ROOT'].'/include/title.html';
?>

<div id="sidebar">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/include/sidenavbar.html';
echo "\n";

include $_SERVER['DOCUMENT_ROOT'].'/include/news.html';
?>
</div>

<div id="content">
<h2>License</h2>
<p>Except where otherwise noted, all material on kevinlocke.name, including the
webpage text, images, multimedia, and data, is the work of Kevin Locke and is
licensed under the
<a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative
Commons Attribution 3.0 Unported License</a>.</p>

<h3>Exceptions</h3>
<h4>Buttons</h4>
<p>The 80x15 buttons at the bottom of each page were downloaded from
<a href="http://gtmcknight.com">gtmcknight.com</a> and
<a href="http://www.zwahlendesign.ch/en/node/19">zwahlendesign.ch</a>.</p>
<h4>IM Icons</h4>
<p>The icons representing the different instant messaging services on the
contact page are distributed with the <a href="http://gaim.sourceforge.net/">Gaim</a>
Instant Messaging Client and are redistributable under the terms of the GNU
GPL.</p>

<h2>Download</h2>
<p>The complete sources for this website are released under the terms of the
<a rel="license" href="http://www.opensource.org/licenses/mit-license.php">MIT 
License</a> and can be downloaded in as a compressed
<a href="/kevinlocke.name.tar.bz2">tar archive</a>.
<sup><a href="#footnote1">1</a></sup>&nbsp; I welcome constructive criticism
as well as suggestions or random thoughts, so please don't hesitate to
<a href="/contact.php">contact me</a> about it.</p>

<ol class="footnotes">
<li><a name="footnote1" id="footnote1" />If you are not familiar with the tar
format, see the
<a href="http://en.wikipedia.org/wiki/Tar_(file_format)">Wikipedia entry</a> for
format and usage information.</li>
</ol>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.html'; ?>

</div>
</body>
</html>
<!-- vim: set ts=8 sts=2 sw=2 noet: -->
