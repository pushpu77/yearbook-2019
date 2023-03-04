<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 13)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>First day at <br> Kgp Campus</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Kho Gaye hum Kaha...!</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/13')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" >
    <header>
      <h1>First day at <br> Kgp Campus</h1>
      <h2>Kho Gaye hum Kaha...!</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/13')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 14)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>Hall cultural nights</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>The nights which never</h2><br><h2>ended.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/14')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" >
    <header>
      <h1>Hall cultural nights</h1>
      <h2>The nights which never</h2><br><h2>ended.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/14')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 15)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>NSS/NCC <br> Camps</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>It started with a </h2><br><h2>compulsion but ended up</h2><br><h2>with forever friends.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/15')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" >
    <header>
      <h1>NSS/NCC <br>Camps</h1>
      <h2>It started with a </h2><br><h2>compulsion but ended up</h2><br><h2>with forever friends.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/15')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>