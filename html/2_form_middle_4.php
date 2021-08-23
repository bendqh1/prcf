<?php
    echo $html = <<<HTML
        <div class="prcf_form_middle_4">
            <div class="flex_child_right">
                <div><label for="prcf_input_date" id="prcf_label_date">יום רצוי לפגישה מרחוק (אם רלוונטי)</label></div>
                <input type="date" name="date" id="prcf_input_date" class="prcf_timing_fields"></input>
            </div>
            <div class="flex_child_left">
                <div><label for="prcf_input_time" id="prcf_label_time">שעה רצויה לפגישה מרחוק (אם רלוונטי)</label></div>
                <input type="time" name="time" id="prcf_input_time" class="prcf_timing_fields"></input>
            </div>
        </div>
    HTML;
?>