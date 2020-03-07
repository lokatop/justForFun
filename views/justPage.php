<? include_once "views/templates/header.php" ?>
<div class="pricing-header mx-auto text-center">
    <h1 class="display-4"><?php echo (empty($title))?"Test case title":$title ?></h1>
    <p class="lead"><?php echo (empty($desc))?"Any quests in real life(just for ... just)":$desc ?></p>
</div>
<div class="container py-3">
        <?php include_once 'views/content.php'?>
</div>
<? include_once "views/templates/footer.php" ?>
