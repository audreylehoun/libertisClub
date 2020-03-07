// $(document).ready(function() {
//     $('a[href*=\\#]').on('click', function(e){
//         e.preventDefault();
//         $('html, body').animate({
//             scrollTop : $(this.hash).offset().top
//         }, 5000);
//     });
// });

$(function() {

  // event on search bar select field
  var onItemAddFunc = function(){
    return function() {
        //console.log(name, arguments);
        
    };
  };
  // Form select config     
  $('#search-subcat').selectize({
      create: true,
      sortField: 'text',
      onChange        : onItemAddFunc('onChange'),
      onItemAdd       : onItemAddFunc('onItemAdd')
  });

  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });

  // call user to register button event
  // $(document).on('click', '.allo-action-register, .call-btn-register', function(e){
  //     e.preventDefault();
  //     $('.loginBox').remove();
  //     $('.nav-account a[data-target="#registerto"]').click();
  // });

  // call user to login or register modal
  $('.not-login').on('click', function(e){
    e.preventDefault();
    var defaultText = 'pour accéder à cette page';
    $(this).hasClass('profilcv-more') ? defaultText = 'Pour accéder à plus de profils' : null;

    var loginBox = '<div class="modal loginBox fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block; padding-right: 15px;">'+
                      '<div class="modal-dialog modal-sm animated zoomInDown" style="padding-top:15%;">'+
                        '<div class="modal-content">'+
                          '<div class="modal-header" style="background-color: #29aafe;">'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>'+
                            '<h4 class="modal-title" id="myModalLabel"  style="color: #fff;">Connectez-vous!</h4>'+
                          '</div>'+
                          '<div class="modal-body">'+
                            '<p><b>Connectez-vous</b> ou <b>inscrivez-vous</b></p>'+
                            '<p class="text-center">'+defaultText+'</p>'+
                          '</div>'+
                          '<div class="modal-footer">'+
                            '<a href="/login" class="btn btn-default btn-sm pull-left" style="text-transform:none;">connexion</a>'+
                            '<a href="/register-woumi" class="btn btn-info btn-sm call-btn-register" style="text-transform:none;">inscription</a>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                  '</div>';

    $('body').append(loginBox);
    return false;
  });

  // Close login call action modal
  $(document).on('click', '.loginBox .close', function(e){
    e.preventDefault();
    $('.loginBox').remove();
  });
  var _country = ('undefined' !== typeof _CsearcPh) ? _CsearcPh : '';
  // Add a placeholder to country select field
  var placeholder = {name: _country, iso2: 'placeholder'};

  // Reformat the country select data to display the country name without parentheses
  var countryData = $.fn.countrySelect.getCountryData();
  var updatedCountryData = countryData.map(function(_country){
      _country['name']  = _country.name.split("(")[0].trim();
    
      return _country;
  });

  updatedCountryData.unshift(placeholder);
  $.fn.countrySelect.setCountryData(updatedCountryData);
  
  // Initialise country select field
  $("#search-country").countrySelect({
    // defaultCountry: "placeholder",
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // responsiveDropdown: true,
    preferredCountries: ['placeholder', 'bj', 'tg', 'ci']
  });

  //search bar validation
  $(document).on('click', '.search-validator .country-select, .search-validator .s_location, .search-validator .btn-search button[type=submit]', function(e){
    
    var selectedVal = $('#search-subcat').val().trim();
    if(selectedVal == ""){
      var popover = '<div class="popover fade top in form-popover" role="tooltip" style="top: -10%; left: 30%; display: block;background-color: #29aafe;">'+
                      '<div class="arrow" style="left: 50%;">'+
                      '</div>'+
                      '<div class="popover-content"  style="background-color: #29aafe;color: #fff;">Veuillez renseigner d\'abord le premier champ.</div>'+
                    '</div>';
                    //<h3 class="popover-title" style="background-color: #29aafe;color: #fff;text-align: center;">Popover Header</h3>
      $('.allo-search-box').append(popover);
      setTimeout(function(){ $('.form-popover').fadeOut('slow', function(){ $(this).remove()});}, 3000);
      e.preventDefault();
    }
  });
  $(document).on('change', '.search-validator #search-subcat', function(e){
    var selectedVal = $(this).val().trim();
    if(selectedVal != ""){
      $('.selected-flag').show();
    }
  });

  $('.search-validator .selected-flag').hide();
});