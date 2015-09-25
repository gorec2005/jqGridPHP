<div style="border-radius: 5px; padding:3px; margin-top:0;" class="ui-widget ui-widget-content">
    <span style="display: inline-block" class="ui-icon ui-icon-flag"> </span>
    <select id="lang_select">
        <option value="en" <?php echo ($lang==='en'?'selected="selected"':''); ?>>English</option>
        <option value="ru" <?php echo ($lang==='ru'?'selected="selected"':''); ?>>русский</option>
    </select>
</div>
<script>
$("#lang_select").change(function() {
    var new_lang = $("#lang_select").val();
    window.location.href = "?lang=" + new_lang + "&render=<?=$grid?>";
});
</script>
<div id="accordion">
    <? foreach($_SECTIONS as $k => $s): ?>
    <h3><a href="#"><?=$s['name'][$lang]?></a></h3>
    <div>
        <ul>
            <? foreach($s['items'] as $item_id => $item_name): ?>
            <li<? if(jqGrid_Utils::uscore2camel('jq', $item_id) == $grid): ?> class="active"<? endif; ?>><a
                href="?lang=<?=$lang?>&render=<?=jqGrid_Utils::uscore2camel('jq', $item_id)?>"><?=$item_name[$lang]?></a></li>
            <? endforeach; ?>
        </ul>
    </div>
    <? endforeach; ?>
</div>