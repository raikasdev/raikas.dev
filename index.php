<!DOCTYPE html>
<?php

$response = file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ipaddress);
$data =  @json_decode($response);
$country = $data->geoplugin_countryName;
echo $country;
if ($country != "Finland" AND !isset($_GET['noredir'])) {
    header("Location: https://raikas.dev/english");
    die();
}
?>
<html lang="fi"> 
  <head> 
    <title>Roni Äikäs - raikas.dev</title> 
	  <meta charset="utf-8" />
	  <meta name="title" content="Roni Äikäs - raikas.dev">
    <meta name="description" content="Olen Roni Äikäs, jämsäläinen 13-vuotias ohjelmoija, harrastevalkohattuhakkeri ja pienyrittäjä, joka toteuttaa yrityksille mm. Wordpress-verkkosivuja.">
    <meta name="keywords" content="roni,roni äikäs,äikäs,raikasdev,raikas">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Finnish">
    <meta name="author" content="Roni Äikäs">
    <link rel="stylesheet" type="text/css" href="/index.css">
  </head> 
  <body> 
    <div id="console">
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat about_me.txt<br/><br/>
      👋 Tervehdys! Olen Roni Äikäs, jämsäläinen <span id="age">13</span>-vuotias ohjelmoija ja harrastevalkohattuhakkeri.<br/>
      Olen myös <a href="https://mikroni.fi">pienyrittäjä</a> ja toteutan yrityksille mm. Wordpress-verkkosivuja.<br/>
      Kesällä 2021 pääsin <a href="https://challenge.fi">challenge.fi-kilpailun</a> ensimmäisen kauden kolmannelle palkintosijalle.<br/>
      <br/>
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat projects.txt<br/><br/>
      Vaikka nuori olenkin, olen ollut mukana seuraavissa projekteissa:<br/>
      <ul>
      <li>- <a href="https://ritta.fi">Ritta</a>, avoimen lähdekoodin oppilashallintojärjestelmä<br/>
        <ul>
          <li>- <a href="https://github.com/rittaschool/ritta-server">Kehitys</a> (TypeScript, NodeJS, NestJS)<br/></li>
          <li>- <a href="https://ritta.fi">ritta.fi-verkkosivut</a> (Wordpress)<br/></li>
        </ul>
      </li>
      <li>
      - <a href="https://testausserveri.fi">testausserveri.fi</a>, Suomen suurin tietotekniikasta kiinnostuneiden nuorten yhteisö <br/>
        <ul>
          <li>- <a href="https://github.com/emphatetics/empathy">Empathy</a>, Junction 2021-hackathonia varten tehty Discord-botti, joka mahdollistaa äänestyspohjaisen moderoinnin chat-alusta Discordissa. (JavaScript, NodeJS, discord.js)<br/></li>
        </ul>  
        </li>
      <li>- TubuCraft, suomalainen nuorille suunnattu Minecraft-palvelin<br/>
        <ul><li>- Zombies-pelimuoto (Java, PaperMC)<br/></li></ul>
      </li>
      <li>- Dysfold, suomalainen Minecraft-roolipelipalvelin<br/>
        <ul><li>- Toimintojen kehitys (TypeScript, CraftJS)<br/></li></ul>
      </li>
      </ul>
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat setup.txt<br/><br/>
		Pääasiassa käytän kaikkeen itse rakennettua pöytätietokonettani. Pöytäkoneelta löytyy dualbootattuna Arch Linux ohjelmointiin ja Windows 10 pelaamiseen. <br />Työpöytäympäristönä käytän Gnomea, editorina joko pääasiassa VSCodea. Ohjelmointiin käytetyn ajan tarkkailuun käytän Testausserverin yhteisön kehittämää <a href="https://testaustime.fi">Testaustimeä</a>. Voit lisätä minut kaveriksi kaverikoodilla <i>ttfc_rYa9W9H5kgs0mUmOaC08CtQi</i><br>Pöytäkoneeni lisäksi minulta löytyy vanha läppäri Thinkpad T420, jolla pyörii <a href="https://zorin.com/os/">Zorin Lite</a>.<br>Tässä lista pöytäkoneen speksejä, tai katso <a href="https://raikas.dev/neofetch.png">neofetch-kuvakaappaus</a>:<br>
		- Prosessori <b>AMD Threadripper 1900X (8C 16T 3.8Ghz)</b><br>
		- Näytönohjain <b>nVidia GTX 1060 6GB</b> (käytän nouveau-drivereitä)<br>
		- RAM <b>32GB (Corsair, DDR4 2134 Mhz, 4x8GB)</b><br>
		- Massamuisti <b>Samsung M2.0 970 EVO Plus 500GB, Kingston 240GB SSD, Barracuda 1TB</b><br>
		- Näytöt <b>Päänäyttö: AOC 144hz 27" pelinäyttö, toinen näyttö Dellin 22"</b>
	<br/><br>
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat contact.txt<br/><br/>
      Minut löytää internetistä:<br/>
      - Sähköpostista <b><span id="email">Salli JavaScript-sisältö nähdäksesi sähköpostiosoite!</span></b><br/>
      - GitHubista <b><a href="https://github.com/raikasdev">@raikasdev</a></b><br/>
      - Discordista <b>Raikas#0178</b><br/>
      - Twitteristä <b><a href="https://twitter.com/raikasdev">@raikasdev</a></b><br/>
      - Mastodonista <b>@roniaikas@social.isekai.fi</b><br/>
      - Ircistä <b>@raikas</b> (irc.quakenet.org)<br/>
</div> 
    <script>
    function getAge(e){var t=new Date,g=new Date(e),a=t.getFullYear()-g.getFullYear(),n=t.getMonth()-g.getMonth();return(n<0||0===n&&t.getDate()<g.getDate())&&a--,a}
    document.getElementById('age').innerHTML = getAge('2008/09/03');
    document.getElementById('email').innerHTML = "roni(at)raikas.dev"
    </script> 
  </body> 
</html> 