 $("#sortable1").sortable({
      connectWith: ".connectedSortable",
      forcePlaceholderSize: false,
      placeholder: "ui-state-highlight",
      helper: function(e, li) {
        //debugger;
        copyHelper = li.clone().insertAfter(li);
        var a = "<button style='z-index:999;'>asdasdasd</button>";
        return li;
      },
      stop: function () {
        copyHelper && copyHelper.remove();
      }
    });

    $(".connectedSortable").sortable({
      placeholder: "ui-state-highlight",
      connectWith: ".connectedSortable",
      receive: function (e, ui) {
        changer(ui.item);
        copyHelper = null;
      }
    });

    function changer(ui) {
     var id = ui.attr("data-id");
     $.ajax({
      type : 'get',
      url : '/append_data/'+id,
      dataType : 'json',
      beforeSend: function() {
                ui.attr('class','col-md-12');
                ui.html('<h5 style="text-align:center;">Loading...</h5>');
              }
    }).done(function(data){
     ui.html(data.view);
     ui.attr('class',data.class);
   }).always(function(){

   });
 }