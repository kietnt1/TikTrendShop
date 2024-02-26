  <!-- Page Sidebar Start-->
  <div class="iconsidebar-menu w-100" style="max-width:200px">
      <div class="sidebar">
          <ul class="iconMenu-bar custom-scrollbar w-100">
              <li style="min-width: max-content">
                  <a class="bar-icons d-flex" href="{{ route('manager.shop') }}">
                      <i class="pe-7s-home " style="margin-right:10px;"></i><span> thông kê </span>
                  </a>
              </li>
              <li style="min-width: max-content">
                  <a class="bar-icons d-flex" href="javascript:void(0)"><i class="pe-7s-note2 " style="margin-right:10px; "></i><span>Quản lý đơn hàng</span></a>
                  <ul class="iconbar-mainmenu  custom-scrollbar" style="left:200px">
                      <li class="iconbar-header">Đơn Hàng</li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Thimify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon</a></li>
                      <li><a href="pe7-icon.html">pe7 icon</a></li>
                      <li><a href="ionic-icon.html">Ionic icon</a></li>
                  </ul>
              </li>
              <li style="min-width: max-content">
                  <a class="bar-icons d-flex" href="javascript:void(0)"><i class="pe-7s-note2 " style="margin-right:10px; "></i><span>Quản lý sản phẩm</span></a>
                  <ul class="iconbar-mainmenu  custom-scrollbar" style="left:200px">
                      <li class="iconbar-header">Sản Phẩm</li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Thimify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon</a></li>
                      <li><a href="pe7-icon.html">pe7 icon</a></li>
                      <li><a href="ionic-icon.html">Ionic icon</a></li>
                  </ul>
              </li>
              <li style="min-width: max-content">
                  <a class="bar-icons d-flex" href="javascript:void(0)"><i class="pe-7s-note2 " style="margin-right:10px; "></i><span>Quản lý tin tức</span></a>
                  <ul class="iconbar-mainmenu  custom-scrollbar" style="left:200px">
                      <li class="iconbar-header">Tin Tức</li>
                      <li><a href="state-color.html">State color</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="sticky.html">Sticky</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                  </ul>
              </li>
              <li>
                  <a class="bar-icons d-flex" href="javascript:void(0)"><i class="pe-7s-note2 " style="margin-right:10px; "></i><span>Thiết lập</span></a>
                  <ul class="iconbar-mainmenu  custom-scrollbar" style="left:200px">
                      <li class="iconbar-header">Thiết lập</li>
                      <li><a href="{{ route('manager.update.shop', ['slug' => $store->slug]) }}">thây Đổi thông tin</a></li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
  <!-- Page Sidebar Ends-->
  <!-- Right sidebar Start-->
  <div class="right-sidebar" id="right_side_bar">
      <div>
          <div class="container p-0">
              <div class="modal-header p-l-20 p-r-20">
                  <div class="col-sm-8 p-0">
                      <h6 class="modal-title font-weight-bold">Contacts Status</h6>
                  </div>
                  <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
              </div>
          </div>
          <div class="friend-list-search mt-0">
              <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
          </div>
          <div class="p-l-30 p-r-30">
              <div class="chat-box">
                  <div class="people-list friend-list">
                      <ul class="list">
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/1.jpg" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                  <div class="name">Vincent Porter</div>
                                  <div class="status"> Online</div>
                              </div>
                          </li>
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/2.jpg" alt="">
                              <div class="status-circle away"></div>
                              <div class="about">
                                  <div class="name">Ain Chavez</div>
                                  <div class="status"> 28 minutes ago</div>
                              </div>
                          </li>
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/8.jpg" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                  <div class="name">Kori Thomas</div>
                                  <div class="status"> Online</div>
                              </div>
                          </li>
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/4.jpg" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                  <div class="name">Erica Hughes</div>
                                  <div class="status"> Online</div>
                              </div>
                          </li>
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/5.jpg" alt="">
                              <div class="status-circle offline"></div>
                              <div class="about">
                                  <div class="name">Ginger Johnston</div>
                                  <div class="status"> 2 minutes ago</div>
                              </div>
                          </li>
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/6.jpg" alt="">
                              <div class="status-circle away"></div>
                              <div class="about">
                                  <div class="name">Prasanth Anand</div>
                                  <div class="status"> 2 hour ago</div>
                              </div>
                          </li>
                          <li class="clearfix"><img class="rounded-small user-image" src="./../assets/images/user/7.jpg" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                  <div class="name">Hileri Jecno</div>
                                  <div class="status"> Online</div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
