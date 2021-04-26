<div class="contact_sec contact-scroll" id="scroll-section5">
  <div class="contactCont">
    <h2>CONTACT</h2><br>
    <div class="contact_line"></div>
    <div class="div_form" id="div_form">
      <center>
        <div class="trans_form"></div>
        <div class="contact_form">
          <form id="inq-data" data-route="" method="post">
            {{ csrf_field() }}
            <span>Have a question or want to work together?</span>
            <div class="cont_error"id="cont_error">Avoid using special symbol on name field(#,@,$,^...i.e)</div>
            {{-- <div class="cont_error"id="cont_error2">Atleast put 6 or more string</div>
            <div class="cont_error"id="cont_error3">Put text on field!</div> --}}
            <div class="cont_error1"id="cont_error1">Your message successfully send</div>
            <input class="cont_inp" type="text"  id="cont_name" name="cont_inp" value="" minlength="6" maxlength="30" placeholder="Name" required>
            <input class="cont_inp" type="email" id="cont_email"  name="cont_email" value="" minlength="8" maxlength="30" placeholder="Email" required>
            <textarea class="cont_text" name="cont_text" id="cont_text"  rows="8" cols="20" minlength="10" placeholder="Message" required></textarea>
            <input type="submit" class="cont_btn" id="cont_send" name="cont_btn" value="SEND">
          </form>
        </div>
      </center>


    </div>
  </div>
</div>
