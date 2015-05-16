	<div id="contact_form" class="hide">
		<div class="item">Use the form to send an e-mail:</div>
		<div class="item">
			<label for="name">Name:</label>
			<input id="name" name="name" type="text" />
		</div>
		<div class="item">
			<label for="email">E-mail:</label>
			<input id="email" name="email" type="text" />
		</div>
		<div class="item">
			<label for="assunto">Subject:</label>
			<input id="assunto" class="assunto" type="text" />
		</div>
		<div class="item_msg">
			<label for="mensagem">Message:</label>
			<textarea name="mensagem" id="mensagem" class="mensagem"></textarea>
		</div>
		<div id="contact_button">
			<input type="button" value="enviar" onclick="sendEmail();"/>
		</div>
	</div>