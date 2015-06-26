<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email =  $_POST["email"];
    $message =  $_POST["message"];
    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message;

    // TODO: Send Email

    header("Location: contact?status=thanks");
    exit;
}
?>
<?php
$pageTitle = "Contact Us";
include('inc/header.php');
?>
            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
            <?php } else { ?>
<form id="contact" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="contact">

    <header id="header" class="info">
        <h2>Contact Us</h2>
        <div></div>
    </header>

    <ul>

        <li id="foli1" class="notranslate      ">
            <label class="desc" id="title1" for="Field1">
                Name
                <span id="req_1" class="req">*</span>
            </label>
            <span>
                <input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1" required />
                <label for="Field1">First</label>
            </span>
            <span>
                <input id="Field2" name="Field2" type="text" class="field text ln" value="" size="14" tabindex="2" required />
                <label for="Field2">Last</label>
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
        <li id="foli4" class="phone notranslate      ">
            <label class="desc" id="title4" for="Field4">
                Phone Number
                <span id="req_4" class="req">*</span>
            </label>
            <span>
                <input id="Field4" name="Field4" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="4" required />
                <label for="Field4">###</label>
            </span>
            <span class="symbol">-</span>
            <span>
                <input id="Field4-1" name="Field4-1" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="5" required />
                <label for="Field4-1">###</label>
            </span>
            <span class="symbol">-</span>
            <span>
                <input id="Field4-2" name="Field4-2" type="tel" class="field text" value="" size="4" maxlength="4" tabindex="6" required />
                <label for="Field4-2">####</label>
            </span>
        </li>
        <li id="foli5" 
            class="notranslate      "><label class="desc" id="title5" for="Field5">
                Message
                <span id="req_5" class="req">*</span>
            </label>

            <div>
                <textarea id="Field5" 
                          name="Field5" 
                          class="field textarea medium" 
                          spellcheck="true" 
                          rows="10" cols="50" 
                          tabindex="7" 
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
            <input type="hidden" id="idstamp" name="idstamp" value="PV/dCER9uEYqRCFC55OHmJFx/BPXm2XrVOOWRHq5pDw=" />
        </li>
    </ul>
</form>
<?php } ?>
<?php include('inc/footer.php'); ?>