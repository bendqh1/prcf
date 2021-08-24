<?php
    echo $html = <<<HTML
        <div class="prcf_form_middle_1">
            <div class="flex_child_right">
                <span><label for="prcf_input_name" id="prcf_label_name">שם</label></span><span class="required">*</span>
                <input type="text" name="name" id="prcf_input_name" class="prcf_item" required>
                </input> <!-- required property-->
            </div>
            <div class="flex_child_left">
                <span><label for="prcf_input_topic" id="prcf_label_topic">פנייה בנושא</label></span><span class="required">*</span>
                <select name="topic" id="prcf_input_topic" class="prcf_item">
                    <option value="קידום אתרים">קידום אתרים</option>
                    <option value="בניית אתרים">הדרכת הקמת אתרים</option>
                    <option value="ייעוץ והדרכה">ייעוץ והדרכה</option>
                    <option value="אחר">אחר</option>
                </select> <!-- required property-->
            </div>
        </div>
    HTML;
?>
