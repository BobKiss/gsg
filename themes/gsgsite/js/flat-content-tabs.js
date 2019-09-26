jQuery(document).ready(function($) {
  //flat info tabs switching
  $('.flat-tab-trigger').on('click', function(e){
    $(this).toggleClass('active');
    var data = {
      action: 'get-flat-tab-content',
      variation_id: $('input.variation_id').val(),
      tabname: $(this).data('name')
    };
    $.ajax({
      data: data,
      url: woocommerce_params.ajax_url,
      method: 'POST',
      dataType: 'json',
    })
    .done(function(response){
      console.log(response);
      $('.flat-tab-content-container').html('<pre>'+JSON.stringify(response)+'</pre>');
    });
  });
  //flat info tabs switching end

  //set when WooCommerce variations form is loaded - set choose flat svg attributes
  $('.variations_form').on('wc_variation_form', function(e){
    var variations = $(this).data('product_variations');
    console.log(variations);
    //set variation_id and block if it's not in stock
    $('.choose-flat-img-container .flat-item').each(function(index, el){
      $(this).attr('data-variation_id', variations[index].variation_id);
      if(!variations[index].is_in_stock){
        $(this).addClass('disabled');
      }
    });
  });

  //selecting flat
  $('.choose-flat-img-container .flat-item').not('.disabled').on('click', function(e){
    $('.choose-flat-img-container .flat-item').not('.disabled').removeClass('active');
    $(this).addClass('active');
  });

});
