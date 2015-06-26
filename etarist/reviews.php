<?php
$pageTitle = "Reviews";
include 'inc/header.php';
?>

<div class="mycontent">

    <p style="text-align: left">
        Please let us know here how you enjoyed your lesson/s.
        Suggestions for improvements, please directly to us by email.
        Thank you very much.
    </p>

    <form id="form" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
          action="https://etarist.wufoo.com/forms/zeyijtt15yasmr/#public">

        <ul>

            <li id="foli6" class="notranslate      ">
                <label class="desc" id="title6" for="Field6">
                    Name
                    <span id="req_6" class="req">*</span>
                </label>
                <div>
                    <input id="Field6" name="Field6" type="text" class="field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required />
                </div>
            </li><li id="foli3" class="notranslate      ">
                <label class="desc" id="title3" for="Field3">
                    Email
                    <span id="req_3" class="req">*</span>
                </label>
                <div>
                    <input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="2" required /> 
                </div>
            </li>
            <li id="foli4" class="notranslate       ">
                <label class="desc" id="title4" for="Field4">
                    Website
                    <span id="req_4" class="req">*</span>
                </label>
                <div>
                    <input id="Field4" name="Field4" type="url" class="field text medium" value="" maxlength="255" tabindex="3" required /> 
                </div>
            </li><li id="foli5" 
                     class="notranslate      "><label class="desc" id="title5" for="Field5">
                    Comment
                    <span id="req_5" class="req">*</span>
                </label>

                <div>
                    <textarea id="Field5" 
                              name="Field5" 
                              class="field textarea medium" 
                              spellcheck="true" 
                              rows="10" cols="50" 
                              tabindex="4" 
                              onkeyup=""
                              required  ></textarea>

                </div>
            </li> <li class="buttons ">
                <div>

                    <input id="saveForm" name="saveForm" class="btTxt submit" 
                           type="submit" value="Submit"
                           /></div>
            </li>

            <li class="hide" style="display: none;">
                <label for="comment">Do Not Fill This Out</label>
                <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                <input type="hidden" id="idstamp" name="idstamp" value="A6iEI1zAIrcsif5hbuaK2BHRODbGUh1RXsn+FPbh9PU=" />
            </li>
        </ul>
    </form> 

</div>

<?php include 'inc/footer.php'; ?>