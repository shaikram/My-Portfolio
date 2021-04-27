<center>
  <div class="port_form_div">
    <div class="form_div_port">
      <h2>UPLOAD NEW PORTFOLIO</h2>
      <form id="uploadImage" action="mysqli/portfolio.func.php" method="post">

        <input placeholder="Website Name" class="port_inputs" type="text" name="webName" value=""><br>
        <input placeholder="Website URL" class="port_inputs" type="text" name="webURL" value=""><br>
        <input placeholder="Kind of System" class="port_inputs" type="text" name="systemKind" value=""><br>
        <textarea placeholder="Portfolio description..." class="port_desc" name="description" rows="8" cols="80"></textarea><br>
        <span>Select Section</span><br>
        <select class="port_section" name="section">
          <option value="PORTFOLIO">PORTFOLIO</option>
          <option value="FUNCTIONAL">FUNCTIONAL</option>
        </select><br>
       <span>Cover Photo</span><br>
       <input class="port_file" type="file" name="uploadFile" id="uploadFile" accept=".jpg, .jpeg, .png" />
       <span>Picture 1</span><br>
       <input class="port_file" type="file" name="uploadFile1" id="port_photo1" accept=".jpg, .jpeg, .png" />
       <span>Picture 2</span><br>
       <input class="port_file" type="file" name="uploadFile2" id="port_photo2" accept=".jpg, .jpeg, .png" />
       <span>Picture 3</span><br>
       <input class="port_file" type="file" name="uploadFile3" id="port_photo3" accept=".jpg, .jpeg, .png" />
       <span>Picture 4</span><br>
       <input class="port_file" type="file" name="uploadFile4" id="port_photo4" accept=".jpg, .jpeg, .png" />
       <input class="port_btn" type="submit" id="uploadSubmit" value="Upload" class="btn btn-info" />
       <div class="progress" style="display:none;">
         <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
       </div>
     </form>
    </div>
  </div>
</center>
