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
          <input type="file" name="file1" class="form-control bg-dark text-light" id="port5" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 1</label>
          <input type="file" name="file2" class="form-control bg-dark text-light" id="port6" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 2</label>
          <input type="file" name="file3" class="form-control bg-dark text-light" id="port7" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 3</label>
          <input type="file" name="file4" class="form-control bg-dark text-light" id="port8" />
        </div>
        <div class="mb-3">
          <label class="form-label text-white" for="customFile">Picture 4</label>
          <input type="file" name="file5" class="form-control bg-dark text-light" id="port9" />
        </div><br><br>

      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
        <br>
        <div class="progress" >
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;margin-left:-100%;" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto"><br>
          <button class="btn btn-primary" type="submit">Upload</button>
        </div><br><br>
      </div>
      </form>
    </div>
  </div>
</section>


<script type="text/javascript">
var nav_item = document.getElementById('nav_item3');
nav_item.classList.add("active");
</script>
