var ajax = {
   abort: function () {

   }
};

$(function() {
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

});


function Add(argument) 
{
         $("#main").append('<li> <i class="fa fa-arrows  icon-move"></i><i class="fa fa-pencil-square-o  icon-edit" ></i><i class="fa fa-trash-o  icon-delete" ></i><div id="main-slider" id="drag4"  draggable="true" ondragstart="drag(event)" data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro"><div class="sp-slides"><div class="section-title section-bg"><div class="section__inner"><div class="container"><h2 class="main-slider__title">О.Баасанхүү Би Ц.Элбэгдорж дээр ороод сайн байна уу, одон өгөөч гэж гуйсан</h2></div></div></div><div class="container"><div class="breadcrumb-wrap1"><ol class="breadcrumb"><li><a href="home-new.html">ярилцлага</a></li><li class="active roboto_text">2018-01-02</li></ol></div></div></div></div></li>');
         $('#myModal').modal('hide');
}
function Add1(argument) 
{
         $("#main").append('<article id="drag5"  draggable="true" ondragstart="drag(event)" class="post post-full post-full_mod-a clearfix"><div class="entry-main"><div class="entry-content entry-content003"><p>УИХ-ын гишүүн О.Баасанхүүг тойрсон дуулиан сүүлийн үед татрахгүй байгаа. Тиймээс түүнийг сонгож урьсан юм. Энэ удаа би олон сэдвээр нэлээд дэлгэрэнгүй ярилцлаа. Уншигч та зарим үед уурсаж, зарим үед инээж бидэнтэй хамт байна гэдэгт би найдаж байна.</p><div class="blockquote-wrap"><div class="decor-left"></div><blockquote class="blockquote blockquote_mod-a"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore etual dolore magna aliqua Ut enim ad minim veniam quis.</p><footer><cite title="Blockquote Title"><span class="blockquote__author">Andrew Burnett</span></cite></footer></blockquote><div class="decor-right"></div></div><p class="ask_text">-Танай нам байгуулагдаад хэдэн жил болж байгаа билээ?</p><p>-2011 оноос хойш долоон жил болж байна. Энэ хугацаанд нэг ч их хурал хийгээгүй. Онц их хурлаар Улсын дээд шүүхэд бүртгүүлээд, түүнээс хойш дүрмийн хүрээнд нэг ч их хурал хийгээгүй. </p><b class="ask_text answer_001">-Намын дүрмээр их хурал нь хэдэн жилд хуралдах ёстой байдаг вэ?</b><p class="dropcap dropcap-1 answer_001">Хоёр жилд нэг удаа ээлжит их хурал хийх ёстой.Ээлжит бус их хурлыг хэд ч хийж болно. Намын дарга дөрвөөс дээш удаа улиран сонгогдохгүй гэж заасан байгаа. 2019 он гээд тооцохоор үнэхээр цаашид ингэж дүрэмгүй, дур зоргоороо явах хэцүү болоод байна. Намын нэрээ бүртгүүлэх гэж бичгээ өгөөд жил гаруй хөөцөлдсөн. Үнэхээр яваагүй газар байхгүй. Би энэ намыг улс төрийн хүчин шиг хүчин болоосой гэж л тэгж зүтгэсэн. Гэтэл 2010 оноос хойш 7-8 жил болж байна. Нам шиг нам болж төлөвших юм уу, нэг хүний хувийн өмч шиг ингээд явах юм уу. Энэ олон мянган гишүүдийн хүсэл мөрөөдөл, итгэл үнэмшлийг яах юм бэ. Ийм учраас би сая намын Их хурлаа хийсэн. Их хурлаа хийснээс хойш өдөр бүр хөөгддөг, туугддаг, доромжлуулдаг, гүтгүүлдэг болсон. Монголын ард түмэн харж байгаа. </p><b class="ask_text">-Энэ бүх зөрчил Их хурлаа хийе гэсэн шаардлагаас л үүдэлтэй гэж та үзэж байна уу?</b><p class="dropcap dropcap-1 answer_001">Тийм. Өөр юм байхгүй.Бид нарт хувь, хувьсгалын ямар нэг өөр юм байхгүй. Гэтэл яагаад би нүдэнд орсон өргөс нь болчихов. Би харин ч тус болоод л явж байсан. Та санаж л байгаа шүү дээ. 2016 оны 9 сард Н.Энхбаяр даргыг барьж хорих гээд бөөн юм болсон. Тэр үед би УИХ-ын дарга М.Энхболд, Ерөнхийлөгч Ц.Элбэгдорж, ерөнхий прокурор М.Энх-Амгалан нартай очиж уулзаад, Н.Энхбаяр даргыг тайван байлгаач ээ, МУ-ын ерөнхийлөгч байсан хүнээ хоёр удаа шоронд хийх гээд байгаа юм уу. Та нар болиочээ гэж ярьж хэлж, тэдэн дээр орж уулзаж л байсан. </p><p>saud aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint oc caecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim est laborum sedut persiciatis unde omnis iste natus doloremque error sit voluptatem.</p></div></div></article>');
         $('#myModal').modal('hide');
}

function Add2(argument) 
{
   $("#main").append('<div class="col-md-12"><div class="col-md-6"> <div class="text-center"><div class="add" data-toggle="modal" data-target="#myModal">+</div></div></div><div class="col-md-6"><div class="text-center"><div class="add" data-toggle="modal" data-target="#myModal">+</div></div></div></div>');
   $('#myModal').modal('hide');
}
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
function save(i){

    var html = $('#sortable2').html();

    ajax.abort();

    ajax = $.ajax({
        url: '/api/updateconversation',
        type: 'post',
        data: {html: html,
               id:i},
        dataType: 'json'
    }).done(function(jsonString) {
        console.log(jsonString);
        alert('Saved');
    }).always(function() {

    });
  }

function clearall(i){
     var r = confirm("Энэ хэсгийг бүгдийг устгах уу ??");
    if (r == true) {
      var html = $('#sortable2').html();

      ajax.abort();

      ajax = $.ajax({
          url: '/clearconversation/'+i,
          type: 'get',
          dataType: 'json'
      }).done(function() {

          $('#sortable2').empty();
       
      }).always(function() {

      });
    }
  }
  
  
