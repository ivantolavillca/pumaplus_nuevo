<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Xhibiter | NFT Marketplace HTML Template</title>

    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template_pagina/temp2/css/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/template_pagina/temp2/img/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/template_pagina/temp2/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/template_pagina/temp2/img/apple-touch-icon-72x72.png" />
    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.5.4/video.js"></script>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/template_pagina/temp2/img/apple-touch-icon-114x114.png" />
  </head>

  <body
    class="overflow-x-hidden bg-jacarta-900 font-body text-jacarta-500"
    itemscope
    itemtype="http://schema.org/WebPage"
  >
    <!-- Header -->
    <header class="js-page-header page-header--transparent fixed top-0 z-20 w-full backdrop-blur transition-colors">
      <div class="flex items-center px-6 py-6 xl:px-24">
        <!-- Logo -->
        <a href="index.html" class="flex-1 shrink-0">
          <img src="img/logo_white.png" class="max-h-7" alt="Xhibiter | NFT Marketplace" />
        </a>

        <!-- Menu / Actions -->
        <div
          class="js-mobile-menu invisible lg:visible fixed inset-0 z-10 flex-[3_3_0%] items-center bg-jacarta-800 opacity-0 lg:relative lg:inset-auto lg:flex lg:bg-transparent lg:opacity-100"
        >
          <!-- Mobile Logo / Menu Close -->
          <div class="t-0 fixed left-0 z-10 flex w-full items-center justify-between bg-jacarta-800 p-6 lg:hidden">
            <!-- Mobile Logo -->
            <a href="index.html" class="shrink-0">
              <img src="img/logo_white.png" class="max-h-7" alt="Xhibiter | NFT Marketplace" />
            </a>

            <!-- Mobile Menu Close -->
            <button
              class="js-mobile-close group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 border-transparent bg-white/[.15] transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent"
              aria-label="close mobile menu"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-4 w-4 fill-white transition-colors group-hover:fill-white group-focus:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
          </div>

          <!-- Primary Nav -->
          <nav class="navbar mt-24 w-full lg:mt-0">
            <ul class="flex flex-col justify-center lg:flex-row">
              <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-white hover:text-accent focus:text-accent lg:px-5 lg:text-white lg:hover:text-white"
                  id="navDropdown-1"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Home
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible left-0 top-[85%] z-10 hidden min-w-[200px] gap-x-4 whitespace-nowrap rounded-xl bg-jacarta-800 transition-all will-change-transform group-hover:opacity-100 lg:absolute lg:grid lg:translate-y-4 lg:py-4 lg:px-2 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-1"
                >
                  <li>
                    <a
                      href="index.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 1</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="index-rtl.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 1 RTL</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-2.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 2</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-3.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 3</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-4.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 4</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-5.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 5</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-6.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Home 6</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-7.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Home 7</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-8.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-accent">Home 8</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-9.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Home 9</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-10.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Home 10</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="home-11.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Home 11</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                </ul>
              </li>
              <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-white hover:text-accent focus:text-accent lg:px-5 lg:text-white lg:hover:text-white"
                  id="navDropdown-2"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Pages
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible -left-6 top-[85%] z-10 hidden grid-flow-row grid-cols-[repeat(2,_1fr)] gap-x-4 whitespace-nowrap rounded-xl bg-jacarta-800 transition-all will-change-transform group-hover:opacity-100 lg:absolute lg:!grid lg:translate-y-4 lg:py-8 lg:px-5 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-2"
                >
                  <li>
                    <a
                      href="case-studies.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Case Studies</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="single-case-study.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Single Case Study</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="careers.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-4 font-display text-sm text-white">Careers</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="item.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Item Details</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Explore Collections</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collection.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Collection</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="activity.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Activity</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="rankings.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Rankings</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="user.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">User</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="edit-profile.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Edit Profile</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="about.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">About</span>
                    </a>
                  </li>

                  <li>
                    <a
                      href="contact.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Contact</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="wallet.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Wallet</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="login.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Login</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="404.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Page 404</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="tos.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Terms of Service</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="js-nav-dropdown nav-item dropdown group relative">
                <a
                  href="collections.html"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-white hover:text-accent focus:text-accent lg:px-5 lg:text-white lg:hover:text-white"
                  id="navDropdown-3"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Explore
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible -left-6 top-[85%] z-10 hidden grid-flow-col grid-rows-5 gap-x-4 whitespace-nowrap rounded-xl bg-jacarta-800 transition-all will-change-transform group-hover:opacity-100 lg:absolute lg:!grid lg:translate-y-4 lg:py-8 lg:px-5 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-1"
                >
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-light-base p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-jacarta-700"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M22 12.999V20a1 1 0 0 1-1 1h-8v-8.001h9zm-11 0V21H3a1 1 0 0 1-1-1v-7.001h9zM11 3v7.999H2V4a1 1 0 0 1 1-1h8zm10 0a1 1 0 0 1 1 1v6.999h-9V3h8z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">All NFTs</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#E4FCF4] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#10B981]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 2c5.522 0 10 3.978 10 8.889a5.558 5.558 0 0 1-5.556 5.555h-1.966c-.922 0-1.667.745-1.667 1.667 0 .422.167.811.422 1.1.267.3.434.689.434 1.122C13.667 21.256 12.9 22 12 22 6.478 22 2 17.522 2 12S6.478 2 12 2zm-1.189 16.111a3.664 3.664 0 0 1 3.667-3.667h1.966A3.558 3.558 0 0 0 20 10.89C20 7.139 16.468 4 12 4a8 8 0 0 0-.676 15.972 3.648 3.648 0 0 1-.513-1.86zM7.5 12a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm9 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM12 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Art</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#FDF7EE] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#FEB240]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M17.5 2a4.5 4.5 0 0 1 2.951 7.897c.355.967.549 2.013.549 3.103A9 9 0 1 1 3.55 9.897a4.5 4.5 0 1 1 6.791-5.744 9.05 9.05 0 0 1 3.32 0A4.494 4.494 0 0 1 17.5 2zm0 2c-.823 0-1.575.4-2.038 1.052l-.095.144-.718 1.176-1.355-.253a7.05 7.05 0 0 0-2.267-.052l-.316.052-1.356.255-.72-1.176A2.5 2.5 0 1 0 4.73 8.265l.131.123 1.041.904-.475 1.295A7 7 0 1 0 19 13c0-.716-.107-1.416-.314-2.083l-.112-.33-.475-1.295 1.04-.904A2.5 2.5 0 0 0 17.5 4zM10 13a2 2 0 1 0 4 0h2a4 4 0 1 1-8 0h2z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Collectibles</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#F2EEFF] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#8358FF]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M5 15v4h4v2H3v-6h2zm16 0v6h-6v-2h4v-4h2zm-8.001-9l4.4 11h-2.155l-1.201-3h-4.09l-1.199 3H6.6l4.399-11h2zm-1 2.885L10.752 12h2.492l-1.245-3.115zM9 3v2H5v4H3V3h6zm12 0v6h-2V5h-4V3h6z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Domain Names</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#FFEEFA] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#F35BC7]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path d="M12 13.535V3h8v3h-6v11a4 4 0 1 1-2-3.465z" />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Music</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#EAF2FE] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#428AF8]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M2 6c0-.552.455-1 .992-1h18.016c.548 0 .992.445.992 1v14c0 .552-.455 1-.992 1H2.992A.994.994 0 0 1 2 20V6zm2 1v12h16V7H4zm10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2a5 5 0 1 1 0-10 5 5 0 0 1 0 10zM4 2h6v2H4V2z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Photography</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#EBEDFF] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#737EF2]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm.366 11.366l-3.469 6.01a8.053 8.053 0 0 0 4.459.51 9.937 9.937 0 0 1 .784-5.494l-1.774-1.026zm3.518 2.031a7.956 7.956 0 0 0-.587 3.894 8.022 8.022 0 0 0 3.077-2.456l-2.49-1.438zm-7.025-4.055a9.95 9.95 0 0 1-4.365 3.428 8.01 8.01 0 0 0 2.671 3.604l3.469-6.008-1.775-1.024zm11.103-.13l-.258.12a7.947 7.947 0 0 0-2.82 2.333l2.492 1.439a7.975 7.975 0 0 0 .586-3.893zM4 12c0 .266.013.53.038.789a7.95 7.95 0 0 0 3.078-2.454L4.624 8.897A7.975 7.975 0 0 0 4 12zm12.835-6.374l-3.469 6.008 1.775 1.025a9.95 9.95 0 0 1 4.366-3.43 8.015 8.015 0 0 0-2.419-3.402l-.253-.201zM12 4c-.463 0-.916.04-1.357.115a9.928 9.928 0 0 1-.784 5.494l1.775 1.025 3.469-6.01A7.975 7.975 0 0 0 12 4zm-3.297.71l-.191.088a8.033 8.033 0 0 0-2.886 2.367l2.49 1.438a7.956 7.956 0 0 0 .587-3.893z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Sports</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#F5FFED] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#8DD059]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM4 5v14h16V5H4zm2 2h6v6H6V7zm2 2v2h2V9H8zm-2 6h12v2H6v-2zm8-8h4v2h-4V7zm0 4h4v2h-4v-2z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Trading Cards</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#FFEEEE] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#EF3D3D]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M22 7h1v10h-1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v3zm-2 10h-6a5 5 0 0 1 0-10h6V5H4v14h16v-2zm1-2V9h-7a3 3 0 0 0 0 6h7zm-7-4h3v2h-3v-2z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Utility</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="mr-3 rounded-xl bg-[#EEFCFF] p-[0.375rem]">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="h-4 w-4 fill-[#46C7E3]"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-2.29-2.333A17.9 17.9 0 0 1 8.027 13H4.062a8.008 8.008 0 0 0 5.648 6.667zM10.03 13c.151 2.439.848 4.73 1.97 6.752A15.905 15.905 0 0 0 13.97 13h-3.94zm9.908 0h-3.965a17.9 17.9 0 0 1-1.683 6.667A8.008 8.008 0 0 0 19.938 13zM4.062 11h3.965A17.9 17.9 0 0 1 9.71 4.333 8.008 8.008 0 0 0 4.062 11zm5.969 0h3.938A15.905 15.905 0 0 0 12 4.248 15.905 15.905 0 0 0 10.03 11zm4.259-6.667A17.9 17.9 0 0 1 15.973 11h3.965a8.008 8.008 0 0 0-5.648-6.667z"
                          />
                        </svg>
                      </span>
                      <span class="font-display text-sm text-white">Virtual Worlds</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-white hover:text-accent focus:text-accent lg:px-5 lg:text-white lg:hover:text-white"
                  id="navDropdown-4"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Resources
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible left-0 top-[85%] z-10 hidden min-w-[200px] gap-x-4 whitespace-nowrap rounded-xl bg-jacarta-800 transition-all will-change-transform group-hover:opacity-100 lg:absolute lg:grid lg:translate-y-4 lg:py-4 lg:px-2 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-4"
                >
                  <li>
                    <a
                      href="help-center.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Help Center</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="platform-status.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Platform Status</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="partners.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Partners</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="blog.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Blog</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="single-post.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Single Post</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="newsletter.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-600 hover:text-accent focus:text-accent"
                    >
                      <span class="font-display text-sm text-white">Newsletter</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>

          <!-- CTA / Mobile Socials -->
          <div class="mt-10 w-full lg:hidden">
            <!-- CTA -->
            <a
              href="collections.html"
              class="mb-8 block rounded-full bg-white py-3 px-8 text-center font-semibold text-accent shadow-white-volume transition-all hover:bg-accent-dark hover:text-white hover:shadow-accent-volume"
            >
              Marketplace
            </a>
            <hr class="my-5 h-px border-0 bg-jacarta-600" />

            <!-- Socials -->
            <div class="flex items-center justify-center space-x-5">
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="facebook"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="twitter"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="discord"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 640 512"
                >
                  <path
                    d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="instagram"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="tiktok"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="hidden flex-1 justify-end lg:flex">
          <a
            href="collections.html"
            class="rounded-full bg-white py-3 px-8 text-center font-semibold text-accent shadow-white-volume transition-all hover:bg-accent-dark hover:text-white hover:shadow-accent-volume"
          >
            LOGIN
          </a>
        </div>

        <!-- Mobile Menu Actions -->
        <div class="ml-auto flex lg:hidden">
          <!-- Mobile Menu Toggle -->
          <button
            class="js-mobile-toggle group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
            aria-label="open mobile menu"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M18 18v2H6v-2h12zm3-7v2H3v-2h18zm-3-7v2H6V4h12z" />
            </svg>
          </button>
        </div>
      </div>
    </header>

    <main class="overflow-x-hidden">
      <!-- Hero -->
      <section class="hero relative py-20 md:pt-32">
        <picture class="pointer-events-none absolute inset-0 -z-10">
          <img src="<?php echo base_url()?>assets/template_pagina/temp2/img/gradient_dark.jpg" alt="gradient dark" class="h-full w-full" />
        </picture>
        <img src="img/patterns/pattern_donut.png" alt="pattern donut" class="absolute right-0 top-0 -z-10" />

        <div class="container">
          <div class="mx-auto max-w-2xl pt-24 text-center">
            <h1 class="mb-6 font-display text-5xl text-white lg:text-6xl">UPEA TELEVISIÓN EN VIVO</h1>
            <p class="mx-auto mb-8 max-w-md text-lg leading-normal text-jacarta-50">
             Disfruta de nuestro entretenimiento
            </p>
            
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- Intro Video -->
      <div class="relative mx-auto max-w-[90rem]">
        <img src="<?php echo base_url()?>assets/template_pagina/temp2/img/nft-game/crypto_icons.png" class="pointer-events-none absolute -top-1/4 animate-fly" alt="" />
        <div class="container">
          <figure class="relative overflow-hidden rounded-3xl before:absolute before:inset-0 before:bg-jacarta-900/25">
          <video id="my-video" class="video-js vjs-default-skin" controls preload="auto" width="640" height="264"
    data-setup='{"fluid": true}'>
    <source src="https://tvstream.upea.bo/hls/navi.m3u8" type="application/x-mpegURL">
