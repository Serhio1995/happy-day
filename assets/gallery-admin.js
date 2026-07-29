(function($){
  'use strict';

  var frame;
  var $list=$('#hd-gallery-image-list');
  var $empty=$('.hd-gallery-empty');

  function escapeHtml(value){
    return $('<div>').text(value||'').html();
  }

  function refreshEmpty(){
    $empty.toggleClass('is-hidden',$list.children('.hd-gallery-image-row').length>0);
  }

  function rowHtml(attachment){
    var thumb=(attachment.sizes&&attachment.sizes.thumbnail)
      ?attachment.sizes.thumbnail.url
      :attachment.url;
    return ''+
      '<div class="hd-gallery-image-row" data-id="'+attachment.id+'">'+
        '<span class="hd-gallery-drag dashicons dashicons-move" title="Drag to reorder"></span>'+
        '<img src="'+escapeHtml(thumb)+'" alt="">'+
        '<input type="hidden" name="hd_gallery_image_id[]" value="'+attachment.id+'">'+
        '<label><span>Work title</span>'+
          '<input type="text" name="hd_gallery_image_title[]" value="'+escapeHtml(attachment.title)+'" placeholder="Example: Elegant balloon backdrop">'+
        '</label>'+
        '<label><span>Short event label</span>'+
          '<input type="text" name="hd_gallery_image_event[]" value="" placeholder="Example: Birthday celebration">'+
        '</label>'+
        '<button type="button" class="button-link-delete hd-gallery-remove-image" aria-label="Remove image">'+
          '<span class="dashicons dashicons-trash"></span>'+
        '</button>'+
      '</div>';
  }

  $list.sortable({
    axis:'y',
    handle:'.hd-gallery-drag',
    placeholder:'hd-gallery-sort-placeholder'
  });

  $('#hd-gallery-add-images').on('click',function(event){
    event.preventDefault();
    if(frame){
      frame.open();
      return;
    }
    frame=wp.media({
      title:'Add images to this gallery category',
      button:{text:'Add selected images'},
      library:{type:'image'},
      multiple:true
    });
    frame.on('select',function(){
      var existing={};
      $list.children('.hd-gallery-image-row').each(function(){
        existing[String($(this).data('id'))]=true;
      });
      frame.state().get('selection').each(function(model){
        var attachment=model.toJSON();
        if(existing[String(attachment.id)]) return;
        existing[String(attachment.id)]=true;
        $list.append(rowHtml(attachment));
      });
      refreshEmpty();
    });
    frame.open();
  });

  $list.on('click','.hd-gallery-remove-image',function(){
    $(this).closest('.hd-gallery-image-row').remove();
    refreshEmpty();
  });

  refreshEmpty();
})(jQuery);
