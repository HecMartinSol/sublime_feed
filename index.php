<?php 
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>C:\</title>
	<link rel="icon" type="image/ico" href="sublime-icon.ico">

	<style type="text/css">
		body{
		  background-color: #272822;
		  padding: 0;
		  margin: 0;
		  overflow: hidden;
		}
		.noselect {
		  -webkit-touch-callout: none; /* iOS Safari */
		    -webkit-user-select: none; /* Safari */
		     -khtml-user-select: none; /* Konqueror HTML */
		       -moz-user-select: none; /* Firefox */
		        -ms-user-select: none; /* Internet Explorer/Edge */
		            user-select: none; /* Non-prefixed version, currently
		                                  supported by Chrome and Opera */
		}


		.window_bars{
			height: 60px;
			width: 100%;
			background: #c3c3c3;
		}
		.window_bars .window_control{
			background: #3c6478;
			height: 30px;
		}
		.window_bars .window_control img{
			height: 20px;
			margin: 5px 5px 5px 5px;
		}

		.window_bars .window_menu{
			background: #c3c3c3;
			height: 30px;
			vertical-align: middle;
		}
		.window_bars .window_menu ul{
			margin: 0;
			padding: 6px 0px 6px 0px;
			list-style: none;
		}
		.window_bars .window_menu ul li{
			float: left;
			margin: 0 10px 0 10px;
		}

		/* ------------------------------ */
		.sidebar{
		  background-color: white;
		  width: 15%;
		  float: left;
		  height: -webkit-fill-available;
		  padding: 1%;
		  overflow-y: scroll;
		}
		.sideCode{
		  width: 85%;
		  float: right;
		  overflow-y: scroll;
		}
		/* Adjusted to give override background and text colour */
		.highlight pre, pre, .highlight .hll {
		  background-color: #49483E;
		  border: 1px solid #ccc;
		  padding: 6px 10px;
		  border-radius: 3px;
		  color: #FFFFFF;
		}

		.gist pre {
		  color: #515151;
		}

		/* ------------------------------ */
			/* Highlights taken from https://gist.github.com/asaaki/1007420  for Monokai theme */
			.c                 { color: #75715e }                            /* Comment                     */
			.err               { color: #960050; background-color: #1e0010 } /* Error                       */
			.k                 { color: #66d9ef }                            /* Keyword                     */
			.l                 { color: #ae81ff }                            /* Literal                     */
			.n                 { color: #f8f8f2 }                            /* Name                        */
			.o                 { color: #f92672 }                            /* Operator                    */
			.p                 { color: #f8f8f2 }                            /* Punctuation                 */
			.cm                { color: #75715e }                            /* Comment.Multiline           */
			.cp                { color: #75715e }                            /* Comment.Preproc             */
			.c1                { color: #75715e }                            /* Comment.Single              */
			.cs                { color: #75715e }                            /* Comment.Special             */
			.ge                { font-style: italic }                        /* Generic.Emph                */
			.gs                { font-weight: bold }                         /* Generic.Strong              */
			.kc                { color: #66d9ef }                            /* Keyword.Constant            */
			.kd                { color: #66d9ef }                            /* Keyword.Declaration         */
			.kn                { color: #f92672 }                            /* Keyword.Namespace           */
			.kp                { color: #66d9ef }                            /* Keyword.Pseudo              */
			.kr                { color: #66d9ef }                            /* Keyword.Reserved            */
			.kt                { color: #66d9ef }                            /* Keyword.Type                */
			.ld                { color: #e6db74 }                            /* Literal.Date                */
			.m                 { color: #ae81ff }                            /* Literal.Number              */
			.s                 { color: #e6db74 }                            /* Literal.String              */
			.na                { color: #a6e22e }                            /* Name.Attribute              */
			.nb                { color: #f8f8f2 }                            /* Name.Builtin                */
			.nc                { color: #a6e22e }                            /* Name.Class                  */
			.no                { color: #66d9ef }                            /* Name.Constant               */
			.nd                { color: #a6e22e }                            /* Name.Decorator              */
			.ni                { color: #f8f8f2 }                            /* Name.Entity                 */
			.ne                { color: #a6e22e }                            /* Name.Exception              */
			.nf                { color: #a6e22e }                            /* Name.Function               */
			.nl                { color: #f8f8f2 }                            /* Name.Label                  */
			.nn                { color: #f8f8f2 }                            /* Name.Namespace              */
			.nx                { color: #a6e22e }                            /* Name.Other                  */
			.py                { color: #f8f8f2 }                            /* Name.Property               */
			.nt                { color: #f92672 }                            /* Name.Tag                    */
			.nv                { color: #f8f8f2 }                            /* Name.Variable               */
			.ow                { color: #f92672 }                            /* Operator.Word               */
			.w                 { color: #f8f8f2 }                            /* Text.Whitespace             */
			.mf                { color: #ae81ff }                            /* Literal.Number.Float        */
			.mh                { color: #ae81ff }                            /* Literal.Number.Hex          */
			.mi                { color: #ae81ff }                            /* Literal.Number.Integer      */
			.mo                { color: #ae81ff }                            /* Literal.Number.Oct          */
			.sb                { color: #e6db74 }                            /* Literal.String.Backtick     */
			.sc                { color: #e6db74 }                            /* Literal.String.Char         */
			.sd                { color: #e6db74 }                            /* Literal.String.Doc          */
			.s2                { color: #e6db74 }                            /* Literal.String.Double       */
			.se                { color: #ae81ff }                            /* Literal.String.Escape       */
			.sh                { color: #e6db74 }                            /* Literal.String.Heredoc      */
			.si                { color: #e6db74 }                            /* Literal.String.Interpol     */
			.sx                { color: #e6db74 }                            /* Literal.String.Other        */
			.sr                { color: #e6db74 }                            /* Literal.String.Regex        */
			.s1                { color: #e6db74 }                            /* Literal.String.Single       */
			.ss                { color: #e6db74 }                            /* Literal.String.Symbol       */
			.bp                { color: #f8f8f2 }                            /* Name.Builtin.Pseudo         */
			.vc                { color: #f8f8f2 }                            /* Name.Variable.Class         */
			.vg                { color: #f8f8f2 }                            /* Name.Variable.Global        */
			.vi                { color: #f8f8f2 }                            /* Name.Variable.Instance      */
			.il                { color: #ae81ff }                            /* Literal.Number.Integer.Long */
		/* ------------------------------ */

	</style>
</head>
<body>
	
	<!--
	<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
	<div class="window">
	    <div class="window-caption">
	        <span class="icon  file-text"></span>
	        <span class="title">C:/ </span>
	        
	        <div class="buttons">
	            <span class="btn-min"></span>
	            <span class="btn-max"></span>
	            <span class="btn-close"></span>
	        </div>
	    </div>
	    <div class="window-content p-2">
	        Window content
	    </div>
	</div>
	-->


	<div class="window_bars noselect">
		<div class="window_control">
			<img src="sublime-icon.svg" >
		</div>
		<div class="window_menu">
			<ul>
				<li>File</li>
				<li>Edit</li>
				<li>Selection</li>
				<li>Find</li>
				<li>View</li>
				<li>Goto</li>
				<li>Tools</li>
				<li>Project</li>
				<li>Preferences</li>
				<li>Help</li>
			</ul>
		</div>
	</div>

	<div class="app_content">
		<div class="sidebar">
			sidebar
		</div>

		<div class="sidecode">
			<div class="tabs">tabs</div>
			<div class="code">code</div>
		</div>
	</div>
</body>
</html>