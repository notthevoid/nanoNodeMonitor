<footer id="footer">

  <small>
    <?php
      // switch Nano / Banano rep accounts & explorer
      $repAccount = NODEMON_REP_ACCOUNT;
      $donAccount = NODEMON_DON_ACCOUNT;
      $repExplorer = 'ninja';

      if ($currency == "banano")
      {
        $repAccount = NODEMON_BAN_REP_ACCOUNT;
        $donAccount = NODEMON_BAN_DON_ACCOUNT;
        $repExplorer = 'bananocreeper';
      }
    ?>
  </small>
</footer>

  <div id="donations" uk-modal>
    <div class="uk-modal uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
      <h2 class="uk-modal-title">Thank you for supporting nanners.cc!</h2>
        <div class="uk-text-truncate">
          <p>BAN donations are neither expected nor required, but they are highly appreciated!</p>
          <p>You can scan the QR code with Kalium, or copy its address to your clipboard by clicking it!</p>
          <div class="uk-align-center donoqrcode" id=""><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=nano:<?php echo $nanoDonationAccount; ?>&choe=UTF-8" style="max-width:400px; display:block; margin: 0 auto;"></div>
          <span class="uk-label uk-label-banano uk-text-truncate">
            <a href="#" rel="noopener" class="uk-link-reset donoqrcode" uk-tooltip="title: View on Bananolooker; pos: top-center; delay: 100;">ban_1xhertod5q3w8o5zuu893epgnyb3f8oobwy81kozs3pyhw3hbmsboqiodmfr</a>
          </span>
        </div>
      <p class="uk-text-center">
        <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
      </p>
    </div>
  </div>

  <div id="qr" uk-modal>
    <div class="uk-modal uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
      <h2 class="uk-modal-title">Representative QR Code</h2>
      <div class="uk-text-truncate">
        <p>You can scan the QR code with Kalium, or copy its address to your clipboard by clicking it!</p>
        <div class="uk-align-center repqrcode" id=""><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=nano:<?php echo $nanoNodeAccount; ?>&choe=UTF-8" style="max-width:400px; display:block; margin: 0 auto;"></div>
        <span class="uk-label uk-label-banano uk-text-truncate">
          <a href="#" rel="noopener" class="uk-link-reset repqrcode" uk-tooltip="title: View on Bananolooker; pos: top-center; delay: 100;">ban_1nannerspntaoqyrtnzjj76joe6yqjcterj6ef3qkdc6kfgswqu3pfaaqphe</a>
        </span>
      </div>
      <p class="uk-text-center">
        <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
      </p>
    </div>
  </div>

  <div id="instructions" uk-modal>
    <div class="uk-modal uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
      <h2 class="uk-modal-title">How to change your representative</h2>
      <p class="">Every banano holder has voting power equal to the amount of his funds. If the user does not participate in the consensus algorithm then he must delegate his voting power to someone else, a representative.</p>
      <p>Representatives are Banano Nodes running on the network, and their total weight (delegated voting power) represents how much control they have over the Banano network. The goal is to spread out <a href="https://bananolooker.com/representatives" target="_blank" class="uk-link-reset uk-text-bold">network control</a> across Representatives.</p>
      <ul uk-accordion>
        <li>
          <a class="uk-accordion-title" href="#">Banano Vault</a>
          <div class="uk-accordion-content">
            <p class="">Unlock your wallet.</p>
            <p class="">Scroll down and select the <span class="uk-text-emphasis uk-text-bold">Settings</span> dropdown from the left sidebar, and click <span class="uk-text-emphasis uk-text-bold">Representatives</span>.</p>
            <p class="">Under the <span class="uk-text-emphasis uk-text-bold">Change your representatives</span> section select <span class="uk-text-emphasis uk-text-bold">All Accounts</span>, or each individual account that you'd like to change the Representative for.</p>
            <p class="">In the <span class="uk-text-emphasis uk-text-bold">New Representative</span> field paste the new representative address and check that it's correct.</p>
            <p class="">Click <span class="uk-text-emphasis uk-text-bold">Update Representatives</span>.</p>
          </div>
        </li>
        <li>
          <a class="uk-accordion-title" href="#">Kalium</a>
          <div class="uk-accordion-content">
            <p class="">Unlock your wallet.</p>
            <p class="">Scroll down and select the <span class="uk-text-emphasis uk-text-bold">Settings</span> dropdown from the left sidebar, and click <span class="uk-text-emphasis uk-text-bold">Representatives</span>.</p>
            <p class="">Under the <span class="uk-text-emphasis uk-text-bold">Change your representatives</span> section select <span class="uk-text-emphasis uk-text-bold">All Accounts</span>, or each individual account that you'd like to change the Representative for.</p>
            <p class="">In the <span class="uk-text-emphasis uk-text-bold">New Representative</span> field paste the new representative address and check that it's correct.</p>
            <p class="">Click <span class="uk-text-emphasis uk-text-bold">Update Representatives</span>.</p>
          </div>
        </li>
      </ul>
      <p class="uk-text-center">
        <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
      </p>
    </div>
  </div>
  
</div><!-- /container -->

<script src="static/js/axios.min.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/bootstrap-native-v4.min.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/handlebars.min-v4.7.6.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/main.js?v=<?php echo PROJECT_VERSION; ?>"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php
  if (strlen($googleAnalyticsId))
  {
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $googleAnalyticsId; ?>');
</script>
<?php
  }
?>

<script>
new Clipboard('.repqrcode', {
  text: function() {
    UIkit.notification({message: 'Address copied to clipboard!', pos: 'top-center'})
    return 'ban_1nannerspntaoqyrtnzjj76joe6yqjcterj6ef3qkdc6kfgswqu3pfaaqphe';
  }
});

new Clipboard('.donoqrcode', {
  text: function() {
    UIkit.notification({message: 'Address copied to clipboard!', pos: 'top-center'})
    return 'ban_1xhertod5q3w8o5zuu893epgnyb3f8oobwy81kozs3pyhw3hbmsboqiodmfr';
  }
});

if (localStorage.getItem("dark-mode") === "true") {
  $("html").addClass("uk-light uk-background-secondary");
  $(".uk-card").addClass("uk-light uk-background-secondary");
  $(".uk-modal").addClass("uk-light uk-background-secondary");
}

  $('.inner-switch').on('click', () => {
                let $body = $('body');
                let $html = $('html');
                let $card = $('.uk-card');
                let $switch = $('.inner-switch');
                let $modal = $('.uk-modal');

                if ($html.hasClass("uk-light uk-background-secondary")) {
                    localStorage.setItem('dark-mode', 'false');
                    $html.removeClass("uk-light uk-background-secondary");
                    $card.removeClass("uk-light uk-background-secondary");
                    $modal.removeClass("uk-light uk-background-secondary");
                } else {
                    localStorage.setItem('dark-mode', 'true');
                    $html.addClass("uk-light uk-background-secondary");
                    $card.addClass("uk-light uk-background-secondary");
                    $modal.addClass("uk-light uk-background-secondary");
                }
            });
</script>

</body>
</html>
