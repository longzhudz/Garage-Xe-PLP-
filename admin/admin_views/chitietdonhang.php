<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Chi tiết đơn hàng số <?=$id?></h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./hoadon.html">Hóa đơn</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
    <section id="context-menu">
            <div class="row">
                <div class="col-12">
                     
                    <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Thông tin chi tiết</h4>
                      
                   
                    
                    <div class="card-body py-2 my-25 col-md-12">
                    <?php foreach($result as $key =>$value){?>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <a href="#" class="me-25">
                            <img
                                src="<?=$value['img']?>"
                                id="account-upload-img"
                                class="uploadedAvatar rounded me-50"
                                alt="profile image"
                                height="100"
                                width="100"
                                />
                                </a>
                        </div>
                   
                        <div class="card">
                            <div class="flex-grow-1 ms-2">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Tên sản phẩm:
                                            <span class="fw-bold"><?=$value['name']?></span>
                                        </label>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Số lượng:
                                            <span class="fw-bold"><?=$value['quantity']?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="fw-normal" for="accountLastName">Giá:
                                            <span class="fw-bold"><?=$value['price']?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <div class="row">
                                    <div class="col-12 col-sm-12 mb-1">
                                        <label class="fw-normal" for="accountLastName">Trạng thái:
                                            <?php if($value['status']==0) {?>
                                            <span class="fw-bolder   text-success">Đang hoạt động</span>
                                         
                                                <?php }?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <?php }?>
                   
                    <div class="row">
                            <div class="col-2">Trạng thái:</div>
                             <div class="col-10">
                                 
                             <?php if($get_id['status']== 0) { ?>
                                <p class="text-primary fw-bolder" >Chưa xử lý</p>
                                            <?php }elseif($get_id['status']== 1){ ?> 
                                                <p class="text-success fw-bolder">Đã giao</p>       
                                            <?php }elseif($get_id['status']== 2){ ?>
                                                <p class="text-danger fw-bolder">Đã hủy</p>  
                            <?php }?>
                             </div> 
                        </div>
                        <div class="row">
                            <div class="col-2">Cập nhật:</div>
                             <div class="col-10">
                                 <form action="" method="POST">
                                     <select style="height:35px" name="status" id="">
                                         <option value="0">Chưa xử lý</option>
                                         <option value="1">Đã giao</option>
                                         <option value="2">Hủy đơn</option>
                                     </select>
                                     <button type="submit" class="btn btn-outline-success" id="save-cate-list"><i data-feather="save"></i>Update</button>
                                   
                                 </form>
                                 <div class="d-flex align-items-end flex-column bd-highlight">
                                    <div class="p-2 bd-highlight">
                                        <a href="./index.php?ctrl=xuathoadon&id=<?=$id?>">
                                        <button type="submit" class="btn btn-outline-danger" id="save-cate-list"><i data-feather="save"></i>Xuất hóa đơn</button>
                                        </a>
                                    </div>
                                    
                                </div>
                                                                
                            
                             </div> 
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
      
       
    </div>
 
<script>
    function Upl()
    {
        return alert('Bạn đã cập nhật thành công ');
    }
</script>
</div>



