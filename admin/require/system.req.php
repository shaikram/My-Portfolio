<center>

   <div class="tranxBox" id="tranxBox" onclick="closeDlg()"></div>

   <div class="dlgBox" id="dlgBox">
     <h3>Add System</h3>
     <i class="fa fa-times fa-2x" onclick="closeDlg()"></i>
     <br><br><br><br>
     <form action="mysqli/portfolio.func.php" method="post">

       <input placeholder="Kind of system" type="text" name="webName" value=""><br>
       <input placeholder="Website URL" type="text" name="webURL" value=""><br>
       <input placeholder="Languages" type="text" name="systemKind" value=""><br>
       <textarea name="name" placeholder="Description" rows="8" cols="80"></textarea><br>
       <button type="button" class="sys_btn" name="button">SUBMIT</button>
      <div class="progress" style="display:none;">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </form>

   </div>
   <div class="systemDiv">
     <div class="circleDiv" onclick="showDlg()">
       <i class="fa fa-plus fa-3x"></i>
     </div>
     <div class="othersdiv">
       <h3>Other Systems</h3><br><br>
       <ul>
         <a href="#">
           <li>
             <h4>Ordering System</h4>
             <span>AJAX, LARAVEL</span>
             <p>This is sample description This is sample description</p>
           </li>
           <li>
             <h4>Ordering System</h4>
             <span>AJAX, LARAVEL</span>
             <p>This is sample description This is sample description</p>
           </li>
           <li>
             <h4>Ordering System</h4>
             <span>AJAX, LARAVEL</span>
             <p>This is sample description This is sample description</p>
           </li>
           <li>
             <h4>Ordering System</h4>
             <span>AJAX, LARAVEL</span>
             <p>This is sample description This is sample description</p>
           </li>
           <li>
             <h4>Ordering System</h4>
             <span>AJAX, LARAVEL</span>
             <p>This is sample description This is sample description</p>
           </li>

         </a>
       </ul>
     </div>
   </div>

</center>
