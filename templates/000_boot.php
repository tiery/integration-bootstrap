<?php
$templateName = 'Bootstrap';
?>
<?php include_once('../config.php'); ?>
<?php include_once(_ROOT_ . 'includes/head.php'); ?>

<div role="main">

	<h1>Headings</h1>
	
	<h1>Heading 1</h1>
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	<h2>Heading 2</h2>
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	<h3>Heading 3</h3>
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	<h4>Heading 4</h4>
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	<h5>Heading 5</h5>
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	<h6>Heading 6</h6>
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	
	<hr>
	
	<h1>Paragraph</h1>
	
	<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	
	<hr>
	
	<h1>List Types</h1>
	
	<h2>Definition List</h2>
	<dl>
		<dt>Definition List Title</dt>
		<dd>This is a definition list division.</dd>
	</dl>
	
	<h2>Ordered List</h2>
	<ol>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
	</ol>
	
	<h2>Unordered List</h2>
	<ul>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
	</ul>
	
	<hr>
	
	<h1>Fieldsets, Legends, and Form Elements</h1>
	
	<fieldset>
		<legend>Legend</legend>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>
		<form>
			<h2>Form Element</h2>	
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>
			<p>
				<label for="text_field">Text Field:</label><br>
				<input type="text" id="text_field">
			</p>
			<p>
				<label for="search_field">Search Field:</label><br>
				<input type="search" id="search_field">
			</p>
			<p>
				<label for="text_area">Text Area:</label><br>
				<textarea id="text_area"></textarea>
			</p>
			<p>
				<label for="select_element">Select Element:</label><br>
				<select name="select_element">
					<optgroup label="Option Group 1">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</optgroup>
					<optgroup label="Option Group 2">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</optgroup>
				</select>
			</p>		
			<p>
				<label for="radio_buttons">Radio Buttons:</label><br>
				<input type="radio" class="radio" name="radio_button" value="radio_1"> Radio 1<br>
				<input type="radio" class="radio" name="radio_button" value="radio_2"> Radio 2<br>
				<input type="radio" class="radio" name="radio_button" value="radio_3"> Radio 3<br>
			</p>
			<p>
				<label for="checkboxes">Checkboxes:</label><br>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_1"> Radio 1<br>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_2"> Radio 2<br>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_3"> Radio 3<br>
			</p>
			<p>
				<label for="password">Password:</label><br>
				<input type="password" class="password" name="password">
			</p>
			<p>
				<label for="file">File Input:</label><br>
				<input type="file" class="file" name="file">
			</p>
			<p>
				<input class="button" type="reset" value="Clear">
				<input class="button" type="submit" value="Submit">
			</p>
		</form>
	</fieldset>
	
	<hr>
	
	<h1>Tables</h1>
	
	<table cellspacing="0" cellpadding="0">
		<tr>
			<th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
		</tr>
		<tr>
			<td>Division 1</td><td>Division 2</td><td>Division 3</td>
		</tr>
		<tr class="even">
			<td>Division 1</td><td>Division 2</td><td>Division 3</td>
		</tr>
		<tr>
			<td>Division 1</td><td>Division 2</td><td>Division 3</td>
		</tr>
	</table>
	
	<hr>
	
	<h1>Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>
	
	<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>
	<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>
	
	<blockquote>
		"This stylesheet is going to help so freaking much." <br>-Blockquote
	</blockquote>
	
</div>

<?php include_once(_ROOT_ . 'includes/foot.php'); ?>