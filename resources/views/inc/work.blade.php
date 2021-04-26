<div class="work_sec work-scroll" id="scroll-section4">
   <div class="workCont">
     <h2>WORK</h2><br>
     <div class="work_line"></div>


   </div>
   <div class="workCont1">
     <div class="work_nav">
       <ul class="ul_1">
         <li id="wrk_all">ALL</li>
         <li id="wrk_port">PORTFOLIOS</li>
       </ul>
       <ul class="ul_2">
         <li id="wrk_func">FUNCTIONAL</li>
         <li id="wrk_oth">OTHERS</li>
       </ul>
     </div>
     <div class="myWorks_div" id="myWorks_div">

       <div id="wbg" class="wbg" onclick="dlgLogIn()"></div>
         <center>
            <div id="dlgbox" class="dlgbox">

            </div>
         </center>

       <div class="all_div work_ul_div" id="all_div">
         <h2>ALL</h2>
         <ul>
           @foreach ($data as $rows)

                   <li id="work_img_li">
                     <div class="work_img_div" ontouchmove="closeFunc({{ $rows->portId }});" onmouseout="leaveFunc({{ $rows->portId }});" onmouseover="hoverFunc({{ $rows->portId }});">
                       <center>
                         {{ csrf_field() }}
                         <div class="work_hover" onclick="closeFunc({{ $rows->portId }});" id="work_hover{{ $rows->portId }}">
                           <h3>{{ $rows->webName }}</h3>
                           <br><br><br>
                           <div class="see_more_div" id="showDialog{{ $rows->portId }}" onclick="showDialog({{ $rows->portId }});">
                             SEE MORE
                           </div>
                         </div>
                           <img src="work/{{ $rows->coverPhoto }}" onclick="clickFunc({{ $rows->portId }});" id="work_img{{ $rows->portId }}" class="work_img">
                       </center>
                     </div>
                   </li>
             @endforeach


         </ul>
       </div>
       <div class="portfolio_div work_ul_div" id="portfolio_div">
         <h2>PORTFOLIO</h2>
         <ul>
            @foreach ($data2 as $rows)
                   <li id="work_img_li">
                     <div class="work_img_div" onmouseout="leaveFunc({{ $rows->portId }});" onmouseover="hoverFunc({{ $rows->portId }});">
                       <center>
                         <div class="work_hover" onclick="closeFunc({{ $rows->portId }});" id="work_hover_1{{ $rows->portId }}">
                           <h3>{{ $rows->webName }}</h3>
                           <br><br><br>
                           <div class="see_more_div" id="showDialog{{ $rows->portId }}" onclick="showDialog({{ $rows->portId }});">
                             SEE MORE
                           </div>
                         </div>
                           <img src="work/{{ $rows->coverPhoto }}" onclick="clickFunc({{ $rows->portId }});" id="work_img_1{{ $rows->portId }}" class="work_img">
                       </center>
                     </div>
                   </li>
            @endforeach
         </ul>
       </div>

       <div class="functional_div work_ul_div" id="functional_div">
         <h2>FUNCTIONAL</h2>
         <ul>
            @foreach ($data1 as $rows)
                   <li id="work_img_li">
                     <div class="work_img_div" onmouseout="leaveFunc({{ $rows->portId }});" onmouseover="hoverFunc({{ $rows->portId }});">
                       <center>
                         <div class="work_hover" onclick="closeFunc({{ $rows->portId }});" id="work_hover_1{{ $rows->portId }}">
                           <h3>{{ $rows->webName }}</h3>
                           <br><br><br>
                           <div class="see_more_div" id="showDialog{{ $rows->portId }}" onclick="showDialog({{ $rows->portId }});">
                             SEE MORE
                           </div>
                         </div>
                           <img src="work/{{ $rows->coverPhoto }}" onclick="clickFunc({{ $rows->portId }});" id="work_img_1{{ $rows->portId }}" class="work_img">
                       </center>
                     </div>
                   </li>
            @endforeach
         </ul>
       </div>
       <div class="others_div" id="others_div">
         <h2>OTHERS</h2>
         <center>
         <div class="redirectDiv">
           <h3><i class="fa fa-folder-open fa-lg"></i> Other Works</h3>
           <input type="password" id="rdct_inp" maxlength="20">
           <button type="button" id="rdct_btn">SUBMIT</button><br>
           <span id="redrctError">
             This area is for admin only, please leave this area, Thankyou!
           </span>

         </div>
       </center>
       </div>
  </div>

   </div>


 </div>
