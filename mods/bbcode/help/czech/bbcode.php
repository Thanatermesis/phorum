<html>
  <head>
    <title>BBcode nápovìda</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/help.css"/>
  </head>
  <body>
    <h2>BBcode nápovìda</h2>

    BBcode je zkratka pro "Bulletin Board code". Jedná se o jazyk se znaky, který mùe být pouit pro fórum
    k formátování zpráv. Tato nápovìda popisuje, jak mùe být BBCode uíváno  v tomto fóru.

    <h3>Tuèný text: [b]...[/b]<br/>
        Podtrený text: [u]...[/u]<br/>
        Kurzíva: [i]...[/i]<br/>
        Pøekrtnutý text: [s]...[/s]<br/>
        </h3>

    Tyto znaèky mùete pouít ke zmìne stylu èástí textu.
    Pøíklady:<br/><br/>
    <tt>
    [b]Tento text je tuèný[/b]<br/>
    [i]Tento text je kurzívou[/i]<br/>
    [u]Tento text je podtrený[/u]<br/>
    [s]Tento text je pøekrtnutý[/s]<br/>
    [b][i]Tento text[/i] je [s]kombinovaný[/s] kombinovaný[/b]
    </tt><br/><br/>
    Pøíklad se zobrazí takto:<br/><br/>
    <b>Tento text je tuèný</b><br/>
    <i>Tento text je kurzívou</i><br/>
    <u>Tento text je podtrený</u><br/>
    <strike>Tento text je pøekrtnutý</strike><br/>
    <b><i>Tento text</i> je <strike>kombinovaný</strike> kombinovaný</b>


    <h3>Horní index: [sup]...[/sup]<br/>Dolní index: [sub]...[/sub] </h3>
    Pouitím tìchto znaèek se èást textu zobrazí jako index.
    "2<sup>4</sup> = 16" or "H<sub>2</sub>O". Pøíklad:<br/><br/>
    <tt>
    [sup]Horní index[/sup] normální [sub]dolní index[/sub]
    </tt><br/><br/>

    Pøíklad se zobrazí takto:<br/><br/>
    <sup>Horní index</sup> normální <sub>dolní index</sub>

    <h3>Barva písma: [color=...]...[/color]</h3>
    Tato znaèka se mùe pouít pro barevné odliení èástí textu.
    Barva musí být ve tvaru platném pro jazyk HTML (napø. "blue", "red",
    "#ff0000", "#888", etc.). Pøíklad:<br/><br/>
    <tt>
    Kdo by se obával
    [color=red]èervené[/color],
    [color=#eeaa00]luté[/color] a
    [color=#30f]modré[/color]?
    </tt><br/><br/>
    Pøíklad se zobrazí takto:<br/><br/>
    Kdo by se obával
    <span style="color: red">èervené</span>,
    <span style="color: #eeaa00">luté</span> a
    <span style="color: #30F">modré</span>?

    <h3>Velikost písma: [size=...]...[/size]</h3>
    Tato znaèka se mùe pouít pro zmìnu velikosti písma èástí textu.
    Velikost musí být ve tvaru platném pro jazyk HTML (napø. "12px",
    "small", "large", etc.). Pøíklad:<br/><br/>
    <tt>
    [size=x-small]To[/size]
    [size=small]vypadá[/size]
    [size=medium]jako,[/size]
    [size=large]e[/size]
    [size=x-large]rostu![/size]
    </tt><br/><br/>
    Pøíklad se zobrazí takto:<br/><br/>
    <span style="font-size: x-small">To</span>
    <span style="font-size: small">vypadá</span>
    <span style="font-size: medium">jako,</span>
    <span style="font-size: large">e</span>
    <span style="font-size: x-large">rostu!</span>

    <h3>Centrovaný text: [center]...[/center]</h3>
    Znaèka se mùe pouít pro vycentrování èástí textu.
    Pøíklad:<br/><br/>
    <tt>
    [center]Jsem rád uprostøed toho veho[/center]
    </tt><br/><br/>
    Pøíklad se zobrazí takto:<br/><br/>
    <center>Jsem rád uprostøed toho veho</center>

    <h3>Odkaz na obrázek: [img]...[/img]<br/>
        Odkaz na stránku: [url]...[/url] or [url=...]...[/url]<br/>
        Odkaz na emailovou adresu [email]...[/email]</h3>
    Tytro znaèky jsou pro odkazy na zdroje z internetu.
    Zde jsou nìjaké pøíklady:<br/><br/>
    <tt>
    [img]https://www.somesite.com/cool/thumbsup.gif[/img]<br/>
    [url]https://www.phorum.org[/url]<br/>
    [url=https://www.phorum.org]Navtivte Phorum.org![/url]<br/>
    [email]someuser@somesite.com[/email]
    </tt></br></br>
    Pøíklady se zobrazí takto:<br/><br/>
    <img src="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/thumbsup.gif" border="0"/><br/>
    [<a href="https://www.phorum.org">www.phorum.org</a>]<br/>
    <a rel="nofollow" href="https://www.phorum.org">Navtivte Phorum.org!</a><br/>
    <a href="mailto:someuser@somesite.com">someuser@somesite.com</a>

    <h3>Formátovaný kód, písmo se stejnou rozteèí: [code]...[/code]</h3>
    V nìkterých pøípadech jako ASCII art, programový kód, tabulky akordù, atd.,
    mùete ve zprávì potøebovat text, který vyaduje pouití této znaèky.
    Pøíklad:
<pre>
[code]
 _____  _
|  __ \| |
| |__) | |__   ___  _ __ _   _ _ __ ___
|  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
| |    | | | | (_) | |  | |_| | | | | | |
|_|    |_| |_|\___/|_|   \__,_|_| |_| |_|
[/code]
</pre>

Bez znaèky [code] dojde ke zhroucení formátovaného textu, jako zde:
<br/><br/>
  _____  _                                <br/>
 |  __ \| |                               <br/>
 | |__) | |__   ___  _ __ _   _ _ __ ___  <br/>
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \ <br/>
 | |    | | | | (_) | |  | |_| | | | | | |<br/>
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|<br/>
<br/>
Se znaèkou  [code] vypadá text takto:
<pre style="border: 1px solid #dde; background-color: #ffe; padding: 0px 0px 0px 10px">
  _____  _
 |  __ \| |
 | |__) | |__   ___  _ __ _   _ _ __ ___
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
 | |    | | | | (_) | |  | |_| | | | | | |
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|

