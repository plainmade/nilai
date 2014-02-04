<html>
<head>
    <title>Nilai : Mark Added</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/nilai.css" />
    <link rel="icon" type="image/ico" href="/favicon.ico" />
</head>
<body id="nilai-slim">

<?php $nice_url = rtrim(preg_replace('/https?:\/\/(www.)?/', '', $mark->url), '/'); ?>

<div class="mark-added">
    <div class="mark-added-block">
        This link has been added to your stream.
        <i class="barley-icon-ok"></i>
    </div>

    <div class="mark-added-info">
        <h1><?php print $mark->title; ?></h1>
        <span><?php print $nice_url; ?></span>
    </div>
    
    <div class="mark-added-label mark-added-settings">
        <i class="barley-icon-question-sign"></i>
        <a class="action" data-action="marks_addLabel" href="#">Add A Label</a>
        <section data-id="<?php print $mark->mark_id; ?>">
            <ul class="label-choices">
                <li class="label-2"><a href="#" rel="2">Read</a></li>
                <li class="label-3"><a href="#" rel="3">Watch</a></li>
                <li class="label-4"><a href="#" rel="4">Listen</a></li>
                <li class="label-5"><a href="#" rel="5">Buy</a></li>
                <li class="label-6"><a href="#" rel="6">Eat &amp; Drink</a></li>
                <li class="label-7"><a href="#" rel="7">Do</a></li>
                <li class="label-1"><a href="#" rel="1">Unlabeled</a></li>
                <li class="label-smart"><a href="#">Add A Smart Label</a></li>
            </ul>
        </section>
    </div>

    <div class="mark-added-note mark-added-settings">
        <i class="barley-icon-question-sign"></i>
        <a class="action" data-action="marks_addNotes" href="">Add A Note</a>
        <section data-id="<?php print $mark->mark_id; ?>" contenteditable="true"></section>
    </div>

    <div class="mark-added-actions">
        <button class="delete" data-action="delete_mark" data-id="<?php print $mark->mark_id; ?>">Delete Link</button>
        <button data-action="close_window">Update & Close</button>
    </div>


</div>


<script type="text/javascript">
var nilai  = nilai || {};
nilai.vars = {};
nilai.vars.csrf_token   = '<?php print $csrf_token; ?>';
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="/assets/js/nilai.js"></script>

</body>
</html>