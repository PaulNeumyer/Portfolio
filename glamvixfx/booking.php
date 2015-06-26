<?php 
$pageTitle = "Booking";
include 'inc/header.php'; ?>

<div class="mycontent">

    <form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
          action="https://glamvixfx.wufoo.com/forms/z1wcv2701c4ioxt/#public">

        <ul>

            <li id="foli1" class="notranslate      ">
                <label class="desc" id="title1" for="Field1">
                    Type of Job
                </label>
                <div>
                    <input id="Field1" placeholder="Type of Job*" name="Field1" type="text" class="field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required />
                </div>
            </li><li id="foli2" 
                     class="notranslate      "><label class="desc" id="title2" for="Field2">
                    Brief Description of Job
                </label>

                <div>
                    <textarea id="Field2" 
                              name="Field2" 
                              placeholder="*Brief Description of Job including stills or video, number of talent, etc."
                              class="field textarea medium" 
                              spellcheck="true" 
                              rows="10" cols="50" 
                              tabindex="2" 
                              onkeyup=""
                               required
                              ></textarea>

                </div>
            </li>
            <li id="foli3" class="notranslate      ">
                <label class="desc" id="title3" for="Field3">
                    Start Time
                </label>
                <div>
                    <input id="Field3" name="Field3" placeholder="Start Time*" type="text" class="field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required />
                </div>
            </li><li id="foli4" class="notranslate      ">
                <label class="desc" id="title4" for="Field4">
                    Approx. Wrap Time
                </label>
                <div>
                    <input id="Field4" name="Field4" placeholder="Approx Wrap Time*" type="text" class="field text medium" value="" maxlength="255" tabindex="4" onkeyup="" required />
                </div>
            </li><li id="foli5" class="notranslate      ">
                <label class="desc" id="title5" for="Field5">
                    Name
                </label>
                <div>
                    <input id="Field5" name="Field5" placeholder="Name*" type="text" class="field text medium" value="" maxlength="255" tabindex="5" onkeyup="" required />
                </div>
            </li><li id="foli6" class="notranslate      ">
                <label class="desc" id="title6" for="Field6">
                    Company
                </label>
                <div>
                    <input id="Field6" name="Field6" placeholder="Company" type="text" class="field text medium" value="" maxlength="255" tabindex="6" onkeyup="" />
                </div>
            </li><li id="foli8" class="notranslate      ">
                <label class="desc" id="title8" for="Field8">
                    Email
                </label>
                <div>
                    <input id="Field8" name="Field8" placeholder="Email*" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="7" required /> 
                </div>
            </li>
            <li id="foli9" class="notranslate      ">
                <label class="desc" id="title9" for="Field9">
                    Phone
                </label>
                <div>
                    <input id="Field9" name="Field9" placeholder="Phone Number*" type="tel" class="field text medium" value="" maxlength="255" tabindex="8" onkeyup="" required />
                </div>
            </li>

            <li class="buttons " style="margin-top: 1em;">
                <div>

                    <input id="saveForm" name="saveForm" class="btTxt submit"
                           type="submit" value="Submit"
                           /></div>
            </li>

            <li class="hide" style="display: none;">
                <label for="comment">Do Not Fill This Out</label>
                <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                <input type="hidden" id="idstamp" name="idstamp" value="aPwfheXCsoMzjRu3Uu0cO00tVCDnhiKMfCETvy07WQk=" />
            </li>
        </ul>
    </form>

</div>

<?php include 'inc/footer.php'; ?>