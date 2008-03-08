<?php
$page = "languages";
$title = "LanguageTool";
$title2 = "Languages";
$lastmod = "2007-06-02 15:00:00 CET";
include("../../include/header.php");
?>
		
<p class="firstpara">LanguageTool supports several languages to a different degree. This page lists the
number of rules per language to give a very rough indication of how good a
language is supported.</p>

<!--  TODO: link rules link java dir  -->

<!-- Output of RuleOverview.java: -->

<b>Rules in LanguageTool 0.9.3-dev</b><br />
Date: 2008-03-08<br /><br />

<table>
<tr>
  <th></th>
  <th align="right">XML rules</th>
  <th>&nbsp;&nbsp;</th>
  <th align="right">Java rules</th>
  <th>&nbsp;&nbsp;</th>
  <th align="right"><a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/false-friends.xml">False friends</a></th>
  <th>&nbsp;&nbsp;</th>
  <th align="left">Rule Maintainers</th>
</tr>
<tr><td>Czech</td><td align="right">1 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/cs/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">0</td><td></td><td align="left">Jozef Ličko</td></tr>
<tr><td>Dutch</td><td align="right">138 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/nl/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">0</td><td></td><td align="left">Ruud Baars</td></tr>
<tr><td>English</td><td align="right">256 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/en/grammar.xml">show</a>)</td><td></td><td align="right">1</td><td></td>
<td align="right">181</td><td></td><td align="left">Marcin Miłkowski, Daniel Naber</td></tr>
<tr><td>French</td><td align="right">1669 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/fr/grammar.xml">show</a>)</td><td></td><td align="right">1</td><td></td>
<td align="right">1</td><td></td><td align="left">Agnes Souque, Hugo Voisard&nbsp;(2006-2007)</td></tr>
<tr><td>German</td><td align="right">75 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/de/grammar.xml">show</a>)</td><td></td><td align="right">7</td><td></td>
<td align="right">84</td><td></td><td align="left">Daniel Naber</td></tr>
<tr><td>Italian</td><td align="right">5 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/it/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">0</td><td></td><td align="left"></td></tr>
<tr><td>Lithuanian</td><td align="right">4 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/lt/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">0</td><td></td><td align="left">Mantas Kriaučiūnas</td></tr>
<tr><td>Polish</td><td align="right">701 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/pl/grammar.xml">show</a>)</td><td></td><td align="right">1</td><td></td>
<td align="right">124</td><td></td><td align="left">Marcin Miłkowski</td></tr>
<tr><td>Slovenian</td><td align="right">5 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/sl/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">0</td><td></td><td align="left">Martin Srebotnjak</td></tr>
<tr><td>Spanish</td><td align="right">3 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/es/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">1</td><td></td><td align="left"></td></tr>
<tr><td>Swedish</td><td align="right">4 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/sv/grammar.xml">show</a>)</td><td></td><td align="right">0</td><td></td>
<td align="right">0</td><td></td><td align="left">Niklas Johansson</td></tr>
<tr><td>Ukrainian</td><td align="right">8 (<a href="http://languagetool.cvs.sourceforge.net/*checkout*/languagetool/JLanguageTool/src/rules/uk/grammar.xml">show</a>)</td><td></td><td align="right">1</td><td></td>
<td align="right">0</td><td></td><td align="left">Andriy Rysin</td></tr>
</table>

<!-- End Output of RuleOverview.java -->

<p>The number of Java rules listed is only the number of rules specific
to that language. There are some rules that deal with punctuation
and that apply to almost all languages.</p>

<?php
include("../../include/footer.php");
?>
