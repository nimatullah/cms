<fieldset>
<legend><strong>Add News into database</strong></legend>
<?php
 $arr=array('id' => 'add_artical' , 'name' =>'add_artical');
 echo form_open('artical/home/updateArtical/'.$id,$arr);
?>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
        <td>
        <strong>
            title
         </strong>   
        </td>
        <td>
          <input type="text" id="title" name="title"  size="25" maxlength="50" value="<?=$records['title']?>"/>
          <?=form_error('title')?>
        </td>
  </tr>
  <tr>
        <td>
        <strong>
            Status
         </strong>   
        </td>
        <td>
        
          <select name="status" id="status" >
                 <?=$status?>
          </select>
          <?=form_error('featured_news')?>
        </td>
  </tr>
  
  <tr>
        <td valign="top">
        <strong>
            Description
        </strong>    
        </td>
        <td>
          <textarea cols="70" id="desc" name="desc" rows="10"><?=$records['desc']?></textarea>

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
          <?=form_error('desc')?>
        </td>
  </tr>
  <tr>
        <td colspan="2">
             <input type="button" value="Cancel" onclick="parent.location='<?=base_url()?>artical/home'"> 
             <input type="submit" value="Save" > 
        </td>
  </tr>
  
</table>
<?=form_close()?>
</fieldset>
