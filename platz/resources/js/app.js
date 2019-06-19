document.addEventListener("DOMContentLoaded", function(event) {
  $.ajaxSetup({
          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

  // Insert Ajax : commentaires des ressources

  $("#contact").submit(function(e){
  e.preventDefault();

  var texte = $('#message').val();
  var ressource =$("#ressource").val();
  var user_id=$('#user_id').val();

          $.ajax({

             url:'ajax/insert',
             data:  { texte:texte, ressource:ressource, user_id:user_id},
             method:'get',
             success:function(reponsePHP){
                if (reponsePHP ==1 ||1 ){
                  var user = reponsePHP["user_name"];
                  var avatar = reponsePHP["user_avatar"];
                  var code =  `<div class="post-reply">
                                <img src="storage/${avatar}">
                                <div class="text-reply-post">${user}</div>
                                <div class="nom-reply-post">${texte}</div>
                              </div>`;

                  $('#liste').append(code).find('.post-reply').last().hide().slideDown();
                  $('#message').val('');
                };
              },

             error: function(){
               alert("Problème durant la transaction !");
             }

          });
    });
});
