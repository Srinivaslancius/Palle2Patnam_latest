<?php
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Menu</li>
             <li  class="<?php if($page_name == 'dashboard.php') { echo "active"; } ?>">
              <a href="dashboard.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Dashboard</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'site_settings.php') { echo "active"; } ?>">
              <a href="site_settings.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Site Settings</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Users</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Users</li>
                <li class="<?php if($page_name == 'admin_users.php' || $page_name == 'add_admin_users.php' || $page_name == 'edit_admin_users.php') { echo "active"; } ?>"><a href="admin_users.php">Admin Users</a></li> 
                <li class="<?php if($page_name == 'users.php' || $page_name == 'add_users.php' || $page_name == 'edit_users.php') { echo "active"; } ?>"><a href="users.php">Users</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Vendors</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Vendors</li>
                <li class="<?php if($page_name == 'vendors.php' || $page_name == 'add_vendors.php' || $page_name == 'edit_vendors.php') { echo "active"; } ?>"><a href="vendors.php">Vendors</a></li> 
                <li class="<?php if($page_name == 'milk_vendors.php' || $page_name == 'add_milk_vendors.php' || $page_name == 'edit_milk_vendors.php') { echo "active"; } ?>"><a href="milk_vendors.php">Milk Vendors</a></li>
                <li class="<?php if($page_name == 'other_vendors.php' || $page_name == 'add_other_vendors.php' || $page_name == 'edit_other_vendors.php') { echo "active"; } ?>"><a href="other_vendors.php">Other Vendors</a></li>
              </ul>
            </li>
            <li  class="<?php if($page_name == 'banners.php' || $page_name == 'add_banners.php' || $page_name == 'edit_banners.php' ) { echo "active"; } ?>">
              <a href="banners.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Banners</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'content_pages.php' || $page_name == 'add_content_pages.php' || $page_name == 'edit_content_pages.php') { echo "active"; } ?>">
              <a href="content_pages.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Content Pages</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'categories.php' || $page_name == 'add_categories.php' || $page_name == 'edit_categories.php') { echo "active"; } ?>">
              <a href="categories.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Categories</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'weight.php' || $page_name == 'add_weight.php' || $page_name == 'edit_weight.php') { echo "active"; } ?>">
              <a href="weight.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Weights</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'products.php' || $page_name == 'add_products.php' || $page_name == 'edit_products.php') { echo "active"; } ?>">
              <a href="products.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-shopping-basket zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Products</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Milk Orders</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="<?php if($page_name == 'milk_orders.php' || $page_name == 'add_milk_order.php') { echo "active"; } ?>"><a href="milk_orders.php">Milk Orders</a></li> 
                <li class="<?php if($page_name == 'extra_milk_orders.php' || $page_name == 'add_extra_milk_order.php') { echo "active"; } ?>"><a href="extra_milk_orders.php">Extra Milk Orders</a></li>
                <li class="<?php if($page_name == 'cancel_milk_orders.php' || $page_name == 'add_cancel_milk_order.php') { echo "active"; } ?>"><a href="cancel_milk_orders.php">Cancel Milk Orders</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Reports</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Milk Vendor Reports</li>
                <li class="<?php if($page_name == 'new_vendor_milk_reports.php') { echo "active"; } ?>"><a href="new_vendor_milk_reports.php" target="_blank">Milk Vendor Reports</a></li>
                <li class="<?php if($page_name == 'other_vendor_reports.php') { echo "active"; } ?>"><a href="other_vendor_reports.php" target="_blank">Other Vendor Reports</a></li>
                <li class="<?php if($page_name == 'user_milk_reports.php') { echo "active"; } ?>"><a href="user_milk_reports.php" target="_blank">User Milk Reports</a></li>
                <li class="<?php if($page_name == 'order_reports.php') { echo "active"; } ?>"><a href="order_reports.php" target="_blank">Order Reports</a></li>
              </ul>
            </li>
            <!-- <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Milk Order Reports</span>
              </a>
              <ul class="sidebar-submenu collapse">
                
                <li class="<?php if($page_name == 'milk_order_reports.php' || $page_name == 'monthly_milk_orders.php' || $page_name == 'yearly_milk_orders.php') { echo "active"; } ?>"><a href="milk_order_reports.php">Milk Reports</a></li>
                <li class="menu-subtitle">Milk Reports</li>
              </ul>
            </li> -->
            <li  class="<?php if($page_name == 'orders.php') { echo "active"; } ?>">
              <a href="orders.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Orders</span>
              </a>
            </li> 
            <!-- <li  class="<?php if($page_name == 'product_offers.php' || $page_name == 'add_product_offers.php' || $page_name == 'edit_product_offers.php') { echo "active"; } ?>">
              <a href="product_offers.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-shopping-basket zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Offers</span>
              </a>
            </li> -->
            </li>
            <li  class="<?php if($page_name == 'coverage_areas.php' || $page_name == 'add_coverage_areas.php' || $page_name == 'edit_coverage_areas.php') { echo "active"; } ?>">
              <a href="coverage_areas.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Coverage Areas</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'customer_enqueries.php') { echo "active"; } ?>">
              <a href="customer_enqueries.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-account-box-mail zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Customer Enqueries</span>
              </a>
            </li>
          </ul>
        </div>
      </div>