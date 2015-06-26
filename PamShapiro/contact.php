<?php
$pageTitle = "Contact Us";
include 'inc/header.php';
?>

<div class="container">

    <h2><?php echo $pageTitle ?></h2>

    <div clss="row">
        <p style="text-align: left;">
            We would like to hear from you. If you are looking for a Wedding Photographer, Commercail Photographer, Portrait Photographer or School Photographer please give us your contact info and we will contact you within 24 hours.
        </p>
        <form id="form1" name="form1" class="wufoo topLabel page" style="text-align: left;" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
              action="https://pamshapiro.wufoo.com/forms/zqyak6s1ex9z32/#public">

            <ul>

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
                <li id="foli3" 
                    class="notranslate      "><label class="desc" id="title3" for="Field3">
                        Message
                        <span id="req_3" class="req">*</span>
                    </label>

                    <div>
                        <textarea id="Field3" 
                                  name="Field3" 
                                  class="field textarea medium" 
                                  spellcheck="true" 
                                  rows="10" cols="50" 
                                  tabindex="3" 
                                  onkeyup=""
                                  required  ></textarea>

                    </div>
                </li> <li class="buttons ">
                    <div>

                        <input id="saveForm" name="saveForm" class="btn btn-default btn-lg" 
                               type="submit" value="Submit"
                               /></div>
                </li>

                <li class="hide">
                    <label for="comment">Do Not Fill This Out</label>
                    <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                    <input type="hidden" id="idstamp" name="idstamp" value="/NIRCkapBrq00WqCbKVZQlZqjwhrkc5nEv3cW3TrAAU=" />
                </li>
            </ul>
        </form>
    </div>

    <?php include 'inc/footer.php'; ?>