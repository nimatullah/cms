<fieldset>
<legend><strong>Admin Panel Of The Website</strong></legend>
<?php
 $arr=array('id' => 'add_news' , 'name' =>'add_news');
 echo form_open('news/home/addNews',$arr);
?>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
        <td>
            title
        </td>
        <td>
          <input type="text" id="title" name="title"  size="25" maxlength="50" value="<?=set_value('title')?>"/>
          <?=form_error('title')?>
        </td>
  </tr>
  <tr>
        <td>
            Featured News
        </td>
        <td>
          <select name="featured_news" id="featured_news" >
                   <option value="0"> Not Featured</option>
                   <option value="1" > Featured</option>
          </select>
          <?=form_error('featured_news')?>
        </td>
  </tr>
  <tr>
        <td>
            Status
        </td>
        <td>
          <select name="status" id="status" >
                   <option value="b"> Not Active</option>
                   <option value="a" > Active</option>
          </select>
          <?=form_error('featured_news')?>
        </td>
  </tr>
  
  <tr>
        <td>
            Description
        </td>
        
        <td>
        <textarea cols="100" id="desc" name="desc" rows="10"><?=set_value('')?></textarea>

        <script>
            // Replace the <textarea id="editor1"> with an CKEditor instance.
            CKEDITOR.replace( 'desc', {
                on: {
                    focus: onFocus,
                    blur: onBlur,

                    // Check for availability of corresponding plugins.
                    pluginsLoaded: function( evt ) {
                        var doc = CKEDITOR.document, ed = evt.editor;
                        if ( !ed.getCommand( 'bold' ) )
                            doc.getById( 'exec-bold' ).hide();
                        if ( !ed.getCommand( 'link' ) )
                            doc.getById( 'exec-link' ).hide();
                    }
                }
            });
        </script>
        </td>
  </tr>
  <tr>
        <td colspan="2">
             <input type="button" value="Cancel" onclick="parent.location='<?=base_url()?>cms/home'"> 
             <input type="submit" value="Save" > 
        </td>
  </tr>
  
</table>
<?=form_close()?>
</fieldset>