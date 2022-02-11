$(function () {
  $('#order-table').dataTable({
    paging: true,
    fixedHeader: {
      header: true
    },
  });
});

$(function () {
  $('#consignee-table').dataTable({
    paging: true,
    fixedHeader: {
      header: true
    },
  });
});

$(function () {
  $('#booking-table').dataTable({
    paging: true,
    responsive: true,
    fixedHeader: {
      header: true
    },
  });
});


$(document).ready(function(){
    $('.payment-type').click(function(){
        $('#payment-modal').hide();
        $('.modal-backdrop').hide();
        //$('#credit-modal').show();
    });
});

// Avtar JS
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});


//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});
