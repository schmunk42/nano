<div class="cms-default-index">
    <div class="container">
        <h1><?= $this->context->action->uniqueId ?></h1>
        <?php foreach ($issues AS $issue): ?>
            <h3><?= $issue['title'] ?></h3>
        <?php endforeach; ?>
    </div>
</div>
