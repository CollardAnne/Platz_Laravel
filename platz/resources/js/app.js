document.addEventListener("DOMContentLoaded", function(event) {
  $.ajaxSetup({
          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });



  $("#contact").submit(function(e){
  e.preventDefault();

  var texte = $('#message').val();
  var ressource =$("#ressource").val();

          $.ajax({

             url:'ajax/insert',
             data:  { texte:texte, ressource:ressource},
             method:'get',
             success:function(reponsePHP){
            if (reponsePHP ==1 ||1 ){
                var code = '<div class=\"post-reply\"><div class="nom-reply-post">'+texte+'</div></div>';
              $('#liste').append(code).find('.post-reply').last().hide().slideDown();
            };
          },

             error: function(){
               alert("Problème durant la transaction !");
             }

          });
    });
});
