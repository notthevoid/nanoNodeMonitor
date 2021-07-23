<?php
// include required files
require_once __DIR__.'/modules/includes.php';

include 'modules/header.php';

$coinURL = 'https://nano.org';
if ($currency == 'banano') {
    $coinURL = 'https://banano.cc/';
}

?>

<div class="uk-card uk-card-default uk-card-body uk-margin-top uk-margin-bottom">

<!-- main content -->
<div id="content">
    <div uk-spinner>
        
    </div>
</div>

<script src="static/js/clipboard.min.js" async></script>
<script src="static/js/index.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<!--- add the footer -->
<?php include 'modules/footer.php'; ?>
