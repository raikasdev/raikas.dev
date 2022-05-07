<!DOCTYPE html>
<?php

$response = file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ipaddress);
$data =  @json_decode($response);
$country = $data->geoplugin_countryName;
echo $country;

if ($country == "Finland" AND !isset($_GET['noredir'])) {
    header("Location: https://raikas.dev/");
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
    <link rel="stylesheet" type="text/css" href="../index.css">
  </head> 
  <body> 
    <div id="console">
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat about_me.txt<br/><br/>
      👋 Hello there! I'm Roni Äikäs, a <span id="age">13</span>-year-old software developer and hobbyist white hat hacker.<br/>
      I am also an <a href="https://mikroni.fi">entrepreneur</a>, and I create websites for small businesses with WordPress.<br/>
      I placed third in the <a href="https://challenge.fi">challenge.fi</a> competetion's first season in the summer of 2021.<br/>
      <br/>
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat projects.txt<br/><br/>
      I have been part of these amazing projects:<br/>
      <ul>
      <li>- <a href="https://ritta.fi">Ritta</a>, open source student information system<br/>
        <ul>
          <li>- <a href="https://github.com/rittaschool/ritta-server">Backend development</a> (TypeScript, NodeJS, NestJS)<br/></li>
          <li>- <a href="https://ritta.fi">ritta.fi-website</a> (Wordpress)<br/></li>
        </ul>
      </li>
      <li>
      - <a href="https://testausserveri.fi">testausserveri.fi</a>, The biggest community of young developers and hackers in Finland<br/>
        <ul>
          <li>- <a href="https://github.com/emphatetics/empathy">Empathy</a>, Junction 2021-hackathon entry Discord bot, which makes democratic moderation possible on Discord. (JavaScript, NodeJS, discord.js)<br/></li>
        </ul>  
        </li>
      <li>- TubuCraft, finnish Minecraft server for young people<br/>
        <ul><li>- Zombies-minigame (Java, PaperMC)<br/></li></ul>
      </li>
      <li>- Dysfold, finnish Minecraft-roleplay server<br/>
        <ul><li>- Development of custom features (TypeScript, CraftJS)<br/></li></ul>
      </li>
      </ul>
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat setup.txt<br/><br/>
		I mostly use my self built desktop computer for everything. I have Arch Linux for programming and Windows 10 for gaming dualbooted. I use Gnome as my desktop environment and mostly the VSCode editor. For coding time tracking I use <a href="https://testaustime.fi">TestausTime</a>. You can add me as a friend with the friend code <i>ttfc_rYa9W9H5kgs0mUmOaC08CtQi</i><br>I also own a old Thinkpad T420 that runs <a https="https://zorin.com/os">Zorin Lite</a>.<br>Heres a list of my desktop's specs, or just view the <a href="https://raikas.dev/neofetch.png">neofetch-screenshot</a>
		- Processor <b>AMD Threadripper 1900X (8C 16T 3.8Ghz)</b><br>
		- Graphics card <b>nVidia GTX 1060 6GB</b> (I use the nouveau-driver)<br>
		- RAM <b>32GB (Corsair, DDR4 2134 Mhz, 4x8GB)</b><br>
    - Drives <b>Samsung M2.0 970 EVO Plus 500GB, Kingston 240GB SSD, Barracuda 1TB</b><br>
    - Screens <b>Primary: AOC 144hz 27" gaming monitor, secondary is a Dell 22"</b>
      <br/><br>
      <span id="a">guest@raikas.dev</span>:<span id="b">~</span><span id="c">$</span> cat contact.txt<br/><br/>
      You can find me in the internet:<br/>
      - Email <b><span id="email">Allow JavaScript to see!</span></b><br/>
      - GitHub <b><a href="https://github.com/raikasdev">@raikasdev</a></b><br/>
      - Discord <b>Raikas#0178</b><br/>
      - Twitter <b><a href="https://twitter.com/raikasdev">@raikasdev</a></b><br/>
      - Mastodon <b>@roniaikas@social.isekai.fi</b><br/>
      - Irc <b>@raikas</b> (irc.quakenet.org)<br/>
</div> 
    <script>
    function getAge(e){var t=new Date,g=new Date(e),a=t.getFullYear()-g.getFullYear(),n=t.getMonth()-g.getMonth();return(n<0||0===n&&t.getDate()<g.getDate())&&a--,a}
    document.getElementById('age').innerHTML = getAge('2008/09/03');
    document.getElementById('email').innerHTML = "roni(at)raikas.dev"
    </script> 
  </body> 
</html> 
