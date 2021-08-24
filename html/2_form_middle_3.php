<?php
    echo $html = <<<HTML
        <div class="prcf_form_middle_3">
            <div class="flex_child_right">
                <div><label for="prcf_input_url" id="prcf_label_url">כתובת אתר אינטרנט (אם רלוונטי)</label></div>
                <input type="text" dir="ltr" name="url" id="prcf_input_url" class="prcf_item"></input>
            </div>
            <div class="flex_child_left">
                <div><label for="prcf_input_notes" id="prcf_label_notes">הערות (אם רלוונטי)</label></div>
                <!-- <textarea rows="5" name="notes" id="prcf_input_notes" class="prcf_item"></textarea> -->
                <input name="notes" id="prcf_input_notes" class="prcf_item"></input>
            </div>
        </div>
    HTML;
?>
