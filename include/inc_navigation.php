<style type="text/css">

/* #Navigation
================================================== */
#navigation { position: absolute; top: 40%; width: 100%; z-index: 2; }
#navigation ul, #navigation li { margin-bottom: 0 }
#navigation ul.left { text-align: right }
#navigation li { display: inline }
#navigation li a { display: inline-block; background: #fff; color: #717171; font: normal 18px Lato,sans-serif; margin: 8px 10px; margin-right: -4px; }
#navigation li a:hover { color: #97263e;padding-bottom: 6px; border-bottom:2px solid #97263e;}
#navigation ul.left li a:first-child { margin-left: 20px }
#navigation ul.right li a:last-child { margin-right: 20px }
#navigation select { display:none; }

/* #Logo  网站标题啊
================================================== */
#logo { 
    text-align: center; 
    font-size: 2.4em;
    font-weight: bold;
  /*letter-spacing: -1px;*/
/*  position: relative; z-index: 1; background: url("images/bg_double_dark.png") repeat-x scroll 0 82px transparent;*/
}

/*#logo a { display: inline-block; background: #fff; padding: 0 80px; }*/


#gentle-bar{

    /*background-color:#de4957;*/
    /*color:#fcfcfc;*/
    /*height: 400px;*/
    /*background: url("./images/canton.jpg");*/
    background-size:100%,100%;
    
    background-repeat:no-repeat;
    background-size:75%;
}
.bg1 {
  background-color:#00C1BF;
  height: 752px;
  color:#FFFFFF;
  /*background-image:url('./images/bg-shade.png');
  background-repeat:no-repeat;background-size:75%;*/
}
  #gentle-bar{
    padding: 30px 0px 90px 0px;
  }

  .gentle{
    padding:0px;
  }
  
  #gentle-left {
    text-align: right;
  }
</style>

<header>
<div id="gentle-bar" class="navbar">

    <div id="navigation">
      <ul id="gentle-left" class="col-md-4 pull-left gentle main-nav">
          <li><a href="#" class="opt1" id="nopt1">Services</a></li>
          <li><a href="#" class="opt2" id="nopt2">Portfolio</a></li>
      </ul><!-- /nav.left -->
      <ul class="col-md-4 gentle">
        <h1 id="logo"> Han Jiang </h1>        
      </ul>
      <ul class="col-md-4 pull-right gentle main-nav"> 
          <li><a href="#" class="opt3" id="nopt3">Clients</a></li>
          <li><a href="#" class="opt4" id="nopt4">Contact Me</a></li>
      </ul><!-- /nav.right -->
    </div><!-- /navigation -->
  </div><!-- /navigation -->
</header><!-- /header -->
