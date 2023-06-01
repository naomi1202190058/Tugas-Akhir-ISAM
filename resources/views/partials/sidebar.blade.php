<div class="offcanvas offcanvas-start px-3 pt-1" tabindex="-1" id="sidebar" style="width: 16rem" data-bs-scroll="true">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #808080">Menu</h5>
    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="p-0 menu">
      <li class="rounded-2 p-2 mb-3 menu-li {{ Request::is("beranda/*") ? "menu-active" : "" }}">
        <a href="/" class="d-flex align-items-center">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#808080" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
            <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#808080" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
            <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#808080" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
            <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#808080" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
          </svg>
          Beranda
        </a>
      </li>
      <li class="rounded-2 p-2 mb-3 menu-li {{ Request::is("ukm") ? "menu-active" : "" }}">
        <a href="/ukm" class="d-flex align-items-center align-items-center">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path d="M12.315 10.8027C11.4715 10.7938 10.6494 10.5369 9.95235 10.0644C9.25527 9.59175 8.71434 8.92457 8.39767 8.14681C8.08099 7.36905 8.00273 6.51548 8.17273 5.69356C8.34273 4.87165 8.75339 4.11814 9.35301 3.5279C9.95263 2.93766 10.7144 2.53708 11.5424 2.37659C12.3704 2.21611 13.2277 2.30289 14.0062 2.62602C14.7848 2.94915 15.4498 3.49417 15.9176 4.19248C16.3853 4.89078 16.635 5.71114 16.635 6.55027C16.6271 7.6834 16.168 8.76721 15.3582 9.56427C14.5485 10.3613 13.4542 10.8066 12.315 10.8027ZM12.315 3.78993C11.7682 3.79876 11.2362 3.96811 10.7858 4.27674C10.3354 4.58536 9.98671 5.01948 9.78357 5.52458C9.58042 6.02968 9.53184 6.58323 9.64394 7.11569C9.75604 7.64816 10.0238 8.13581 10.4136 8.51739C10.8035 8.89896 11.298 9.15745 11.835 9.26038C12.372 9.36331 12.9277 9.30609 13.4321 9.09592C13.9366 8.88574 14.3673 8.53198 14.6703 8.07907C14.9733 7.62616 15.135 7.09429 15.135 6.55027C15.1271 5.81286 14.826 5.10856 14.2976 4.59131C13.7692 4.07407 13.0564 3.78595 12.315 3.78993Z" fill="#808080" class="fill"/>
            <path d="M12.315 10.8027C11.4714 10.7938 10.6494 10.5369 9.9523 10.0644C9.25522 9.59175 8.71429 8.92458 8.39762 8.14681C8.08094 7.36905 8.00268 6.51548 8.17268 5.69356C8.34268 4.87165 8.75334 4.11814 9.35296 3.5279C9.95258 2.93766 10.7144 2.53708 11.5424 2.37659C12.3704 2.21611 13.2276 2.30289 14.0062 2.62602C14.7847 2.94915 15.4497 3.49417 15.9175 4.19248C16.3853 4.89078 16.6349 5.71114 16.635 6.55027C16.627 7.6834 16.1679 8.76721 15.3582 9.56427C14.5485 10.3613 13.4541 10.8066 12.315 10.8027ZM12.315 3.78993C11.7681 3.79876 11.2361 3.96811 10.7857 4.27674C10.3353 4.58536 9.98667 5.01948 9.78352 5.52458C9.58037 6.02968 9.53179 6.58323 9.64389 7.1157C9.756 7.64817 10.0238 8.13581 10.4136 8.51739C10.8034 8.89896 11.2979 9.15745 11.8349 9.26038C12.372 9.36331 12.9276 9.30609 13.4321 9.09592C13.9365 8.88574 14.3673 8.53198 14.6702 8.07907C14.9732 7.62616 15.1349 7.09429 15.135 6.55027C15.1271 5.81286 14.826 5.10856 14.2976 4.59131C13.7691 4.07407 13.0563 3.78595 12.315 3.78993ZM14.9325 11.8024C11.6059 11.2266 8.18124 11.7506 5.18247 13.2944C4.9696 13.412 4.79334 13.5855 4.67297 13.7961C4.55259 14.0066 4.49275 14.246 4.49997 14.4881V17.144C4.49997 17.3418 4.57899 17.5316 4.71964 17.6715C4.8603 17.8114 5.05106 17.89 5.24997 17.89C5.44889 17.89 5.63965 17.8114 5.7803 17.6715C5.92096 17.5316 5.99997 17.3418 5.99997 17.144V14.5851C8.78073 13.1972 11.943 12.7568 15 13.3317L14.9325 11.8024Z" fill="#808080" class="fill"/>
            <path d="M23.25 15.0476H18.225V13.9434C18.225 13.7456 18.146 13.5558 18.0053 13.4159C17.8647 13.276 17.6739 13.1974 17.475 13.1974C17.2761 13.1974 17.0853 13.276 16.9447 13.4159C16.804 13.5558 16.725 13.7456 16.725 13.9434V15.0476H11.25C11.0511 15.0476 10.8603 15.1262 10.7197 15.2661C10.579 15.406 10.5 15.5957 10.5 15.7936V23.2539C10.5 23.4518 10.579 23.6416 10.7197 23.7815C10.8603 23.9214 11.0511 24 11.25 24H23.25C23.4489 24 23.6397 23.9214 23.7803 23.7815C23.921 23.6416 24 23.4518 24 23.2539V15.7936C24 15.5957 23.921 15.406 23.7803 15.2661C23.6397 15.1262 23.4489 15.0476 23.25 15.0476ZM22.5 22.5079H12V16.5396H16.725V16.8455C16.725 17.0434 16.804 17.2331 16.9447 17.373C17.0853 17.5129 17.2761 17.5915 17.475 17.5915C17.6739 17.5915 17.8647 17.5129 18.0053 17.373C18.146 17.2331 18.225 17.0434 18.225 16.8455V16.5396H22.5V22.5079Z" fill="#808080" class="fill"/>
            <path d="M14.8575 19.0911H19.3275V20.1355H14.8575V19.0911ZM6.63 7.76626C4.55358 7.80082 2.51317 8.31141 0.6675 9.25833C0.466772 9.3638 0.298633 9.52155 0.181061 9.71471C0.0634892 9.90788 0.000905135 10.1292 0 10.355V12.6677C0 12.8656 0.0790176 13.0553 0.21967 13.1952C0.360322 13.3352 0.551088 13.4138 0.75 13.4138C0.948912 13.4138 1.13968 13.3352 1.28033 13.1952C1.42098 13.0553 1.5 12.8656 1.5 12.6677V10.5042C3.26347 9.63107 5.21592 9.20319 7.185 9.25833C6.92737 8.79077 6.74037 8.28802 6.63 7.76626ZM23.3325 9.25087C21.6771 8.38712 19.8579 7.87879 17.9925 7.7588C17.8827 8.27964 17.6983 8.78211 17.445 9.25087C19.2023 9.29271 20.9285 9.72072 22.5 10.5042V12.6677C22.5 12.8656 22.579 13.0553 22.7197 13.1952C22.8603 13.3352 23.0511 13.4138 23.25 13.4138C23.4489 13.4138 23.6397 13.3352 23.7803 13.1952C23.921 13.0553 24 12.8656 24 12.6677V10.355C24.0005 10.1279 23.9385 9.90505 23.8209 9.71045C23.7032 9.51585 23.5344 9.35693 23.3325 9.25087ZM6.495 6.55022V6.05038C5.90746 5.97217 5.37289 5.67157 5.00255 5.21116C4.63222 4.75075 4.45467 4.16601 4.50685 3.57866C4.55904 2.9913 4.83694 2.4466 5.28271 2.05794C5.72849 1.66927 6.30778 1.4666 6.9 1.4921C7.51599 1.49099 8.10805 1.72924 8.55 2.15607C8.93992 1.83616 9.36818 1.56552 9.825 1.35035C9.31471 0.766698 8.6386 0.350546 7.88579 0.156749C7.13298 -0.0370473 6.3388 0.000608378 5.60793 0.264753C4.87706 0.528898 4.24381 1.00713 3.79165 1.63642C3.33948 2.26572 3.08962 3.01653 3.075 3.78989C3.09074 4.73643 3.46065 5.64313 4.11248 6.3329C4.7643 7.02267 5.65122 7.44595 6.6 7.52007C6.53638 7.20049 6.50124 6.87595 6.495 6.55022ZM17.0775 2.98983e-05C16.5621 0.000142764 16.0519 0.102465 15.5767 0.301014C15.1015 0.499563 14.6709 0.790354 14.31 1.15639C14.817 1.33914 15.2965 1.59016 15.735 1.90242C16.0851 1.66065 16.4947 1.51794 16.9199 1.4895C17.3452 1.46105 17.7703 1.54795 18.1498 1.74092C18.5293 1.93389 18.8491 2.2257 19.075 2.58523C19.3009 2.94476 19.4244 3.35853 19.4325 3.78243C19.4278 4.21784 19.2992 4.64303 19.0616 5.00875C18.824 5.37447 18.4871 5.66578 18.09 5.84895C18.1202 6.079 18.1352 6.31076 18.135 6.54276C18.133 6.84264 18.1079 7.14193 18.06 7.43801C18.877 7.22907 19.6017 6.75731 20.1212 6.09616C20.6408 5.43501 20.926 4.62156 20.9325 3.78243C20.9226 2.77327 20.5116 1.80902 19.7893 1.10031C19.067 0.391603 18.0921 -0.00396037 17.0775 2.98983e-05Z" fill="#808080" class="fill"/>
          </svg>  
          UKM
        </a>
      </li>
      <li class="rounded-2 p-2 mb-3 menu-li {{ Request::is("rku*") ? "menu-active" : "" }}">
        <a href="{{ session()->get("role") == "ukm" ? "/rku" : "/rku/waiting" }}" class="d-flex align-items-center align-items-center">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path d="M11.35 3.836C11.285 4.046 11.25 4.269 11.25 4.5C11.25 4.914 11.586 5.25 12 5.25H16.5C16.6989 5.25 16.8897 5.17098 17.0303 5.03033C17.171 4.88968 17.25 4.69891 17.25 4.5C17.2501 4.27491 17.2164 4.05109 17.15 3.836M11.35 3.836C11.492 3.3767 11.7774 2.97493 12.1643 2.68954C12.5511 2.40414 13.0192 2.25011 13.5 2.25H15C15.4808 2.24996 15.949 2.40393 16.3359 2.68934C16.7228 2.97476 17.0081 3.37662 17.15 3.836M11.35 3.836C10.974 3.859 10.6 3.886 10.226 3.916C9.095 4.01 8.25 4.973 8.25 6.108V8.25M17.15 3.836C17.526 3.859 17.9 3.886 18.274 3.916C19.405 4.01 20.25 4.973 20.25 6.108V16.5C20.25 17.0967 20.0129 17.669 19.591 18.091C19.169 18.5129 18.5967 18.75 18 18.75H15.75M8.25 8.25H4.875C4.254 8.25 3.75 8.754 3.75 9.375V20.625C3.75 21.246 4.254 21.75 4.875 21.75H14.625C15.246 21.75 15.75 21.246 15.75 20.625V18.75M8.25 8.25H14.625C15.246 8.25 15.75 8.754 15.75 9.375V18.75M7.5 15.75L9 17.25L12 13.5" stroke="#808080" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
          </svg>
          RKU
        </a>
      </li>
      <li class="rounded-2 p-2 mb-3 menu-li">
        <a href="" class="d-flex align-items-center align-items-center trigger-dropdown">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.944 1.25H13.056C14.894 1.25 16.35 1.25 17.489 1.403C18.661 1.561 19.61 1.893 20.359 2.641C20.4915 2.78317 20.5636 2.97122 20.5602 3.16552C20.5567 3.35982 20.478 3.54521 20.3406 3.68262C20.2032 3.82003 20.0178 3.89875 19.8235 3.90217C19.6292 3.9056 19.4412 3.83348 19.299 3.701C18.875 3.279 18.295 3.025 17.289 2.89C16.262 2.752 14.907 2.75 13 2.75H11C9.093 2.75 7.739 2.752 6.71 2.89C5.705 3.025 5.125 3.279 4.702 3.702C4.279 4.125 4.025 4.705 3.89 5.711C3.752 6.739 3.75 8.093 3.75 10V14C3.75 15.907 3.752 17.262 3.89 18.29C4.025 19.295 4.279 19.875 4.702 20.298C5.125 20.721 5.705 20.975 6.711 21.11C7.739 21.248 9.093 21.25 11 21.25H13C14.907 21.25 16.262 21.248 17.29 21.11C18.295 20.975 18.875 20.721 19.298 20.298C19.994 19.602 20.205 18.521 20.241 15.989C20.2439 15.7901 20.3257 15.6005 20.4684 15.4619C20.6112 15.3233 20.8031 15.2471 21.002 15.25C21.2009 15.2529 21.3905 15.3347 21.5291 15.4774C21.6677 15.6202 21.7439 15.8121 21.741 16.011C21.706 18.438 21.549 20.169 20.359 21.359C19.61 22.107 18.661 22.439 17.489 22.597C16.349 22.75 14.894 22.75 13.056 22.75H10.944C9.106 22.75 7.65 22.75 6.511 22.597C5.339 22.439 4.39 22.107 3.641 21.359C2.893 20.61 2.561 19.661 2.403 18.489C2.25 17.349 2.25 15.894 2.25 14.056V9.944C2.25 8.106 2.25 6.65 2.403 5.511C2.561 4.339 2.893 3.39 3.641 2.641C4.39 1.893 5.339 1.561 6.511 1.403C7.651 1.25 9.106 1.25 10.944 1.25ZM18.114 7.046C18.364 6.78432 18.6637 6.57523 18.9957 6.43103C19.3276 6.28682 19.685 6.21041 20.0469 6.20627C20.4087 6.20213 20.7678 6.27036 21.1029 6.40693C21.4381 6.54351 21.7425 6.74569 21.9984 7.00159C22.2543 7.25749 22.4565 7.56195 22.5931 7.89708C22.7296 8.23222 22.7979 8.59127 22.7937 8.95314C22.7896 9.31501 22.7132 9.67241 22.569 10.0043C22.4248 10.3363 22.2157 10.636 21.954 10.886L17.2 15.643C17.0022 15.8514 16.7918 16.0474 16.57 16.23C16.34 16.41 16.09 16.564 15.826 16.69C15.602 16.797 15.366 16.875 15.02 16.99L12.936 17.685C12.7103 17.7605 12.4681 17.7716 12.2365 17.7171C12.0049 17.6625 11.793 17.5445 11.6248 17.3762C11.4565 17.208 11.3385 16.9961 11.2839 16.7645C11.2294 16.5329 11.2405 16.2907 11.316 16.065L11.997 14.025L12.011 13.982C12.127 13.635 12.205 13.4 12.312 13.176C12.4379 12.912 12.5921 12.6626 12.772 12.432C12.925 12.236 13.1 12.061 13.359 11.802L13.39 11.771L18.114 7.046ZM20.894 8.106C20.7811 7.99304 20.647 7.90343 20.4994 7.84229C20.3519 7.78115 20.1937 7.74968 20.034 7.74968C19.8743 7.74968 19.7161 7.78115 19.5686 7.84229C19.421 7.90343 19.2869 7.99304 19.174 8.106L18.992 8.288C19.002 8.321 19.013 8.358 19.026 8.395C19.12 8.665 19.299 9.025 19.637 9.363C19.9362 9.66401 20.3056 9.88569 20.712 10.008L20.894 9.826C21.007 9.71308 21.0966 9.57901 21.1577 9.43145C21.2188 9.28389 21.2503 9.12572 21.2503 8.966C21.2503 8.80627 21.2188 8.64812 21.1577 8.50055C21.0966 8.35299 21.007 8.21892 20.894 8.106ZM19.566 11.154C19.201 10.9621 18.8672 10.7159 18.576 10.424C18.2841 10.1328 18.0379 9.79897 17.846 9.434L14.45 12.83C14.149 13.131 14.043 13.239 13.954 13.353C13.841 13.498 13.744 13.655 13.665 13.82C13.603 13.951 13.554 14.094 13.419 14.498L13.019 15.698L13.302 15.981L14.502 15.581C14.906 15.446 15.049 15.397 15.18 15.335C15.345 15.255 15.502 15.159 15.647 15.046C15.761 14.957 15.869 14.851 16.17 14.55L19.566 11.154ZM7.25 9C7.25 8.80109 7.32902 8.61032 7.46967 8.46967C7.61032 8.32902 7.80109 8.25 8 8.25H14.5C14.6989 8.25 14.8897 8.32902 15.0303 8.46967C15.171 8.61032 15.25 8.80109 15.25 9C15.25 9.19891 15.171 9.38968 15.0303 9.53033C14.8897 9.67098 14.6989 9.75 14.5 9.75H8C7.80109 9.75 7.61032 9.67098 7.46967 9.53033C7.32902 9.38968 7.25 9.19891 7.25 9ZM7.25 13C7.25 12.8011 7.32902 12.6103 7.46967 12.4697C7.61032 12.329 7.80109 12.25 8 12.25H10.5C10.6989 12.25 10.8897 12.329 11.0303 12.4697C11.171 12.6103 11.25 12.8011 11.25 13C11.25 13.1989 11.171 13.3897 11.0303 13.5303C10.8897 13.671 10.6989 13.75 10.5 13.75H8C7.80109 13.75 7.61032 13.671 7.46967 13.5303C7.32902 13.3897 7.25 13.1989 7.25 13ZM7.25 17C7.25 16.8011 7.32902 16.6103 7.46967 16.4697C7.61032 16.329 7.80109 16.25 8 16.25H9.5C9.69891 16.25 9.88968 16.329 10.0303 16.4697C10.171 16.6103 10.25 16.8011 10.25 17C10.25 17.1989 10.171 17.3897 10.0303 17.5303C9.88968 17.671 9.69891 17.75 9.5 17.75H8C7.80109 17.75 7.61032 17.671 7.46967 17.5303C7.32902 17.3897 7.25 17.1989 7.25 17Z" fill="#808080" class="fill"/>
          </svg>
          Proposal
        </a>
      </li>
      <ul class="proposal-dropdown mb-3 d-none">
        @if (session()->get("role") == "ukm")
          <li class="py-3 ps-3"><a href="/proposal/pengajuan" class="{{ Request::is("proposal/pengajuan") ? "text-danger" : "" }}">Pengajuan</a></li>
        @endif
        <li class="py-3 ps-3"><a href="{{ session()->get("role") == "ukm" ? "/proposal/monitoring" : "/proposal/monitoring/waiting" }}" class="{{ Request::is("proposal/monitoring") ? "text-danger" : "" }}">Monitoring</a></li>
      </ul> 
      <li class="rounded-2 p-2 mb-3 menu-li {{ Request::is("rapor*") ? "menu-active" : "" }}">
        <a href="/rapor" class="d-flex align-items-center">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 5C15 4.60218 15.158 4.22064 15.4393 3.93934C15.7206 3.65804 16.1022 3.5 16.5 3.5C16.8978 3.5 17.2794 3.65804 17.5607 3.93934C17.842 4.22064 18 4.60218 18 5V15.1515L16.5 17.4015L15 15.1515V5ZM16.5 4.5C16.3674 4.5 16.2402 4.55268 16.1464 4.64645C16.0527 4.74021 16 4.86739 16 5V14.8485L16.5 15.5985L17 14.8485V5C17 4.86739 16.9473 4.74021 16.8536 4.64645C16.7598 4.55268 16.6326 4.5 16.5 4.5Z" fill="#808080" class="fill"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 7H15.5V6H17.5V7ZM2 1C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V16C1 16.2652 1.10536 16.5196 1.29289 16.7071C1.48043 16.8946 1.73478 17 2 17H12C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16V2C13 1.73478 12.8946 1.48043 12.7071 1.29289C12.5196 1.10536 12.2652 1 12 1H2ZM0 2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H12C12.5304 0 13.0391 0.210714 13.4142 0.585786C13.7893 0.960859 14 1.46957 14 2V16C14 16.5304 13.7893 17.0391 13.4142 17.4142C13.0391 17.7893 12.5304 18 12 18H2C1.46957 18 0.960859 17.7893 0.585786 17.4142C0.210714 17.0391 0 16.5304 0 16V2Z" fill="#808080" class="fill"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99998 4.5C6.99998 4.36739 7.05266 4.24021 7.14643 4.14645C7.24019 4.05268 7.36737 4 7.49998 4H11.5C11.6326 4 11.7598 4.05268 11.8535 4.14645C11.9473 4.24021 12 4.36739 12 4.5C12 4.63261 11.9473 4.75979 11.8535 4.85355C11.7598 4.94732 11.6326 5 11.5 5H7.49998C7.36737 5 7.24019 4.94732 7.14643 4.85355C7.05266 4.75979 6.99998 4.63261 6.99998 4.5ZM6.99998 6.5C6.99998 6.36739 7.05266 6.24021 7.14643 6.14645C7.24019 6.05268 7.36737 6 7.49998 6H11.5C11.6326 6 11.7598 6.05268 11.8535 6.14645C11.9473 6.24021 12 6.36739 12 6.5C12 6.63261 11.9473 6.75979 11.8535 6.85355C11.7598 6.94732 11.6326 7 11.5 7H7.49998C7.36737 7 7.24019 6.94732 7.14643 6.85355C7.05266 6.75979 6.99998 6.63261 6.99998 6.5ZM6.99998 11C6.99998 10.8674 7.05266 10.7402 7.14643 10.6464C7.24019 10.5527 7.36737 10.5 7.49998 10.5H11.5C11.6326 10.5 11.7598 10.5527 11.8535 10.6464C11.9473 10.7402 12 10.8674 12 11C12 11.1326 11.9473 11.2598 11.8535 11.3536C11.7598 11.4473 11.6326 11.5 11.5 11.5H7.49998C7.36737 11.5 7.24019 11.4473 7.14643 11.3536C7.05266 11.2598 6.99998 11.1326 6.99998 11ZM6.99998 13C6.99998 12.8674 7.05266 12.7402 7.14643 12.6464C7.24019 12.5527 7.36737 12.5 7.49998 12.5H11.5C11.6326 12.5 11.7598 12.5527 11.8535 12.6464C11.9473 12.7402 12 12.8674 12 13C12 13.1326 11.9473 13.2598 11.8535 13.3536C11.7598 13.4473 11.6326 13.5 11.5 13.5H7.49998C7.36737 13.5 7.24019 13.4473 7.14643 13.3536C7.05266 13.2598 6.99998 13.1326 6.99998 13ZM2.99998 11V12.5H4.49998V11H2.99998ZM2.49998 10H4.99998C5.13259 10 5.25977 10.0527 5.35353 10.1464C5.4473 10.2402 5.49998 10.3674 5.49998 10.5V13C5.49998 13.1326 5.4473 13.2598 5.35353 13.3536C5.25977 13.4473 5.13259 13.5 4.99998 13.5H2.49998C2.36737 13.5 2.24019 13.4473 2.14643 13.3536C2.05266 13.2598 1.99998 13.1326 1.99998 13V10.5C1.99998 10.3674 2.05266 10.2402 2.14643 10.1464C2.24019 10.0527 2.36737 10 2.49998 10ZM5.85348 4.1465C5.94722 4.24026 5.99987 4.36742 5.99987 4.5C5.99987 4.63258 5.94722 4.75974 5.85348 4.8535L3.49998 7.207L2.14648 5.8535C2.09872 5.80738 2.06063 5.7522 2.03443 5.6912C2.00822 5.6302 1.99443 5.56459 1.99385 5.4982C1.99328 5.43181 2.00593 5.36597 2.03107 5.30452C2.05621 5.24308 2.09334 5.18725 2.14028 5.1403C2.18723 5.09336 2.24305 5.05623 2.3045 5.03109C2.36595 5.00595 2.43179 4.9933 2.49818 4.99387C2.56457 4.99445 2.63018 5.00825 2.69118 5.03445C2.75218 5.06065 2.80736 5.09874 2.85348 5.1465L3.49998 5.793L5.14648 4.1465C5.24024 4.05276 5.3674 4.00011 5.49998 4.00011C5.63256 4.00011 5.75972 4.05276 5.85348 4.1465Z" fill="#808080" class="fill"/>
          </svg>
          Rapor UKM
        </a>
      </li>
      <li class="rounded-2 p-2 mb-3 menu-li {{ Request::is("lpj*") ? "menu-active" : "" }}">
        <a href="/lpj" class="d-flex align-items-center">
          <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path d="M15.497 2.627L15.5 4.75V13H14.5V2.25C14.5 1.65326 14.2629 1.08097 13.841 0.65901C13.419 0.237053 12.8467 0 12.25 0H3.25C2.65326 0 2.08097 0.237053 1.65901 0.65901C1.23705 1.08097 1 1.65326 1 2.25V6.379C0.397 6.783 0 7.469 0 8.25V16.75C0 17.1768 0.0840637 17.5994 0.247391 17.9937C0.410719 18.388 0.650112 18.7463 0.951903 19.0481C1.25369 19.3499 1.61197 19.5893 2.00628 19.7526C2.40059 19.9159 2.8232 20 3.25 20H5.617C5.663 20.003 5.709 20.004 5.756 20.004H12.25C12.318 20.004 12.385 20.003 12.452 20H14.75C15.1768 20 15.5994 19.9159 15.9937 19.7526C16.388 19.5893 16.7463 19.3499 17.0481 19.0481C17.3499 18.7463 17.5893 18.388 17.7526 17.9937C17.9159 17.5994 18 17.1768 18 16.75V15.25C18 14.47 17.603 13.783 17 13.379V4.75C17.0001 4.28406 16.8556 3.82958 16.5864 3.4493C16.3172 3.06901 15.9365 2.78169 15.497 2.627ZM2.5 6V2.25C2.5 2.05109 2.57902 1.86032 2.71967 1.71967C2.86032 1.57902 3.05109 1.5 3.25 1.5H12.25C12.4489 1.5 12.6397 1.57902 12.7803 1.71967C12.921 1.86032 13 2.05109 13 2.25V13H12.904C12.8007 13 12.6986 12.9787 12.604 12.9374C12.5093 12.8961 12.4242 12.8357 12.354 12.76L6.744 6.72C6.5337 6.49324 6.2789 6.31227 5.99552 6.18839C5.71215 6.06451 5.40627 6.00038 5.097 6H2.5ZM1.5 8.25C1.5 8.05109 1.57902 7.86032 1.71967 7.71967C1.86032 7.57902 2.05109 7.5 2.25 7.5H5.096C5.19926 7.49999 5.30141 7.5213 5.39605 7.5626C5.49069 7.60389 5.57578 7.66429 5.646 7.74L11.256 13.781C11.4665 14.0077 11.7215 14.1886 12.0051 14.3123C12.2886 14.436 12.5946 14.4999 12.904 14.5H15.75C15.9489 14.5 16.1397 14.579 16.2803 14.7197C16.421 14.8603 16.5 15.0511 16.5 15.25V16.75C16.5 17.2141 16.3156 17.6592 15.9874 17.9874C15.6592 18.3156 15.2141 18.5 14.75 18.5H3.25C2.78587 18.5 2.34075 18.3156 2.01256 17.9874C1.68437 17.6592 1.5 17.2141 1.5 16.75V8.25Z" fill="#808080" class="fill"/>
          </svg>          
          LPJ
        </a>
      </li>
      <li class="rounded-2 p-2 mb-5 menu-li">
        <a href="" class="d-flex align-items-center">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#808080" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
            <path d="M2 12.8801V11.1201C2 10.0801 2.85 9.22006 3.9 9.22006C5.71 9.22006 6.45 7.94006 5.54 6.37006C5.02 5.47006 5.33 4.30006 6.24 3.78006L7.97 2.79006C8.76 2.32006 9.78 2.60006 10.25 3.39006L10.36 3.58006C11.26 5.15006 12.74 5.15006 13.65 3.58006L13.76 3.39006C14.23 2.60006 15.25 2.32006 16.04 2.79006L17.77 3.78006C18.68 4.30006 18.99 5.47006 18.47 6.37006C17.56 7.94006 18.3 9.22006 20.11 9.22006C21.15 9.22006 22.01 10.0701 22.01 11.1201V12.8801C22.01 13.9201 21.16 14.7801 20.11 14.7801C18.3 14.7801 17.56 16.0601 18.47 17.6301C18.99 18.5401 18.68 19.7001 17.77 20.2201L16.04 21.2101C15.25 21.6801 14.23 21.4001 13.76 20.6101L13.65 20.4201C12.75 18.8501 11.27 18.8501 10.36 20.4201L10.25 20.6101C9.78 21.4001 8.76 21.6801 7.97 21.2101L6.24 20.2201C5.33 19.7001 5.02 18.5301 5.54 17.6301C6.45 16.0601 5.71 14.7801 3.9 14.7801C2.85 14.7801 2 13.9201 2 12.8801Z" stroke="#808080" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke"/>
          </svg>                 
          Setting
        </a>
      </li>
      <li class="p-2 menu-li">
        <a href="/logout" class="d-flex align-items-center" style="color: #A65959">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path d="M17.44 14.62L20 12.06L17.44 9.5" stroke="#A65959" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9.76001 12.0601H19.93" stroke="#A65959" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.76 20C7.34001 20 3.76001 17 3.76001 12C3.76001 7 7.34001 4 11.76 4" stroke="#A65959" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>               
          Logout
        </a>
      </li>
    </ul>
  </div>
</div>