 function insertComment(){
        var form = $("#commentInsertForm");
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json',
              beforeSend: function() {
                  $('#loader').show();
                }
             }).done(function(data){
                if (data.value001 == '1') {
                      alert('Нэр эсвэл сэтгэгдэл хоосон байна !!!');
                     $('#loader').hide();
                }
                else{
                  $('#comments').append(data.view);
                  $('#counts').empty();
                  $('#counts').append(data.counts);
                  $('#loader').hide();
                  $('#text001').val("");
                  $('#name001').val("");
                }
                  
              }).always(function(){
                
                
             });
      }