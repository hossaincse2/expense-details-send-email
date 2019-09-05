$(document).ready(function() {
$("#idForm1").submit(function(e) {
 var preload = $('body').append('<div class=\'lds-roller\'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
    var form = $(this);
    var url = form.attr('action');
 
    ajax_send(url,form);

    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$("#idForm2").submit(function(e) {
 var preload = $('body').append('<div class=\'lds-roller\'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
    var form = $(this);
    var url = form.attr('action');
 
    ajax_send(url,form);

    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$("#idForm3").submit(function(e) {
 var preload = $('body').append('<div class=\'lds-roller\'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
    var form = $(this);
    var url = form.attr('action');
 
    ajax_send(url,form);
    
   

    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$("#idForm4").submit(function(e) {
 var preload = $('body').append('<div class=\'lds-roller\'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
    var form = $(this);
    var url = form.attr('action');
 
    ajax_send(url,form);

    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$("#idForm5").submit(function(e) {
 var preload = $('body').append('<div class=\'lds-roller\'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
    var form = $(this);
    var url = form.attr('action');
 
    ajax_send(url,form);

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
 

function ajax_send(url,form){
       $.ajax({
           type: "POST",
           url: url, 
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               $('.modal-body').html('<div style="text-align:center"><h3 style="font-size: 17px;color:black;text-align:center">' + data + '</h3> <br> <button style="text-align:center" type="button" data-dismiss="modal" aria-label="Close" class="close_btn btn btn-success text-center">Ok</button></div>');
               $('.modal-header').hide();
               $('.close').hide();
               $(".modal-dialog").addClass("pop_modal_dialog"); 
               
            //   alert(data); // show response from the php script.
           }
         });
}
});

$(document).on('click','.close_btn',function(){
    window.location.reload();
});

jQuery(document).ready(function () {
  var btnUpload = jQuery('#file1');
  var status = jQuery('#statuss');
  new AjaxUpload(btnUpload, {
    action: 'http://blueshiftip.com/expense/upload.php',
    name: 'attachment',
    onSubmit: function (file, ext) { 
      status.text('Uploading...');
    },
    onComplete: function (file, response) {
      //On completion clear the status
      status.text('');
       
      //Add uploaded file to list
      if (response) {
        var file_url = jQuery('#attachment').val(response);
        console.log(file_url);
        //jQuery('#file1').hide();
         jQuery('.uploadedfile').html(response); 
      } else {
        //jQuery('#files').text(file+' upload failed').addClass('errore');
      }
    }
  });

});

jQuery(document).ready(function () {
  var btnUpload = jQuery('#file2');
  var status = jQuery('#statuss');
  new AjaxUpload(btnUpload, {
    action: 'http://blueshiftip.com/expense/upload.php',
    name: 'attachment',
    onSubmit: function (file, ext) { 
      status.text('Uploading...');
    },
    onComplete: function (file, response) {
      //On completion clear the status
      status.text('');
       
      //Add uploaded file to list
      if (response) {
        var file_url = jQuery('#attachment2').val(response);
        console.log(file_url);
        //jQuery('#file1').hide();
         jQuery('.uploadedfile').html(response); 
      } else {
        //jQuery('#files').text(file+' upload failed').addClass('errore');
      }
    }
  });

});