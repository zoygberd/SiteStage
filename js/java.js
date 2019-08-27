

function hey(){
  var niv=document.getElementById('pour').value;
 var ville=document.getElementById('villeh').value;
 var ecole = document.getElementById('ecoleh').value;
if(niv!=""&& ville!=""&& ecole!=""){
        var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("newsALL").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","./database/getNews.php?ville="+ville+"&niv="+niv+"&ecole="+ecole, true);
                xmlhttp.send();
}else {
  alert('Veuillez remplir tous les champs !')
}
}

 //////////////////////////// slider
$(document).ready(function () {
  $('.next').on('click', function () {
    var currentImg = $('.active');
    var nextImg = currentImg.next();
    var Fimage = $('#Firstimage');

    if (nextImg.length) {
      currentImg.removeClass('active').css('z-index', -10);
      nextImg.addClass('active').css('z-index', 10);
    } else {
      currentImg.removeClass('active').css('z-index', -10);
      Fimage.addClass('active').css('z-index', 10);
    }
  });

  $('.prev').on('click', function () {
    var currentImg = $('.active');
    var prevImg = currentImg.prev();
    var Limage = $('#Lastimage');
    if (prevImg.length) {
      currentImg.removeClass('active').css('z-index', -10);
      prevImg.addClass('active').css('z-index', 10);
    } else {
      currentImg.removeClass('active').css('z-index', -10);
      Limage.addClass('active').css('z-index', 10);
    }
  });
  ////////////////////////toggle :
  $('#togB').click(function () {
    $('.SMobile').toggleClass("open");
    if ($('#togB')[0].className == "fa fa-bars") {
      $('#togB').removeClass("fa fa-bars");
      $('#togB').addClass("fa fa-times-circle");
    } else if ($('#togB')[0].className == "fa fa-times-circle") {
      $('#togB').removeClass("fa fa-times-circle");
      $('#togB').addClass("fa fa-bars");
    }
  });


  $('#adminChoises').hide();
 

  //////////////////////////Search Bar

  $('#searchB').keydown(function () { //quand l utilisateur ecrit qlq chose x

    $.getJSON('file.json', function (data) {
      var searchF = $('#searchB').val();
      var exp = new RegExp(searchF, "i");
      var out;
      var i = 0;
      $.each(data, function (key, val) {
        if ((val.NomEcole.search(exp) != -1) || (val.Ville.search(exp) != -1)) {
          out += "<tr>";
          out += "<td>" + val.NomEcole + "</td>";
          out += "<td>" + val.Ville + "</td>";
          out += "<td><a style='color:blue;' href='ecole.php?ecole="+val.NomEcole+"&ville="+val.Ville+"' >lien vers le site</a></td>";
          out += "</tr>";
        }
      }); //3
      $('#tableSearch').html(out);
      out = "";

    }); //2

  }); //1
}); //generak 
function closeS() {

  $('#tableSearch').html('');
  $('#searchB').val('');
}
$('#btnAdmin').click(function(){
  $('#adminChoises').toggle();
});

