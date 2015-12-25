<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Diplomado en Tecnología Web</title>
    <link rel="stylesheet" type="text/css" href="dm.css">
    <link rel="stylesheet" href="editor/lib/codemirror.css">
<script src="editor/lib/codemirror.js"></script>
<script src="editor/idl.js"></script>
<script src="editor/htmlmixed.js"></script>
<style type="text/css">
.CodeMirror {z-index:0;border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; width:100%; height: 100%; overflow-y: scroll;}</style>
</head>

 
<body class="projects show composer" style="zoom: 1;">

<header class="main">
  
    <div style="text-align:center">
 <h2>Conceptos básicos de HTML</h2>
  
</div>

</header>


<div class="lesson-left-bar">
<?php include("menu.php");?>

<div class="lesson-checkpoint__wrapper">
  <div class="lesson-checkpoint nano has-scrollbar">
    <div class="nano__content content" tabindex="0" style="right: -15px;">
      <div class="lesson-checkpoint__inner">
        <div class="article__inner">
          <div class="article__header">
            <div class="lesson-checkpoint__name">¿Por qué aprender HTML?</div>
          </div>
          <div class="article__content">
            <p style="text-align:justify">Cada página web que mirás está escrita en un lenguaje llamado HTML. HTML es como un esqueleto que le da estructura a cada página web. En este curso, usaremos HTML para añadir párrafos, encabezados, imágenes y enlaces a una página web.</p>

<p style="text-align:justify">En el editor que podés ver a la derecha hay una pestaña llamada <code class="ruby"><span class="identifier"><span class="keymethods">Ejemplo</span></span>.<span class="identifier">html</span></code>. Este es el archivo en el cual vamos a escribir nuestro HTML. ¿Ves el código con los símbolos <code class="xml"><span class="tag">&lt;&gt;</span></code>? Eso es HTML. Como cualquier otro lenguaje, tiene su propia <strong>sintaxis</strong> (reglas para la comunicación) especial.</p>

<p style="text-align:justify" >La ventana de resultados actúa como un <strong>navegador</strong> de Internet (como por ej. Chrome, Firefox, Internet Explorer). La función de un navegador es transformar el código que está en <code class="ruby"><span class="identifier"><span class="keymethods">Ejemplo</span></span>.<span class="identifier">html</span></code> en una página web reconocible. El navegador sabe cómo distribuir la página siguiendo la sintaxis HTML. </p>

          </div>
        </div>
        <div class="lesson-checkpoint__instructions">
          <div class="article__inner lesson-checkpoint__instructions__header">
            <div class="block-label--light-blue">Instrucciones</div>
          </div>
          <div class="article__inner">
            <ol>
<li>A la derecha tenemos un archivo <code class="ruby"><span class="identifier"><span class="keymethods">Ejemplo</span></span>.<span class="identifier">html</span></code>.</li>
<li>Coloca la siguiente etiqueta en la primera linea (la siguiente etiqueta <code class="xml"><span class="tag">&lt;<span class="title">strong</span>&gt;</span></code> y <code class="xml"><span class="tag">&lt;/<span class="title">strong</span>&gt;</span></code>) y en el medio de ellas coloca un texto cualquiera.</li>
<li>En un corto tiempo vas a ver cómo se vería en un navegador el archivo <code class="ruby"><span class="identifier"><span class="keymethods">Ejemplo</span></span>.<span class="identifier">html</span></code>. ¿Viste? Las etiquetas <code class="xml"><span class="tag">&lt;<span class="title">strong</span>&gt;</span><span class="tag">&lt;/<span class="title">strong</span>&gt;</span></code> resaltaron nuestro texto con letra negrita.</li>
</ol>

              <div class="ui-accordian ui-accordian--lesson">
                <div class="ui-accordian__inner">
                  <a href="#" class="ui-accordian__trigger ui-media acordion">
                    <div class="ui-media__image new-icon--small new-icon--center new-icon--circle--blue">?</div>
                    <div class="ui-media__main">
                      <span class="is-hidden-if-is-expanded"><b>¿Te trabaste?</b> ¡Te damos un consejo!</span>
                      <span class="is-shown-if-is-expanded--inline"><b>Consejo</b></span>
                    </div>
                  </a>
                  <div class="ui-accordian__content has-markdown">
                    <p>Si no sabés cómo agregar la etiqueta en la línea 1,
Agrega la etiqueta<code class="xml"><span class="tag">&lt;<span class="title">strong</span>&gt;</span><span class="tag">&lt;/<span class="title">strong</span>&gt;</span></code>. Ya te vamos a explicar para qué sirven.</p>

                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  <div class="pane"><div class="slider" style="height: 40px; top: 0px;"></div></div></div>
</div>

  </div>
    <div class="lesson-links">
  <a target="_blank" class="lesson-links__link" href="#">Foro de preguntas frecuentes</a>
  <a target="_blank" class="lesson-links__link" href="#">&nbsp;</a>
</div>
</div>




<!--eDITOR -->

  <div class="lesson-middle js-lesson-editor">
  <div class="waiting-overlay"></div>
  <div class="lesson-file-tabs js-lesson-file-tabs"><div class="lesson-file-tabs__wrapper">
  <div>
<div class="lesson-file-tabs__tab js-file-tab tab cf active" data-type="Ejemplo.html" data-state="active">
  <div class="new-icon--small--center new-icon--lesson-file fl"></div>
  <div class="fl">Ejemplo.html</div>
</div>  </div>
  <div id="composer-view-project-button-for-narrow-screen">
    <div class="actions-list actions-list--composer-tabs codebit-actions-management actions-list--individual-buttons">
      <div>
        <div class="js-view-project actions-list__button actions-entity has-hover ui-media">
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="lesson-ace-editor " >
 </div>

</div>

<!- Visualizador -->


<div class="lesson-action-bar js-lesson-action-bar" style="background-color:white"> <div class="lesson-sidebar-container">
<div class="cc-preview__stuff"><iframe style="background: white;border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; width:100%; height: 100%; overflow-y: scroll;" scrolling="no"  id="preview" style="-webkit-transform: scale(1); transform: scale(1); width: 100%; height: 100%;"></iframe></div>
</div>
  <div class="composer-bottom-bar lesson-action-bar__inner">
 
</div>
   
</div>

     
<script src="jquery.min.js"></script>
<script src="cargar.js"></script>
</body>

</html>