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

  //selecting flat
  $('.choose-flat-img-container .flat-item').not('.disabled').on('click', function(e){
    $('.choose-flat-img-container .flat-item').not('.disabled').removeClass('active');
    $(this).addClass('active');
  });

});
