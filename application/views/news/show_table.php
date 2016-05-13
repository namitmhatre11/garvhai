<?php
	//print_r($news);
	$this->table->set_heading('id', 'Headline', 'slug', 'Description');
	echo $this->table->generate($news);

	echo "<br/>";
	echo "<br/>";

	/*$this->table->set_heading('Name', 'Color', 'Size');

	$this->table->add_row('Fred', 'Blue', 'Small');
	$this->table->add_row('Mary', 'Red', 'Large');
	$this->table->add_row('John', 'Green', 'Medium');

	echo $this->table->generate();*/