<?php
/**
 * *@var $limits $limits['lastPage'];
 * *@var $baseUrl ;
 * *@var $page ;
 * *@var $;
 * *@var $;
 * *@var $;
 * *@var $;
 */

$baseUrl = $baseUrl ?? $_SERVER['REQUEST_URI'];
if ($page == 1 && mb_strrpos($baseUrl, 'page=') === false) {
    $baseUrl .= (mb_strrpos($baseUrl, '?') === false) ? '?page=1' : '&page=1';
}
$page = $page ?? 1;
//todo url generation logic
?>
<nav aria-label="Page navigator" class="text-center">
    <!--    any address wuth ? page:=int|| nul-->
    <ul class="pagination">
        <?php if ($page != 1): ?>
            <li>
                <a href="<?php echo preg_replace('@page=[\d]+@', 'page=' . ($page - 1), $baseUrl) ?>"
                   aria-label="Previous">
                    <span aria-hidden="true"> &laquo; </span>
                </a>
            </li>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $limits['lastPage']; $i++): ?>
            <li class="<?= $i == $page ? 'active' : ''; ?>">
                <a href="<?= preg_replace('@page=[\d]+@', 'page=' . $i, $baseUrl, -1, $count) ?>">
                    <?= $i; ?>
                </a>
            </li>
        <?php endfor; ?>
        <?php if ($page < $limits['lastPage']): ?>
            <li>
                <a href="<?= preg_replace('@page=[\d]+@', 'page=' . ($page + 1), $baseUrl) ?>"
                   aria-label="Next">
                    <span aria-hidden="true"> &raquo; </span>
                </a>
            </li>
        <?php endif; ?>
    </ul>

