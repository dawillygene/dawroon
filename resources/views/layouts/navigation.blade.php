<div id="application-sidebar" class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-64 -translate-x-full transform overflow-y-auto border-e border-default-200 bg-white transition-all duration-300 hs-overlay-open:translate-x-0 dark:bg-default-50 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden">
    <div class="sticky top-0 flex h-18 items-center justify-start px-6">
      <a href="{{ route('dashboard') }}">
        <x-cards.product-card-image productImage="logo-dark-1caee452.png" alt="logo" class="flex h-10 dark:hidden"/>
        <x-cards.product-card-image productImage="logo-50f51c55.png" alt="logo" class="hidden h-10 dark:flex"/>
      </a>
    </div>
  
    <div class="hs-accordion-group h-[calc(100%-72px)] p-4" data-simplebar>
      <ul class="admin-menu flex w-full flex-col gap-1.5">
        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="{{ route('dashboard') }}">
            <i class="ti ti-smart-home text-xl"></i>
            Dashboard
            <span class="ms-auto inline-block rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">9+</span>
          </a>
        </li>
  
        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="admin-chat.html">
            <i class="ti ti-brand-hipchat text-xl"></i>
            Chat
          </a>
        </li>
  
        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="admin-calender.html">
            <i class="ti ti-calendar text-xl"></i>
            Calender
          </a>
        </li>
  
        <li class="px-6 py-2 text-sm font-medium text-default-600">Manage</li>
  
        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100" href="admin-wallet.html">
            <i class="ti ti-wallet text-xl"></i>
            Wallet
            <span class="ms-auto inline-block rounded-full bg-red-500/10 px-2.5 py-0.5 text-xs font-medium text-red-500">4+</span>
          </a>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-ticket text-xl"></i>
            Coupons
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuCoupons" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-coupons-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Coupons List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-coupons-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Coupon
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-coupons-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Coupon
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-list-check text-xl"></i>
            Order
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuOrder" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-order-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Orders List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-order-details.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Order Details
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-users text-xl"></i>
            Producers
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuCustomer" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-customer-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Producers List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-customer-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Producer Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-customer-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Producer
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-customer-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Producer
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-building-store text-xl"></i>
            Shops
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuShops" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-shops-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Shops List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-shops-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Shop Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-shops-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Shop
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-shops-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Shop
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-cheese text-xl"></i>
            Product
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuProduct" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-product-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Products List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-product-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Product
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-product-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Product
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-shopping-bag text-xl"></i>
            Sellers
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuSellers" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-sellers-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Sellers List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-sellers-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Seller Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-sellers-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Seller
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-sellers-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Seller
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-file-invoice text-xl"></i>
            Invoice
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuInvoice" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-invoice-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Invoices List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-invoice-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Invoice Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-invoice-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Invoice
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-license text-xl"></i>
            Blog
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>
  
          <div id="menuBlog" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="admin-blog-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Blogs List
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-blog-detail.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Blog Details
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-blog-add.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Add Blog
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-blog-edit.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Edit Blog
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- End Sidebar -->