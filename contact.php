<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/mimetype.php';

  write_html_open();

  include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
  write_head_open();
  write_head_metadata("Contact Information", "Ways to contact Kevin Locke");
  write_head_stylesheets();
?>
  <link rel="alternate" type="text/directory" href="/KevinLocke.vcf"
	title="Contact information for Kevin Locke in vCard format" />
<?php
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

<h2>Contact Information</h2>

<?php

if(!isset($_SERVER["HTTP_REFERER"]) ||
   !preg_match("/^http:\/\/(www\.)?kevinlocke.name/i",$_SERVER["HTTP_REFERER"])) {
	print <<<WARNINGNOTICE
<div class="warning">
<p>Please make sure that this is the Kevin Locke that
you are looking for before contacting me.&nbsp; Thanks.</p>
</div>

WARNINGNOTICE;
}
?>

<h3>Standard Methods</h3>
<table border="0" class="contact">
<tr>
<td><b>E-Mail:</b></td>
<td><a class="email" href="mailto:kwl7@cornell.edu">kwl7@cornell.edu</a></td>
</tr>
<tr class="tel">
<td><b>Phone (Cell):</b></td>
<td><a href="tel:+1-406-570-1984">(406)570-1984</a></td>
</tr>
<tr>
<td style="vertical-align: top"><b>Mail:</b></td>
<td><address>210 Sapsucker Woods Rd Apt 1B<br />
Ithaca, NY &nbsp;14850-1926</address>
</td>
</tr>
</table>

<h3>Instant Messaging</h3>
<table border="0" class="contact">
<tr>
<td><img src="logos/jabber.png" width="15" height="15" alt="Jabber Logo" />
    <b>Jabber:</b></td>
<td>kevinoid@jabber.org</td>
</tr>
<tr>
<td><img src="logos/irc.png" width="15" height="15" alt="IRC Logo" />
    <b>IRC:</b></td>
<td>kevinoid on Freenode</td>
</tr>
<tr>
<td><img src="logos/aim.png" width="15" height="15" alt="AIM Logo" />
    <b>AIM&reg;:</b></td>
<td>kevinwlocke</td>
</tr>
<tr>
<td><img src="logos/icq.png" width="15" height="15" alt="ICQ Logo" />
    <b>ICQ&reg;:</b></td>
<td>199342213</td>
</tr>
<tr>
<td><img src="logos/msn.png" width="15" height="15" alt="MSN Logo" />
    <b>MSN&reg;:</b></td>
<td>kwl7@cornell.edu</td>
</tr>
</table>

<h3>Open PGP/GPG</h3>
<p>I gladly accept and encourage the use of
<a href="http://en.wikipedia.org/wiki/Pretty_Good_Privacy">PGP</a> (through
programs such as <a href="http://www.gnupg.org/">GnuPG</a>) to sign/encrypt
e-mail.&nbsp; 
If you are in the Bozeman or Ithaca areas and are intersted in swapping 
signatures, let me know.&nbsp; My PGP Key is available on subkeys.pgp.net and
<a href="/pgpkey-8CE71E1C.asc">as a text file</a>.</p>

<table border="0" class="contact">
<tr>
<th>Key ID:</th>
<td>8CE71E1C</td>
</tr>
<tr>
<th>Key Fingerprint:</th>
<td>03CF 7D34 460F BCE6 E8B4  DA43 5FF1 4E6B 8CE7 1E1C</td>
</tr>
</table>

<h3>Summary</h3>
<p>This information is also available in vCard format in
<a href="/KevinLocke.vcf">KevinLocke.vcf</a>.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.html'; ?>

</div>
</body>
</html>
<!-- vim: set ts=8 sts=2 sw=2 noet: -->
