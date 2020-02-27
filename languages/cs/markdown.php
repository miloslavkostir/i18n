<?php

return [

    'cheatsheet' => '
<p>Markdown je odlehčený značkovací jazyk, který slouží pro úpravu prostého textu a jeho následný převod na formátovaný text publikovatelný na webu, zejména ve formátu HTML.</p>

<h3>Nadpisy</h3>
<pre class="language-markdown"><code># Toto je nadpis 1. úrovně
## Toto je nadpis 2. úrovně
### Toto je nadpis 3. úrovně atd.
</code></pre>

<h3>Tučné &amp; Kurzíva</h3>
<pre class="language-markdown"><code>Můžete psát *kurzívu*, **tučný text**, nebo _**oboje**_</code></pre>

<h3>Odkazy</h3>
<pre class="language-markdown"><code>Toto je [odkaz](http://nejaka-stranka.com)</code></pre>

<h3>Kód</h3>
<p>
Text mezi (<code>```</code>) se zobrazí jako kód (neproporcionální text).
</p>

<pre class="language-markdown"><code>```
echo: "Toto je kód PHP";
```</code></pre>

<p>Neproporcionálního textu (inline kód) lze docílit i obalením zpětnými uvozovekami <code>`inline kód`</code>.

<h3>Citace</h3>

<p>Citaci vytvoříte tak, že na začátek textu vložíte znak <code>> </code></p>

<pre class="language-markdown"><code>> Tento text se stane citací.</code></pre>

<h3>Obrázky</h3>
<pre class="language-markdown"><code>![alternativní text](http://example.com/image.jpg)</code></pre>

<h3>Nečíslovaný seznam</h3>
<pre class="language-markdown"><code>- Slanina
- Steak
- Pivo</code></pre>

<h3>Číslovaný seznam</h3>
<pre class="language-markdown"><code>1. Kobliha
2. Koláč
3. Zmrzlina</code></pre>

<h3>Tabulky</h3>

<pre class="language-markdown"><code>Hlavička 1    | Hlavička 2
------------- | -------------
Obsah 1A      | Obsah 2A
Obsah 1B      | Obsah 2B</code></pre>'

];
