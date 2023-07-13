<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
    <div>

    <link rel="stylesheet" type="text/css" href="home.css">

<div class="c_home-frame">

  <div class="c_home-frame01">

    <div class="c_home-frame02">

      <div class="c_home-frame03">

        <div class="c_home-frame04">

          <div class="c_home-text"><p class="c_home-text001">Home</p></div>

          <div class="c_home-text002">

            <p class="c_home-text003">About</p>

          </div>

          <div class="c_home-text004">

            <p class="c_home-text005">Product</p>

          </div>

          <div class="c_home-text006"><p class="c_home-text007">Shop</p></div>

        </div>

        <div class="c_home-frame05">

          <div class="c_home-frame06">

            <div class="c_home-frame07">

              <div class="c_home-frame08">

                <div class="c_home-frame09">

                  <div class="c_home-text008">

                    <p class="c_home-text009">Search</p>

                  </div>

                </div>

              </div>

              <div class="c_home-frame10">

                <img

                  src="./assets/12620.svg"

                  alt="frame"

                  width="24"

                  height="24"

                  class="c_home-frame11"

                  />

              </div>

            </div>

          </div>

          <div class="c_home-frame12">

            <div class="c_home-frame13">

              <img

                src="./assets/12629.svg"

                alt="frame"

                width="24"

                height="24"

                class="c_home-frame14"

                />

            </div>

          </div>

          <img

            src="./assets/126314.jpg"

            alt="rectangle"

            width="59"

            height="57"

            class="c_home-rectangle"

            />

        </div>

      </div>

      <div class="c_home-frame15">

        <div class="c_home-frame16">

          <div class="c_home-frame17">

            <div class="c_home-frame18">

              <div class="c_home-text010">

                <p class="c_home-text011">Find a Store</p>

              </div>

              <div class="c_home-text012">

                <p class="c_home-text013">|</p>

              </div>

            </div>

            <div class="c_home-frame19">

              <div class="c_home-text014">

                <p class="c_home-text015">Help</p>

              </div>

              <div class="c_home-text016">

                <p class="c_home-text017">|</p>

              </div>

            </div>

            <div class="c_home-frame20">

              <div class="c_home-text018">

                <p class="c_home-text019">Join Us</p>

              </div>

              <div class="c_home-text020">

                <p class="c_home-text021">|</p>

              </div>

              <div class="c_home-text022">

                <p class="c_home-text023">Sign In</p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="c_home-frame21">

      <div class="c_home-text024">

        <p class="c_home-text025">Skip to main content</p>

      </div>

    </div>

  </div>

  <div class="c_home-frame22">

    <div class="c_home-frame23">

      <div class="c_home-frame24">

        <div class="c_home-text026">

          <p class="c_home-text027">Hello Nuna Nanu Friends</p>

        </div>

        <div class="c_home-frame25">

          <div class="c_home-text028">

            <p class="c_home-text029">

              Download the app to access everything Nuna Nanu. Get Your Great

            </p>

          </div>

        </div>

      </div>

    </div>

    <div class="c_home-frame26">

      <div class="c_home-text030">

        <p class="c_home-text031"><br /></p>

      </div>

      <div class="c_home-text032">

        <p class="c_home-text033"><br /></p>

      </div>

    </div>

    <div class="c_home-frame27">

      <img

        src="./assets/12663.jpg"

        alt="rectangle"

        width="1344"

        height="700"

        class="c_home-rectangle01"

        />

      <div class="c_home-frame28">

        <div class="c_home-text034">

          <p class="c_home-text035">First Look</p>

        </div>

        <div class="c_home-text036">

          <p class="c_home-text037">Oversized cable knit sweater</p>

        </div>

        <div class="c_home-frame29">

          <div class="c_home-text038">

            <p class="c_home-text039">

              Very comfortable. Warm. Fashionable. Introducing our sweaters

            </p>

          </div>

        </div>

        <div class="c_home-frame30">

          <div class="c_home-frame31">

            <div class="c_home-text040">

              <p class="c_home-text041">Notify Me</p>

            </div>

          </div>

          <div class="c_home-frame32">

            <div class="c_home-text042">

              <p class="c_home-text043">Shop Sweaters</p>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="c_home-frame33">

      <div class="c_home-frame34">

        <div class="c_home-text044">

          <p class="c_home-text045">Best of Swaters</p>

        </div>

        <div class="c_home-frame35">

          <div class="c_home-text046"><p class="c_home-text047">Shop</p></div>

          <img

            src="./assets/12679.svg"

            alt="frame"

            width="48"

            height="48"

            class="c_home-frame36"

            />

          <img

            src="./assets/12683.svg"

            alt="frame"

            width="48"

            height="48"

            class="c_home-frame37"

            />

        </div>

      </div>

      <div class="c_home-frame38">

        <div class="c_home-frame39">

          <img

            src="./assets/12689.jpg"

            alt="rectangle"

            width="441.359375"

            height="441.359375"

            class="c_home-rectangle02"

            />

          <div class="c_home-frame40">

            <div class="c_home-frame41">

              <div class="c_home-text048">

                <p class="c_home-text049">Solid Braided Sweater</p>

              </div>

              <div class="c_home-text050">

                <p class="c_home-text051">Sweater</p>

              </div>

            </div>

            <div class="c_home-text052">

              <p class="c_home-text053">Rp 139.999</p>

            </div>

          </div>

        </div>

        <div class="c_home-frame42">

          <img

            src="./assets/12696.jpg"

            alt="rectangle"

            width="441.359375"

            height="441.359375"

            class="c_home-rectangle03"

            />

          <div class="c_home-frame43">

            <div class="c_home-frame44">

              <div class="c_home-text054">

                <p class="c_home-text055">Patchwork Twist Knit Sweater</p>

              </div>

              <div class="c_home-text056">

                <p class="c_home-text057">Sweater</p>

              </div>

            </div>

            <div class="c_home-text058">

              <p class="c_home-text059">Rp 149.000</p>

            </div>

          </div>

        </div>

        <div class="c_home-frame45">

          <img

            src="./assets/126103.jpg"

            alt="rectangle"

            width="441.359375"

            height="441.359375"

            class="c_home-rectangle04"

            />

          <div class="c_home-frame46">

            <div class="c_home-frame47">

              <div class="c_home-text060">

                <p class="c_home-text061">

                  Three Colour Gradients Soft Sweater

                </p>

              </div>

              <div class="c_home-text062">

                <p class="c_home-text063">Sweater</p>

              </div>

            </div>

            <div class="c_home-text064">

              <p class="c_home-text065">Rp 175.000</p>

            </div>

          </div>

        </div>

        <div class="c_home-frame48">

          <img

            src="./assets/126110.png"

            alt="rectangle"

            width="31.921875"

            height="441.359375"

            class="c_home-rectangle05"

            />

          <div class="c_home-frame49">

            <div class="c_home-frame50">

              <div class="c_home-text066">

                <p class="c_home-text067">

                  Starry Night Jacquard Knit Sweater

                </p>

              </div>

              <div class="c_home-text068">

                <p class="c_home-text069">Sweater</p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="c_home-frame51">

      <div class="c_home-text070">

        <p class="c_home-text071">Don&apos;t Miss</p>

      </div>

      <div class="c_home-frame52">

        <img

          src="./assets/126182.jpg"

          alt="rectangle"

          width="1344"

          height="700"

          class="c_home-rectangle06"

          />

        <div class="c_home-frame53">

          <div class="c_home-text072">

            <p class="c_home-text073">hoodies</p>

          </div>

          <div class="c_home-text074">

            <p class="c_home-text075">

              Don&apos;t forget we have hoodie products too

            </p>

          </div>

          <div class="c_home-frame54">

            <div class="c_home-text076">

              <p class="c_home-text077">Shop</p>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="c_home-frame55">

      <div class="c_home-text078">

        <p class="c_home-text079">The Essentials</p>

      </div>

      <div class="c_home-frame56">

        <div class="c_home-frame57">

          <img

            src="./assets/126192.jpg"

            alt="rectangle"

            width="440"

            height="540"

            class="c_home-rectangle07"

            />

          <div class="c_home-frame58">

            <div class="c_home-text080">

              <p class="c_home-text081">Hoodies</p>

            </div>

          </div>

        </div>

        <div class="c_home-frame59">

          <img

            src="./assets/126196.png"

            alt="rectangle"

            width="440"

            height="549"

            class="c_home-rectangle08"

            />

          <div class="c_home-frame60">

            <div class="c_home-text082">

              <p class="c_home-text083">Sweaters</p>

            </div>

          </div>

        </div>

        <div class="c_home-frame61">

          <img

            src="./assets/126200.jpg"

            alt="rectangle"

            width="440"

            height="540"

            class="c_home-rectangle09"

            />

          <div class="c_home-frame62">

            <div class="c_home-text084">

              <p class="c_home-text085">T-shirts</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="c_home-frame63">

    <div class="c_home-frame64">

      <div class="c_home-frame65">

        <div class="c_home-frame66">

          <div class="c_home-frame67">

            <div class="c_home-frame68">

              <div class="c_home-text086">

                <p class="c_home-text087">Find A Store</p>

              </div>

              <div class="c_home-text088">

                <p class="c_home-text089">Become A Member</p>

              </div>

              <div class="c_home-text090">

                <p class="c_home-text091">Sign Up for Email</p>

              </div>

              <div class="c_home-text092">

                <p class="c_home-text093">Send Us Feedback</p>

              </div>

              <div class="c_home-text094">

                <p class="c_home-text095">Student Discounts</p>

              </div>

            </div>

          </div>

          <div class="c_home-frame69">

            <div class="c_home-frame70">

              <div class="c_home-text096">

                <p class="c_home-text097">Get Help</p>

              </div>

              <div class="c_home-text098">

                <p class="c_home-text099">Order Status</p>

              </div>

              <div class="c_home-text100">

                <p class="c_home-text101">Delivery</p>

              </div>

              <div class="c_home-text102">

                <p class="c_home-text103">Returns</p>

              </div>

              <div class="c_home-text104">

                <p class="c_home-text105">Payment Options</p>

              </div>

              <div class="c_home-text106">

                <p class="c_home-text107">Contact Us On Nike.com Inquiries</p>

              </div>

              <div class="c_home-text108">

                <p class="c_home-text109">

                  Contact Us On All Other Inquiries

                </p>

              </div>

            </div>

          </div>

          <div class="c_home-frame71">

            <div class="c_home-frame72">

              <div class="c_home-text110">

                <p class="c_home-text111">About shop</p>

              </div>

              <div class="c_home-text112">

                <p class="c_home-text113">News</p>

              </div>

              <div class="c_home-text114">

                <p class="c_home-text115">Careers</p>

              </div>

              <div class="c_home-text116">

                <p class="c_home-text117">Investors</p>

              </div>

              <div class="c_home-text118">

                <p class="c_home-text119">Sustainability</p>

              </div>

            </div>

          </div>

        </div>

      </div>

      <img

        src="./assets/136361.svg"

        alt="frame"

        width="269.600341796875"

        height="29.5999755859375"

        class="c_home-frame73"

        />

      <div class="c_home-frame74">

        <div class="c_home-frame75">

          <div class="c_home-frame76">

            <img

              src="./assets/136377.svg"

              alt="frame"

              width="14.39990234375"

              height="12"

              class="c_home-frame77"

              />

            <div class="c_home-text120">

              <p class="c_home-text121">Indonesia</p>

            </div>

          </div>

          <div class="c_home-text122">

            <p class="c_home-text123">

              © 2023 Nuna nanu, Inc. All Rights Reserved

            </p>

          </div>

        </div>

      </div>

    </div>

    <div class="c_home-frame78">

      <div class="c_home-text124"><p class="c_home-text125">Guides</p></div>

      <div class="c_home-text126">

        <p class="c_home-text127">Terms of Sale</p>

      </div>

      <div class="c_home-text128">

        <p class="c_home-text129">Terms of Use</p>

      </div>

      <div class="c_home-text130">

        <p class="c_home-text131">Privacy Policy</p>

      </div>

    </div>

  </div>

</div>

</div>
    </body>
</html>
