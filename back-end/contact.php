<section id="contact">

<div class="container contact">
	
	<div class="contact-form">
		<h1 class="title"><?php 
                        echo $langue['contactUs'] ;
                            ?></h1>
		<h2 class="subtitle"><?php 
                        echo $langue['sousContact'] ;
                            ?></h2>
		<form width="50%" height="650px" frameborder="0" style="border:0" allowfullscreen action="back-end/sql.php" id="form" method="POST" novalidate>
            <input class="" id ="nom"type="text" name="nom" placeholder="Nom" onfocusout="ValidateName()" />
            <span class="helper-text"></span>
            <input class="" id ="email"type="email" name="email" placeholder="Email" onfocusout="ValidateEmail()"  />
            <span class="helper-text"></span>
            <input class=""id ="tel" type="tel" name="tel" placeholder="Tel"onfocusout="ValidateTel()" />
            <span class="" class="helper-text"></span>
            <textarea id ="msg" name="message" id="" rows="8" placeholder="votre message" onfocusout="ValidateMsg()"></textarea>
            <span class="helper-text"></span>
			<input type="submit" name="send" id="btn" value="Envoyer" class="btn btn-primary">
			</form>
	</div>
</div>
</section>
