<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>

<body>

  <div class="container">
    <!-- Top Navigation -->
    <div class="codrops-top clearfix">
    </div>

    <header class="codrops-header">
      <a href="/datacafe"><h1>Data Cafe<span>We care about you</span></h1></a>
    </header>

    <section>
      <form action="demo.php" method="post" id="myform" class="simform" autocomplete="off">
        <div class="simform-inner">
          <ol class="questions">

            <li class="textbox">
              <span><label for="q1">How are you feeling today?</label></span>
              <textarea class="textbox" id="text" name="text" rows="6" ></textarea>
              <span class="countable">
                <span class="results">0</span>/50 Words
              </span>
            </li>

            <li>
              <span><label for="q2">An email we can send your special code to?</label></span>
              <input id="q2" name="email" id="email" type="text" data-validate="email" />
            </li>

          </ol><!-- /questions -->

          <button class="submit" type="submit" value="Submit" >Send answers</button>

          <div class="controls">

            <button class="next"></button>

            <div class="progress"></div>

            <span class="number">
              <span class="number-current"></span>
              <span class="number-total"></span>
            </span>

            <span class="error-message"></span>

          </div><!-- / controls -->

        </div><!-- /simform-inner -->

        <span class="final-message"></span>

      </form><!-- /simform -->

      <span class="legal">By using this website you agree to the terms of our privacy policy.</span>

    </section>

  </div><!-- /container -->
  <script src="js/classie.js"></script>
  <script src="js/stepsForm.js"></script>
  <script>
    var myform = document.getElementById( 'myform' );

    new stepsForm( myform, {
      onSubmit : function( form ) {
        // hide form
        classie.addClass( myform.querySelector( '.simform-inner' ), 'hide' );

      //  var form_data = {
      //      text: $('#text').val(),
      //      email: $('#email').val(),
      //  };

        $.ajax({
            url: "demo.php",
            type: 'POST',
            data: $("#myform").serialize(),


       });


        /*
        myform.submit();

        document.getElementById("theForm").submit();
        or
        AJAX request (maybe show loading indicator while we don't have an answer..)
        */

        // let's just simulate something...
        var messageEl = myform.querySelector( '.final-message' );
        messageEl.innerHTML = 'Thanks for your payment! Go get your cookie.';
        classie.addClass( messageEl, 'show' );
      }
    } );
  </script>

  <script src="js/countable.js"></script>
  <script>
  // var area = document.getElementById('text')
  var myTextArray;

  function callback (counter) {
    // console.log(counter)
    var myText = $("#text").val();
    myTextArray = myText.split(" ");

    console.log(myTextArray.length);
    document.querySelector('.results').innerHTML = myTextArray.length - 1;
  }

  Countable.live(text, callback)






  </script>


</body>
</html>