</pre>

    <h3>Uvozený text: [quote]...[/quote] or [quote=...]...[/quote]</h3>
    Chcete-li pøidat uvozovky do své zprávy, mùete pouít tuto znaèku.
    Muete zvolit, zda chcete ke znaèce zahrnout napøíklad také jméno osoby nebo ne.
    Pøíklad:<br/><br/>
    <tt>
    [quote]Phorum je nejlepí![/quote]<br/>
    [quote=Hamlet - William Shakespeare]<br/>
    Být èi nebýt? To je otázka.<br/>
    Je dùstojnìjí strpìt pomylení,<br/>
    e násilnický osud do nás bije,<br/>
    nebo vzít zbraò na moøe trápení,<br/>
    a tak s tím skoncovat? Umøít - spát - a dost.<br/>
    [/quote]
    </tt><br/><br/>
    Takto se pøíklad zobrazí:<br/><br/>
    <blockquote class="bbcode">Quote:<div>Phorum je nejlepí!</div></blockquote>
    <blockquote class="bbcode">Quote:<div><strong>Hamlet - William Shakespeare</strong><br />
    Být èi nebýt? To je otázka.
    <br />
    Je dùstojnìjí strpìt pomylení,
    <br />
    e násilnický osud do nás bije,
    <br />
    nebo vzít zbraò na moøe trápení,
    <br />
    a tak s tím skoncovat? Umøít - spát - a dost.
    <br /></div></blockquote>

    <h3>Horizontální oddìlovací èára: [hr]</h3>
    K vloení oddìlovací èáry do zprávy vlote znaèku [hr].
    Takto bude vypadat výsledek:
    <hr>
    Tato znaèka je vhodná k rozdìlení struktury u dlouhých zpráv.

    <h3>Itemized list:<br/>[list]<br/>[*] item 1<br/>[*] item 2<br/>[/list]</h3>

    The [list] tag can be used for adding lists of items to your message.
    By default, the list items will be shown using bullets in front of
    them. By assigning one of "1" (numbers), "a" (letters), "A" (capital
    letters), "i" (Roman numbers) or "I" (Roman capital numbers), the
    bullet type can be changed. Examples:<br/><br/>
    <tt>
    [list]<br/>
    [*] item 1<br/>
    [*] item 2<br/>
    [list]<br/>
    [list=A]<br/>
    [*] another item 1<br/>
    [*] another item 2<br/>
    [/list]<br/>
    </tt><br/><br/>
    These will be displayed as:<br/><br/>
    <ul><li>item 1</li><li>item 2</li></ul>
    <ol type="A"><li>another item 1</li><li>another item 2</li></ol>

    <br/><br/><br/><br/>
  </body>
</html>
