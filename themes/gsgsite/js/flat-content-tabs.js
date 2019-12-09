jQuery(document).ready(function($) {

  //possoble apartment variatons + packages
  // var apartmentTypes = [
  //   { id: 'top_dup', label: 'Top duplex', price: '2257000' },
  //   { id: 'garden_dup', label: 'Gargen duplex', price: '2587000' },
  //   { id: 'cellar_garden', label: 'Cellar + Garden duplex', price: '3817500' },
  // ];
  // var packagePrices = {
  //   top_dup : [
  //     { label : 'Premium package', price: '61250'},
  //     { label : 'Pool Package', price: false },
  //     { label : 'Indulgence package', price: '211587'},
  //     { label : 'Cheef package', price: '117500'},
  //     { label : 'Fitness package', price: false },
  //   ],
  //   garden_dup: [
  //     { label : 'Premium package', price: '81250'},
  //     { label : 'Pool Package', price: '166250'},
  //     { label : 'Indulgence package', price: '265337'},
  //     { label : 'Cheef package', price: '190000'},
  //     { label : 'Fitness package', price: false },
  //   ],
  //   cellar_garden: [
  //     { label : 'Premium package', price: '81250'},
  //     { label : 'Pool Package', price: '166250'},
  //     { label : 'Indulgence package', price: '265337'},
  //     { label : 'Cheef package', price: '190000'},
  //     { label : 'Fitness package', price: '136000'},
  //   ]
  // };
  //Selects with package and apartment logic


  //flat tabs switching
  $('.flat-tab-trigger').on('click', function(e){

    e.preventDefault();
    if(!$(this).hasClass('disabled') && !$(this).hasClass('active')){


      $('.flat-tab-trigger.active').removeClass('active');
      $(this).addClass('active');

      var data = {
        action: 'get-flat-tab-content',
        variation_id: $('input.variation_id').val(),
        tabname: $(this).data('name')
      };

      $.ajax({
        data: data,
        url: woocommerce_params.ajax_url,
        method: 'POST',
      })
      .done(function(response){
        //unslick slider in tabs content
        if($('.housesys__tabs_content .imgs-slider').length){
          $('.housesys__tabs_content .imgs-slider').slick('unslick');
        }

        $('.choose-flat-svg-container').addClass('dnone');
        $('.housesys__tabs_content').html(response).removeClass('dnone');

        //init slider in tabs content
        $('.housesys__tabs_content .imgs-slider').slick({
          infinite: true,
          dots: true,
          appendArrows: '.housesys__tabs_content .slider-nav',
          appendDots: '.housesys__tabs_content .slider-nav',

        });
      });

    }
  });
  //flat info tabs switching end
  var variations = [];//global var for variations data

  //set when WooCommerce variations form is loaded - set choose flat svg attributes
  $('.variations_form').on('wc_variation_form', function(e){

    variations = $(this).data('product_variations');
    console.log(variations);
    //set variation_id and block if it's not in stock
    $('.choose-flat-img-container .flat-item').each(function(index, el){

      $(this).attr('data-variation_id', variations[index].variation_id);
      $(this).attr('data-attributes', JSON.stringify(variations[index].attributes));
      if(!variations[index].is_in_stock){
        $(this).addClass('disabled');
      }

    });

  });

  //selecting flat
  $('.choose-flat-img-container .flat-item').on('click', function(e){

    if(!$(this).hasClass('disabled')){
      $('.choose-flat-img-container .flat-item').removeClass('active');
      $(this).addClass('active');
      $('.housesys__menu_btn').removeClass('disabled');
      $('.add-to-cart-simulation').addClass('active');
      var attributes = $(this).data('attributes');

      //change woocommerce select
      for(attribute in attributes){
        var select = $('select[name="'+attribute+'"]')
        select.val(attributes[attribute]).trigger('change');
      }
    }

  });

  //zooming flat//
  $('.img__zoom').on('click', function(e){
    $('.housesys__menu').style.display('none');
    $('.').style.width('100%');
    $('.housesys__img').style.display('none');


  });

  //thank you popup
  $('.thank-you-popup-trigger').magnificPopup({
    items: {
      src: '#thank_you_popup',
      type: 'inline'
    }
  });
  // fail popup
  $('.fail-popup-trigger').magnificPopup({
    items: {
      src: '#fail_popup',
      type: 'inline'
    }
  });

  //ordering
  $('.add-to-cart-simulation').on('click', function(e){
    e.preventDefault();
    if(!$(this).hasClass('disabled')){

      var data = {
        action: 'add-flat',
        product_id: $('form.variations_form.cart').data('product_id'),
        variation_id: $('input.variation_id').val()
      };

      $.ajax({
        data: data,
        url: woocommerce_params.ajax_url,
        method: 'POST',
        dataType: 'json',
      })
      .done(function(response){
        //console.log(response);
        if(response.success){
          //open success popup
          // $('.thank-you-popup-trigger').magnificPopup('open');

          //block selected flat
          $('.flat-item[data-variation_id="'+$('input.variation_id').val()+'"]').addClass('disabled');

          //window.location.href = wp_data.ty_page;//go to thank you page
          window.location.href = 'https://icom.yaad.net/cgi-bin/yaadpay/yaadpay3new.pl?action=pay&PassP=pb&Masof=0010133821&sendemail=True&UTF8=True&UTF8out=True&Amount=50&Info=%D7%9E%D7%95%D7%A6%D7%A8%20%D7%93%D7%95%D7%92%D7%9E%D7%90&tmp=3&Coin=1&PageLang=HEB&Postpone=False&Tash=1&FixTash=False';
        }
        else{
          alert(response.message);
        }
      });
    } else {
      $('.fail-popup-trigger').magnificPopup('open');
    }

  });

});
