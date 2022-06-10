 <!-- BEGIN: Content-->
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Services</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Services
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
        <div class="content-body"><!-- Flatpickr Starts -->                
            <section id="flatpickr">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Booking</h4>
                            </div>
                            <div class="card-body">
                              <?php if(isset($_SESSION['alert']))
                              echo "<h4 class'text-danger'>".$_SESSION['alert']."</h4>";
                              //unset($_SESSION['alert']);
                              ?>
                                <form id="book_ajax" action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                            <label class="form-label" for="first-name-column">Tên</label>
                                            <input
                                                type="text"
                                                id="first-name-column"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="fname"
                                            />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="select2-multiple">Dịch vụ</label>
                                            <select class="select2 form-select" name="dichvu[]" id="select2-multiple" multiple="multiple">
                                            <optgroup label="Dịch vụ của Garage">
                                              <?php foreach($load as $key => $value){?>
                                                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                                              <?php }?>
                                            </optgroup>
                                            
                                            </select>
                                        </div>
                                        <!-- Multiple -->
                                        <div class="col-md-6 mb-1">
                                        <label class="form-label" for="fp-default">Ngày đặt</label>
                                        <input type="date" id="ngay_dat"  name="ngay_dat"  value="<?= date('Y-m-d') ?>" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <div class="col-md-6 mb-1">
                                        <label class="form-label" for="fp-time">Giờ đặt</label>
                                        <input type="time" id="gio_dat" value="<?= date('H:i:s') ?>"  name="gio_dat"  class="form-control flatpickr-time text-start" placeholder="HH:MM" />
                                        </div>
                                        <div class="col-12">
                                            <button id="book_ajax" type="submit" class="btn btn-primary me-1">Submit</button>
                                        </div>
                                    </div>
                                <!-- Multiple -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- Flatpickr Ends-->



        </div>
      </div>
   
    </div>
    <!-- END: Content-->
