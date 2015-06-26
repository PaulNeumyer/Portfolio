<?php
$pageTitle = "Contact";
$top = FALSE;
include 'inc/header.php';
?>
<div class="mycontent">
    <form id="form1" name="form1"autocomplete="off" enctype="multipart/form-data" method="post" novalidate
          action="https://acalculator.wufoo.com/forms/zjpv1xz10e72n3/#public">

        <header id="header" class="info">
            <h2>Contact Us</h2>
            <p>
                Please feel free to ask any questions. Our managers will answer to your question as soon as possible. Or call to our office
            </p>
        </header>

        <ul>

            <li id="foli1" class="notranslate      ">
                <label class="desc" id="title1" for="Field1">
                    Name
                    <span id="req_1" class="req">*</span>
                </label>
                <span>
                    <input id="Field1" name="Field1" type="text" placeholder="First" value="" size="8" tabindex="1" required />
                    <label for="Field1" style='display: none;'>First</label>
                </span>
                <span>
                    <input id="Field2" name="Field2" type="text" placeholder="Last" value="" size="14" tabindex="2" required />
                    <label for="Field2" style='display: none;'>Last</label>
                </span>
            </li>
            <li id="foli3" class="notranslate      ">
                <label class="desc" id="title3" for="Field3">
                    Email
                    <span id="req_3" class="req">*</span>
                </label>
                <div>
                    <input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" required /> 
                </div>
            </li>
            <li id="foli4" class="notranslate      ">
                <label class="desc" id="title4" for="Field4">
                    Question Theme
                    <span id="req_4" class="req">*</span>
                </label>
                <div>
                    <input id="Field4" name="Field4" type="text" class="field text medium" value="" maxlength="255" tabindex="4" onkeyup="" required />
                </div>
            </li><li id="foli5" 
                     class="notranslate      "><label class="desc" id="title5" for="Field5">
                    Question
                    <span id="req_5" class="req">*</span>
                </label>

                <div>
                    <textarea id="Field5" 
                              name="Field5" 
                              class="field textarea medium" 
                              spellcheck="true" 
                              rows="30" cols="50" 
                              tabindex="5" 
                              onkeyup=""
                              required  ></textarea>

                </div>
            </li> <li class="buttons ">
                <div>

                    <input id="saveForm" name="saveForm" class="btTxt submit" 
                           type="submit" value="Submit"
                           /></div>
            </li>

            <li class="hide" style="display:none;">
                <label for="comment">Do Not Fill This Out</label>
                <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                <input type="hidden" id="idstamp" name="idstamp" value="xGbcc4K42yzXn5lTiB8aJrZ/8vB4aVWM8w8o5MrIvLo=" />
            </li>
        </ul>
    </form>
</div>

<?php include 'inc/footer.php'; ?>