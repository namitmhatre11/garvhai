<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text" rows="10" cols="80"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //$.noConflict();
        $( document ).ready(function() {
		    console.log( "ready!" );
		    CKEDITOR.replace( 'text' );
		});
        
    </script>

</form>