</video>
          </figure>
        </div>
      </div>
      <!-- end intro video -->

      <!-- Characters Slider -->
      <section class="relative pb-12 pt-24 lg:py-36">
        <picture class="pointer-events-none absolute inset-0 -z-10">
          <img src="img/gradient_creative.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <h2 class="mx-auto mb-16 max-w-md text-center font-display text-3xl text-white">
            Collect Them All. Be the True Ownership for Players
          </h2>
        </div>
        <div class="relative px-6 pb-16 sm:px-0">
          <!-- Slider -->
          <div class="swiper coverflow-slider-2 !py-5">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <article>
                  <a
                    href="item.html"
                    class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg"
                  >
                    <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                      <img src="img/nft-game/gradient_glow_small.png" alt="" class="absolute inset-0" />
                      <figure class="relative my-4 mb-14">
                        <img
                          src="./img/nft-game/nft_game_character_1.png"
                          alt="item 1"
                          class="swiper-lazy inline-block"
                          height="212"
                          width="182"
                        />
                        <div class="swiper-lazy-preloader"></div>
                      </figure>
                      <div class="relative rounded-2lg bg-jacarta-700 p-5">
                        <h3 class="mb-3 text-lg font-semibold leading-none text-white">Optimus Prime</h3>
                        <div class="flex justify-center space-x-5">
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1734_6301)">
                                  <path
                                    d="M14.5 2v1.333c0 6.418-3.582 9.334-8 9.334H5.232c.141-2.008.767-3.224 2.399-4.668.802-.71.734-1.12.339-.884-2.723 1.62-4.075 3.809-4.135 7.305l-.002.247H2.5c0-.909.077-1.734.23-2.488-.153-.863-.23-2.034-.23-3.512A6.667 6.667 0 019.167 2c1.333 0 2.666.667 5.333 0z"
                                    fill="url(#paint0_linear_1734_6301)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1734_6301"
                                    x1="8.5"
                                    y1="14.667"
                                    x2="8.283"
                                    y2="2.291"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#57FF2D" />
                                    <stop offset="1" stop-color="#39FF88" />
                                  </linearGradient>
                                  <clipPath id="clip0_1734_6301">
                                    <path fill="#fff" transform="translate(.5)" d="M0 0h16v16H0z" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Nature</span>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1734_6308)">
                                  <path
                                    d="M9.168 6.667h4.667l-6 8.666v-6H3.168l6-8.666v6z"
                                    fill="url(#paint0_linear_1734_6308)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1734_6308"
                                    x1="8.502"
                                    y1="15.333"
                                    x2="8.174"
                                    y2="1.007"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#FCFF52" />
                                    <stop offset="1" stop-color="#FF9A03" />
                                  </linearGradient>
                                  <clipPath id="clip0_1734_6308">
                                    <path fill="#fff" transform="translate(.5)" d="M0 0h16v16H0z" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Lightning</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article>
                  <a
                    href="item.html"
                    class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg"
                  >
                    <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                      <img src="img/nft-game/gradient_glow_small.png" alt="" class="absolute inset-0" />
                      <figure class="relative my-4 mb-14">
                        <img
                          src="./img/nft-game/nft_game_character_2.png"
                          alt="item 1"
                          class="swiper-lazy inline-block"
                          height="212"
                          width="182"
                        />
                        <div class="swiper-lazy-preloader"></div>
                      </figure>
                      <div class="relative rounded-2lg bg-jacarta-700 p-5">
                        <h3 class="mb-3 text-lg font-semibold leading-none text-white">Tractor Bowling</h3>
                        <div class="flex justify-center space-x-5">
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1739_6537)">
                                  <path
                                    d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                    fill="url(#paint0_linear_1739_6537)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1739_6537"
                                    x1="8"
                                    y1="14.667"
                                    x2="7.735"
                                    y2="1.641"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#8054FF" />
                                    <stop offset="1" stop-color="#FF68D5" />
                                  </linearGradient>
                                  <clipPath id="clip0_1739_6537"><path fill="#fff" d="M0 0h16v16H0z" /></clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Ether</span>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1739_6544)">
                                  <path
                                    d="M9.334 12V9.338h-7.95a5.333 5.333 0 019.588-4.605A3.667 3.667 0 1111.667 12H9.334zm-5.333 1.333h6.666v1.334H4.001v-1.334zm-2.667-2.666h6.667V12H1.334v-1.333z"
                                    fill="url(#paint0_linear_1739_6544)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1739_6544"
                                    x1="8.174"
                                    y1="14.667"
                                    x2="7.994"
                                    y2="2.348"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#C5FFFB" />
                                    <stop offset="1" stop-color="#39FFF3" />
                                  </linearGradient>
                                  <clipPath id="clip0_1739_6544"><path fill="#fff" d="M0 0h16v16H0z" /></clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Airpower</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article>
                  <a
                    href="item.html"
                    class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg"
                  >
                    <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                      <img src="img/nft-game/gradient_glow_small.png" alt="" class="absolute inset-0" />
                      <figure class="relative my-4 mb-14">
                        <img
                          src="./img/nft-game/nft_game_character_3.png"
                          alt="item 1"
                          class="swiper-lazy inline-block"
                          height="212"
                          width="182"
                        />
                        <div class="swiper-lazy-preloader"></div>
                      </figure>
                      <div class="relative rounded-2lg bg-jacarta-700 p-5">
                        <h3 class="mb-3 text-lg font-semibold leading-none text-white">Rakoun</h3>
                        <div class="flex justify-center space-x-5">
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1739_6558)">
                                  <path
                                    d="M9.644 1.298l2.489.956-.478 1.245-.623-.24-.497 1.297c.52.308.963.73 1.296 1.23l1.27-.564-.272-.61 1.218-.541 1.085 2.436-1.218.542-.272-.609-1.268.565a4.017 4.017 0 01.047 1.786l1.296.498.239-.622 1.245.478-.956 2.489L13 11.156l.239-.622-1.296-.498c-.308.52-.73.963-1.23 1.297l.564 1.268.61-.271.541 1.218-2.436 1.085-.542-1.218.609-.272-.565-1.268a4.017 4.017 0 01-1.787.046l-.497 1.297.622.239-.478 1.245-2.49-.956.479-1.245.621.239.499-1.296a4.037 4.037 0 01-1.297-1.23l-1.27.564.272.61-1.218.541-1.084-2.436 1.218-.542.27.61 1.269-.566a4.047 4.047 0 01-.046-1.786L3.28 6.71l-.238.622-1.245-.478.956-2.488 1.245.478-.24.622 1.297.498c.308-.52.73-.964 1.23-1.298l-.564-1.269-.61.271L4.57 2.45l2.436-1.084.542 1.218-.61.272.566 1.268a4.015 4.015 0 011.786-.047l.497-1.297-.621-.238.478-1.245zm-2.39 7.523a.667.667 0 101.156.667.667.667 0 00-1.155-.667zm2.578-1.488a.667.667 0 100 1.334.667.667 0 000-1.334zM7.5 6.268a.667.667 0 10.667 1.155.667.667 0 00-.667-1.155z"
                                    fill="url(#paint0_linear_1739_6558)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1739_6558"
                                    x1="8.499"
                                    y1="14.702"
                                    x2="8.282"
                                    y2="1.606"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#54FFAD" />
                                    <stop offset="1" stop-color="#7AFF80" />
                                  </linearGradient>
                                  <clipPath id="clip0_1739_6558">
                                    <path fill="#fff" transform="translate(.5)" d="M0 0h16v16H0z" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Poison</span>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1739_6565)">
                                  <path
                                    d="M4.52 11.62A5.335 5.335 0 016.502 1.333a5.335 5.335 0 014.972 3.4 3.667 3.667 0 011.028 7.252 4 4 0 00-7.982-.366v.001zm4.648-.775l1.31-.756.666 1.154L9.835 12l1.31.756-.667 1.155-1.31-.756v1.512H7.835v-1.512l-1.31.756-.666-1.155L7.17 12l-1.31-.756.667-1.155 1.31.756V9.333h1.332v1.512z"
                                    fill="url(#paint0_linear_1739_6565)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1739_6565"
                                    x1="8.328"
                                    y1="14.667"
                                    x2="8.126"
                                    y2="1.639"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#8EB5FF" />
                                    <stop offset="1" stop-color="#D1DEFF" />
                                  </linearGradient>
                                  <clipPath id="clip0_1739_6565">
                                    <path fill="#fff" transform="translate(.5)" d="M0 0h16v16H0z" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Snow Storm</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article>
                  <a
                    href="item.html"
                    class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg"
                  >
                    <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                      <img src="img/nft-game/gradient_glow_small.png" alt="" class="absolute inset-0" />
                      <figure class="relative my-4 mb-14">
                        <img
                          src="./img/nft-game/nft_game_character_4.png"
                          alt="item 1"
                          class="swiper-lazy inline-block"
                          height="212"
                          width="182"
                        />
                        <div class="swiper-lazy-preloader"></div>
                      </figure>
                      <div class="relative rounded-2lg bg-jacarta-700 p-5">
                        <h3 class="mb-3 text-lg font-semibold leading-none text-white">Skoopnum</h3>
                        <div class="flex justify-center space-x-5">
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1739_6306)">
                                  <path
                                    d="M4.557 8.667a4 4 0 117.889 0h-7.89zM1.835 10H8.5v1.333H1.835V10zm8 0h5.333v1.333H9.835V10zm1.333 2.667h2.667V14h-2.667v-1.333zm-8 0h6.667V14H3.168v-1.333zm4.667-12h1.333v2H7.835v-2zm-4.99 2.619l.942-.943 1.414 1.414-.942.943-1.414-1.413v-.001zm10.37-.943l.942.943L12.743 4.7l-.942-.943 1.414-1.414zm2.62 4.99v1.334h-2V7.333h2zm-12.667 0v1.334h-2V7.333h2z"
                                    fill="url(#paint0_linear_1739_6306)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1739_6306"
                                    x1="8.502"
                                    y1="14"
                                    x2="8.305"
                                    y2=".972"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#FFC42D" />
                                    <stop offset="1" stop-color="#FFF7DC" />
                                  </linearGradient>
                                  <clipPath id="clip0_1739_6306">
                                    <path fill="#fff" transform="translate(.5)" d="M0 0h16v16H0z" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Blaze</span>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1739_6313)">
                                  <path
                                    d="M12.268 1.133l-1.855 1.689c.864.26 1.658.71 2.327 1.315 2.341 2.134 2.341 5.592 0 7.726-1.728 1.573-4.399 2.574-8.01 3.004l1.854-1.689a6.091 6.091 0 01-2.327-1.315c-2.341-2.134-2.355-5.58 0-7.726 1.728-1.573 4.4-2.574 8.012-3.004h-.001zm-3.77 4.2c-1.656 0-3 1.194-3 2.667 0 1.473 1.344 2.667 3 2.667 1.657 0 3-1.194 3-2.667 0-1.473-1.343-2.667-3-2.667z"
                                    fill="url(#paint0_linear_1739_6313)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1739_6313"
                                    x1="8.496"
                                    y1="14.867"
                                    x2="8.241"
                                    y2="1.45"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#DCF4A9" />
                                    <stop offset="1" stop-color="#7CE2C3" />
                                  </linearGradient>
                                  <clipPath id="clip0_1739_6313">
                                    <path fill="#fff" transform="translate(.5)" d="M0 0h16v16H0z" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Tornado</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article>
                  <a
                    href="item.html"
                    class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg"
                  >
                    <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                      <img src="img/nft-game/gradient_glow_small.png" alt="" class="absolute inset-0" />
                      <figure class="relative my-4 mb-14">
                        <img
                          src="./img/nft-game/nft_game_character_5.png"
                          alt="item 1"
                          class="swiper-lazy inline-block"
                          height="212"
                          width="182"
                        />
                        <div class="swiper-lazy-preloader"></div>
                      </figure>
                      <div class="relative rounded-2lg bg-jacarta-700 p-5">
                        <h3 class="mb-3 text-lg font-semibold leading-none text-white">Bumblebee</h3>
                        <div class="flex justify-center space-x-5">
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1633_19343)">
                                  <path
                                    d="M8 15.333a5 5 0 01-3.426-8.642C5.47 5.85 7.666 4.333 7.333 1c4 2.667 6 5.333 2 9.333.667 0 1.667 0 3.333-1.646.18.515.334 1.069.334 1.646a5 5 0 01-5 5z"
                                    fill="url(#paint0_linear_1633_19343)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1633_19343"
                                    x1="8"
                                    y1="15.333"
                                    x2="7.667"
                                    y2="1.333"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#FF2D2D" />
                                    <stop offset="1" stop-color="#FFD439" />
                                  </linearGradient>
                                  <clipPath id="clip0_1633_19343"><path fill="#fff" d="M0 0h16v16H0z" /></clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Inferno</span>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900"
                            >
                              <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1633_19371)">
                                  <path
                                    d="M3.757 4.424L8 .181l4.243 4.243a6 6 0 11-8.486 0z"
                                    fill="url(#paint0_linear_1633_19371)"
                                  />
                                </g>
                                <defs>
                                  <linearGradient
                                    id="paint0_linear_1633_19371"
                                    x1="8"
                                    y1="14.667"
                                    x2="7.717"
                                    y2=".516"
                                    gradientUnits="userSpaceOnUse"
                                  >
                                    <stop stop-color="#2DFFF2" />
                                    <stop offset="1" stop-color="#3D39FF" />
                                  </linearGradient>
                                  <clipPath id="clip0_1633_19371"><path fill="#fff" d="M0 0h16v16H0z" /></clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="font-display text-sm font-semibold text-white">Water</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
              </div>
            </div>
          </div>

          <!-- Slider dots -->
          <div class="swiper-pagination-2 mt-4 text-center"></div>
        </div>
      </section>
      <!-- end characters slider -->

      <!-- Statistic / Promo -->
      <section class="relative py-12 lg:py-36">
        <picture
          class="pointer-events-none absolute inset-0 -z-10 after:absolute after:bottom-0 after:h-1/3 after:w-full after:bg-gradient-to-t after:from-[#010107]"
        >
          <img src="img/gradient_creative.jpg" alt="gradient" class="h-full w-full -scale-y-100" />
        </picture>
        <div class="container -mt-20 lg:pb-32">
          <h2 class="mb-12 max-w-5xl font-display text-5xl text-white lg:text-[6rem]">
            Play Your Favorite Characters. Win Big Prizes.
          </h2>
          <p class="mb-20 max-w-4xl text-3xl font-medium text-white lg:ml-36">
            We empower artists, creators, and players to build the platform they always envisioned, providing the means
            to unleash your creativity and earn income.
          </p>
          <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div>
              <div>
                <span
                  class="text-fill-transparent inline-block bg-gradient-to-r from-[#FFE993] to-[#FFB770] bg-clip-text font-display text-5xl font-semibold"
                  >1M+</span
                >
              </div>
              <span class="text-lg text-white">Active Users</span>
            </div>
            <div>
              <div>
                <span
                  class="text-fill-transparent inline-block bg-gradient-to-r from-[#FFE993] to-[#FFB770] bg-clip-text font-display text-5xl font-semibold"
                  >$115M</span
                >
              </div>
              <span class="text-lg text-white">Already Earned</span>
            </div>
            <div>
              <div>
                <span
                  class="text-fill-transparent inline-block bg-gradient-to-r from-[#FFE993] to-[#FFB770] bg-clip-text font-display text-5xl font-semibold"
                  >4.8</span
                >
              </div>
              <span class="text-lg text-white">Average Ratings</span>
            </div>
            <div>
              <div>
                <span
                  class="text-fill-transparent inline-block bg-gradient-to-r from-[#FFE993] to-[#FFB770] bg-clip-text font-display text-5xl font-semibold"
                  >250+</span
                >
              </div>
              <span class="text-lg text-white">NFT Collections</span>
            </div>
          </div>
        </div>

        <!-- Promo 1 -->
        <div class="container pt-32">
          <div class="items-center justify-between lg:flex">
            <div class="relative text-center lg:w-1/2">
              <img src="img/nft-game/gradient_glow_large_1.png" alt="" loading="lazy" class="absolute scale-150" />
              <img src="img/nft-game/robot_large_1.png" alt="" loading="lazy" class="relative -top-10 inline-block" />
              <img src="img/hero/3D_elements.png" alt="" loading="lazy" class="absolute top-10 animate-fly" />
            </div>
            <div class="lg:w-[45%] lg:pl-16">
              <h2 class="mb-6 font-display text-2xl text-white">
                Discover. Collect. Buy Now. And play Autobattler Game
              </h2>
              <p class="mb-8 text-lg leading-normal text-jacarta-200">
                Employees are our number-one priority, so we like to take care of them!
              </p>
              <p class="mb-12 text-jacarta-200">
                Every digital creation available through MakersPlace is an authentic and truly unique digital creation,
                signed and issued by the creator — made possible by blockchain technology. Even if the digital creation
                is copied, it won't be the authentic and originally signed version.
              </p>
              <a
                href="collections.html"
                class="inline-block rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
              >
                Come Discover
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end statistic / promo -->

      <!-- Promo 2 -->
      <section class="bg-[#010107] py-12 lg:pb-32">
        <div class="container">
          <div class="items-center justify-between lg:flex">
            <div class="mb-12 lg:w-[45%] lg:pr-16">
              <h2 class="mb-6 font-display text-2xl text-white">
                Find and Fight rare Creatures and Collect Stunning Pieces
              </h2>
              <p class="mb-8 text-lg leading-normal text-jacarta-200">
                Employees are our number-one priority, so we like to take care of them!
              </p>
              <p class="mb-12 text-jacarta-200">
                Every digital creation available through MakersPlace is an authentic and truly unique digital creation,
                signed and issued by the creator — made possible by blockchain technology. Even if the digital creation
                is copied, it won't be the authentic and originally signed version.
              </p>
              <a
                href="collections.html"
                class="inline-block rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
              >
                Create Avatar
              </a>
            </div>
            <div class="relative text-center lg:w-1/2">
              <img
                src="img/nft-game/gradient_glow_large_2.png"
                loading="lazy"
                alt=""
                class="pointer-events-none absolute scale-150"
              />

              <!-- Slider -->
              <div class="swiper single-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="img/nft-game/robot_large_2.png" alt="" class="inline-block" />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="img/transparent_pixel.png"
                      data-src="img/nft-game/robot_large_3.png"
                      alt=""
                      width="398"
                      height="571"
                      class="swiper-lazy inline-block border-0"
                    />
                    <div class="swiper-lazy-preloader"></div>
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="img/transparent_pixel.png"
                      data-src="img/nft-game/robot_large_4.png"
                      alt=""
                      width="398"
                      height="571"
                      class="swiper-lazy inline-block border-0"
                    />
                    <div class="swiper-lazy-preloader"></div>
                  </div>
                </div>
              </div>

              <!-- Slider Navigation -->
              <div class="mt-6 flex justify-center space-x-3">
                <div
                  class="swiper-button-prev swiper-button-prev-5 group z-10 !flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="fill-jacarta-700 group-hover:fill-accent"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
                  </svg>
                </div>
                <div
                  class="swiper-button-next swiper-button-next-5 group z-10 !flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="fill-jacarta-700 group-hover:fill-accent"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                  </svg>
                </div>
              </div>

              <img
                src="img/nft-game/crypto_icons_1.png"
                alt=""
                loading="lazy"
                class="pointer-events-none absolute -top-10 z-10 animate-fly"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- end promo 2 -->

      <!-- Features -->
      <section class="bg-[#010107] py-12 lg:py-24">
        <div
          class="container relative overflow-hidden xl:left-[calc((100vw-1202px)/4)] xl:max-w-[calc(1202px+((100vw-1202px)/2))] xl:pr-[calc((100vw-1176px)/2)]"
        >
          <div class="mx-auto mb-12 max-w-lg text-center">
            <h2 class="mb-6 text-center font-display text-3xl font-medium text-white md:text-5xl">
              Fabulous Things To Enjoy
            </h2>
            <p class="text-lg text-jacarta-300">
              State-of-the-art technology to challenge global warming and trigger substantial change.
            </p>
          </div>

          <!-- Slider -->
          <div class="swiper card-slider-3-columns-large-gap xl:!overflow-visible">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="rounded-2.5xl bg-jacarta-800 p-10">
                  <div class="mb-4 md:mb-0">
                    <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-8">
                      <g clip-path="url(#clip0_1648_19589)">
                        <path
                          d="M18.66 23H23a9 9 0 019 9H17.998L18 34h16v-2a11.156 11.156 0 00-1.772-6H38a10 10 0 019.032 5.702C42.302 37.944 34.644 42 26 42c-5.522 0-10.2-1.18-14-3.25V20.142A13.935 13.935 0 0118.66 23zM8 18a2 2 0 011.986 1.766L10 20v18a2 2 0 01-2 2H4a2 2 0 01-2-2V20a2 2 0 012-2h4zM27.292 7.15l.708.71.708-.708a5 5 0 117.07 7.072L28 22l-7.78-7.78a5 5 0 117.072-7.07z"
                          fill="url(#paint0_linear_1648_19589)"
                        />
                      </g>
                      <defs>
                        <linearGradient
                          id="paint0_linear_1648_19589"
                          x1="24.516"
                          y1="5.669"
                          x2="24.516"
                          y2="42"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#8358FF" />
                          <stop offset="1" stop-color="#FD9BFF" />
                        </linearGradient>
                        <clipPath id="clip0_1648_19589"><path fill="#fff" d="M0 0h48v48H0z" /></clipPath>
                      </defs>
                    </svg>
                    <h3 class="mb-4 font-display text-lg text-white">Generate financial contributions</h3>
                    <p class="text-jacarta-300">
                      With millions in transactions since 2017, we’ll help you generate revenue on our platform ⁠— from
                      direct sales to secondary sales
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="rounded-2.5xl bg-jacarta-800 p-10">
                  <div class="mb-4 md:mb-0">
                    <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-8">
                      <g clip-path="url(#clip0_1766_5774)">
                        <path
                          d="M20 39.496V32.8c0-2.566 1.99-4.584 4.934-5.736A16.963 16.963 0 0019 26c-3.78 0-7.272 1.234-10.094 3.32A16.033 16.033 0 0020 39.496zm17.76-7.324C36.97 31.106 34.34 30 31 30c-4.012 0-7 1.594-7 2.8V40a15.993 15.993 0 0013.76-7.828zM19.1 23a4.5 4.5 0 100-9 4.5 4.5 0 000 9zM31 25a4 4 0 100-8 4 4 0 000 8zm-7 19C12.954 44 4 35.046 4 24S12.954 4 24 4s20 8.954 20 20-8.954 20-20 20z"
                          fill="url(#paint0_linear_1766_5774)"
                        />
                      </g>
                      <defs>
                        <linearGradient
                          id="paint0_linear_1766_5774"
                          x1="24"
                          y1="4"
                          x2="24"
                          y2="44"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#8358FF" />
                          <stop offset="1" stop-color="#FD9BFF" />
                        </linearGradient>
                        <clipPath id="clip0_1766_5774"><path fill="#fff" d="M0 0h48v48H0z" /></clipPath>
                      </defs>
                    </svg>
                    <h3 class="mb-4 font-display text-lg text-white">Build a driven community</h3>
                    <p class="text-jacarta-300">
                      With millions in transactions since 2017, we’ll help you generate revenue on our platform ⁠— from
                      direct sales to secondary sales
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="rounded-2.5xl bg-jacarta-800 p-10">
                  <div class="mb-4 md:mb-0">
                    <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-8">
                      <g clip-path="url(#clip0_1766_5788)">
                        <path
                          d="M22 4c8.136 0 14.852 6.072 15.868 13.93l4.5 7.078c.296.466.236 1.16-.45 1.456L38 28.14V34c0 2.21-1.79 4-4 4h-3.998L30 44H12v-7.388c0-2.36-.872-4.594-2.488-6.61A15.929 15.929 0 016 20c0-8.836 7.164-16 16-16zm-1.06 11.526a3.498 3.498 0 00-4.95 0 3.496 3.496 0 000 4.948L22 26.486l6.01-6.012a3.496 3.496 0 000-4.948 3.498 3.498 0 00-4.95 0L22 16.586l-1.06-1.06z"
                          fill="url(#paint0_linear_1766_5788)"
                        />
                      </g>
                      <defs>
                        <linearGradient
                          id="paint0_linear_1766_5788"
                          x1="24.268"
                          y1="4"
                          x2="24.268"
                          y2="44"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#8358FF" />
                          <stop offset="1" stop-color="#FD9BFF" />
                        </linearGradient>
                        <clipPath id="clip0_1766_5788"><path fill="#fff" d="M0 0h48v48H0z" /></clipPath>
                      </defs>
                    </svg>
                    <h3 class="mb-4 font-display text-lg text-white">Create awareness & knowledge</h3>
                    <p class="text-jacarta-300">
                      With millions in transactions since 2017, we’ll help you generate revenue on our platform ⁠— from
                      direct sales to secondary sales
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="rounded-2.5xl bg-jacarta-800 p-10">
                  <div class="mb-4 md:mb-0">
                    <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-8">
                      <g clip-path="url(#clip0_1766_5760)">
                        <path
                          d="M36 16h4a2 2 0 012 2v24a2 2 0 01-2 2H8a2 2 0 01-2-2V18a2 2 0 012-2h4v-2a12 12 0 0124 0v2zM22 31.464V36h4v-4.536a4 4 0 10-4 0zM32 16v-2a8 8 0 00-16 0v2h16z"
                          fill="url(#paint0_linear_1766_5760)"
                        />
                      </g>
                      <defs>
                        <linearGradient
                          id="paint0_linear_1766_5760"
                          x1="24"
                          y1="2"
                          x2="24"
                          y2="44"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#8358FF" />
                          <stop offset="1" stop-color="#FD9BFF" />
                        </linearGradient>
                        <clipPath id="clip0_1766_5760"><path fill="#fff" d="M0 0h48v48H0z" /></clipPath>
                      </defs>
                    </svg>
                    <h3 class="mb-4 font-display text-lg text-white">Enhancing global security</h3>
                    <p class="text-jacarta-300">
                      With millions in transactions since 2017, we’ll help you generate revenue on our platform ⁠— from
                      direct sales to secondary sales
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slider dots -->
          <div class="swiper-pagination-1 mt-10 text-center"></div>
        </div>
      </section>
      <!-- end features -->

      <!-- Newsletter -->
      <section
        class="relative bg-cover bg-center bg-no-repeat py-32 after:absolute after:inset-0 after:bg-[#000000]/50"
        style="background-image: url(img/nft-game/newsletter.jpg)"
      >
        <div class="container relative z-10">
          <h2 class="mx-auto mb-6 max-w-lg text-center font-display text-2xl text-white">
            Ready to be a Part of Our Journey? Make the Most of Your World
          </h2>

          <p class="mx-auto max-w-md text-center text-lg text-white">
            Be part of our amazing community and development updates, giveaways, events. Stay tuned for the news.more!
          </p>

          <div class="mx-auto mt-10 max-w-md text-center">
            <form class="relative">
              <input
                type="email"
                placeholder="Email address"
                class="w-full rounded-full border border-jacarta-600 bg-jacarta-700 py-3 px-4 text-white placeholder-white focus:ring-accent"
              />
              <button
                class="absolute top-2 right-2 rounded-full bg-accent px-6 py-2 font-display text-sm text-white hover:bg-accent-dark"
              >
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </section>
      <!-- end newsletter -->

      <!-- Partners -->
      <div class="bg-jacarta-800">
        <div class="container">
          <div class="grid grid-cols-2 py-8 sm:grid-cols-5">
            <a href="#"><img src="img/partners/partner_logo_1.png" alt="partner 1" /> </a>
            <a href="#"><img src="img/partners/partner_logo_2.png" alt="partner 1" /> </a>
            <a href="#"><img src="img/partners/partner_logo_3.png" alt="partner 1" /> </a>
            <a href="#"><img src="img/partners/partner_logo_4.png" alt="partner 1" /> </a>
            <a href="#"><img src="img/partners/partner_logo_5.png" alt="partner 1" /> </a>
          </div>
        </div>
      </div>
    </main>

    <!-- YouTube Video Modal -->
    <div
      class="modal fade video-lightbox js-video-lightbox"
      tabindex="-1"
      aria-label="Youtube Modal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-6 w-6 fill-jacarta-700"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
            <div class="ratio ratio-16x9 before:bg-jacarta-900">
              <iframe class="embed-responsive-item" src="" allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Wallet Modal -->
    <div class="modal fade" id="walletModal" tabindex="-1" aria-labelledby="walletModalLabel" aria-hidden="true">
      <div class="modal-dialog max-w-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="walletModalLabel">Connect your wallet</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-6 w-6 fill-jacarta-700 dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <div class="modal-body p-6 text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              x="0"
              y="0"
              viewBox="0 0 318.6 318.6"
              xml:space="preserve"
              class="mb-4 inline-block h-8 w-8"
            >
              <style>
                .st1,
                .st6 {
                  fill: #e4761b;
                  stroke: #e4761b;
                  stroke-linecap: round;
                  stroke-linejoin: round;
                }
                .st6 {
                  fill: #f6851b;
                  stroke: #f6851b;
                }
              </style>
              <path
                fill="#e2761b"
                stroke="#e2761b"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M274.1 35.5l-99.5 73.9L193 65.8z"
              />
              <path
                class="st1"
                d="M44.4 35.5l98.7 74.6-17.5-44.3zm193.9 171.3l-26.5 40.6 56.7 15.6 16.3-55.3zm-204.4.9L50.1 263l56.7-15.6-26.5-40.6z"
              />
              <path
                class="st1"
                d="M103.6 138.2l-15.8 23.9 56.3 2.5-2-60.5zm111.3 0l-39-34.8-1.3 61.2 56.2-2.5zM106.8 247.4l33.8-16.5-29.2-22.8zm71.1-16.5l33.9 16.5-4.7-39.3z"
              />
              <path
                d="M211.8 247.4l-33.9-16.5 2.7 22.1-.3 9.3zm-105 0l31.5 14.9-.2-9.3 2.5-22.1z"
                fill="#d7c1b3"
                stroke="#d7c1b3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M138.8 193.5l-28.2-8.3 19.9-9.1zm40.9 0l8.3-17.4 20 9.1z"
                fill="#233447"
                stroke="#233447"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M106.8 247.4l4.8-40.6-31.3.9zM207 206.8l4.8 40.6 26.5-39.7zm23.8-44.7l-56.2 2.5 5.2 28.9 8.3-17.4 20 9.1zm-120.2 23.1l20-9.1 8.2 17.4 5.3-28.9-56.3-2.5z"
                fill="#cd6116"
                stroke="#cd6116"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M87.8 162.1l23.6 46-.8-22.9zm120.3 23.1l-1 22.9 23.7-46zm-64-20.6l-5.3 28.9 6.6 34.1 1.5-44.9zm30.5 0l-2.7 18 1.2 45 6.7-34.1z"
                fill="#e4751f"
                stroke="#e4751f"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                class="st6"
                d="M179.8 193.5l-6.7 34.1 4.8 3.3 29.2-22.8 1-22.9zm-69.2-8.3l.8 22.9 29.2 22.8 4.8-3.3-6.6-34.1z"
              />
              <path
                fill="#c0ad9e"
                stroke="#c0ad9e"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M180.3 262.3l.3-9.3-2.5-2.2h-37.7l-2.3 2.2.2 9.3-31.5-14.9 11 9 22.3 15.5h38.3l22.4-15.5 11-9z"
              />
              <path
                fill="#161616"
                stroke="#161616"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M177.9 230.9l-4.8-3.3h-27.7l-4.8 3.3-2.5 22.1 2.3-2.2h37.7l2.5 2.2z"
              />
              <path
                d="M278.3 114.2l8.5-40.8-12.7-37.9-96.2 71.4 37 31.3 52.3 15.3 11.6-13.5-5-3.6 8-7.3-6.2-4.8 8-6.1zM31.8 73.4l8.5 40.8-5.4 4 8 6.1-6.1 4.8 8 7.3-5 3.6 11.5 13.5 52.3-15.3 37-31.3-96.2-71.4z"
                fill="#763d16"
                stroke="#763d16"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                class="st6"
                d="M267.2 153.5l-52.3-15.3 15.9 23.9-23.7 46 31.2-.4h46.5zm-163.6-15.3l-52.3 15.3-17.4 54.2h46.4l31.1.4-23.6-46zm71 26.4l3.3-57.7 15.2-41.1h-67.5l15 41.1 3.5 57.7 1.2 18.2.1 44.8h27.7l.2-44.8z"
              />
            </svg>
            <p class="text-center dark:text-white">
              You don't have MetaMask in your browser, please download it from
              <a href="https://metamask.io/" class="text-accent" target="_blank" rel="noreferrer noopener">MetaMask</a>
            </p>
          </div>
          <!-- end body -->

          <div class="modal-footer">
            <div class="flex items-center justify-center space-x-4">
              <a
                href="https://metamask.io/"
                target="_blank"
                rel="noreferrer noopener"
                class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
              >
                Get Metamask
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Place Bid Modal -->
    <div class="modal fade" id="placeBidModal" tabindex="-1" aria-labelledby="placeBidLabel" aria-hidden="true">
      <div class="modal-dialog max-w-2xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="placeBidLabel">Place a bid</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-6 w-6 fill-jacarta-700 dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <div class="modal-body p-6">
            <div class="mb-2 flex items-center justify-between">
              <span class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">Price</span>
            </div>

            <div
              class="relative mb-2 flex items-center overflow-hidden rounded-lg border border-jacarta-100 dark:border-jacarta-600"
            >
              <div class="flex flex-1 items-center self-stretch border-r border-jacarta-100 bg-jacarta-50 px-2">
                <span>
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    x="0"
                    y="0"
                    viewBox="0 0 1920 1920"
                    xml:space="preserve"
                    class="mr-1 h-5 w-5"
                  >
                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                    <path fill="#62688F" d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z"></path>
                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                  </svg>
                </span>
                <span class="font-display text-sm text-jacarta-700">ETH</span>
              </div>

              <input
                type="text"
                class="h-12 w-full flex-[3] border-0 focus:ring-inset focus:ring-accent"
                placeholder="Amount"
                value="0.05"
              />

              <div class="flex flex-1 justify-end self-stretch border-l border-jacarta-100 bg-jacarta-50">
                <span class="self-center px-2 text-sm">$130.82</span>
              </div>
            </div>

            <div class="text-right">
              <span class="text-sm dark:text-jacarta-400">Balance: 0.0000 WETH</span>
            </div>

            <!-- Terms -->
            <div class="mt-4 flex items-center space-x-2">
              <input
                type="checkbox"
                id="terms"
                class="h-5 w-5 self-start rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600"
              />
              <label for="terms" class="text-sm dark:text-jacarta-200"
                >By checking this box, I agree to Xhibiter's <a href="#" class="text-accent">Terms of Service</a></label
              >
            </div>
          </div>
          <!-- end body -->

          <div class="modal-footer">
            <div class="flex items-center justify-center space-x-4">
              <button
                type="button"
                class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
              >
                Place Bid
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer bg-jacarta-900">
      <div class="container">
        <div class="grid grid-cols-6 gap-x-7 gap-y-14 pt-24 pb-12 md:grid-cols-12">
          <div class="col-span-full sm:col-span-3 md:col-span-4">
            <!-- Logo -->
            <a href="index.html" class="mb-6 inline-block">
              <img src="img/logo_white.png" class="max-h-7" alt="Xhibiter | NFT Marketplace" />
            </a>
            <p class="mb-12 text-jacarta-300">
              Create, sell and collect truly rare digital artworks. Powered by blockchain technology.
            </p>
            <!-- Socials -->
            <div class="flex space-x-5">
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="facebook"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="twitter"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="discord"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 640 512"
                >
                  <path
                    d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="instagram"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  ></path>
                </svg>
              </a>
              <a href="#" class="group">
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="tiktok"
                  class="h-5 w-5 fill-jacarta-300 group-hover:fill-white"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>

          <div class="col-span-full sm:col-span-3 md:col-span-2 md:col-start-7">
            <h3 class="mb-6 font-display text-sm text-white">Marketplace</h3>
            <ul class="flex flex-col space-y-1 text-jacarta-300">
              <li><a href="#" class="hover:text-white">All NFTs</a></li>
              <li><a href="#" class="hover:text-white">Art</a></li>
              <li><a href="#" class="hover:text-white">Music</a></li>
              <li><a href="#" class="hover:text-white">Domain Names</a></li>
              <li><a href="#" class="hover:text-white">Collectibles</a></li>
              <li><a href="#" class="hover:text-white">Virtual World</a></li>
            </ul>
          </div>

          <div class="col-span-full sm:col-span-3 md:col-span-2">
            <h3 class="mb-6 font-display text-sm text-white">Company</h3>
            <ul class="flex flex-col space-y-1 text-jacarta-300">
              <li><a href="#" class="hover:text-white">Explore</a></li>
              <li><a href="#" class="hover:text-white">About</a></li>
              <li><a href="#" class="hover:text-white">Contact Us</a></li>
              <li><a href="#" class="hover:text-white">Our Blog</a></li>
              <li><a href="#" class="hover:text-white">FAQ</a></li>
            </ul>
          </div>

          <div class="col-span-full sm:col-span-3 md:col-span-2">
            <h3 class="mb-6 font-display text-sm text-white">My Account</h3>
            <ul class="flex flex-col space-y-1 text-jacarta-300">
              <li><a href="#" class="hover:text-white">Authors</a></li>
              <li><a href="#" class="hover:text-white">Collection</a></li>
              <li><a href="#" class="hover:text-white">Author Profile</a></li>
              <li><a href="#" class="hover:text-white">Create Item</a></li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col items-center justify-between space-y-2 py-8 sm:flex-row sm:space-y-0">
          <span class="text-sm text-jacarta-400"
            >&copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            Xhibiter — Made by
            <a href="https://deothemes.com" class="hover:text-white">DeoThemes</a></span
          >
          <ul class="flex flex-wrap space-x-4 text-sm text-jacarta-400">
            <li><a href="#" class="hover:text-white">Terms and conditions</a></li>
            <li><a href="#" class="hover:text-white">Privacy policy</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- JS Scripts -->
    <script src="<?php echo base_url()?>assets/template_pagina/temp2//js/app.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/template_pagina/temp2//js/videoLightbox.bundle.js"></script>
  </body>
</html>