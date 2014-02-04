<html>
	<head>
		<link rel="stylesheet" href="hint.min.css"></link>
		<style>
			.hoverable{
				cursor:pointer;
				font-weight: bold;				
			}
		</style>
	</head>
	<body>
		<!--
		Add tutorial for the 4 sections.	
		-->
		<div style="float: left; margin-left: 150px; margin-top: 15px; margin-bottom: 100px;">			
			To use the library add one of the following classes:<br>
			hint--top<br>
			hint--left<br>
			hint--right<br>
			hint--bottom<br>
			<br>		
			Ex:<br>	
			<span class="hint--top hoverable" data-hint="On top">Top Tip</span><br>
			<span class="hint--right hoverable" data-hint="On right">Right Tip</span><br>
			<span class="hint--left hoverable" data-hint="On left">Left Tip</span><br>
			<span class="hint--bottom hoverable" data-hint="On Bottom">Bottom Tip</span>
			<br><br>			
			In addition to the above classes, you can<br>
			change the color depending on the type of tip it is:<br>
			hint--error<br>
			hint--warning<br>
			hint--info<br>
			hint--success<br>
			<br>		
			Ex:<br>	
			<span class="hint--top hint--error hoverable" data-hint="You Dun Fucked up!">Error</span><br>
			<span class="hint--right hint--warning hoverable" data-hint="You gunna get a ticket next time!">Warning!</span><br>
			<span class="hint--left hint--info hoverable" data-hint="Thought you would liek to know!">Info!</span><br>
			<span class="hint--bottom hint--success hoverable" data-hint="I knew you could do it!">Success!</span>
			<br><br>
			Lastly there are a few other effects you can get:<br>
			hint--bounce<br>
			hint--rounded<br>
			hint--always<br>
			<br>		
			Ex:<br>				
			<span class="hint--left hint--bounce hoverable" data-hint="I'm fucking tiger yo!">Bounce in!</span><br>
			<span class="hint--right hint--rounded hoverable" data-hint="Round and sexy!">Rounded!</span><br>
			<span class="hint--right hint--always hoverable" data-hint="Never gonna give you up!">Always!</span>
			<br><br>
			Also for pictures, you have to wrap the img tag in a span tag to get it to work:
			<br>		
			Ex:<br>						
			<span class="hint--right" data-hint="Samurai Kanji!" style="width: 100px;height: 100px;">
				<img src="samurai.jpg"  width="100" height="100" alt="samurai!"/>
			</span>
			<br><br>
			Here is an example of multi-line toolips, <br>
			this is a small extension I found in the github-issues for the <br>
			library, doesn't seem to be *official* but it works.<br>
			Also hover this one to see the other issues with the library:<br>
			hint--multiline<br>
			<span class="hint--right hint--multiline hoverable" data-hint="Can't use links in the tooltips Only usable on hover, not on click."
			>Limitations</span>
		</div>
		
	</body>
</html>