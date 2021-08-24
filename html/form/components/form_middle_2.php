<?php
    echo $html = <<<HTML
        <div class="prcf_form_middle_2">
        <div class="flex_child_right">
                <span><label for="prcf_input_email" id="prcf_label_email" class="prcf_label">כתובת אימייל</label></span><span class="required">*</span>
                <input type="email" dir="ltr" name="email" id="prcf_input_email" class="prcf_item" required></input>
                <!-- required property-->
            </div>
            <div class="flex_child_left">
                <div><label for="prcf_input_phone" id="prcf_label_phone" class="prcf_label">מספר טלפון (אם רלוונטי)</label></div>
                <input type="tel" dir="ltr" name="phone" id="prcf_input_phone" class="prcf_item"></input>
            </div>
        </div>
    HTML;
?>
