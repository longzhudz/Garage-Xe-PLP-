 <!-- BEGIN: Content-->
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Account</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Account Settings </a>
                    </li>
                    <li class="breadcrumb-item active"> Account
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
    <ul class="nav nav-pills mb-2">
      <!-- account -->
      <li class="nav-item">
        <a class="nav-link active" href="page-account-settings-account.html">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-security.html">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-billing.html">
          <i data-feather="bookmark" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-notifications.html">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class="nav-item">
        <a class="nav-link" href="page-account-settings-connections.html">
          <i data-feather="link" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Connections</span>
        </a>
      </li>
    </ul>

    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Profile Details</h4>
      </div>
      <div class="card-body ">
        

        <!-- form -->
        <form class="validate-form pt-50" method="POST" action="" enctype="multipart/form-data">
          <!-- header section -->
        <?php if(empty($info['img'])==TRUE) { ?> 
          <div class="d-flex">
            <a href="#" class="me-25">
              <img
                src="/uploads/img/mauxam.jpg"
                id="account-upload-img"
                class="uploadedAvatar rounded me-50"
                alt="profile image"
                height="100"
                width="100"
              />
            </a>
            <!-- upload and reset button -->
            <div class="d-flex align-items-end mb-3 mt-75 ms-1">
              <div>
                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                <input type="file" name="img_acc" id="account-upload" hidden accept="image/*" />
                <p class="mb-0">Cho phép loại file tải lên: png, jpg, jpeg.</p>
              </div>
            </div>
            <!--/ upload and reset button -->
          </div>
        <?php }elseif(empty($info['img'])==FALSE){ ?>
          <div class="d-flex">
            <a href="#" class="me-25">
              <img
                src="<?=$info['img']?>"
                id="account-upload-img"
                class="uploadedAvatar rounded me-50"
                alt="profile image"
                height="100"
                width="100"
              />
            </a>
            <!-- upload and reset button -->
            <div class="d-flex align-items-end mb-3 mt-75 ms-1">
              <div>
                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                <input type="file" name="img_acc" id="account-upload" hidden accept="image/*" />
                <p class="mb-0">Cho phép loại file tải lên: png, jpg, jpeg.</p>
              </div>
            </div>
            <!--/ upload and reset button -->
          </div>
        <?php } ?>
        <!--/ header section -->
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label fw-bold" for="accountFirstName">Tên đăng nhập</label>
              <input
                type="text"
                class="form-control fw-bolder"
                id="accountFirstName"
                name="UserID"
                placeholder="Nhập tên vô đây"
                value="<?=$info['LoginName']?>"
                data-msg="Please enter first name"
                readonly
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName">Họ và tên</label>
              <input
                type="text"
                class="form-control "
                id="accountLastName"
                name="fullname"
                placeholder="Doe"
                value="<?=$info['Fullname']?>"
                data-msg="Please enter last name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail">Email</label>
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                name="email"
                placeholder="Email"
                value="<?=$info['Email']?>"
                readonly
              />
            </div>
           
            <?php if($info['Phone']==NULL) {?>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">Phone Number</label>
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="phone"
                placeholder="Phone Number"
                value="Trống"
              />
            </div>
            <?php }else{?>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">Phone Number</label>
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="phone"
                placeholder="Phone Number"
                value="<?=$info['Phone']?>"
              />
            </div> 
            <?php }?>
            
            <?php if($info['Level']==0) {?>
            <div class="col-12 col-sm-6 mb-1">
              <div class="card">
                <label class="form-label" for="accountOrganization">Cấp bậc</label>
                <span class="fw-bolder mt-1  text-success">Người dùng</span>
              </div>
            </div>
            <?php }elseif($info['Level']==1){?>
            <div class="col-12 col-sm-6 mb-1">
              <div class="card">
                <label class="form-label" for="accountOrganization">Cấp bậc</label>
                <span class="fw-bolder mt-1  text-danger">Admin</span>
              </div>
              
            </div>
            <?php }?>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Address</label>
              <input type="text" value="<?=$info['Address']?>" class="form-control" id="accountAddress" name="address" placeholder="Your Address" />
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- deactivate account  -->

    <!--/ profile -->
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->
