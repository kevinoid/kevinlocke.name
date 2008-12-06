<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/mimetype.php';
  write_html_open();

  include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
  write_head_open();
  write_head_metadata("xlaunch",
		      "Webpage for the xlaunch program");
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

<h2>xlaunch: Launch a process in the running X server</h2>

<h3>Description</h3>
<p>xlaunch is a small utility which allows the user to run a program in the
current X session.&nbsp; It performs all of the little tasks needed to launch
a program, as if it was launched from the menu inside a graphical
environment.&nbsp; Specifically, it snarfs the values for necessary
environmental variables, redirects the output of the program to
/dev/null (errors to ~/.xsession-errors), forks the program and launches it
as its own process group.</p>
<p>This program serves a similar function to
<a href="http://www.opengroup.org/onlinepubs/000095399/utilities/nohup.html">nohup</a>
and <a href="http://inglorion.net/software/detach/">detach</a>.&nbsp; The only
functional difference is that xlaunch will attempt to snarf variables necessary
for an X program to run (e.g. <code>$DISPLAY</code>).&nbsp; In all honesty, if
I had found these programs before writing xlaunch I probably wouldn't have
bothered.&nbsp; So you are encouraged to use them if they fit your need.</p>

<h3>Supported Systems</h3>
<ul>
<li>Linux</li>
<li>NetBSD</li>
<li>Needs testing on other *nix systems (should work with minimal tweaking)</li>
</ul>

<h3>Development Status</h3>
<p>Works for me. &nbsp;There are a few more things that need attention, and
possibly a feature or two, but mostly it is ready to go.</p>

<h3>License</h3>
<p><a href="http://www.opensource.org/licenses/mit-license.php">MIT</a></p>

<h3>Installing</h3>
<ol>
<li><a href="xlaunch-0.5.7.tar.gz">Download it</a></li>
<li>Run <code>./configure</code></li>
<li>Run <code>make</code></li>
<li>Run <code>make install</code> with appropriate permissions</li>
<li>Copy contrib/xlaunch.bash_completion into /etc/bash_completion.d if you
use bash_completion</li>
</ol>

<h3>Configuration</h3>
<p>None.&nbsp; Take a look at the output of <code>xlaunch --help</code> or
the xlaunch manual page for relevant command options and usage information.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.html'; ?>

</div>
</body>
</html>
