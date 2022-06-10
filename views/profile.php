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
        <div class="content-body">
            <div class="row">
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
                </div>
                <div class="col-7">
                    <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Thông tin chi tiết</h4>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success" href="profile-edit.html">Edit</a>
                        </div>
                    </div>
                    
                    <div class="card-body py-2 my-25 col-md-12">
                        
                    <div class="d-flex">
                       
                    <?php if(empty($info['img'])==TRUE) { ?> 
                        <div class="flex-shrink-0">
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
                        </div>
                    <?php }elseif(empty($info['img'])==FALSE){ ?>
                        <div class="flex-shrink-0">
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
                        </div>
                    <?php } ?>
                        <div class="card">
                            <div class="flex-grow-1 ms-2">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Họ và tên:
                                            <span class="fw-bold"><?=$info['Fullname']?></span>
                                        </label>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Địa chỉ:
                                            <span class="fw-bold"><?=$info['Address']?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Email:
                                            <span class="fw-bold"><?=$info['Email']?></span>
                                        </label>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Số điện thoại:
                                            <?php if($info['Phone']==NULL) {?>
                                            <span class="fw-bold">Trống</span>
                                            <?php }else{?>
                                            <span class="fw-bold"><?=$info['Phone']?></span>
                                                <?php }?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Cấp bậc:
                                            <?php if($info['Level']==0) {?>
                                            <span class="fw-bolder text-success">Người dùng</span>
                                            <?php }elseif($info['Level']==1){?>
                                            <span class="fw-bolder text-success">Admin</span>
                                                <?php }?>
                                        </label>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Trạng thái:
                                            <?php if($info['Status']==0) {?>
                                            <span class="fw-bolder   text-success">Đang hoạt động</span>
                                         
                                                <?php }?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    </div>
                </div>
     
            </div>
  

        </div>
        
    </div>

        </div>
      </div>
    </div>
    <!-- END: Content-->
