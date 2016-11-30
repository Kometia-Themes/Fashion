<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- {% if settings.use_favicon %} -->
  <!-- <link rel="shortcut icon" href="{{ settings['favicon.png'] | asset_url }}" type="image/png" /> -->
  <!-- {% endif %} -->

  <!-- <title>{{ page_title }}{% if current_page != 1 %} | Página {{ current_page }}{% endif %}{% if store.name not in page_title %} | {{ store.name }}{% endif %}</title> -->
  <title>Title</title>

  <!-- {% if page_description %} -->
  <!-- <meta name="description" content="{ page_description }}"/> -->
  <!-- {% endif %} -->

  <!-- <link rel="canonical" href="{{ canonical_url }}" /> -->

  <!-- {% include '_og-meta-tags.twig' %} -->
  <style type="text/css">
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .preloader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(../assets/preloader.gif) center no-repeat #fff;
    }  
  </style>
  <!-- {# Bootstrap #} -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- {# Select #} -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">

<!-- {# Fonts Awesome #} -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- {# Theme Styles #} -->
<!-- <link rel="stylesheet" href="{{ 'style.css' | asset_url }}" media="screen"> -->
  <link rel="stylesheet" href="../assets/style.css" media="screen">

  <!-- {% include '_google-fonts.twig' %} -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Playfair+Display:400,400i" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="////cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

  <!-- {{ head_content }} -->
<script>
    var Shoperti = Shoperti || {};
    Shoperti.domain = 'store1.shoperti.app';
    Shoperti.theme = {"id":"thm_civ4eklie0000hjrr1up6ivkt","name":"Tenue","permalink":"tenue","version":"1.0.0","object":"theme"};
</script>

</head>
<body class="" role="document">
<div class="preloader"></div>
<!-- {% include '_nav.twig' %} -->
<?php include "../partials/nav.php" ?>


  <!-- {% include '_notifications.twig' %} -->
  <!-- {% block body %}{% endblock %} -->
  <?php include "../partials/slider.php" ?>



  <!-- Begin content -->
  <div class="container margin-top">
    <div class="row">

      <div class="col-sm-12">
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
        <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
        <p>Back to <a href="#">the default sticky footer</a> minus the navbar.</p>
        <select class="selectpicker">
          <optgroup label="Picnic">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
          </optgroup>
          <optgroup label="Camping">
            <option>Tent</option>
            <option>Flashlight</option>
            <option>Toilet Paper</option>
          </optgroup>
        </select>
        <p><br></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut libero elementum, lacinia tellus vitae, lobortis elit. Mauris ut mattis orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean blandit blandit pulvinar. Sed viverra felis eu sem pharetra, vitae dignissim ante sagittis. Aliquam erat volutpat. Curabitur bibendum non libero eget fermentum. Nulla tincidunt dolor nunc, a facilisis sapien suscipit id.</p>
        <p>Suspendisse leo ex, maximus non feugiat sit amet, feugiat vel arcu. Curabitur tempus est at lorem viverra mollis. Etiam quis ipsum ante. Nunc non nibh sem. Aenean maximus rhoncus orci, ut fringilla ex eleifend non. Cras ullamcorper lorem eget mi semper, sit amet porttitor est vulputate. Maecenas imperdiet turpis lorem, id aliquam enim feugiat ut. Curabitur varius tristique dui, eu consequat dui. Pellentesque fermentum ligula non eros tempus posuere ac sed quam. Proin sed malesuada urna. Mauris quis velit finibus, scelerisque diam a, iaculis quam. In interdum vestibulum turpis sed porta. Aliquam erat volutpat. Vivamus commodo neque vitae lacus dapibus hendrerit. Nam rutrum ante id rutrum condimentum. Fusce sit amet sapien sed dui maximus tincidunt nec suscipit nunc.</p>
        <p>Suspendisse velit mauris, ornare sit amet risus eu, placerat hendrerit quam. Proin mattis urna libero, quis ornare lacus lobortis vitae. Aliquam quis volutpat turpis, ac maximus erat. Nullam est lacus, sodales sit amet feugiat eu, pulvinar eget erat. Sed non sagittis lorem, vel molestie leo. Proin ex erat, facilisis nec lectus et, egestas tristique enim. Nullam maximus urna sed turpis tristique pellentesque.</p>
        <p>Sed eleifend dictum rhoncus. Duis odio enim, interdum semper hendrerit fermentum, scelerisque ut nunc. Etiam ut nisi eros. In molestie velit eget venenatis aliquam. Phasellus a nulla aliquam, convallis mauris in, rhoncus est. Sed feugiat lacus ac tellus mollis, id fringilla ante pretium. Nullam mi tellus, dictum nec felis nec, egestas sodales leo. Nulla magna sem, pharetra euismod nisi sed, mollis rhoncus tortor.</p>
        <p>Morbi malesuada, nulla et porta vulputate, elit massa viverra risus, vel euismod risus lectus eu ex. Curabitur nec nisi bibendum, bibendum arcu at, pharetra erat. Vestibulum erat ante, ultrices ut ligula eu, hendrerit porttitor lorem. Cras vulputate egestas magna, et dapibus eros suscipit at. In malesuada iaculis turpis non efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse quis tristique odio. Aliquam vitae ipsum dolor. Pellentesque libero risus, mattis ac mi sit amet, pharetra aliquet ipsum. Sed aliquet rhoncus tellus, ac convallis augue venenatis eget. Donec vestibulum malesuada dui, vitae hendrerit est ultricies non. Nulla risus urna, molestie mollis ullamcorper pretium, vestibulum ut ipsum. Mauris pharetra egestas dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec quis metus justo.</p>
      </div>
    </div>
  </div>

  <div class="container">
  <!-- Una coleccion -->
    <div class="row">
      <h2>1 colección</h2>
      <div class="col-xs-12">
        <img class="img-responsive" src="http://fakeimg.pl/1280x640/?text=World&font=lobster">
      </div>
    </div>
    <hr>
  <!-- Dos colecciones -->
    <div class="row row-margin no-gutter">
        <h2>2 colección</h2>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/1280x780/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/1280x780/?text=World&font=lobster">
      </div>
    </div>
    <hr>
    <div class="row row-margin no-gutter">
        <h2>3 colección</h2>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/760x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/760x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/760x560/?text=World&font=lobster">
      </div>
    </div>
    <hr>
    <div class="row row-margin no-gutter">
    <h2>4 Colecciones</h2>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
    </div>
    <div class="row row-margin no-gutter">
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
    </div>
    <hr>
    <div class="row row-margin no-gutter">
    <h2>5 colecciones</h2>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
    </div>
    <div class="row row-margin no-gutter">
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
    </div>
    <hr>
    <div class="row row-margin no-gutter">
    <h2>6 colecciones</h2>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
    </div>
    <div class="row row-margin no-gutter">
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
    </div>
    <hr>
    <h2>7 colecciones</h2>
    <div class="row row-margin no-gutter">
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/960x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/960x560/?text=World&font=lobster">
      </div>
      </div>
      <div class="row row-margin no-gutter">
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/960x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/960x560/?text=World&font=lobster">
      </div>
    </div>
    <div class="row row-margin no-gutter">
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
    </div>
  <hr>
  <h2>8 colecciones</h2>
    <div class="row row-margin no-gutter">
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-6">
        <img class="img-responsive" src="http://fakeimg.pl/860x560/?text=World&font=lobster">
      </div>
      </div>
      <div class="row row-margin no-gutter">
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
    </div>
    <div class="row row-margin no-gutter">
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
    </div>
  <hr>
  <h2>9 colecciones</h2>
    <div class="row row-margin no-gutter">
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      <div class="col-xs-4">
        <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
      </div>
      </div>

      <div class="row row-margin no-gutter">
        <div class="col-xs-4">
          <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
        </div>
        <div class="col-xs-4">
          <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
        </div>
        <div class="col-xs-4">
          <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
        </div>
      </div>
      <div class="row row-margin no-gutter">
        <div class="col-xs-4">
          <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
        </div>
        <div class="col-xs-4">
          <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
        </div>
        <div class="col-xs-4">
          <img class="img-responsive" src="http://fakeimg.pl/560x560/?text=World&font=lobster">
        </div>
    </div>
  </div>

</div>

<!-- {% include '_footer.twig' %} -->
<?php include "../partials/footer.php" ?>

    <!-- {% block body_js %} -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/imgLiquid/0.9.944/js/imgLiquid-min.js"></script>
    <!-- <script type="text/javascript" src="{{ 'app.js' | asset_url }}"></script> -->
    <script type="text/javascript" src="../assets/app.js"></script>

    <!-- {% endblock %} -->
    <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick();
      $('.preloader').fadeOut("slow", function() {
        $( this ).remove();
      });
    });
  </script>
</body>
</html>

