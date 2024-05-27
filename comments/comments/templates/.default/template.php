<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

use Bitrix\Main\UI\Extension;

Extension::load([
    'local.tasklist',
]);

?>

<script type="text/javascript">
    BX.ready(function()
    {
        const taskList = new BX.TaskList('#application');
        taskList.start();
    });
</script>


<div id="application"></div>
<div id="app"></div>

<script src="/bitrix/components/comments/comments/templates/.default/comments.js"></script>

<?php
//    \Bitrix\Main\Diag\Debug::dump($arParams);
//    \Bitrix\Main\Diag\Debug::dump($arResult);
?>