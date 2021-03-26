<?php if ($form->valid == false): ?>
<p class="error">Please supply the missing information</p>
<?php endif; ?>

<h1>Contact Us</h1>

		<p>Please fill out the details to contact us</p>
		
		<form action="contact.php" method="post" novalidate>
		<fieldset>
			<legend>Details</legend>
			<p>
				<label for="firstName" <?= $form->setErrorClass("firstName") ?>>First name *</label>
				<input type="text" name="firstName" id="firstName" value="<?= $form->setValue("firstName") ?>">
				<span class="message"><?= $firstNameMessage ?></span>
			</p>

			<p>
				<label for="lastName" <?= $form->setErrorClass("lastName") ?>>Last name *</label>
				<input type="text" name="lastName" id="lastName" value="<?= $form->setValue("lastName") ?>">
				<span class="message"><?= $lastNameMessage ?></span>
			</p>

            <p>
				<label for="contactNumber" >Contact number</label>
				<input type="text" name="contactNumber" id="contactNumber" value="<?= $form->setValue("contactNumber") ?>">
			</p>

			<p>
				<label for="email" <?= $form->setErrorClass("email") ?>>Email *</label>
				<input type="email" name="email" id="email" value="<?= $form->setValue("email") ?>">
				<span class="message"><?= $emailMessage ?></span>
			</p>

			<p>
			<label for="question">Any question?</label>
			<textarea name="question" id="question" rows="4" cols="50">
				<?= $form->setValue("question") ?>
			</textarea>
			</p>

		</fieldset>
			<p>
				<input type="submit" name="submitButton" id="submitButton" value="Submit">		
			</p>

		</form>