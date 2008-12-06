<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/mimetype.php';
  write_html_open();

  include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
  write_head_open();
  write_head_metadata("UltraGetopt for Java",
		      "Webpage for the UltraGetopt for Java library");
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

<h2>UltraGetopt for Java</h2>

<h3>Description</h3>
<p>UltraGetopt for Java is the Java imagening of
<a href="ultragetopt.php">UltraGetopt</a>.  It provides the features and
flexibility of UltraGetopt in a way that is more suited to the Java environment.
</p>

<h3>Features</h3>
<ul>
<li>Supports MS-DOS formatted option strings (e.g. <code>/option:arg</code>)
</li>
<li>Provides parsing and error message compatibility with getopt from the GNU,
(Open)BSD, and Mac OS</li>
<li>Supports first-longest-matching for options</li>
<li>Provides <a href="ultragetopt-javadoc/index.html?name/kevinlocke/ultragetopt/UltraGetopt.Behavior.html">many</a>
configurable behaviors</li>
</ul>

<h3>Development Status</h3>
<p>Actively being developed.&nbsp; UltraGetopt for Java supports everything that
I need at the moment.&nbsp; A list of features which I am considering
implementing, as time permits, is included in the TODO file.&nbsp;  Bug fixing
and improved compatibility support will be addressed whenever an issue
arises.&nbsp; As always, if you have a bug to report, feature to request, or the
desire to hack on the software yourself, drop me a line.</p>

<h3>License</h3>
<p><a href="http://www.opensource.org/licenses/mit-license.php">MIT</a></p>

<h3>Supported Systems</h3>
<p>Should work on any system that provides a Java runtime version 1.5.0 or
greater.&nbsp;  Provides compatibility with the command-line conventions of Mac
OS, Windows, (Open)BSD, and Linux (GNU).</p>

<h3>Dependencies</h3>
<ul>
<li>Java runtime 1.5.0 or greater (support for generics and autoboxing)</li>
</ul>

<h3>Installing</h3>
<ol>
<li><a href="ultragetopt-0.8.0.jar">Download it</a></li>
<li>Make sure that ultragetopt.jar is in the
<a href="http://java.sun.com/javase/6/docs/technotes/tools/solaris/classpath.html">class
path</a> for your program</li>
<li>Optionally, generate the javadocs from the sources provided in the JAR
file.</li>
</ol>

<h3>Documentation</h3>
<p>The documentation for UltraGetopt for Java is generated using
<a href="http://java.sun.com/j2se/javadoc/">Javadoc</a>, and is available
<a href="ultragetopt-javadoc/">online</a>.&nbsp; Usage information and example
programs are included in the UltraGetopt package documentation.</p>

<h3>Configuration</h3>
<p>Configuration of UltraGetopt for Java is all set by the Behavior options to
the UltraGetopt constructor.&nbsp; Please consult the
<a href="ultragetopt-javadoc/">javadoc</a> for a list of options supported.</p>

<h3>Security</h3>
<p>The UltraGetopt for Java JAR file is a
<a href="http://java.sun.com/docs/books/tutorial/deployment/jar/signindex.html">signed
archive</a>.&nbsp;  You can download <a href="/x509-kevinlocke.pem">my X.509
certificate</a> and verify the integrity of the archive.&nbsp; You can also
verify the authenticity of the certificate using the
<a href="/x509-kevinlocke.pem.asc">detached PGP signature</a>.&nbsp; However,
verifying the authenticity of my PGP key is not something that can be linked to
from this page and is left as an exercise for the reader.</p>

<h3>Known Bugs</h3>
<ul>
<li>None reported yet.&nbsp; (Must be at least a few...)</li>
</ul>

<h3>Planned Features</h3>
<ul>
<li>More testing for incompatibilities with existing getopt implementations</li>
<li>More features, as they are thought up</li>
</ul>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.html'; ?>

</div>
</body>
</html>
