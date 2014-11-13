  <footer>
    <?php snippet( 'menu' ) ?>
    <p class="follow">
      <a href="https://twitter.com/sustainablepace" class="twitter-follow-button" data-dnt="true">Follow @sustainablepace</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </p>
    <?php echo kirbytext($site->copyright()) ?>
  </footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  // Set to the same value as the web property used on the site
  var gaProperty = 'UA-32666787-1';

  ga('create', gaProperty, 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');

  // Disable tracking if the opt-out cookie exists.
  var disableStr = 'ga-disable-' + gaProperty;
  if (document.cookie.indexOf(disableStr + '=true') > -1) {
    window[disableStr] = true;
  }

  // Opt-out function
  function gaOptout() {
    document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
    window[disableStr] = true;
  }
</script>
</body>
</html>
