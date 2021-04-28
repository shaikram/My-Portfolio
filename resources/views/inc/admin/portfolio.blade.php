@include('inc/admin/navbar')
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Hi, <strong>{{ session('email') }}!</strong> welcome to admin dashboard.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<section class="content">
  <div class="container">
    <div class="row inbox-head">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 class="text-white">Upload Projects here!</h2>

      </div>
    </div>
    <div class="">
      <form class="row portfolio-content bg-secondary" id="portfolio_form" method="POST" enctype="multipart/form-data">
      {{-- This has 12 column --}}
      {{ csrf_field() }}
      @csrf
      <div class="col-sm-12 col-md-12 col-lg-6 col1"><br>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Website Name</label>
                <input type="text" name="input1" class="form-control bg-dark text-light" id="port1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Website Url</label>
                <input type="text" name="input2" class="form-control bg-dark text-light" id="port2" placeholder="nameofwebsite000.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Kind of system</label>
                <input type="text" name="input3" class="form-control bg-dark text-light" id="port3" placeholder="Ex: Webshop Ecommerce, Online Registraion...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Select Section</label>
                <select name="input4" class="form-select form-select-lg bg-dark text-light mb-3" aria-label=".form-select-lg example">
                    <option value="1">PORTFOLIO</option>
                    <option value="2">FUNCTIONAL</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label text-white">Description</label>
              <textarea name="input5" class="form-control bg-dark text-light" id="port4" placeholder="Text..." rows="3"></textarea>
            </div>

        <br>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col2"><br>

        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Cover Photo</label>
          <input type="file" name="cover" class="form-control bg-dark text-light" id="port5" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 1</label>
          <input type="file" name="file1" class="form-control bg-dark text-light" id="port6" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 2</label>
          <input type="file" name="file2" class="form-control bg-dark text-light" id="port7" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 3</label>
          <input type="file" name="file3" class="form-control bg-dark text-light" id="port8" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 4</label>
          <input type="file" name="file4" class="form-control bg-dark text-light" id="port9" />
        </div><br><br>

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
        <br>

        <div class="d-grid gap-2 col-6 mx-auto"><br>
          <button class="btn btn-primary" type="submit">Upload</button>
        </div><br><br>
      </div>
      </form>
    </div><br><br><br>
    <div class="portfolio-div">
      <div class="row">
        <div class="work-head col-sm-12 col-md-12 col-lg-12 align-items-center text-center">
          <h2>My Works</h2>
        </div>
      </div>
      <div class="row">
        <div class="work-content col-sm-12 col-md-12 col-lg-12">
                      {{-- <div class="myWorks_div" id="myWorks_div"> --}}

                        <div id="wbg" class="wbg" onclick="dlgLogIn()"></div>
                          <center>
                             <div id="dlgbox" class="dlgbox">

                             </div>
                          </center>

                        <div class="all_div work_ul_div" id="all_div">

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


                   {{-- </div> --}}
          <br><br><br><br><br>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>


  </div>
</section>


<script type="text/javascript">
var nav_item = document.getElementById('nav_item3');
nav_item.classList.add("active");
</script>
