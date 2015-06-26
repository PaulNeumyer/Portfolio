<?php
$pageTitle = "Contact";
include 'inc/header.php';
?>
<div class="mycontent">

    <form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
          action="https://belighttea.wufoo.com/forms/zx2o6zz1f0m2l8/#public">



        <ul style="list-style-type: none; padding-left: 0!important;">

            <li id="foli1" class="notranslate      ">
                <label class="desc" id="title1" for="Field1">
                    Name
                    <span id="req_1" class="req">*</span>
                </label>
                <div>
                    <input id="Field1" name="Field1" type="text" class="field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required />
                </div>
            </li><li id="foli2" class="notranslate      ">
                <label class="desc" id="title2" for="Field2">
                    Email
                    <span id="req_2" class="req">*</span>
                </label>
                <div>
                    <input id="Field2" name="Field2" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="2" required /> 
                </div>
            </li>
            <li id="foli3" class="notranslate      ">
                <label class="desc" id="title3" for="Field3">
                    Subject
                    <span id="req_3" class="req">*</span>
                </label>
                <div>
                    <input id="Field3" name="Field3" type="text" class="field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required />
                </div>
            </li><li id="foli4" 
                     class="notranslate      "><label class="desc" id="title4" for="Field4">
                    Your Message
                    <span id="req_4" class="req">*</span>
                </label>

                <div>
                    <textarea id="Field4" 
                              name="Field4" 
                              class="field textarea medium" 
                              spellcheck="true" 
                              rows="10" cols="50" 
                              tabindex="4" 
                              onkeyup=""
                              required  ></textarea>

                </div>
            </li> <li class="buttons ">
                <div style="margin: 2em 0;" >

                    <input id="saveForm" name="saveForm"
                           type="submit" value="Submit"
                           /></div>
            </li>

            <li class="hide" style="display: none;">
                <label for="comment">Do Not Fill This Out</label>
                <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                <input type="hidden" id="idstamp" name="idstamp" value="ZULDqvKJ5zmpxQjeNUNStCLXW2++RqsT0kGNDAyRjiQ=" />
            </li>
        </ul>
    </form>


</div>

<?php include 'inc/footer.php'; ?>