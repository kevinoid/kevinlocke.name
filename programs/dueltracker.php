<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/mimetype.php';
  write_html_open();

  include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
  write_head_open();
  write_head_metadata("DuelTracker WoW AddOn",
		      "Webpage for the DuelTracker World of Warcraft AddOn");
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

<h2>DuelTracker</h2>

<h3>Description</h3>
<p>DuelTracker is a <a href="http://www.worldofwarcraft.com/">World of 
Warcraft</a> AddOn which collects information about duels that the user 
observes.&nbsp; Specifically, it collects information about the names, 
races, classes, levels, and guilds of the duelers along with the type of 
victory (fled or defeated).&nbsp; It can then produce statistics from the
data which are presented to the user or to other players (if configured to
do so) using a text/message-oriented interface.&nbsp; Advanced users can 
also export statistics and records in 
<a href="http://en.wikipedia.org/wiki/Comma-separated_values">CSV</a> format
for use by other programs.</p>

<h3>Features</h3>
<ol>
<li>Unobtrusive operation (unnoticeable under most circumstances, configurable)</li>
<li>Supports multiple mechanisms of gathering information (from who queries
and optionally targeting)</li>
<li>Supports messaging statistics to other players by request (configurable)</li>
<li>Supports export to CSV formats (requires Lua interpreter)</li>
</ol>

<h3>Development Status</h3>
<p>Usable, but lacking features.&nbsp; I have not been playing WoW much lately,
and for that reason, I haven't put much effort into DuelTracker for a while.&nbsp;
Therefore, I encourage anyone interested in developing it further to go for it
and feel free to send me any development questions.</p>

<h3>License</h3>
<p><a href="http://www.opensource.org/licenses/mit-license.php">MIT/Expat</a></p>

<h3>Supported Systems</h3>
<ul>
<li>Any system running World of Warcraft.</li>
</ul>

<h3>Dependencies</h3>
<ul>
<li>A <a href="http://luabinaries.luaforge.net/">Lua interpreter</a> required 
for exporting to CSV.</li>
</ul>

<h3>Installing</h3>
<ol>
<li><a href="dueltracker-004.zip">Download it</a></li>
<li>Unzip it into the World of Warcraft Interface AddOns directory
(usually C:\Program&nbsp;Files\World&nbsp;of&nbsp;Warcraft\Interface\AddOns)</li>
<li>Run World of Warcraft and confirm that it is properly loaded by clicking
on the AddOns button from the Character Selection Screen</li>
</ol>

<h3>Example Usage</h3>
<ul>
<li>Type <code>/dueltracker help</code> in the chat window for a list of 
possible commands.</li>
<li>Type <code>/dueltracker config</code> in the chat window to view the
current configuration options.</li>
<li>Type <code>/dueltracker stats</code> in the chat window to view the duel 
statistics for your player or <code>/dueltracker stats Gandalf</code> to view
the statistics for the player named Gandalf.</li>
<li>Whisper <code>.duel stats Gandalf</code> to someone running DuelTracker, 
which is configured to respond to whispers for information, to get the 
statistics for the player named Gandalf from that player's records.</li>
</ul>

<h3>Configuration</h3>
<p>DuelTracker can be configured by typing <code>/dueltracker config [option 
value]</code> into the chat window.&nbsp; This will set <em>option</em> to
<em>value</em>.&nbsp; For a list of available configuration options, type 
<code>/dueltracker config</code>.&nbsp; A complete explanation of the options
is provided in the README.txt file.</p>

<h3>Known Bugs</h3>
<p>If the user sends a who request at the same time that DuelTracker does
the user will not see any results from their query.&nbsp; This is currently 
minimized as much as possible by using a player information cache and by 
limiting the time that the event is disconnected as much as possible.&nbsp;
The user may also configure DuelTracker to use targeting for gathering 
information which will further reduce the appearance of this bug.</p>

<h3>Planned Features</h3>
<ul>
<li>Synchronization between players (timestamping already in place)</li>
<li>Improve resolution of timestamping using system clock and OnUpdate</li>
<li>GUI tab for statistics in the player interface box</li>
<li>Integration with graphical configuration systems</li>
<li>Remove need to install a Lua interpreter to export data...</li>
</ul>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.html'; ?>

</div>
</body>
</html>
