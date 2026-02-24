<html>
  <head>
    <title>BBcode ohje</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/help.css"/>
  </head>
  <body>
    <h2>BBcode ohje</h2>

    BBCode on lyhennys sanoista Bulletin Board code. Se on kuvauskieli
    mitä forumin käyttäjät voivat käyttää viestiensä muotoiluun. Tämä
    ohje kertoo mitä BB koodeja tässä Forumissa voi käyttää.

    <h3>Lihavoitu teksti: [b]...[/b]<br/>
        Alleviivattu teksti: [u]...[/u]<br/>
        Kursivoitu teksti: [i]...[/i]<br/>
        Yliviivattu teksti: [s]...[/s]<br/>
        </h3>
    Käyttämällä näitä elementtejä voit vaikuttaa tekstin muotoiluun.
    Esimerkiksi:<br/><br/>
    <tt>
    [b]Tämä teksti on lihavoitu[/b]<br/>
    [u]Tämä teksti on alleviivattu[/u]<br/>
    [i]Tämä teksti on kursivoitu[/i]<br/>
    [s]Tämä teksti on yliviivattu[/s]<br/>
    [b][i]Tässä tekstissä[/i] on [s]usiampia[/s] useampia[/b] tyylejä
    </tt><br/><br/>
    Ne näyttävät tältä:<br/><br/>
    <b>Tämä teksti on lihavoitu</b><br/>
    <u>Tämä teksti on alleviivattu</u><br/>
    <i>Tämä teksti on kursivoitu</i><br/>
    <strike>Tämä teksti on yliviivattu</strike><br/>
    <b><i>Tässä tekstissä</i> on <strike>usiampia</strike> useampia</b> tyylejä


    <h3>Yläviite: [sup]...[/sup]<br/>Alaviite: [sub]...[/sub] </h3>
    Käyttämällä näitä elementtejä voit käyttää ylä- tai alaviitteitä.
    Nämä elementit ovat hyödyllisiä käyttäessäsi esimerkiksi
    "2<sup>4</sup> = 16" tai "H<sub>2</sub>O". esimerkki:<br/><br/>
    <tt>
    [sup]yläviite[/sup] tavallinen [sub]alaviite[/sub]
    </tt><br/><br/>
    Tämä näyttää tältä:<br/><br/>
    <sup>yläviite</sup> tavallinen <sub>alaviite</sub>

    <h3>Kirjasin väri: [color=...]...[/color]</h3>
    Tämä elementti mahdollistaa tekstin tai sen osan värjäämisen.
    Värin täytyy olla oikea HTML värikoodi (kuten "blue", "red",
    "#ff0000", "#888", jne.). Esimerkiksi:<br/><br/>
    <tt>
    Kuka pelkää
    [color=red]punaista[/color],
    [color=#eeaa00]keltaista[/color] ja
    [color=#30f]sinistä[/color]?
    </tt><br/><br/>
    Tämä näyttää tältä:<br/><br/>
    Kuka pelkää
    <span style="color: #FF3300">punaista</span>,
    <span style="color: #eeaa00">keltaista</span> ja
    <span style="color: #3300FF">sinistä</span>?

    <h3>Kirjasin koko: [size=...]...[/size]</h3>
    Tämä elementti mahdollistaa tekstin koon muuttamisen.
    Koon pitää olla oikea HTML koko elementin mukainen (kuten "12px",
    "small", "large", jne.). Esimerkiksi:<br/><br/>
    <tt>
    [size=x-small]Näyttää[/size]
    [size=small]siltä[/size]
    [size=medium]että[/size]
    [size=large]kasvan[/size]
    [size=x-large]suuremmaksi![/size]
    </tt><br/><br/>
    Ja se näyttää tältä:<br/><br/>
    <span style="font-size: x-small">Näyttää</span>
    <span style="font-size: small">siltä</span>
    <span style="font-size: medium">että</span>
    <span style="font-size: large">kasvan</span>
    <span style="font-size: x-large">suuremmaksi!</span>

    <h3>Tekstin keskitys: [center]...[/center]</h3>
    Tämä elementti mahdollistaa tekstin keskittämisen sivulla.
    Esimerkiksi:<br/><br/>
    <tt>
    [center]Olen selkeästi kaiken keskellä[/center]
    </tt><br/><br/>
    Mikä näyttää tältä:<br/><br/>
    <center>Olen selkeästi kaiken keskellä</center>

    <h3>Liitä kuva muualta netistä: [img]...[/img]<br/>
        Lisää nettisivun osoite: [url]...[/url] or [url=...]...[/url]<br/>
        Lisää sähköpostiosoite [email]...[/email]</h3>
    Näillä elementeillä määritellään linkkejä muihin netin osoitteisiin.
    Tässä muutama esimerkki:<br/><br/>
    <tt>
    [img]https://www.somesite.com/cool/thumbsup.gif[/img]<br/>
    [url]https://www.phorum.org[/url]<br/>
    [url=https://www.phorum.org]Vierailu Phorum.orgissa![/url]<br/>
    [email]someuser@somesite.com[/email]
    </tt></br></br>
    Mikä näyttää tältä:<br/><br/>
    <img src="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/thumbsup.gif" border="0"/><br/>
    [<a href="https://www.phorum.org">www.phorum.org</a>]<br/>
    <a rel="nofollow" href="https://www.phorum.org">Vieraile Phorum.orgissa!</a><br/>
    <a href="mailto:someuser@somesite.com">someuser@somesite.com</a>

    <h3>Vakiomittainen, muotoiltu koodi: [code]...[/code]</h3>
    Voi olla että joskus haluat liittä viestiin ASCII kuvia,
    ohjelmakoodin pätkiä, tabulatuureja jne. Näissä tapauksissa
    voit käyttää [code] elementtiä. Esimerkki:
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

ilman ympäröivää [code] elementtiä, tämä näyttäisi käsittämättömältä kuten:
<br/><br/>
  _____  _                                <br/>
 |  __ \| |                               <br/>
 | |__) | |__   ___  _ __ _   _ _ __ ___  <br/>
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \ <br/>
 | |    | | | | (_) | |  | |_| | | | | | |<br/>
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|<br/>
<br/>
Mutta [code] sen ympärillä, se näyttää tältä:
<pre style="border: 1px solid #dde; background-color: #ffe; padding: 0px 0px 0px 10px">
  _____  _
 |  __ \| |
 | |__) | |__   ___  _ __ _   _ _ __ ___
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
 | |    | | | | (_) | |  | |_| | | | | | |
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|

</pre>

    <h3>Lainattu teksti: [quote]...[/quote] tai [quote=...]...[/quote]</h3>
    Jos haluat näyttää lainauksen viestissäsi voit käyttää tätä
    elementtiä. Voit valita näytetäänkö lainaamasi henkilön nimeä
    tai tunnusta. Esimerkki:<br/><br/>
    <tt>
    [quote]Phorum on paras![/quote]<br/>
    [quote=William Shakespearen Hamletista]<br/>
    To be or not to be, --that is the question:--<br/>
    Whether 'tis nobler in the mind to suffer<br/>
    The slings and arrows of outrageous fortune<br/>
    Or to take arms against a sea of troubles,<br/>
    And by opposing end them?<br/>
    [/quote]
    </tt><br/><br/>
    Näkyy näin:<br/><br/>
    <blockquote class="bbcode">Quote:<div>Phorum on paras!</div></blockquote>
    <blockquote class="bbcode">Quote:<div><strong>William Shakespearen Hamletista</strong><br />
    To be or not to be, --that is the question:--
    <br />
    Whether 'tis nobler in the mind to suffer
    <br />
    The slings and arrows of outrageous fortune
    <br />
    Or to take arms against a sea of troubles,
    <br />
    And by opposing end them?
    <br /></div></blockquote>

    <h3>Lisää vaakaviiva: [hr]</h3>
    Lisätäksesi erottavan vaakaviivan voit käyttää [hr] elementtiä.
    Se näyttää tältä:
    <hr>
    Käytä esimerkiksi pitkien viestien jaksottamiseen ja jäsentämiseen.

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
