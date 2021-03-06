/*  phpBB3 Stylesheet
    --------------------------------------------------------------
	Style name:			FLATBOOTS
	Developer:	        ThemeSplat ( http://www.sitesplat.com/phpBB3 )
    --------------------------------------------------------------
*/

/* BEGIN @include styles/FLATBOOTS/theme/bootstrap/css/bootstrap.min.css */ 
 /*!
 * Bootstrap v3.2.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.1 | MIT License | git.io/normalize */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}@media print{*{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100%!important}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff!important}.navbar{display:none}.table td,.table th{background-color:#fff!important}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table-bordered th,.table-bordered td{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url("./styles/FLATBOOTS/theme/bootstrap/fonts/glyphicons-halflings-regular.eot");src:url("./styles/FLATBOOTS/theme/bootstrap/fonts/glyphicons-halflings-regular.eot?#iefix") format('embedded-opentype'),url("./styles/FLATBOOTS/theme/bootstrap/fonts/glyphicons-halflings-regular.woff") format('woff'),url("./styles/FLATBOOTS/theme/bootstrap/fonts/glyphicons-halflings-regular.ttf") format('truetype'),url("./styles/FLATBOOTS/theme/bootstrap/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#428bca;text-decoration:none}a:hover,a:focus{color:#2a6496;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;width:100% \9;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;width:100% \9;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:400;line-height:1;color:#777}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}cite{font-style:normal}mark,.mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#428bca}a.text-primary:hover{color:#3071a9}.text-success{color:#3c763d}a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#428bca}a.bg-primary:hover{background-color:#3071a9}.bg-success{background-color:#dff0d8}a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dt,dd{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote footer:before,blockquote small:before,blockquote .small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:''}.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}blockquote:before,blockquote:after{content:""}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th{background-color:#f9f9f9}.table-hover>tbody>tr:hover>td,.table-hover>tbody>tr:hover>th{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover,.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr.active:hover>th{background-color:#e8e8e8}.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#dff0d8}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr.success:hover>th{background-color:#d0e9c6}.table>thead>tr>td.info,.table>tbody>tr>td.info,.table>tfoot>tr>td.info,.table>thead>tr>th.info,.table>tbody>tr>th.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>tbody>tr.info>td,.table>tfoot>tr.info>td,.table>thead>tr.info>th,.table>tbody>tr.info>th,.table>tfoot>tr.info>th{background-color:#d9edf7}.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover,.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr.info:hover>th{background-color:#c4e3f3}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#fcf8e3}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr.warning:hover>th{background-color:#faf2cc}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#f2dede}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr.danger:hover>th{background-color:#ebcccc}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=radio],input[type=checkbox]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=radio]:focus,input[type=checkbox]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#777;opacity:1}.form-control:-ms-input-placeholder{color:#777}.form-control::-webkit-input-placeholder{color:#777}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee;opacity:1}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}input[type=date],input[type=time],input[type=datetime-local],input[type=month]{line-height:34px;line-height:1.42857143 \0}input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}.form-group{margin-bottom:15px}.radio,.checkbox{position:relative;display:block;min-height:20px;margin-top:10px;margin-bottom:10px}.radio label,.checkbox label{padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.radio input[type=radio],.radio-inline input[type=radio],.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox]{position:absolute;margin-top:4px \9;margin-left:-20px}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type=radio][disabled],input[type=checkbox][disabled],input[type=radio].disabled,input[type=checkbox].disabled,fieldset[disabled] input[type=radio],fieldset[disabled] input[type=checkbox]{cursor:not-allowed}.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline{cursor:not-allowed}.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm,.form-horizontal .form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}textarea.input-sm,select[multiple].input-sm{height:auto}.input-lg,.form-horizontal .form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}select.input-lg{height:46px;line-height:46px}textarea.input-lg,select[multiple].input-lg{height:auto}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:25px;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center}.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .radio,.form-inline .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .radio label,.form-inline .checkbox label{padding-left:0}.form-inline .radio input[type=radio],.form-inline .checkbox input[type=checkbox]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .radio,.form-horizontal .checkbox{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{top:0;right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:14.3px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:focus,.btn:active:focus,.btn.active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus{color:#333;text-decoration:none}.btn:active,.btn.active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{pointer-events:none;cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:hover,.btn-default:focus,.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled,.btn-default[disabled],fieldset[disabled] .btn-default,.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled:active,.btn-default[disabled]:active,fieldset[disabled] .btn-default:active,.btn-default.disabled.active,.btn-default[disabled].active,fieldset[disabled] .btn-default.active{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd}.btn-primary:hover,.btn-primary:focus,.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#3071a9;border-color:#285e8e}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled,.btn-primary[disabled],fieldset[disabled] .btn-primary,.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled:active,.btn-primary[disabled]:active,fieldset[disabled] .btn-primary:active,.btn-primary.disabled.active,.btn-primary[disabled].active,fieldset[disabled] .btn-primary.active{background-color:#428bca;border-color:#357ebd}.btn-primary .badge{color:#428bca;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success:hover,.btn-success:focus,.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled] .btn-success.active{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info:hover,.btn-info:focus,.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled,.btn-info[disabled],fieldset[disabled] .btn-info,.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled:active,.btn-info[disabled]:active,fieldset[disabled] .btn-info:active,.btn-info.disabled.active,.btn-info[disabled].active,fieldset[disabled] .btn-info.active{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning:hover,.btn-warning:focus,.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled,.btn-warning[disabled],fieldset[disabled] .btn-warning,.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled:active,.btn-warning[disabled]:active,fieldset[disabled] .btn-warning:active,.btn-warning.disabled.active,.btn-warning[disabled].active,fieldset[disabled] .btn-warning.active{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger:hover,.btn-danger:focus,.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled,.btn-danger[disabled],fieldset[disabled] .btn-danger,.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled:active,.btn-danger[disabled]:active,fieldset[disabled] .btn-danger:active,.btn-danger.disabled.active,.btn-danger[disabled].active,fieldset[disabled] .btn-danger.active{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#428bca;cursor:pointer;border-radius:0}.btn-link,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}.btn-link:hover,.btn-link:focus{color:#2a6496;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#777;text-decoration:none}.btn-lg,.btn-group-lg>.btn{padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}.btn-sm,.btn-group-sm>.btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs,.btn-group-xs>.btn{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=submit].btn-block,input[type=reset].btn-block,input[type=button].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s ease;-o-transition:height .35s ease;transition:height .35s ease}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{color:#fff;text-decoration:none;background-color:#428bca;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{color:#777}.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px solid}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:1px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group>.btn,.btn-group-vertical>.btn{position:relative;float:left}.btn-group>.btn:hover,.btn-group-vertical>.btn:hover,.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active{z-index:2}.btn-group>.btn:focus,.btn-group-vertical>.btn:focus{outline:0}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child>.btn:last-child,.btn-group>.btn-group:first-child>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn>input[type=radio],[data-toggle=buttons]>.btn>input[type=checkbox]{position:absolute;z-index:-1;filter:alpha(opacity=0);opacity:0}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn,select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn,select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn{height:auto}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=radio],.input-group-addon input[type=checkbox]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child>.btn-group:not(:last-child)>.btn{border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:first-child>.btn-group:not(:first-child)>.btn{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:hover,.input-group-btn>.btn:focus,.input-group-btn>.btn:active{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#eee;border-color:#428bca}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#fff;background-color:#428bca}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:340px}@media (max-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:200px}}.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030;-webkit-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}@media (min-width:768px){.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu>li>a,.navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:hover,.navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}.navbar-nav.navbar-right:last-child{margin-right:-15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .radio,.navbar-form .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .radio label,.navbar-form .checkbox label{padding-left:0}.navbar-form .radio input[type=radio],.navbar-form .checkbox input[type=checkbox]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-form.navbar-right:last-child{margin-right:-15px}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}.navbar-text.navbar-right:last-child{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:hover,.navbar-default .navbar-nav>.disabled>a:focus{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:hover,.navbar-default .navbar-nav>.open>a:focus{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:hover,.navbar-default .btn-link:focus{color:#333}.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:hover,.navbar-default .btn-link[disabled]:focus,fieldset[disabled] .navbar-default .btn-link:focus{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#777}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#777}.navbar-inverse .navbar-nav>li>a{color:#777}.navbar-inverse .navbar-nav>li>a:hover,.navbar-inverse .navbar-nav>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:hover,.navbar-inverse .navbar-nav>.disabled>a:focus{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a:focus{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#777}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#777}.navbar-inverse .btn-link:hover,.navbar-inverse .btn-link:focus{color:#fff}.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:hover,.navbar-inverse .btn-link[disabled]:focus,fieldset[disabled] .navbar-inverse .btn-link:focus{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#428bca;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{color:#2a6496;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:2;color:#fff;cursor:default;background-color:#428bca;border-color:#428bca}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:hover,a.label:focus{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:hover,.label-default[href]:focus{background-color:#5e5e5e}.label-primary{background-color:#428bca}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#3071a9}.label-success{background-color:#5cb85c}.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-xs .badge{top:0;padding:1px 5px}a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}a.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#428bca;background-color:#fff}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron h1,.jumbotron .h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron{border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{padding-right:60px;padding-left:60px}.jumbotron h1,.jumbotron .h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.thumbnail>img,.thumbnail a>img{margin-right:auto;margin-left:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#428bca}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#428bca;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-striped .progress-bar,.progress-bar-striped{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress.active .progress-bar,.progress-bar.active{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar[aria-valuenow="1"],.progress-bar[aria-valuenow="2"]{min-width:30px}.progress-bar[aria-valuenow="0"]{min-width:30px;color:#777;background-color:transparent;background-image:none;-webkit-box-shadow:none;box-shadow:none}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media,.media-body{overflow:hidden;zoom:1}.media,.media .media{margin-top:15px}.media:first-child{margin-top:0}.media-object{display:block}.media-heading{margin:0 0 5px}.media>.pull-left{margin-right:10px}.media>.pull-right{margin-left:10px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}a.list-group-item{color:#555}a.list-group-item .list-group-item-heading{color:#333}a.list-group-item:hover,a.list-group-item:focus{color:#555;text-decoration:none;background-color:#f5f5f5}.list-group-item.disabled,.list-group-item.disabled:hover,.list-group-item.disabled:focus{color:#777;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{z-index:2;color:#fff;background-color:#428bca;border-color:#428bca}.list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>.small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text{color:#e1edf7}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:hover,a.list-group-item-success:focus{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:hover,a.list-group-item-success.active:focus{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:hover,a.list-group-item-info:focus{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:hover,a.list-group-item-info.active:focus{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:hover,a.list-group-item-warning:focus{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:hover,a.list-group-item-danger:focus{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group{margin-bottom:0}.panel>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.table,.panel>.table-responsive>.table,.panel>.panel-collapse>.table{margin-bottom:0}.panel>.table:first-child,.panel>.table-responsive:first-child>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table:last-child,.panel>.table-responsive:last-child>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child th,.panel>.table>tbody:first-child>tr:first-child td{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#428bca}.panel-primary>.panel-heading{color:#fff;background-color:#428bca;border-color:#428bca}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#428bca}.panel-primary>.panel-heading .badge{color:#428bca;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#428bca}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate3d(0,-25%,0);-o-transform:translate3d(0,-25%,0);transform:translate3d(0,-25%,0)}.modal.in .modal-dialog{-webkit-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{min-height:16.43px;padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-size:12px;line-height:1.4;visibility:visible;filter:alpha(opacity=0);opacity:0}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{bottom:0;left:5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{right:5px;bottom:0;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;left:5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;right:5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;text-align:left;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;font-weight:400;line-height:18px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{line-height:1}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:hover,.carousel-control:focus{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;z-index:5;display:inline-block}.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%;margin-left:-10px}.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%;margin-right:-10px}.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;margin-top:-10px;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-15px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-15px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-15px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-footer:before,.modal-footer:after{display:table;content:" "}.clearfix:after,.dl-horizontal dd:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-footer:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important;visibility:hidden!important}.affix{position:fixed;-webkit-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none!important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table}tr.visible-xs{display:table-row!important}th.visible-xs,td.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table}tr.visible-sm{display:table-row!important}th.visible-sm,td.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table}tr.visible-md{display:table-row!important}th.visible-md,td.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table}tr.visible-lg{display:table-row!important}th.visible-lg,td.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table}tr.visible-print{display:table-row!important}th.visible-print,td.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}} 
 /* END @include styles/FLATBOOTS/theme/bootstrap/css/bootstrap.min.css */ 

/* BEGIN @include styles/FLATBOOTS/theme/bootstrap/css/bootstrap-select.min.css */ 
 /*!
 * bootstrap-select v1.5.4
 * http://silviomoreto.github.io/bootstrap-select/
 *
 * Copyright 2013 bootstrap-select
 * Licensed under the MIT license
 */.bootstrap-select.btn-group:not(.input-group-btn),.bootstrap-select.btn-group[class*="span"]{float:none;display:inline-block;margin-bottom:10px;margin-left:0}.form-search .bootstrap-select.btn-group,.form-inline .bootstrap-select.btn-group,.form-horizontal .bootstrap-select.btn-group{margin-bottom:0}.bootstrap-select.form-control{margin-bottom:0;padding:0;border:0}.bootstrap-select.btn-group.pull-right,.bootstrap-select.btn-group[class*="span"].pull-right,.row-fluid .bootstrap-select.btn-group[class*="span"].pull-right{float:right}.input-append .bootstrap-select.btn-group{margin-left:-1px}.input-prepend .bootstrap-select.btn-group{margin-right:-1px}.bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn){width:220px}.bootstrap-select{width:220px\0}.bootstrap-select.form-control:not([class*="span"]){width:100%}.bootstrap-select>.btn{width:100%;padding-right:25px}.error .bootstrap-select .btn{border:1px solid #b94a48}.bootstrap-select.show-menu-arrow.open>.btn{z-index:2051}.bootstrap-select .btn:focus{outline:thin dotted #333 !important;outline:5px auto -webkit-focus-ring-color !important;outline-offset:-2px}.bootstrap-select.btn-group .btn .filter-option{display:inline-block;overflow:hidden;width:100%;float:left;text-align:left}.bootstrap-select.btn-group .btn .caret{position:absolute;top:50%;right:12px;margin-top:-2px;vertical-align:middle}.bootstrap-select.btn-group>.disabled,.bootstrap-select.btn-group .dropdown-menu li.disabled>a{cursor:not-allowed}.bootstrap-select.btn-group>.disabled:focus{outline:none !important}.bootstrap-select.btn-group[class*="span"] .btn{width:100%}.bootstrap-select.btn-group .dropdown-menu{min-width:100%;z-index:2000;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.bootstrap-select.btn-group .dropdown-menu.inner{position:static;border:0;padding:0;margin:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}.bootstrap-select.btn-group .dropdown-menu dt{display:block;padding:3px 20px;cursor:default}.bootstrap-select.btn-group .div-contain{overflow:hidden}.bootstrap-select.btn-group .dropdown-menu li{position:relative}.bootstrap-select.btn-group .dropdown-menu li>a.opt{position:relative;padding-left:35px}.bootstrap-select.btn-group .dropdown-menu li>a{cursor:pointer}.bootstrap-select.btn-group .dropdown-menu li>dt small{font-weight:normal}.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a i.check-mark{position:absolute;display:inline-block;right:15px;margin-top:2.5px}.bootstrap-select.btn-group .dropdown-menu li a i.check-mark{display:none}.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text{margin-right:34px}.bootstrap-select.btn-group .dropdown-menu li small{padding-left:.5em}.bootstrap-select.btn-group .dropdown-menu li:not(.disabled)>a:hover small,.bootstrap-select.btn-group .dropdown-menu li:not(.disabled)>a:focus small,.bootstrap-select.btn-group .dropdown-menu li.active:not(.disabled)>a small{color:#64b1d8;color:rgba(255,255,255,0.4)}.bootstrap-select.btn-group .dropdown-menu li>dt small{font-weight:normal}.bootstrap-select.show-menu-arrow .dropdown-toggle:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid #CCC;border-bottom-color:rgba(0,0,0,0.2);position:absolute;bottom:-4px;left:9px;display:none}.bootstrap-select.show-menu-arrow .dropdown-toggle:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid white;position:absolute;bottom:-4px;left:10px;display:none}.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before{bottom:auto;top:-3px;border-top:7px solid #ccc;border-bottom:0;border-top-color:rgba(0,0,0,0.2)}.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after{bottom:auto;top:-3px;border-top:6px solid #fff;border-bottom:0}.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before{right:12px;left:auto}.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after{right:13px;left:auto}.bootstrap-select.show-menu-arrow.open>.dropdown-toggle:before,.bootstrap-select.show-menu-arrow.open>.dropdown-toggle:after{display:block}.bootstrap-select.btn-group .no-results{padding:3px;background:#f5f5f5;margin:0 5px}.bootstrap-select.btn-group .dropdown-menu .notify{position:absolute;bottom:5px;width:96%;margin:0 2%;min-height:26px;padding:3px 5px;background:#f5f5f5;border:1px solid #e3e3e3;box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);pointer-events:none;opacity:.9;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.mobile-device{position:absolute;top:0;left:0;display:block !important;width:100%;height:100% !important;opacity:0}.bootstrap-select.fit-width{width:auto !important}.bootstrap-select.btn-group.fit-width .btn .filter-option{position:static}.bootstrap-select.btn-group.fit-width .btn .caret{position:static;top:auto;margin-top:-1px}.control-group.error .bootstrap-select .dropdown-toggle{border-color:#b94a48}.bootstrap-select-searchbox,.bootstrap-select .bs-actionsbox{padding:4px 8px}.bootstrap-select .bs-actionsbox{float:left;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.bootstrap-select-searchbox+.bs-actionsbox{padding:0 8px 4px}.bootstrap-select-searchbox input{margin-bottom:0}.bootstrap-select .bs-actionsbox .btn-group button{width:50%} 
 /* END @include styles/FLATBOOTS/theme/bootstrap/css/bootstrap-select.min.css */ 

/* BEGIN @include styles/FLATBOOTS/theme/font/font-awesome/css/font-awesome.css */ 
 /*!
 *  Font Awesome 4.6.3 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('./styles/FLATBOOTS/theme/font/font-awesome/fonts/fontawesome-webfont.eot?v=4.6.3');
  src: url('./styles/FLATBOOTS/theme/font/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3') format('embedded-opentype'), url('./styles/FLATBOOTS/theme/font/font-awesome/fonts/fontawesome-webfont.woff2?v=4.6.3') format('woff2'), url('./styles/FLATBOOTS/theme/font/font-awesome/fonts/fontawesome-webfont.woff?v=4.6.3') format('woff'), url('./styles/FLATBOOTS/theme/font/font-awesome/fonts/fontawesome-webfont.ttf?v=4.6.3') format('truetype'), url('./styles/FLATBOOTS/theme/font/font-awesome/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
} 
 /* END @include styles/FLATBOOTS/theme/font/font-awesome/css/font-awesome.css */ 

/* BEGIN @include styles/FLATBOOTS/theme/font/iconmoon/style.min.css */ 
 @font-face{font-family:'icomoon';src:url('./styles/FLATBOOTS/theme/font/iconmoon/fonts/icomoon.eot?ljss83');src:url('./styles/FLATBOOTS/theme/font/iconmoon/fonts/icomoon.eot?#iefixljss83') format('embedded-opentype'),url('./styles/FLATBOOTS/theme/font/iconmoon/fonts/icomoon.woff?ljss83') format('woff'),url('./styles/FLATBOOTS/theme/font/iconmoon/fonts/icomoon.ttf?ljss83') format('truetype');font-weight:400;font-style:normal}[class^="icon-moon-"],[class*=" icon-moon-"]{font-family:'icomoon';speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-moon-docean:before{content:"\e602"}.icon-moon-activeden:before{content:"\e603"}.icon-moon-audiojungle1:before{content:"\e604"}.icon-moon-blockade:before{content:"\e605"}.icon-moon-bubble1:before{content:"\e606"}.icon-moon-codecanyon1:before{content:"\e607"}.icon-moon-diamons:before{content:"\e608"}.icon-moon-documents12:before{content:"\e609"}.icon-moon-envato:before{content:"\e60a"}.icon-moon-envato1:before{content:"\e60b"}.icon-moon-folder90:before{content:"\e60c"}.icon-moon-folder167:before{content:"\e60e"}.icon-moon-graphicriver1:before{content:"\e60f"}.icon-moon-leaf5:before{content:"\e610"}.icon-moon-link23:before{content:"\e611"}.icon-moon-link39:before{content:"\e612"}.icon-moon-link49:before{content:"\e613"}.icon-moon-location4:before{content:"\e614"}.icon-moon-map45:before{content:"\e615"}.icon-moon-megaphone10:before{content:"\e616"}.icon-moon-microlancer1:before{content:"\e617"}.icon-moon-note18:before{content:"\e618"}.icon-moon-note25:before{content:"\e619"}.icon-moon-photodune:before{content:"\e61a"}.icon-moon-sound:before{content:"\e61b"}.icon-moon-text46:before{content:"\e61c"}.icon-moon-themeforest1:before{content:"\e61d"}.icon-moon-three140:before{content:"\e61e"}.icon-moon-two298:before{content:"\e61f"}.icon-moon-voice19:before{content:"\e620"}.icon-moon-forjq:before{content:"\e600"}.icon-moon-phpBB:before{content:"\e601"}.icon-moon-none:before{content:"\e000"}.icon-moon-bootstrap:before{content:"\e001"}.icon-moon-less_c:before{content:"\e002"}.icon-moon-w3c:before{content:"\e003"}.icon-moon-folder-open:before{content:"\e00f"}.icon-moon-folder:before{content:"\e010"}.icon-moon-pushpin:before{content:"\e016"}.icon-moon-stats:before{content:"\e042"}.icon-moon-link2:before{content:"\e04a"}.icon-moon-at:before{content:"\e091"}.icon-moon-link:before{content:"\e621"}.icon-moon-file:before{content:"\e622"}.icon-moon-window:before{content:"\e623"}.icon-moon-microphone:before{content:"\e624"}.icon-moon-microphone2:before{content:"\e625"}.icon-moon-chart:before{content:"\e626"}.icon-moon-folder2:before{content:"\e627"}.icon-moon-megaphone:before{content:"\e628"}.icon-moon-volume:before{content:"\e629"}.icon-moon-compass:before{content:"\e62a"}.icon-moon-heart:before{content:"\e62b"}.icon-moon-heart2:before{content:"\e62c"}.icon-moon-infinity:before{content:"\e672"}.icon-moon-uniF4F6:before{content:"\e62d"}.icon-moon-ruby:before{content:"\e63e"}.icon-moon-ipcontrol:before{content:"\e63d"}.icon-moon-mailinglists:before{content:"\e687"}.icon-moon-moved:before{content:"\e63a"}.icon-moon-php:before{content:"\e639"}.icon-moon-lock:before{content:"\e663"}.icon-moon-copy:before{content:"\e62e"}.icon-moon-volumefull:before{content:"\e62f"}.icon-moon-bookmark:before{content:"\e636"}.icon-moon-comment6:before{content:"\e630"}.icon-moon-voice:before{content:"\e677"}.icon-moon-podcast:before{content:"\e678"}.icon-moon-pin:before{content:"\e631"}.icon-moon-flag2:before{content:"\e632"}.icon-moon-coffee:before{content:"\e66c"}.icon-moon-paypal:before{content:"\e66d"}.icon-moon-diamond:before{content:"\e659"} 
 /* END @include styles/FLATBOOTS/theme/font/iconmoon/style.min.css */ 

/* BEGIN @include basics.css */ 
 /*****************************************************************
 * Note: You can run a search with one of the title below to find the references in the css
 * **************************************************************
 *
 * FLATBBOOTS - www.sitesplat.com - Table of Contents (to be updated)
 * 
 *    A- GENERAL MARKUP 			 ( from line 36 to  approx. )
 *    B- UCP TABS NAVIGATION         ( from line 222 to  approx. )
 *    C- TABLES STYLE ANF FONT ICONS ( from 753 to  approx. )
 *    D- INDEX PROFILE MENU          ( from 951 to  approx. )
 *    E- BREADCRUMB STYLE            ( from 991 to  approx. )
 *    F- SOCIAL TOP BAR              ( from 1263 to  approx. )
 *    G- SEARCH STYLE                ( from 1316 to  approx. )
 *    H- HEADER STYLE       		 ( from 1375 to  approx. )
 *    I- MAIN NAVIGATION		     ( from 1490 to  approx. )
 *    J- MOBILE NAVIGATION           ( from 1702 to  approx. )
 *    K- RESPONSIVE QUERIES			 ( from 1805 to  approx. )
 *    L- FOOTER LAYOUT				 ( from 2180 to  approx. )
 *    M- RADIO CHECKBOX STYLE 		 ( from 2429 to  approx. )
 *    N- FORMS				         ( from 2530 to  approx. )
 *    O- USER PROFILE AND GALLERY    ( from 2581 to  approx. )
 *    P- MISC - BUTTONS - ALERTS     ( from 2783 to  approx. )
 *    Q- WELLS AND WIDGETS           ( from 2939 to  approx. )
 *    R- PAGINATION 				 ( from 3015 to  approx. )
 *    S- PM STUFF				     ( from 3090 to  approx. )
 *    T- BACK TO TOP				 ( from 3247 to  approx. )
 *    U- 400 - 500 PAGES			 ( from 3276 to  approx. )
 *    V- MCP BAN LIST FIX			 ( from 3340 to  approx. )
 *    W- 
 *    X- 
 *    Y- 
 *    Z- 
 * **************************************************************
 *****************************************************************/

/* ===[ GENERAL MARKUP ]=== */

/* un-or-comment this line if you want to change the post content font only */
.postbody .content {
    font-family: inherit;
    font-size: 1.0em;
    margin-top: 20px;
    /* word-break: break-all; */
    /* Non standard for webkit */
    /* word-break: break-word; */
    -webkit-hyphens: auto;
       -moz-hyphens: auto;
            hyphens: auto;
    color: #495d60;
    -webkit-font-smoothing: antialiased; /* Fix for webkit rendering */
    -webkit-text-size-adjust: 100%;
        -ms-hyphens: auto;
}

#simple-wrap {
    padding: 6px 10px;
}

#page-body {
    clear: both;
    margin: 4px 0;
}

hr {
    display: block;
    clear: both;
    height: 1px;
    margin: 5px 0;
    border: 0 none #fff;
    border-top: 1px solid #ccc;
}

hr.dashed {
    margin: 10px 0;
    border-top: 1px dashed #ccc;
}


/* Topic review panel */

#topicreview {
    overflow: auto;
    height: 300px;
    padding-right: 5px;
}

.post-ignore .postbody {
    display: none;
}


/* MCP details */
#post_details {
    /* This will only work in IE7+, plus the others */
    overflow: auto;
    max-height: 300px;
}

#expand {
    clear: both;
}

.post-icon {
    margin-right: 5px;
    margin-bottom: 2px;
}

.posthilit {
    color: #000;
    background-color: #f2f228;
}

/* Post signature */
.signature {
    font-size: 1.1em;
    line-height: 140%;
    clear: left;
    overflow: hidden;
    width: 100%;
    margin-top: 1.5em;
    padding-top: .2em;
    border-top: 1px solid #ccc;
}


/* Post noticies */
.notice {
    line-height: 120%;
    margin-top: 1.5em;
    border-top: 1px dashed #ccc;
}

/* Jump to post link for now */
.searchresults {
    clear: both;
    list-style: none;
    text-align: right;
}

/* Quote BBcode style */

blockquote {
    margin: 0 0 20px;
    padding: 0 0 0 15px;
    border-left: 5px solid #ccc;
}

.content blockquote cite {
    display: block;
}

.content blockquote {
    font-size: 1.00em;
    position: relative;
    margin: 1em 0 0;
    padding: .3em 2em .3em 2.5em;
    border: none;
    border-radius: 3px;
    background: none repeat scroll 0 0 #e4e9eb;
}

.content blockquote:before {
    font-size: 5em;
    line-height: .2em;
    position: absolute;
    top: .3em;
    left: 5px;
    content: "\201C";
    color: #ccc;
}

.content blockquote:after {
    font-size: 5em;
    line-height: 0;
    position: absolute;
    right: 3px;
    bottom: 0;
    content: "\201D";
    color: #ccc;
}


/* Code block */
.codebox {
    font-size: 1em;
    padding: 3px;
    border: 1px solid #d8d8d8;
    background-color: #fff;
}

.codebox span {
    font-size: .8em;
    font-weight: bold;
    display: block;
    margin-bottom: 3px;
    text-transform: uppercase;
    border-bottom: 1px solid #ccc;
}

blockquote .codebox {
    margin: 5px 5px 5px 0;
}

.codebox code {
    line-height: 1.3em;
    display: block;
    /* Also see tweaks.css */
    overflow: auto;
    height: auto;
    max-height: 200px;
    margin: 2px 0;
    white-space: normal;
    color: #8b8b8b;
}

.syntaxbg {
    color: #fff;
}
.syntaxcomment {
    color: #000;
}
.syntaxdefault {
    color: #bcbcbc;
}
.syntaxhtml {
    color: #000;
}
.syntaxkeyword {
    color: #585858;
}
.syntaxstring {
    color: #a7a7a7;
}

/* Attachements */
.attachbox {
    width: auto;
    margin: 10px;
    padding: 10px;
    border: 1px dashed #d8d8d8;
    background-color: #fff;
}

.pm-message .attachbox {
    background-color: #f3f3f3;
}


.attachbox p {
    font-weight: normal;
    line-height: 110%;
    clear: left;
    color: #666;
}

.stats {
    font-weight: normal;
    line-height: 110%;
    clear: left;
    color: #666;
}

.attach-image {
    overflow: auto;
    width: 100%;
    max-height: 350px;
    margin: 3px 0;
}

.attach-image img {
    /*	cursor: move; */
    cursor: default;
    border: 1px solid #999;
}

/* Inline image thumbnails */
.thumbnail {
    display: block;
    margin-bottom: 4px;
}


/* Link Styles */

/* Links adjustment to correctly display an order of rtl/ltr mixed content */
a {
    direction: ltr;
    unicode-bidi: embed;
}

/* Coloured usernames */
.username-coloured {
    font-weight: 600;
    display: inline;
    padding: 0;
}

.table-primary thead th a {
    font-family: inherit;
    font-weight: inherit;
    font-style: inherit;
    color: #fff;
}

/* Feed icon in forumlist_body.html */
.feed-icon-forum {
    float: right;
    margin: 3px;
}


/* Colours and backgrounds for links.css */

a:link {
    color: #8c8c8c;
}
a:visited {
    color: #8c8c8c;
}
a:hover {
    text-decoration: none; 
    color: #a6a6a6;
}
a:active {
    color: #338ad2;
}


/* Links for forum/topic lists */

a.forumtitle:hover,
a.topictitle:hover {
    text-decoration: none;
    color: #8c8c8c;
}

a.forumtitle:active,
a.topictitle:active {
    color: #2e8ece;
}

/* Links for forum/topic lists */
a.forumtitle,
a.topictitle {
    font-size: 1.08em;
    font-weight: 700;
    font-style: normal;
    text-decoration: none;
    color: #eb6f57;
}


/* Post body links */
.postlink {
    color: #368ad2;
    border-bottom: 1px dashed #ccc;
}

.postlink:visited {
    color: #5d8fbd;
}

.postlink:active {
    color: #368ad2;
}

.postlink:hover {
    color: #8c8c8c;
    border-bottom: 1px solid #ccc;
}

.signature a,
.signature a:visited,
.signature a:hover,
.signature a:active {
    text-decoration: none;
    border: none;
    background-color: transparent;
}

/* END Former content.css
---------------------------------------- */
 

/* ===[ GENERAL ELEMENTS - HEADINGS ]=== */
body {
    font-family: 'Source Sans Pro','Arial','Helvetica',sans-serif;
    margin: 0;
    color: #8d9aa5;
    background-color: #ecf0f1;
}

h1,
h2,
h3,
h4,
h5,
h6,
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    font-family: 'Asap','Arial','Helvetica',sans-serif;
    font-weight: 700;
    line-height: normal;
    margin: 0 0 10px;
    color: #7f7f7f;
    text-rendering: optimizeLegibility;/* Fix for webkit rendering, well at least for the time being */
    -webkit-font-smoothing: antialiased;/* Fix for webkit rendering, well at least for the time being */
}

.postbody h3 {
    font-size: 1.5em;
    margin-top: 0;
    text-transform: none;
    border: none;
}

h3 {
    font-size: 22px;
    text-transform: uppercase;
    color: #7f7f7f;
    border-bottom: 4px solid #fff;
}


#footerContent h3 {
    border-bottom: 4px solid #fff;
    background-repeat: repeat-x;
    background-position: 0 50%;
}

#footerContent h3 span,
.side-segment h3 span {
    position: relative;
    border-bottom: 4px solid #ee836e;
}

.post-id {
    border-bottom: 0 !important;
}

.post-id a {
    color: #e5e5e5;
}

.content h2 {
    font-size: 1.6em;
    margin-top: .5em;
    margin-bottom: .5em;
    padding-bottom: .5em;
    color: #7f7f7f;
    border-bottom: 1px solid #ccc;
}

.side-segment h3:after,
.side-segment h2:after {
    bottom: 0;
    display: block;
    width: 80px;
    height: 4px;
    margin-bottom: -4px;
    content: "";
    background-color: #ee836e;
}

a{
    -webkit-transition: color .2s ease, background-color .2s ease;
       -moz-transition: color .2s ease, background-color .2s ease;
        -ms-transition: color .2s ease, background-color .2s ease;
         -o-transition: color .2s ease, background-color .2s ease;
            transition: color .2s ease, background-color .2s ease;
    text-decoration: none;
    color: #2880b2;
}



/* lines button */
.lines-button {
    cursor: pointer;
    transition: .3s;
    border-radius: .37143rem;
}
.lines-button:hover {
    opacity: 1;
}
.lines-button:active {
    transition: 0;
}
.lines {
    position: relative;
    display: inline-block;
    width: 4rem;
    height: .37143rem;
    transition: .3s;
    border-radius: .28571rem;
    background: #ecf0f1;
}
.lines:before,
.lines:after {
    position: absolute;
    left: 0;
    display: inline-block;
    width: 4rem;
    height: .37143rem;
    content: "";
    transition: .3s;
    -webkit-transform-origin: .28571rem center;
            transform-origin: .28571rem center;
    border-radius: .28571rem;
    background: #ecf0f1;
}

.lines:before {
    top: 1rem;
}
.lines:after {
    top: -1rem;
}

.lines-button.open {
    -webkit-transform: scale3d(.8, .8, .8);
            transform: scale3d(.8, .8, .8);
}
.lines-button.arrow.open .lines:before,
.lines-button.arrow.open .lines:after {
    top: 0;
    width: 2.22222rem;
}
.lines-button.arrow.open .lines:before {
    -webkit-transform: rotate3d(0, 0, 1, 40deg);
            transform: rotate3d(0, 0, 1, 40deg);
}
.lines-button.arrow.open .lines:after {
    -webkit-transform: rotate3d(0, 0, 1, -40deg);
            transform: rotate3d(0, 0, 1, -40deg);
}
.lines-button.arrow-up.open {
    -webkit-transform: scale3d(.8, .8, .8) rotate3d(0, 0, 1, 90deg);
            transform: scale3d(.8, .8, .8) rotate3d(0, 0, 1, 90deg);
}
.lines-button.minus.open .lines:before,
.lines-button.minus.open .lines:after {
    top: 0;
    width: 4rem;
    -webkit-transform: none;
            transform: none;
}
.lines-button.x.open .lines {
    background: transparent;
}
.lines-button.x.open .lines:before,
.lines-button.x.open .lines:after {
    top: 0;
    width: 4rem;
    padding: 4px;
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
}
.lines-button.x.open .lines:before {
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
}
.lines-button.x.open .lines:after {
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
}
.lines-button.x2 .lines {
    transition: background .3s .5s ease;
}
.lines-button.x2 .lines:before,
.lines-button.x2 .lines:after {
    transition: top .3s .6s ease, -webkit-transform .3s ease;
    transition: top .3s .6s ease, transform .3s ease;
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
}
.lines-button.x2.open .lines {
    transition: background .3s 0s ease;
    background: transparent;
}
.lines-button.x2.open .lines:before,
.lines-button.x2.open .lines:after {
    top: 0;
    width: 4rem;
    transition: top .3s ease, -webkit-transform .3s .5s ease;
    transition: top .3s ease, transform .3s .5s ease;
}
.lines-button.x2.open .lines:before {
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
}
.lines-button.x2.open .lines:after {
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
}

.navbar-inverse .navbar-toggle {
    border: 2px solid #656b7b;
}

.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
    background-color: #656b7b;
}

.navbar-toggle {
    margin-top: 4px;
    padding: 6px 6px 12px;
}

.lines-button.open {
    padding: 6px 6px 16px;
    border-radius: .47143rem;
}

/** Fix for btn group tool bar in post editor **/
.section-posting .btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
    margin-left: 5px !important;
}

/** Fix for smaller btn group in topic **/
.section-viewtopic .btn-group > .btn:first-child {
    margin-left: 1px;
}


/*** modal header fix ***/
.modal-header h3 {
    border-bottom: medium none !important;
}

/*** space, padding quickfix ***/
.space10 {
    clear: both;
    height: 10px !important;
}

.stat_offline {
    background: none repeat scroll 0 0 #cb1111;
}

.stat_online {
    background: none repeat scroll 0 0 #5da423;
}

.stat {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-right: 10px;
    border: 2px solid #fff !important;
    border-radius: 8px 8px 8px 8px;
}

/* General form styles from former FORM.css */
fieldset {
    border-width: 0;
}
/* General form styles from former FORM.css */

.hr-double {
    height: 3px;
    margin-top: -15px;
    margin-bottom: 40px;
    border-top: 1px solid #e3e3e3;
    border-bottom: 1px solid #e3e3e3;
}

.btn-group-member {
    font-size: 0;
    position: relative;
    display: block;
    white-space: nowrap;
}


/* Custom Scrollbar */

#scrollbar,
#scrollbar-one,
#scrollbar-two,
#scrollbar-three {
    clear: both;
    width: 100%;
    margin: 0;
}

#scrollbar .scrollbar,
#scrollbar-one .scrollbar,
#scrollbar-two .scrollbar,
#scrollbar-three .scrollbar {
    position: relative;
    float: right;
    width: 4px;
}

#scrollbar .viewport,
#scrollbar-one .viewport,
#scrollbar-two .viewport,
#scrollbar-three .viewport {
    position: relative;
    overflow: hidden;
    width: 98%;
    height: 270px;
}

#scrollbar .overview,
#scrollbar-one .overview,
#scrollbar-two .overview,
#scrollbar-three .overview {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    list-style: none outside none;
}

#scrollbar .track,
#scrollbar-one .track,
#scrollbar-two .track,
#scrollbar-three .track {
    position: relative;
    width: 4px;
    height: 100%;
    padding: 0;
    background-color: #ccc;
}

#scrollbar-one .thumb,
#scrollbar-two .thumb {
    background-color: #0daed3;
}

#scrollbar .thumb,
#scrollbar-one .thumb,
#scrollbar-two .thumb,
#scrollbar-three .thumb {
    position: absolute;
    top: 0;
    overflow: hidden;
    width: 4px;
    height: 20px;
    cursor: pointer;
}

#scrollbar-one .thumb .end,
#scrollbar-two .thumb .end {
    background-color: #0daed3;
}

#scrollbar .thumb .end,
#scrollbar-one .thumb .end,
#scrollbar-two .thumb .end,
#scrollbar-three .thumb .end {
    overflow: hidden;

    width: 13px;
    height: 5px;
}

/* UCP PM TAGS STYLE */
.tagsinput span.tag
{
    font-size: 11px;
    font-weight: 600;
    line-height: 14px;

    margin: 3px;
    padding: 3px 5px;

    color: #fff;
    border: 1px solid #b3b3b3;
    border-radius: 2px;
    background: none repeat scroll 0 0 #ccc;
    text-shadow: 0 1px 1px rgba(0, 0, 0, .10);
}

.tagsinput
{
    margin-bottom: 5px;
}

.tagsinput input
{
    font-weight: bold;

    margin-bottom: 5px;
    padding: 0 0 0 4px;

    color: #fff;
}

/* Recent activity UCP */

.ui-timline-container {
    padding: 15px;
}
.ui-timline-left .ui-timeline:before {
    left: 0;
}
@media (min-width: 768px) {
    .ui-timline-left .ui-timeline .tl-item:before {
        display: none;
    }
}
@media (min-width: 768px) {
    .ui-timline-left .ui-timeline .tl-item .tl-caption {
        margin-left: -55px;
    }
}
@media (min-width: 768px) {
    .ui-timline-left .ui-timeline .tl-item .tl-body .tl-time {
        right: 15px;
        left: auto;
        color: #999;
    }
}
.ui-timeline {
    position: relative;
    display: table;
    width: 100%;
    table-layout: fixed;
    border-spacing: 0;
    border-collapse: collapse;
}
.ui-timeline:before {
    position: absolute;
    z-index: 0;
    top: 30px;
    bottom: 30px;
    left: 0;
    width: 4px;
    content: "";
    background-color: #d5d5d5;
}
@media (min-width: 768px) {
    .ui-timeline:before {
        left: 50%;
    }
}
.ui-timeline .tl-item {
    display: table-row;
    margin-bottom: 5px;
}
.ui-timeline .tl-item:before {
    display: none;
    content: "";
}
@media (min-width: 768px) {
    .ui-timeline .tl-item:before {
        display: block;
        width: 50%;
    }
}
.ui-timeline .tl-item .tl-caption {
    width: 150px;
    margin-left: -55px;
}
@media (min-width: 768px) {
    .ui-timeline .tl-item .tl-caption {
        margin-left: -110px;
    }
}
@media (min-width: 768px) {
    .ui-timeline .tl-item.alt {
        text-align: right;
    }
    .ui-timeline .tl-item.alt:before {
        display: none;
    }
    .ui-timeline .tl-item.alt:after {
        display: block;
        width: 50%;
        content: "";
    }
    .ui-timeline .tl-item.alt .tl-body .tl-entry {
        margin: 0 33px 15px 0;
    }
    .ui-timeline .tl-item.alt .tl-body .tl-time {
        right: -220px;
        left: auto;
        text-align: left;
    }
    .ui-timeline .tl-item.alt .tl-body .tl-icon {
        right: -53px;
        left: auto;
    }
    .ui-timeline .tl-item.alt .tl-body .tl-content:after {
        right: -16px;
        left: auto;
        border-width: 8px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #fff;
        border-image: none;
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
    }
}
.ui-timeline .tl-item .tl-body {
    display: table-cell;
    width: 50%;
    vertical-align: top;
}
.ui-timeline .tl-item .tl-body .tl-entry {
    position: relative;
    margin: 0 0 15px 38px;
}
.ui-timeline .tl-item .tl-body .tl-time {
    line-height: 35px;
    position: absolute;
    z-index: 1;
    top: 5px;
    right: 15px;
    left: auto;
    width: 150px;
    text-align: right;
    color: #999;
}
@media (min-width: 768px) {
    .ui-timeline .tl-item .tl-body .tl-time {
        right: auto;
        left: -220px;
        color: #767676;
    }
}
.ui-timeline .tl-item .tl-body .tl-icon {
    position: absolute;
    top: 5px;
    left: -53px;
}
.ui-timeline .tl-item .tl-body .tl-content {
    position: relative;
    padding: 15px;
    border-radius: 4px;
    background-color: #fff;
}
.ui-timeline .tl-item .tl-body .tl-content:after {
    line-height: 0;
    position: absolute;
    top: 15px;
    left: -16px;
    content: "";
    border-width: 8px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0) #fff rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    border-image: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
}

.square-icon {
    line-height: 20px;
    position: absolute;
    width: 25px;
    height: 25px;
    text-align: center;
    color: #fff;
    border: 3px solid #c4dada;
    border-radius: 50%;
    background: none repeat scroll 0 0 #6a8db3;
    box-shadow: 0 0 0 6px #fafafb;
}
.square-icon.sm {
    font-size: 16px;
    line-height: 30px;
    width: 35px;
    height: 35px;
}



/* ===[ UCP TABS NAVIGATION ]=== */

/* UCP legend frame - The <legend> tag defines a caption for the <fieldset> element */
.framed-ucp {
    margin-top: -5px;
    padding: 15px;
    border: 2px solid #ccc;
    border-radius: 4px 4px 4px 4px;
    background: none repeat scroll 0 0 transparent;
}

#cprofile .bootstrap-select {
    margin-bottom: 10px;
}

legend {
    font-family: 'Asap','Arial','Helvetica',sans-serif;
    font-size: 16px;
    font-weight: bold;
    display: block;
    width: auto;
    margin: 0;
    padding: 0 10px;
    text-transform: uppercase;
    color: #b7b7b7;
    border: medium none;
}
/* UCP legend frame - The <legend> tag defines a caption for the <fieldset> element */

/* ===[ TABLES STYLE AND FONT ICONS ]=== */
.table-bordered {
    border-color: #dbdbdb;
}

.table-primary {
    border-color: -moz-use-text-color #dbdbdb #dbdbdb;
    border-top: medium none;
}

.table-primary tbody td {
    color: #94a0a0;
    border-width: 0;
    background: none repeat scroll 0 0 #fafafa;
}

.description,
.subforums,
.forum-time,
.forum-mods {
    font-size: .9em;
}

.subforums > strong,
.forum-mods > strong {
    color: #8c8c8c;
}

.mobile-post {
    vertical-align: middle;
}

.table-primary tbody tr:nth-child(2n+1) td,
.table-primary tbody tr:nth-child(2n+1) th {
    background: none repeat scroll 0 0 #fff;
}

.table > thead > tr:first-child > td,
.table > tbody > tr:first-child > td,
.table > tfoot > tr:first-child > td {
    border-top: 0 none;
}

.table-primary thead th {
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    color: #fff;
    text-rendering: optimizeLegibility;/* Fix for webkit rendering, well at least for the time being */
    -webkit-font-smoothing: antialiased;/* Fix for webkit rendering, well at least for the time being */
}

.table tr.active td,
.table tr.active {
    background: none repeat scroll 0 0 #deecfa !important;
}

.table th.table-icon,
.table td.table-icon {
    width: 20px;
    background-position: 5px center;
}

.table th.table-check,
.table td.table-check {
    width: 80px;
    text-align: center;
}

th i {
    color: #f8f8f8;
}

table .stats-col {
    font-family: 'Asap','Arial','Helvetica',sans-serif;
    font-size: 13px;
    background-color: #e4e9eb !important;
}

.large60 {
    width: 70px;
}

.large80 {
    width: 120px;
}

.large110 {
    width: 110px;
}

.large12 {
    width: 12%;
}

.large20 {
    width: 20%;
}

.large23 {
    width: 23%;
}

.large26 {
    width: 26%;
}

.large28 {
    width: 28%;
}

.row-icon {
    float: left;
    width: 27px;
    height: 27px;
    margin-top: 5px;
    margin-right: 5px;
}

.topic-icon {
    position: absolute;
    display: block;
    width: 16px;
    height: 16px;
    margin-top: -5px;
    margin-right: 0;
    margin-left: 0;
}

/* ===[ FONT ICONS FORUMS ]=== */

.desc-wrapper {
    display: block;
    padding: 4px 20px 5px 54px;
	word-break: break-all;
}

.stats-wrapper {
    line-height: 1.5;
    display: block;
    padding: 5px 6px;
}

.last-wrapper {
    line-height: 1.5;
    display: block;
    padding: 4px 5px;
}

.btn-rss {
    margin-top: 5px;
    margin-right: 5px;
}

.icon-wrapper {
    float: left;
    width: 50px;
    height: 50px;
    margin-right: 8px;
    transition: background .1s ease 0s;
    border-radius: 50%;
    background-color: #e4e9eb;
}

.forum-image {
    display: inline-block;
    float: left;
    width: 48px;
    height: 48px;
    margin-right: 8px;
}

.row-icon-font {
    font-size: 26px;
    line-height: 48px;
    position: relative;
    display: block;
    height: 48px;
    text-align: center;
}

.row-icon-font-mini {
    font-size: 14px;
	display:inline-block;
    position: relative;
    float:left;
    margin: 0;
    padding:0;
    color: #fff;
}

.forum-list-lock,
.forumview-lock {
    margin-top: 31px;
    margin-left: -18px;
    color: #888;
}

.forum-read {
    color: #b8bdcb;
}

.forum-unread {
    color: #8c8c8c;
}

.input-group-addon i {
    color: #999;
}

.icon-moon-default:before {
    content: "\e60c";
}

.icon-moon-default2:before {
    content: "\e687";
}

.icon-moon-link2:before {
    content: "\e611";
}

.icon-moon-podcast2:before {
    content: "\e678";
}

.icon-moon-voice2:before {
    content: "\e62d";
}

.icon-moon-pushpin2:before {
    content: "\e016";
}

.icon-moon-poll:before {
    content: "\e61e";
}

.icon-moon-moved:before {
    content: "\e63a";
}

/* ===[ FONT ICONS FORUMS ENDS ]=== */


/* ===[ FOOTABLE PLUGIN ]=== */
.footable {
    width: 100%;
}
.footable.breakpoint > tbody > tr.footable-detail-show > td {
    border-bottom: none;
}
.footable.breakpoint > tbody > tr.footable-detail-show > td > span.footable-toggle:before {
    content: "\f068";
}
.footable.breakpoint > tbody > tr:hover:not(.footable-row-detail) {
    cursor: pointer;
}
.footable.breakpoint > tbody > tr > td.footable-cell-detail {
    border-top: none;
    background: #eee;
}
.footable.breakpoint > tbody > tr > td > span.footable-toggle {
    font-family: "FontAwesome";
    font-size: 16px;
    font-weight: normal;
    font-style: normal;
    font-variant: normal;
    display: inline-block;
    padding-right: 5px;
    text-transform: none;
    color: #888;
    speak: none;
    -webkit-font-smoothing: antialiased;
}
.footable.breakpoint > tbody > tr > td > span.footable-toggle:before {
    content: "\f067";
}

.footable > thead > tr > th {
    -webkit-user-select:      none;
       -moz-user-select: -moz-none;
        -ms-user-select:      none;
            user-select:      none;
    -webkit-touch-callout: none;
     -khtml-user-select:      none;
}

.footable > tfoot .pagination {
    margin: 0;
}
.footable.no-paging .hide-if-no-paging {
    display: none;
}
.footable-row-detail-inner {
    display: table;
}
.footable-row-detail-row {
    line-height: 1.5em;
    display: table-row;
}
.footable-row-detail-group {
    font-size: 1.2em;
    font-weight: bold;
    line-height: 2em;
    display: block;
}
.footable-row-detail-name {
    font-weight: bold;
    display: table-cell;
    padding-right: .5em;
}
.footable-row-detail-value {
    display: table-cell;
}
.footable-odd {
    background-color: #f7f7f7;
}

.footable-row-detail-value {
    width: 100%;
}

.footable.breakpoint > tbody > tr.footable-row-detail {
    background: none repeat scroll 0 0 #eee;
}

.footable.breakpoint > tbody > tr > td > span.footable-toggle {
    float: right;
    margin-top: 4px;
    padding: 7px 13px;
    border-radius: 4px;
    background: none repeat scroll 0 0 #ecebec;
}
/* ===[ FOOTABLE PLUGIN ENDS ]=== */


/* ===[ BOOTSTRAP NEW COLORS DEFINITIONS AND ELEMENTS ]=== */

.bg-primary,
.list-group-item-primary {
    background-color: #dff3f9;
}
.alert-primary,
.progress-bar,
.panel-primary > .panel-heading {
    color: #fff;
    background-color: #3b8dbd;
}

.bg-success,
a.list-group-item-success,
.list-group-item-success {
    font-weight: 700;
    color: #82b964;
    background-color: #d9ead0;
}

.alert-success,
.progress-bar-success,
.panel-success > .panel-heading,
.label-success {
    color: #fff;
    background-color: #82b964;
}

.list-group-item-info,
a.list-group-item-info,
.bg-info {
    font-weight: 700;
    color: #5bc0de;
    background-color: #dff3f9;
}
.alert-info,
.progress-bar-info,
.label-info,
.panel-info > .panel-heading {
    color: #fff;
    background-color: #5bc0de;
}

.list-group-item-warning,
a.list-group-item-warning,
.bg-warning {
    font-weight: 700;
    color: #fdc153;
    background-color: #fff4e1;
}
.alert-warning,
.progress-bar-warning,
.panel-warning > .panel-heading {
    color: #fff;
    background-color: #f0ad4e;
}

.bg-danger,
a.list-group-item-danger,
.list-group-item-danger {
    font-weight: 700;
    color: #d24d33;
    background-color: #f7e0db;
}
.alert-danger,
.progress-bar-danger,
.panel-danger > .panel-heading {
    color: #fff;
    background-color: #d24d33;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus,
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr.success:hover > th {
    color: #fff;
    background-color: #82b964;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus,
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th {
    color: #fff;
    background-color: #f0ad4e;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus,
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr.info:hover > th {
    color: #fff;
    background-color: #5bc0de;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus,
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th {
    color: #fff;
    background-color: #d24d33;
}

/* Bootstrap list groups */

.list-group-item {
    margin-bottom: -2px;
    border: 2px solid #ddd;
}
/*Remove grey borders*/

.list-group-item-danger {
    border-color: #f7e0db;
}
.list-group-item-info {
    border-color: #dff3f9;
}
.list-group-item-success {
    border-color: #d9ead0;
}
.list-group-item-warning {
    border-color: #fff4e1;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
    border-color: #d24d33;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
    border-color: #5bc0de;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
    border-color: #82b964;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
    border-color: #f0ad4e;
}

/* ===[ BOOTSTRAP TABLES AND PANELS DEFINITIONS ]=== */

.table {
    margin-bottom: 0;
    border-top: 0;
    background: #fff;
}

.table .label {
    font-size: .75em;
    display: inline-block;
    margin: 2px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
    padding: 10px 8px;
    vertical-align: top;
    border-top: 4px solid #e4e9eb;
}
.table > thead > tr > th {
    font-size: inherit;
    font-weight: 700;
    padding: 12px 10px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #fff;
    border: 0;
    border-bottom: 7px solid #ddd;
    background: #85869c;
}

.table > thead > tr > th {
    padding: 4px 10px;
    border-width: 0;
    background: #c7cbd6;
}

.table > tfoot > tr > th {
    font-size: .87em;
    font-weight: 700;
    padding: 7px 10px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #999;
    border: 1px solid #ddd;
    background: #ddd;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
    background-color: #e4e9eb;
}


.panel-inner {
    padding: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.panel-forum > .panel-heading {
    font-weight: 700;
    font-style: normal;
    line-height: 40px;
    height: 40px;
    padding: 0 0 0 10px;
    text-transform: uppercase;
    color: #fff;
    border-color: rgba(0, 0, 0, 0);
    border-radius: 3px 3px 0 0;
    background-color: #26bcb5;
}

.panel-forum > .panel-heading a {
    color: #fff;
}

.panel-forum > .panel-heading a:hover {
    color: #e4e4e4;
}

.panel-forum {
    margin-bottom: 30px;
    border: medium none #85869c;
}

.page-section {
    padding: 45px 0;
    background-color: #e8e8e8;
}

.panel-post {
    position: relative;
    padding: 10px;
    border-radius: 4px;
    background-color: #fff;
}

.panel-post > i {
    font-size: 50px;
    line-height: 80px;
    position: relative;
    top: -50px;
    width: 100px;
    height: 100px;
    margin-right: auto;
    margin-left: auto;
    transition: all .3s ease-in-out 0s;
    color: #f4f4f4;
    border: 10px solid #f4f4f4;
    border-radius: 50%;
}

.panel-post > img {
    position: relative;
    top: -50px;
    width: 80px;
    height: auto;
    margin-bottom: -45px;
    transition: all .3s ease-in-out 0s;
    color: #f4f4f4;
    border: 6px solid #f4f4f4;
    border-radius: 50%;
}

.blog-meta {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    font-weight: 700;
    position: absolute;
    z-index: 30;
    top: 1.94em;
    right: auto;
    bottom: auto;
    left: -1.40em;
    float: left;
    padding: .55em .9em;
    text-align: center;
    color: #fff;
    border-radius: 4px;
    background: none repeat scroll 0 0 #ee836e;
    text-shadow: 0 1px 0 rgba(0, 0, 0, .1);
}

.blog-meta .day {
    font-size: 1.15em;
    display: block;
    margin-bottom: -7px;
}

.blog-meta .month {
    font-size: .75em;
}

.panel-post .title {
    margin: 16px 0 20px;
    padding-left: 20px;
}

.content-post {
    margin-bottom: 20px;
}

.panel-post .entry-meta {
    line-height: 8px;
}

.btn-lazy {
    margin-top: 10px;
}

#rtblock {
    padding:0;
}

#rtblock .row {
    margin:0;
}

.rtrow {
    position: absolute;
    top: -9999px;
    opacity: 0;
}
.rtdisprow {
    -webkit-transition: all .8s ease-in 0s;
       -moz-transition: all .8s ease-in 0s;
            transition: all .8s ease-in 0s;
    opacity: 1;
}
.rtrow.rtdisprow {
    position: static;
}
.panel-post h6 > a {
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #666;
}

@media (max-width: 768px) {
    .panel-post > img {
        display: none;
    }
}

@media (max-width: 468px) {
    .panel-post > img {
        display: none;
    }
}

.panel-post:hover > i {
    animation: 1.5s linear 0s normal none infinite spinAround;
    border: 10px solid #fff;
}

.panel-post h6,
.panel-post h6 > a {
    font-size: 12px;
    font-weight: 700;
    min-height: 30px;
    text-transform: uppercase;
    color: #666;
}

.panel-post p {
    color: #a8a8a8;
}

.panel-post .panel-bottom {
    margin-right: -11px;
    margin-bottom: -11px;
    margin-left: -11px;
    padding: 6px 0;
    border-radius: 0 0 4px 4px;
    background-color: #d6d9e0;
}

.content-post-date {
    margin-top: -10px;
}


.poll-na {
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    display: inline;
    padding: .2em .6em .3em;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
    color: #888;
    border-radius: .25em;
}

.panel-poll {
    border: 2px solid #dbdbdb;
}

.panel-poll label {
    margin-left: 4px;
}

.panel-stats .output {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    display: block;
}

.panel-stats strong,
.panel-stats .panel-footer {
    color: #878787;
}

.panel-login {
    padding-top: 40px;
    padding-bottom: 40px;
    color: #a1a9b1;
    background: none repeat scroll 0 0 #f1f2f2;
}

.form-icon {
    position: relative;
    margin: 0;
}

.panel-login .form-group + .form-group {
    margin: 10px 0 16px;
}

.login-form-icon {
    font-size: 16px;
    line-height: 27px;
    position: absolute;
    z-index: 1002;
    top: 9px;
    bottom: 9px;
    left: 0;
    display: block;
    width: 40px;
    padding: 1px 15px;
    transition: all .3s ease 0s;
    text-align: center;
    color: #d6d6d6;
    border-right: 1px solid #d6d6d6;
}

.panel-w-form  .form-group input[type='password'],
.panel-w-form  .form-group input[type='text'] {
    font-size: 15px;
    padding-left: 50px;
}

.panel-w-form  .form-group input[type='password']:focus + .login-form-icon,
.panel-w-form  .form-group input[type='text']:focus + .login-form-icon {
    color: #888;
}

.panel-w-form .input-lg {
    height: 46px;
}


.panel-login .signin-text {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    font-size: 15px;
    font-style: normal;
    position: relative;
    display: block;
    margin-bottom: 25px;
    text-align: center;
    color: #999;
}

.panel-login .signin-text span {
    position: relative;
    display: inline-block;
    padding: 0 20px;
    text-transform: uppercase;
    background: none repeat scroll 0 0 #fff;
}

.panel-login .signin-text:before {
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    display: block;
    height: 1px;
    content: "";
    background: none repeat scroll 0 0 #e4e4e4;
}

.panel-login .signin-text span {
    background: none repeat scroll 0 0 #f1f2f2;
}

.login-full .signin-text span {
    background: none repeat scroll 0 0 #ecf0f1;
}

.login-full {
    background: none;
}

/* ===[ WELLS AND WIDGETS ]=== */

.well {
    border: 3px solid #d8e3e6;
    border-radius: 3px;
    background-color: #fff;
    box-shadow: none;
}

.well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, .15);
}

.language-selection {
    float: right;
    margin-top: 10px;
    padding: 10px;
}

.pos-abs {
    position: absolute;
}

.l-25 {
    left: 25px;
}

.r-25 {
    right: 25px;
}


/* ===[ BOOTSTRAP FORMS ]=== */

.form-control {
    font-size: 13px;
    font-weight: 600;
    display: block;
    width: 100%;
    height: 36px;
    padding: 8px 10px;
    -webkit-transition: border-color .3s;
       -moz-transition: border-color .3s;
        -ms-transition: border-color .3s;
    color: #555;
    border: 2px solid #d6d9e0;
    border-radius: 3px;
    -webkit-box-shadow: none;
            box-shadow: none;
}
.form-control:focus {
    border-color: #969fa1;
    -webkit-box-shadow: none;
            box-shadow: none;
}
.form-control::-moz-placeholder {
    opacity: 1;
    color: #999;
}
.form-control:-ms-input-placeholder {
    color: #999;
}
.form-control::-webkit-input-placeholder {
    color: #999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
    cursor: not-allowed;
    opacity: 1;
    background-color: #eee;
}
.input-group-addon {
    border: 2px solid #d6d9e0;
    border-radius: 3px;
    background-color: #eee;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
    padding: 4px 10px;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
    padding: 9px 16px;
}

/* ===[ HEADER STYLE ]=== */

.masthead:before {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
    -webkit-transform-origin: 50% 50% 0;
       -moz-transform-origin: 50% 50% 0;
        -ms-transform-origin: 50% 50% 0;
         -o-transform-origin: 50% 50% 0;
            transform-origin: 50% 50% 0;
    /*animation-name*/
    -webkit-animation-name: masthead;
       -moz-animation-name: masthead;
        -ms-animation-name: masthead;
         -o-animation-name: masthead;
            animation-name: masthead;
    /*animation-duration*/
    -webkit-animation-duration: 80s;
       -moz-animation-duration: 80s;
        -ms-animation-duration: 80s;
         -o-animation-duration: 80s;
            animation-duration: 80s;
    /*animation-timing-function*/
    -webkit-animation-timing-function: linear;
       -moz-animation-timing-function: linear;
        -ms-animation-timing-function: linear;
         -o-animation-timing-function: linear;
            animation-timing-function: linear;
    /*animation-iteration-count*/
    -webkit-animation-iteration-count: infinite;
       -moz-animation-iteration-count: infinite;
        -ms-animation-iteration-count: infinite;
         -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    background: url("./styles/FLATBOOTS/theme/images/tile-bg-head.png") repeat fixed 0 0 #26bcb5;
    animation-fill-mode: both;
}

/* Firefox */
@-moz-keyframes masthead {
    0% {
        background-position: 0 0;
    }
    50% {
        background-position: -50% -100%;
    }
    100% {
        background-position: -100% -200%;
    }
}

/* Safari and Chrome */
@-webkit-keyframes masthead {
    0% {
        background-position: 0 0;
    }
    50% {
        background-position: -50% -100%;
    }
    100% {
        background-position: -100% -200%;
    }
}


@keyframes masthead {
    0% {
        background-position: 0 0;
    }
    50% {
        background-position: -50% -100%;
    }
    100% {
        background-position: -100% -200%;
    }
}

.masthead .wrapper-head {
    position: relative;
    z-index: 2;
}

.flat-nav {
    margin-bottom: 0;
    border-bottom: 0 none;
    background-color: #fff;
}

.flat-header {
    font-size: 20px;
    padding-top: 40px;
    padding-bottom: 40px;
    text-align: left;
}

.flat-header-fixed-top {
    padding-top: 120px;
}

.flat-masthead,
.flat-header {
    position: relative;
    margin-bottom: 20px;
    color: #fafafa;
    background-color: #6f5499;
    background-image: linear-gradient(to bottom, #563d7c 0px, #6f5499 100%);
    background-repeat: repeat-x;
    text-shadow: 0 1px 0 rgba(0, 0, 0, .1);
}

.flat-header h1 {
    font-size: 44px;
    line-height: 1;
}
.flat-header h1 {
    margin-top: 0;
    color: #fff;
}

.navbar {
    min-height: 80px;
    padding: 14px 0 0;
}

/* ===[ BREADCRUMB STYLE ]=== */

.breadcrumb-line {
    position: relative;
    margin: 0 0 35px;
    border-radius: 4px;
    background-color: #e1e5eb;
}

.breadcrumb {
    float: left;
    margin: 0;
    padding: 0;
    border-radius: 0;
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}

.breadcrumb-buttons {
    font-size: 0;
    position: relative;
    display: block;
    float: right;
    margin: 0;
    padding-left: 15px;
    list-style: none outside none;
    border-left: 1px solid #eee;
    border-radius: 0 4px 4px 0;
    background: none repeat scroll 0 0 #c8d2d8;
}

.breadcrumb-buttons > li {
    font-size: 12px;
    position: relative;
    display: block;
}

.breadcrumb .icon,
.breadcrumb-buttons .icon {
    font-size: 18px;
    vertical-align: text-bottom;
}

.breadcrumb-buttons li a {
    line-height: 41px;
    position: relative;
    margin-right: 15px;
    transition: none 0s ease 0s;
    text-decoration: none;
}

.breadcrumb li a {
    line-height: 41px;
    position: relative;
    display: inline-block;
    height: 40px;
    -moz-transition: none 0s ease 0s;
    -o-transition: none 0s ease 0s;
    -webkit-transition: none 0s ease 0s;
    transition: none 0s ease 0s;
    text-align: center;
    text-decoration: none
}

.breadcrumb li:first-child a {
    padding: 0 15px 0;
    -moz-border-radius: 4px 0 0 4px;
    -webkit-border-radius: 4px 0 0 4px;
    border-radius: 4px 0 0 4px;
    background: #c8d2d8
}

.breadcrumb .icon {
    font-size: 18px;
}

.breadcrumb > li + li:before {
    font-family: "FontAwesome";
    content: "\f054";
}


.breadcrumb li:last-child a {
    font-weight: 700;
    color: #888;
}

.time {
    line-height: 41px;
    height: 40px;
    margin-right: 5px;
}


/* ===[ FOOTER LAYOUT ]=== */

.section-pre-footer {
    position: relative;
    padding: 40px 0;
    color: #fff;
    background: none repeat scroll 0 0 #283e56;
}

.section-pre-footer .center {
    position: relative;
    z-index: 10;
}
.center {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-pre-footer .thumb {
    float: left;
    width: 57px;
}

.section-pre-footer .twitter .thumb {
    margin-left: -15px;
}

.section-pre-footer .thumb i {
    font-size: 44px;
    color: #ee836e;
}

.section-pre-footer .text {
    margin-left: 60px;
}

.section-pre-footer h3 {
    font-size: 22px !important;
    margin-bottom: 20px;
    color: #fff;
    border-bottom: 0 none !important;
}

.section-pre-footer p {
    margin-bottom: 20px;
    color: #869aaf;
}

.section-pre-footer a {
    color: #fff;
}


.section-pre-footer .section-bg {
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background: none repeat scroll 0 0 #2f4761;
}

.btn-xl {
    font-size: 20px;
    padding: 16px 56px !important;
}

.call-to-action {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    font-size: 30px;
    font-weight: bold;
    margin: 8px 0 0;
    text-transform: uppercase;
    color: #fff;
    text-shadow: 0 1px 0 rgba(0, 0, 0, .1);
}

.mastbottom {
    padding: 40px 0;
    color: #fff;
    background: url("./styles/FLATBOOTS/theme/images/mcpattern.png") repeat fixed 100% 100% #ee836e;
}

#footer-section {
    position: relative;
    background: none repeat scroll 0 0 #00a2d9;
}

.footer-foreground {
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 10px 10px 0;
    color: #fff;
    border-radius: 4px;
    background: none repeat scroll 0 0 rgba(0, 0, 0, .25);
}

.footer-foreground a {
    color: #fff;
}

.bottomLinks {
    padding: 20px 0;
}

.copyrights {
    color: #869aaf;
}

.copyrights i {
    font-size: 12px;
}

.copyrights a {
    padding-bottom: 1px;
    text-decoration: none;
    border-bottom: 1px solid rgba(0, 0, 0, .1);
}

.copyrights a:hover {
    border-bottom: 1px solid #a5a5a5;
}

.footer-nav li {
    padding: 5px 5px 0;
}

.footer-nav a {
    color: #fff;
}

.text-overflow {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.debug-output {
    display: block;
    text-align: right;
    color: #869aaf;
}

.interact a {
    margin-right: 10px;
}

.twitter-time {
    color: #869aaf;
}

.twitter h3 a small {
    text-transform: none;
    color: #869aaf;
}


/* ===[ SOCIAL ICONS ]=== */
.socialbar {
    margin: 10px 0;
}

.social-network {
    text-align: right;
}

.socialbar .social-icons li {
    line-height: 1em;
    display: inline-block;
    height: 38px;
    margin: 0 3px;
}

.social-network a {
    font-size: 22px;
    display: inline-block;
    width: 30px;
    height: 30px;
    margin: 0 3px;
    transition: all .2s linear 0s;
    text-align: center;
    color: #fff !important;
    border-radius: 2px;
}

.social-network a:hover {
    transition: all .1s linear 0s;
    color: #2d2d2d!important;
    border-bottom: none;
    background-color: #fff;
}

.google-plus-color {
    background-color: #d34836;
}

.pinterest-color {
    background-color: #cb2027;
}

.facebook-color {
    background-color: #3b5998;
}

.behance-color {
    background-color: #1769ff;
}

.dropbox-color {
    background-color: #007ee5;
}

.envato-color {
    background-color: #82b540;
}

.twitter-color {
    background-color: #00aced;
}

.rss-color {
    background-color: #e48645;
}

.rss-color-forum {
    color: #e48645;
}

.github-color {
    background-color: #333;
}



@media (max-width: 768px) {
    .social-network,
    .debug-output {
        text-align: center;
    }

    .sm-direction {
        text-align: center;
    }

    .section-pre-footer .section-bg {
        background: none repeat scroll 0 center rgba(0, 0, 0, 0);
    }

    .section-pre-footer .twitter {
        margin-top: 25px;
    }

    .section-pre-footer .twitter .thumb {
        margin-left: 0;
    }
}


@media (max-width: 468px) {
    .social-network,
    .debug-output {
        text-align: center;
    }

    .sm-direction {
        text-align: center;
    }

    .section-pre-footer .section-bg {
        background: none repeat scroll 0 center rgba(0, 0, 0, 0);
    }

    .section-pre-footer .twitter {
        margin-top: 25px;
    }

    .section-pre-footer .twitter .thumb {
        margin-left: 0;
    }
}


/* Forms */
.form-actions {
    border: 2px solid #d8e3e6;
    border-radius: 3px;
    background: #f5f5f5;
}

.form-actions {
    padding: 15px;
    text-align: center;
}

.control-group {
    margin-top: 10px;
    padding-bottom: 10px;
    border-bottom: 1px dashed #c9c9c9;
}

.control-label {
    font-weight: bold;
    display: block;
}


/*** 
.form-control {
    margin-bottom:10px;
}
***/


/*** icons on input fields***/

.input-icon i {
    font-size: 16px;
    line-height: 18px;
    position: absolute;
    z-index: 999;
    display: block;
    width: 16px;
    height: 16px;
    margin: 10px 2px 4px 10px;
    text-align: center;
    color: #ccc;
}

.input-group-sm i {
    font-size: 16px;
    line-height: 15px;
    width: 16px;
    height: 16px;
    margin: 7px 2px 4px 10px;
}

.input-icon.left input {
    padding-left: 33px ;
}

.input-icon input {
    padding-right: 25px ;
}

/* ===[ USER PROFILE AND GALLERY ]=== */

/*-- Responsive avatars fix for Bootsrtap3x --*/
.avatar-frame img {
    width: auto\9;
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    -ms-interpolation-mode: bicubic;
    border: 0;
}


#gallery input[type='radio']:checked + label {
    background-color: #eee;
}

/* ===[ SIGNATURE ]=== */

.separator:before {
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    display: block;
    height: 1px;
    margin-top: 15px;
    content: "";
    background: none repeat scroll 0 0 #cdcdcd;
}

.separator i {
    position: relative;
    top: 50%;
    display: inline-block;
    margin-top: 3px;
    margin-right: auto;
    margin-left: auto;
    padding: 0 10px;
    color: #cdcdcd;
    background: none repeat scroll 0 0 #fff;
}

.separator {
    position: relative;
    display: block;
    height: 48px;
    margin: 0;
}

.signature-pm {
    line-height: 140%;
    overflow: hidden;
    width: 100%;
    padding-top: .2em;
}

/* ===[  MISC - BUTTONS - ALERTS ]=== */

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
    background-color: #31759d;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
    background-color: #d3d4d6;
}
.btn-success,
.label-success,
.progress-bar-success,
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
    background-color: #82b964;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
    color: #fff;
    background-color: #6ca94b;
}
.btn-warning,
.label-warning,
.progress-bar-warning,
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
    background-color: #f0ad4e;
}
.btn-info,
.label-info,
.progress-bar-info,
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
    background-color: #5bc0de;
}
.btn-danger,
.label-danger,
.progress-bar-danger,
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
    background-color: #d24d33;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
    background-color: #bc4329;
}

.btn {
    font-weight: 700;
    padding: 8px 12px;
    transition: background .2s;
    color: #7f7f7f;
    border: 0 none;
}

.btn-lg,
.btn-group-lg > .btn {
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
    border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
    font-size: 12px;
    line-height: 1.5;
    padding: 5px 7px;
    border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
    font-size: 12px;
    line-height: 1.5;
    padding: 1px 5px;
    border-radius: 3px;
}

.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
    margin-left: 0;
}

.input-group-btn > .btn + .btn {
    margin-left: 0;
}
.btn-group-vertical .btn {
    margin-bottom: 0;
}
.btn-toolbar {
    margin-left: -5px;
    border: 0;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
    float: left;
    border: 0;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
    margin-left: 5px;
    border: 0;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
    margin-right: 0;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
    margin-left: 0;
}
.btn-default {
    border: 0;
    border-color: #d6d9e0;
    background-color: #d6d9e0;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
    color: #fff;
    border-color: #c0c2c7;
    background-color: #a7aab1;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
    outline: none;
}


/*** remove dotted line feedback. this should not be used for accessibility reasons! - use your own style instead ***/
.btn-link:hover,
.btn-link:focus {
    text-decoration: none;
    color: #8c8c8c;
}

.bootstrap-select .btn-focus {
    outline: medium none;
}

/*** remove dotted line feedback. this should not be used for accessibility reasons! - use your own style instead ***/
.bootstrap-select.btn-group,
.bootstrap-select.btn-group[class*='span'] {
    margin-bottom: 0;
}

.bootstrap-select.btn-group:not(.input-group-btn),
.bootstrap-select.btn-group[class*='span'] {
    margin-bottom: 0;
}

.btn-success,
.btn-danger,
.btn-warning,
.btn-info,
.btn-primary {
    color: #fff !important;
}

/*** adjust the size in post ***/
.btn-post,
.btn-group-post > .btn {
    font-size: 12px;
    line-height: 1.5;
    padding: 3px 6px;
    border-radius: 3px;
}

/*** fix the bootstrap gap in btn group ***/
.btn-group-fix {
    margin-left: -2px !important;
}

/*** fix the bootstrap space in btn group post ***/
.btn-post-fix {
    margin-left: 5px;
}

/*** fix the width in post dropdown menu ***/
.dropdown-menu-post > li > a {
    padding: 3px 5px;
}

/*** fix the width in post dropdown menu ***/
.alert .close {
    line-height: 20px;
    position: relative;
    top: -2px;
    right: -1px;
}

.close {
    font-size: 20px;
    font-weight: bold;
    line-height: 20px;
    float: right;
    opacity: .2;
    color: #000;
    text-shadow: 0 1px 0 #fff;
}

.close-file-upload {
    position: relative;
    display: inline-block;
    margin-top: 1px;
    margin-left: 3px;
    vertical-align: middle;
}

.awe-remove-circle:before {
    content: "\f05c";
}

[class^="awe-"]:before,
[class*="awe-"]:before {
    display: inline-block;
    text-decoration: inherit;
}

[class^="awe-"],
[class*="awe-"] {
    font-family: FontAwesome;
    font-weight: normal;
    font-style: normal;
    line-height: normal;
    display: inline;
    width: auto;
    height: auto;
    margin-top: 0;
    vertical-align: baseline;
    text-decoration: inherit;
    background-image: none;
    background-repeat: repeat;
    background-position: 0 0;
}

.label-info,
.badge-info {
    background-color: #169fe6;
}

.alert {
    margin-bottom: 21px;
    padding: 15px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert h4 {
    margin-top: 0;
    color: inherit;
}
.alert .alert-link {
    font-weight: bold;
}
.alert > p,
.alert > ul {
    margin-bottom: 0;
}
.alert > p + p {
    margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
    padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
}
.alert-success {
    color: #fff;
    border-color: #18bc9c;
    background-color: #18bc9c;
}
.alert-success hr {
    border-top-color: #15a589;
}
.alert-success .alert-link {
    color: #e6e6e6;
}
.alert-info {
    color: #fff;
    border-color: #3498db;
    background-color: #3498db;
}
.alert-info hr {
    border-top-color: #258cd1;
}
.alert-info .alert-link {
    color: #e6e6e6;
}
.alert-warning {
    color: #fff;
    border-color: #f39c12;
    background-color: #f39c12;
}
.alert-warning hr {
    border-top-color: #e08e0b;
}
.alert-warning .alert-link {
    color: #e6e6e6;
}
.alert-danger {
    color: #fff;
    border-color: #e74c3c;
    background-color: #e74c3c;
}
.alert-danger hr {
    border-top-color: #e43725;
}
.alert-danger .alert-link {
    color: #e6e6e6;
}

.alert > a {
    color: #fff;
}

.friends-avatar img {
    float: left;
    width: 40px !important;
    height: auto;
    margin-right: 5px;
    border: 3px solid #dfe3e4;
    border-radius: 50%;
}

.media-list li {
    margin-top: 5px;
}

.section-ucp .media,
.section-ucp .media .media {
    margin-top: 0;
}

.media-pm {
    margin-bottom: 10px;
}

.media-pm .avatar-over {
    margin-left: 0;
}

/* Dropdowns definitions */
.arrow-up:before {
    position: absolute;
    z-index: 1;
    top: -10px;
    right: 12px;
    display: block;
    width: 0;
    height: 0;
    content: "";
    border-width: 0 10px 10px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #f0f0f1;
}

.user-login-drop > li:first-child {
    font-size: 13px;
    font-weight: 400;
    margin: -5px -5px 0;
    padding: 5px;
    color: #fff;
    background-color: #f0f0f1;
}

.navbar-nav-fancy > li:before {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 0;
    content: "";
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    -moz-transform: translatex(0%) translatey(-50%);
    -ms-transform: translatex(0%) translatey(-50%);
    -o-transform: translatex(0%) translatey(-50%);
    -webkit-transform: translatex(0%) translatey(-50%);
    transform: translatex(0%) translatey(-50%);
    color: #2c3e50;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    background: none repeat scroll 0 0 #656b7b
}

.navbar-nav-fancy > li:hover:before {
    height: 80%;
}

.navbar-nav.navbar-right:last-child {
    margin-top: -2px;
    margin-right: 0;
}

.btn-search {
    margin-top: 4px;
}

.btn-search > i {
    font-size: 22px;
    color: #939393;
}

.user-login-drop > li h1 a {
    color: #fff;
}

.user-login-drop > li h1 a:hover {
    color: #fafafa;
}

.dropdown-avatar img {
    width: 30px !important;
    height: auto;
    border: 3px solid #edeff0;
    border-radius: 50%;
}

.navbar-avatar img {
    width: 100px !important;
    height: auto;
    border: 3px solid #edeff0;
    border-radius: 50%;
}

.user-login .navbar-content {
    width: 320px;
    padding: 15px 10px 0;
}
.user-login .navbar-content:before,
.user-login .navbar-content:after {
    line-height: 0;
    display: table;
    content: "";
}
.user-login .navbar-content a.change-avatar {
    padding: 10px 0;
}
.user-login .navbar-content a.change-avatar:hover {
    color: #df4782;
}

.user-login .navbar-footer {
    margin: -5px -5px -5px;
    background-color: #f0f0f1;
}
.user-login .navbar-footer-content {
    padding: 15px;
}

.avatar-user-drop {
    position: relative;
    display: inline-block;
    border: 5px solid #edeff0;
}

.nav-content > img {
    border: 5px solid #edeff0;
    border-radius: 50%;
}

.navbar-nav .dropdown-menu > li > a i {
    font-size: 16px;
    margin-right: 5px;
    padding: 0 5px 0 0;
    color: #959c9d;
}

.dropdown-menu > li > a i {
    margin-right: 5px;
}

.dropdown-menu {
    z-index: 9999;
    margin: 0;
    padding: 5px;
    border: 4px solid #e8ecf3;
    border-radius: 2px;
    box-shadow: none;
}

.dropdown-menu > li > a {
    font-size: 13px;
    line-height: 22px;
    margin: 0;
    color: #959c9d;
    border-radius: 2px;
}
.dropdown-menu > li > a:hover {
    color: #889091;
    background: none repeat scroll 0 0 #e8ecf3;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 2px 0;
    background-color: #d7deea;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
    color: #444;
    background-color: #e8ecf3;
}
.main-navigation .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    border-width: 1px 1px 1px 0;
    border-style: solid solid solid none;
    border-color: #d1d1d1 #d1d1d1 #d1d1d1 -moz-use-text-color;
    border-image: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
}
.main-navigation .dropdown-menu a {
    font-size: 13px;
    width: 100%;
    margin: 0 !important;
    padding: 6px 15px !important;
}

.navbar .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
}
.navbar-nav {
    margin: 0;
}

.navbar-brand {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    font-size: 26px;
    font-weight: 700;
}

.navbar-nav.nav-tabs {
    border-radius: 0;
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.navbar-nav.nav-tabs > li > a {
    margin: 0;
    padding: 16px 15px;
    border-radius: 0;
}
.navbar-inverse {
    border-color: #535a6c;
    background-color: #535a6c;
}
.navbar-inverse .navbar-brand,
.navbar-inverse .navbar-nav > li > a {
    color: #fff;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus,
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
    color: #fff;
    background-color: #4c5363;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
    border-color: #535a6c;
}



@media (max-width: 767px) {
    .navbar-collapse {
        padding: 0;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
        color: #fff;
    }
}
@media (max-width: 767px) {
    .navbar-form {
        padding-top: 0;
        padding-bottom: 0;
    }
}

.carousel-control {
    color: #444;
    text-shadow: none;
}
.carousel-control.left,
.carousel-control.right {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
    font-family: "FontAwesome";
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
    left: 50%;
}
.carousel-control span,
.carousel-control .fa {
    position: absolute;
    z-index: 5;
    top: 50%;
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
}
.carousel-indicators {
    bottom: 5px;
}
.carousel-indicators li {
    background-color: #dde1e7;
}
.carousel-indicators .active {
    background-color: #2dcb73;
}
#quote-carousel {
    position: relative;
    width: 100%;
    padding: 5px 60px;
}
#quote-carousel .carousel-control:hover {
    color: #444;
}

/* --------------------------------------------------------------

if this is active the forum panel has a corner edge color

.panel {
    border-radius: 2px;
    box-shadow: none;
}
-------------------------------------------------------------- */

.panel > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
.panel > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
}
.panel-heading {
    border-color: #e8ecf3;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.panel-heading.gray {
    background: none repeat scroll 0 0 #fcfcfc;
}
.panel-heading.gradient {
    background: linear-gradient(to bottom, #fcfcfc 0px, #f5f5f5 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.panel-footer {
    border-top: 1px solid #e8ecf3;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
    background-color: #fcfcfc;
}
.panel-group .panel {
    border-radius: 2px;
}
.panel-default {
    border-color: #dde1e7;
}
.panel-default > .panel-heading {
    color: #444;
    border-color: #dde1e7;
    background-color: #dde1e7;
}
.panel-default > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #dde1e7;
}

.panel-default > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #dde1e7;
}
.panel-primary {
    border-color: #17c3e5;
}
.panel-primary > .panel-heading {
    color: #fff;
    border-color: #17c3e5;
    background-color: #17c3e5;
}
.panel-primary > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #17c3e5;
}
.panel-primary > .panel-heading a {
    color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #17c3e5;
}
.panel-success {
    border-color: #2dcb73;
}
.panel-success > .panel-heading {
    color: #fff;
    border-color: #2dcb73;
    background-color: #2dcb73;
}
.panel-success > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #2dcb73;
}
.panel-success > .panel-heading a {
    color: #fff;
}
.panel-success > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #2dcb73;
}
.panel-warning {
    border-color: #ffb244;
}
.panel-warning > .panel-heading {
    color: #fff;
    border-color: #ffb244;
    background-color: #ffb244;
}
.panel-warning > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #ffb244;
}
.panel-warning > .panel-heading a {
    color: #fff;
}
.panel-warning > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #ffb244;
}
.panel-danger {
    border-color: #ff604f;
}
.panel-danger > .panel-heading {
    color: #fff;
    border-color: #ff604f;
    background-color: #ff604f;
}
.panel-danger > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #ff604f;
}
.panel-danger > .panel-heading a {
    color: #fff;
}
.panel-danger > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #ff604f;
}
.panel-info {
    border-color: #1ec3c8;
}
.panel-info > .panel-heading {
    color: #fff;
    border-color: #1ec3c8;
    background-color: #1ec3c8;
}
.panel-info > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #1ec3c8;
}
.panel-info > .panel-heading a {
    color: #fff;
}
.panel-info > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #1ec3c8;
}

.avatar {
    position: relative;
    display: inline-block;
    width: 100%;
}
.avatar-lg {
    width: 128px;
}
.avatar-md {
    width: 64px;
}
.avatar-sm {
    width: 32px;
}
.avatar-xs {
    width: 16px;
}
.bordered-avatar {
    border: 6px solid #efefef;
}


.nav-tabs {
    border-bottom: 0 none;
    border-radius: 2px 2px 0 0;
    background: none repeat scroll 0 0 #dde1e7;
}
.nav-tabs > li {
    margin: 0;
}
.nav-tabs > li > a {
    border: 0 none;
    border-radius: 2px 2px 0 0;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
    border: 0 none;
}
.nav-tabs > li > a:hover,
.nav-tabs > li > a:hover,
.nav-tabs > li > a:focus {
    border: 0 none;
    background-color: #f9f9f9;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
    border-color: rgba(0, 0, 0, 0);
    background-color: rgba(0, 0, 0, 0);
}


/* ===[ PAGINATION ]=== */

.text-primary,
.btn-link,
.btn-primary .badge,
.pagination > li > a,
.pagination > li > span {
    color: #c0c2c7;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
    border-color: #3b8dbd;
}

/*Pagination*/
.pagination > li > a,
.pagination > li > span {
    font-weight: 600;
    margin-left: -2px;
    border: 2px solid #ddd;
}

.pagination span.page-sep {
    display: none;
}

li.pagination {
    margin-top: 0;
}

.pagination span a:hover {
    text-decoration: none;
    color: #fff;
    border-color: #d2d2d2;
    background-color: #d2d2d2;
}

/* Pagination in viewforum for multipage topics */
strong.pagination {
    display: inline-block;
    float: right;
    width: auto;
    height: 0;
    margin-top: -10px;
}

.pagination span a,
li.pagination span a {
    background-color: #fff;
}

.pagination span a:hover,
li.pagination span a:hover {
    background-color: #d2d2d2;
}

/*  TOPIC-FORUM PAGINATION  */

td strong.pagination > span {
    display: inline-block;
    overflow: hidden;
    margin-top: 4px;
    border: 1px solid rgba(0, 0, 0, .1);
    border-radius: 3px 3px 3px 3px;
}

td strong.pagination > span a,
td strong.pagination > span .page-dots {
    font-size: 11px;
    font-weight: normal;
    line-height: 18px;
    display: block;
    float: left;
    padding: 0 6px;
    border-left: 1px solid rgba(0, 0, 0, .1);
}

td strong.pagination > span a:first-child,
td strong.pagination > span .page-dots:first-child {
    border-left: 0 none;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
    color: #999;
    border-color: #ddd;
    background-color: #f5f5f5;
}

.pagination {
    margin-top: 0;
}


/* ===[ PM STUFF ]=== */

/* PM Message history */
.current {
    color: #000;
}

/* PM marking colours */
.pmlist li.pm_message_reported_colour,
.pm_message_reported_colour {
    color: #bc2a4d;
}

.pmlist li.pm_marked_colour,
.pm_marked_colour {
    color: #f60;
}

.pmlist li.pm_replied_colour,
.pm_replied_colour {
    color: #a9b8c2;
}

.pmlist li.pm_friend_colour,
.pm_friend_colour {
    color: #5d8fbd;
}

.pmlist li.pm_foe_colour,
.pm_foe_colour {
    color: #000;
}

/* Avatar gallery */
#gallery label {
    position: relative;
    float: left;
    width: auto;
    margin: 10px;
    padding: 5px;
    text-align: center;
    border: 1px solid #ccc;
    background: #fff;
}

#gallery label:hover {
    background-color: #eee;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.2);
       -moz-box-shadow: 0 1px 1px rgba(0,0,0,.2);
            box-shadow: 0 1px 1px rgba(0,0,0,.2);
}

/* Avatar gallery */
#gallery label {
    border-color: #ccc;
    background-color: #fff;
}

/* PM NOTIFIER */
.notifier-box .close {
    line-height: 20px;
    position: relative;
    top: -1px;
    right: -4px;
}

.notifier-box {
    position: fixed;
    z-index: 1000;
    right: 10px;
    bottom: 0;
    -webkit-animation: fadein 2s; /* Safari and Chrome */
       -moz-animation: fadein 2s; /* Firefox */
        -ms-animation: fadein 2s; /* Internet Explorer */
         -o-animation: fadein 2s; /* Opera */
            animation: fadein 2s;
}

.pmtime {
    margin-top: 10px;
}

.notifier-box a {
    font-size: 12px;
    color: #fff;
}


.alert-pm {
    width: 100%;
    min-width: 200px;
    color: #fff;
    border-color: #00b5ad;
    background-color: #00b5ad;
}

@keyframes fadein {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Firefox */
@-moz-keyframes fadein {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Safari and Chrome */
@-webkit-keyframes fadein {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* ===[ BACK TO TOP ]=== */

.top-flat {
    position: fixed;
    right: 10px;
    bottom: 10px;
    display: block;
    width: 50px;
    height: 50px;
    transition: all .2s linear 0s;
    border-radius: 2px;
    background-color: #ee836e;
}

.top-flat:hover {
    background-color: #2d2d2d;
}

.top-flat:after {
    font-family: "FontAwesome";
    font-size: 37px;
    position: relative;
    top: -1px;
    display: block;
    content: "\f106";
    text-align: center;
    color: #fff;
}


/* ===[ 400 - 500 PAGES ]=== */
/* Error pages */
.big-title h1 {
    font-size: 250px;
    display: block;
    cursor: default;
    text-align: center;
    color: #7f7f7f;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, .5);
}

.big-title h1:before {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    font-size: 250px;
    font-weight: 700;
    font-style: normal;
    line-height: 16px;
    content: "{";
    color: #8c8c8c;
}

.big-title h1:after {
    font-family: "Asap","Arial","Helvetica",sans-serif;
    font-size: 250px;
    font-weight: 700;
    font-style: normal;
    line-height: 16px;
    content: "}";
    color: #169fe6;
}

.well-schema {
    background-image: url("./styles/FLATBOOTS/theme/images/schema.png");
}

.big-title h2 {
    font-size: 27px;
    margin-bottom: 20px;
    margin-left: 20px;
    text-align: center;
    color: #7f7f7f;
}

.achievement {
    margin-bottom: 50px;
    padding-top: 21px;
    text-align: center;
}

.achievement i {
    font-size: 50px;
    padding: 12px 15px;
    color: #f07073;
    border: 5px solid #fff;
    border-radius: 500px 500px 500px 500px;
    background: none repeat scroll 0 0 #f0f0f0;
    text-shadow: 1px 3px 0 rgba(0, 0, 0, .2);
}
/* Error pages */

/* MCP BAN LIST FIX */

.widget-ban.list ul li .count {
    color: #e04545;
}

.widget-ban.list ul li {
    line-height: 30px;
}


/* ===[ RESPONSIVE QUERIES ]=== */

/* Responsive menu settings */

@media (min-width: 768px) and (max-width: 979px) {
    .footable-first-column {
        width: 58%;
    }

    .large20 {
        width: 26%;
    }
}


@media (max-width: 767px) {
    .post-date,
    .post-id {
        margin-top: -30px;

        color: #ccc;
    }

    .large20 {
        width: 35%;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a i {
        color: #fff;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
        background-color: #656b7b;
    }

    .navbar-nav .open .dropdown-menu > li > a,
    .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 20px;
    }

    .navbar-inverse .navbar-nav > li {
        border-top: 1px solid #656b7b;
    }


    .navbar-nav-fancy > li:hover:before {
        height: 0;
    }


    .nav-tabs > li {
        float: none;
    }

    .mobile-online {
        border-right: 4px solid #31d83a !important;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
    }
}

@media (max-width: 468px) {
    body {
        font-size: 15px;
    }

    .lines-button {
        padding: .4rem .5rem 1rem;
    }


    .avatar-over img {
        width: 60px !important;
    }

    .avatar-over {
        width: 68px !important;
    }

    .forum-answer .side-segment {
        overflow: hidden;
        margin-left: 64px !important;
    }

    .forum-answer h3,
    .forum-answer h3 a {
        width: 300px;
    }

    .avatar-over span {
        top: 40px !important;
        left: 44px !important;
    }

    .post-date,
    .post-id {
        margin-top: -30px;
        color: #ccc;
    }


    #content-forum {
        padding: 0;
    }

    .postbody h3 {
        font-size: 1.3em;
    }

    .timepost {
        font-size: .9em;
    }

    .postbody .content {
        font-size: 1em;
    }


    .nav-tabs > li {
        float: none;
    }

    .mobile-post {
        font-size: 16px;
        float: right;
        padding: 11px 12px;
        border-radius: 4px;
        background: none repeat scroll 0 0 #ecebec;
    }

    .framed-ucp {
        padding: 10px;
    }

    footer .interact a {
        font-size: 15px;
    }
}
/* ===[ RESPONSIVE QUERIES ENDS ]=== */


/* ===[ RADIO CHECKBOX STYLE ]=== */

.selector,
.checker,
.button,
.radio,
.uploader {
    display: inline-block;
    vertical-align: middle;
}

.controls > .radio,
.controls > .selector,
.controls > .checkbox {
    display: inline-block;
    margin: 5px 15px 10px 0 !important;
    padding: 0 !important;
}

.radio-inline,
.checkbox-inline {
    padding-left: 4px;
}

.radio label,
.checkbox label {
    padding-left: 4px;
}

.panel-login .icheckbox_flat-aero {
    margin-right: 2px !important;
}

#options-panel-below .icheckbox_flat-aero {
	float: left;
}

#options-panel-below .check-control {
	margin-left: 25px;
}

.icheckbox_flat-aero {
    margin-left: 2px !important;
}

.iradio_flat-aero {
    margin-left: 4px !important;
}

.checked + label {
    font-weight: bold;
}

.check-control {
    font-weight: normal;
    display: block;
}

/* ===[ ICHECK PLUGIN FLAT SKIN AERO ]=== */
.icheckbox_flat-aero,
.iradio_flat-aero {
    display: inline-block;
    *display: inline;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    width: 20px;
    height: 20px;
	background: url("./styles/FLATBOOTS/theme/images/aero.png") no-repeat;
    border: none;
    cursor: pointer;
}

.icheckbox_flat-aero {
    background-position: 0 0;
}
    .icheckbox_flat-aero.checked {
        background-position: -22px 0;
    }
    .icheckbox_flat-aero.disabled {
        background-position: -44px 0;
        cursor: default;
    }
    .icheckbox_flat-aero.checked.disabled {
        background-position: -66px 0;
    }

.iradio_flat-aero {
    background-position: -88px 0;
}
    .iradio_flat-aero.checked {
        background-position: -110px 0;
    }
    .iradio_flat-aero.disabled {
        background-position: -132px 0;
        cursor: default;
    }
    .iradio_flat-aero.checked.disabled {
        background-position: -154px 0;
    }

/* HiDPI support */
@media (-o-min-device-pixel-ratio: 5/4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi) {
    .icheckbox_flat-aero,
    .iradio_flat-aero {
		background-image: url("./styles/FLATBOOTS/theme/images/aero@2x.png");
        -webkit-background-size: 176px 22px;
        background-size: 176px 22px;
    }
}

/* ===[ MAIN SEARCH STYLE ]=== */
.search-input-fullscreen {
    position: fixed;
    z-index: -10;
    top: 0;
    left: 0;
    display: table;
    width: 100%;
    height: 80px;
    -webkit-transition: opacity .25s linear;
       -moz-transition: opacity .25s linear;
            transition: opacity .25s linear;
    opacity: 0;
    background-color: #fff;
    background-color: #e1e5eb;
}

.search-input-fullscreen.open {
    z-index: 99999 !important;
    opacity: 1;
}

.search-input-fullscreen form {
    position: relative;
    display: table-cell;
    vertical-align: middle;
}

.search-input-fullscreen form:after {
    font-family: "FontAwesome";
    font-size: 60px;
    position: absolute;
    left: 25px;
    margin-top: -65px;
    content: "\f002";
    opacity: .3;
    color: #797979;
}

.search-input-fullscreen input {
    font-size: 30px;
    width: 100%;
    text-indent: 100px;
    color: #fff;
    border: 0;
    outline: none;
    background-color: transparent;
}

.search-input-fullscreen input::-webkit-input-placeholder {
    color: #ccc;
}

.search-input-fullscreen input::-moz-placeholder {
    color: #ccc;
}

.search-input-fullscreen input:-moz-placeholder {
    color: #ccc;
}

.search-input-fullscreen input:-ms-input-placeholder {
    color: #ccc;
}

.search-input-fullscreen .close {
    font-family: sans-serif;
    font-size: 80px;
    font-weight: 300;
    position: fixed;
    top: 30px;
    right: 30px;
    opacity: .35;
    color: #797979;
}

.search-input-fullscreen .close:hover {
    opacity: .5;
}

@media (max-width: 767px) {
    .search-input-fullscreen form:after {
        display: none;
    }

    .search-input-fullscreen input {
        font-size: 50px;
        padding: 0 20px;
    }
}

.open > .dropdown-menu,
.dropdown-submenu:hover > .dropdown-menu {
    /*animation-name*/
    -webkit-animation-name: fadeInDown;
       -moz-animation-name: fadeInDown;
        -ms-animation-name: fadeInDown;
         -o-animation-name: fadeInDown;
            animation-name: fadeInDown;
    /*animation-duration*/
    -webkit-animation-duration: .4s;
       -moz-animation-duration: .4s;
        -ms-animation-duration: .4s;
         -o-animation-duration: .4s;
            animation-duration: .4s;
    animation-fill-mode: both;
}
.fadeInDown {
    /*animation-name*/
    -webkit-animation-name: fadeInDown;
       -moz-animation-name: fadeInDown;
        -ms-animation-name: fadeInDown;
         -o-animation-name: fadeInDown;
            animation-name: fadeInDown;
}
@-webkit-keyframes fadeInDown {
    0% {
        -webkit-transform: translateY(-20px);
                transform: translateY(-20px);
        opacity: 0;
    }

    100% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        opacity: 1;
    }
}
@keyframes fadeInDown {
    0% {
        -webkit-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
                transform: translateY(-20px);
        opacity: 0;
    }

    100% {
        -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
                transform: translateY(0);
        opacity: 1;
    }
}


.message-item {
    display: block;
    margin: 0;
    padding: 0;
    border-top: 0 none;
    border-right: 0 none;
    border-bottom: 1px solid #ecebeb;
    border-left: 0 none;
    border-image: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
}


.avatar-over img {
    height: 75px;
    width: 75px;
    border: 4px solid #dedede;
    border-radius: 50%;
}

.profile-plus {
    line-height: 22px;
    display: inline-block;
    overflow: hidden;
    width: 0;
    height: 24px;
    -webkit-transition: width .6s ease;
       -moz-transition: width .6s ease;
         -o-transition: width .6s ease;
            transition: width .6s ease;
    vertical-align: middle;
    white-space: nowrap;
}

.profile-plus.in {
    width: 200px;
}

.share-box a {
    margin-right: 3px;
}

.profile-plus a {
    margin-right: 3px;
}

.btn-bordered {
    border: 2px solid #ccc;
}

.avatar-over {
    position: relative;
    display: inline-block;
    width: 85px;
    margin-left: -5px;
}

.forum-answer .side-segment {
    margin-left: 80px;
}

.avatar-over span {
    position: absolute;
    top: 58px;
    left: 52px;
    width: 16px;
    height: 16px;
    color: #f68484;
    border: 3px solid #fff;
    border-radius: 50%;
}

.text-online {
    color: #71d398;
}

.status i {
    display: block;
    margin-top: -1px;
}


article h3 {
    font-size: 18px;
}

.section-posting h3,
.section-mcp h3,
.section-ucp h3 {
    font-size: 20px;
    border-bottom: 4px solid #ccc;
}

#topicreview h3 {
    font-size: 18px;
    border-bottom: 4px solid #ccc;
}

.profile-avatar {
    margin-bottom: 5px;
}

.profile-rank {
    margin-bottom: 5px;
}

.profile-avatar img {
    border: 4px solid #dedede;
    border-radius: 50%;
}

.mini-profile-contact li {
    display: inline-block;
    padding-left: 5px;
}

.mini-profile-contact li a {
    display: block;
    width: 35px;
    height: 35px;
    text-align: center;
    border-radius: 50%;
}

.mini-profile-contact li a i {
    font-size: 20px;
    line-height: 35px;
    color: #fff;
}

.mini-profile-contact li a.default-contact {
    background-color: #ccc;
}

.mini-profile-contact li a.facebook {
    background-color: #335397;
}
.mini-profile-contact li a.twitter {
    background-color: #00c7f7;
}
.mini-profile-contact li a.pinterest {
    background-color: #cc2127;
}
.mini-profile-contact li a.google-plus {
    background-color: #dd4a38;
}
.mini-profile-contact li a.linkedin {
    background-color: #0073b2;
}
.mini-profile-contact li a.dribbble {
    background-color: #e04c86;
}

.panel-profile {
    border: medium none;
}

.profile-avatar span {
    position: absolute;
    top: 48px;
    left: 45px;
    width: 16px;
    height: 16px;
    color: #f68484;
    border: 3px solid #fff;
    border-radius: 50%;
}

.panel-profile .panel-heading {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}

.no-padding {
    padding: 0;
}

.partition-green {
    position: relative;
    color: white;
    border-radius: 0 0 0 3px;
    background-color: #1fbba6;
}

.partition-blue {
    position: relative;
    color: white;
    border-radius: 0 0 4px 0;
    background-color: #5f8295;
}

.padding-10 {
    padding: 10px;
}

.btn-white {
    color: white !important;
}

.btn-white:hover {
    color: #ccc;
}

.bg-profile {
    background-color: #fcfcfc;
}

.tile .tab-content > ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

.tile .tab-content > ul > li {
    padding: 8px 15px;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
}

.tile .tab-content > ul > li .date,
.tile .tab-content > ul > li .subject {
    opacity: .7;
}

.tile .tab-content > ul > li .date {
    font-size: 11px;
    font-weight: 900;
}

.tile .tab-content > ul > li .icon {
    opacity: .3;
}

.tile-widget {
    border-top: 2px solid #ccc;
    border-right: 2px solid #ccc;
    border-left: 2px solid #ccc;
    border-radius: 4px 4px 0 0;
}

.tile-body {
    border-right: 2px solid #ccc;
    border-bottom: 2px solid #ccc;
    border-left: 2px solid #ccc;
}

.tile .tab-content > ul > li:last-child {
    border-bottom: 0 none;
}

.tile .tab-content > ul > li:hover {
    background-color: rgba(0, 0, 0, .01);
}

.has-nav-tabs .nav-tabs {
    padding: 5px 5px 0;
}

.no-border {
    border: medium none;
}


/* ===[ SMART FLAT COLORS DEFINITIONS BADGE BACKGROUNDS LABEL TEXT ]=== */
.turquoise {
    background-color: #1abc9c;
}
.green-sea {
    background-color: #16a085;
}
.sun-flower {
    background-color: #f1c40f;
}
.orange {
    background-color: #f39c12;
}
.emerald {
    background-color: #2ecc71;
}
.nephritis {
    background-color: #27ae60;
}
.carrot {
    background-color: #e67e22;
}
.pumpkin {
    background-color: #d35400;
}
.peter-river {
    background-color: #3498db;
}
.belize-hole {
    background-color: #2980b9;
}
.alizarin {
    background-color: #e74c3c;
}
.pomegranate {
    background-color: #c0392b;
}
.amethyst {
    background-color: #9b59b6;
}
.wisteria {
    background-color: #8e44ad;
}
.clouds {
    background-color: #ecf0f1;
}
.silver {
    background-color: #bdc3c7;
}
.wet-asphalt {
    background-color: #34495e;
}
.burned-asphalt {
    background-color: #22354a;
}
.wet-asphalt a:not(.btn) {
    color: #bdc3c7;
}
.wet-asphalt a:hover:not(.btn) {
    color: #d9534f;
}
.midnight-blue {
    background-color: #2c3e50;
}
.midnight-gray {
    background-color: #535a6c;
}
.concrete {
    background-color: #95a5a6;
}
.asbestos {
    background-color: #7f8c8d;
}



.text-red {
    color: #ff4a43;
}
.text-green {
    color: #a2d200;
}
.text-cyan {
    color: #22beef;
}
.text-orange {
    color: #ffc100;
}
.text-acqua {
    color: #7bd0d1;
}
.text-seppia {
    color: #c5cc73;
}
.text-melograno {
    color: #e47578;
}
.text-amethyst {
    color: #cd97eb;
}
.text-greensea {
    color: #16a085;
}
.text-drank {
    color: #a40778;
}
.text-dutch {
    color: #1693a5;
}
.text-hotpink {
    color: #f06;
}
.text-blue {
    color: #418bca;
}
.text-slategray {
    color: #3f4e62;
}
.text-redbrown {
    color: #d9544f;
}
.text-transparent-black {
    color: rgba(0, 0, 0, .4);
}
.text-flatboots-red {
    color: #ee836e;
}


.label-red {
    background-color: #ff635c;
}
.label-cyan {
    background-color: #3ac5f1;
}
.label-green {
    background-color: #a2d200;
}
.label-orange {
    background-color: #ffc71a;
}
.label-amethyst {
    background-color: #d7acef;
}
.label-greensea {
    background-color: #19b698;
}
.label-dutch {
    background-color: #19a7bc;
}
.label-hotpink {
    background-color: #ff1a75;
}
.label-drank {
    background-color: #bc088a;
}
.label-blue {
    background-color: #5597d0;
}
.label-slategray {
    background-color: #495a72;
}
.label-redbrown {
    background-color: #de6864;
}
.label-transparent-black {
    background-color: rgba(0, 0, 0, .15);
}
.label-inverse {
    background-color: #000000;
}

.label-call {
    font-size: 1.1rem;
    padding: .4em .8em;
    vertical-align: middle;
    color: #fff !important;
    border-color: #5c6166;
    border-radius: .325em;
    background-color: #5c6166;
}


.badge-primary {
    background-color: #428bca;
}
.badge-success {
    background-color: #5cb85c;
}
.badge-info {
    background-color: #5bc0de;
}
.badge-warning {
    background-color: #f0ad4e;
}
.badge-danger {
    background-color: #d9534f;
}
.badge-red {
    background-color: #ff635c;
}
.badge-cyan {
    background-color: #3ac5f1;
}
.badge-green {
    background-color: #a2d200;
}
.badge-orange {
    background-color: #ffc71a;
}
.badge-amethyst {
    background-color: #d7acef;
}
.badge-greensea {
    background-color: #19b698;
}
.badge-dutch {
    background-color: #19a7bc;
}
.badge-hotpink {
    background-color: #ff1a75;
}
.badge-drank {
    background-color: #bc088a;
}
.badge-blue {
    background-color: #5597d0;
}
.badge-slategray {
    background-color: #495a72;
}
.badge-redbrown {
    background-color: #de6864;
}
.badge-transparent-black {
    background-color: rgba(0, 0, 0, .15);
}
.badge-inverse {
    background-color: #000000;
} 
 /* END @include basics.css */ 

/* BEGIN @include bootstrap-colorpicker.css */ 
 /*!
 * Bootstrap Colorpicker
 * http://mjolnic.github.io/bootstrap-colorpicker/
 *
 * Originally written by (c) 2012 Stefan Petre
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0.txt
 *
 */

.colorpicker-saturation {
  float: left;
  width: 100px;
  height: 100px;
  cursor: crosshair;
  background-image: url("./styles/FLATBOOTS/theme/images/saturation.png");
}

.colorpicker-saturation i {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 5px;
  height: 5px;
  margin: -4px 0 0 -4px;
  border: 1px solid #000;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
}

.colorpicker-saturation i b {
  display: block;
  width: 5px;
  height: 5px;
  border: 1px solid #fff;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
}

.colorpicker-hue,
.colorpicker-alpha {
  float: left;
  width: 15px;
  height: 100px;
  margin-bottom: 4px;
  margin-left: 4px;
  cursor: row-resize;
}

.colorpicker-hue i,
.colorpicker-alpha i {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 1px;
  margin-top: -1px;
  background: #000;
  border-top: 1px solid #fff;
}

.colorpicker-hue {
  background-image: url("./styles/FLATBOOTS/theme/images/hue.png");
}

.colorpicker-alpha {
  display: none;
  background-image: url("./styles/FLATBOOTS/theme/images/alpha.png");
}

.colorpicker {
  top: 0;
  left: 0;
  z-index: 2500;
  min-width: 130px;
  padding: 4px;
  margin-top: 1px;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  *zoom: 1;
}

.colorpicker:before,
.colorpicker:after {
  display: table;
  line-height: 0;
  content: "";
}

.colorpicker:after {
  clear: both;
}

.colorpicker:before {
  position: absolute;
  top: -7px;
  left: 6px;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-left: 7px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  content: '';
}

.colorpicker:after {
  position: absolute;
  top: -6px;
  left: 7px;
  display: inline-block;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  border-left: 6px solid transparent;
  content: '';
}

.colorpicker div {
  position: relative;
}

.colorpicker.colorpicker-with-alpha {
  min-width: 140px;
}

.colorpicker.colorpicker-with-alpha .colorpicker-alpha {
  display: block;
}

.colorpicker-color {
  height: 10px;
  margin-top: 5px;
  clear: both;
  background-image: url("./styles/FLATBOOTS/theme/images/alpha.png");
  background-position: 0 100%;
}

.colorpicker-color div {
  height: 10px;
}

.colorpicker-element .input-group-addon i,
.colorpicker-element .add-on i {
  display: inline-block;
  width: 16px;
  height: 16px;
  vertical-align: text-top;
  cursor: pointer;
}

.colorpicker.colorpicker-inline {
  position: relative;
  z-index: auto;
  display: inline-block;
  float: none;
}

.colorpicker.colorpicker-horizontal {
  width: 110px;
  height: auto;
  min-width: 110px;
}

.colorpicker.colorpicker-horizontal .colorpicker-saturation {
  margin-bottom: 4px;
}

.colorpicker.colorpicker-horizontal .colorpicker-color {
  width: 100px;
}

.colorpicker.colorpicker-horizontal .colorpicker-hue,
.colorpicker.colorpicker-horizontal .colorpicker-alpha {
  float: left;
  width: 100px;
  height: 15px;
  margin-bottom: 4px;
  margin-left: 0;
  cursor: col-resize;
}

.colorpicker.colorpicker-horizontal .colorpicker-hue i,
.colorpicker.colorpicker-horizontal .colorpicker-alpha i {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 1px;
  height: 15px;
  margin-top: 0;
  background: #ffffff;
  border: none;
}

.colorpicker.colorpicker-horizontal .colorpicker-hue {
  background-image: url("./styles/FLATBOOTS/theme/images/hue-horizontal.png");
}

.colorpicker.colorpicker-horizontal .colorpicker-alpha {
  background-image: url("./styles/FLATBOOTS/theme/images/alpha-horizontal.png");
}

.colorpicker.colorpicker-hidden {
  display: none;
}

.colorpicker.colorpicker-visible {
  display: block;
}

.colorpicker-inline.colorpicker-visible {
  display: inline-block;
}

.colorpicker-right:before {
  right: 6px;
  left: auto;
}

.colorpicker-right:after {
  right: 7px;
  left: auto;
} 
 /* END @include bootstrap-colorpicker.css */ 

/* BEGIN @include custom.css */ 
 /*****************************************************************
 * Custom CSS Stylesheet. You can add any custom CSS selectors here after the comment line. 
 * They will be given the highest priority on any elements on the forum
 * Personilize your forum color scheme in one click here: www.sitesplat.com/phpBB3/ 
 * **************************************************************
 *
 * FLATBOOTS @SiteSplat.com - Custom CSS STYLESHEET - 
 * 
 * **************************************************************
 *****************************************************************/
 /* ===[ CSS HOOK TOP ]=== */
/* mChat
------------ */
div.mChatRowLimit {
	overflow: auto;
	width: 100%;
}
div.mChatRowLimitCustom {
	overflow: auto;
	width: 100%;
}
div.mChatMessage {
	padding: 3px;
	font-size: 1.1em;
	width: 98%;
}
a.mChatScriptLink {
	text-decoration: none;
}
img.mChatImage {
	vertical-align: middle;
}
img.mChatImageLoad {
	vertical-align: middle;
	cursor: wait;
	display: none;
}
img.mChatImageOk {
	vertical-align: middle;
	cursor: help;
}
i.mChatImageHideImg {
	vertical-align: middle;
	cursor: help;
	display: none;
}
div.mChatSound {
	position: absolute;
	left: -1000px;
	top: -1000px;
}
#mChatSmiles {
	margin-top: 8px;
}
#mChatBBCodes {
	margin-top: 8px;
}
.stats-control {
	margin-top: 4px;
}

@media (max-width: 767px) {
.xs-position {
	margin-top: 20px;
}
.xs-counter-position {
	margin-bottom: 10px;
}
.chats li .avatar img {
	display: none !important;
}
}
/* ===[ CSS MORE STYLING ]=== */

.chat-content {
	background: #c7cbd6;
}
.chat-content, .chat-content-inner {
	position: relative;
}
.chat-container {
	position: relative;
	overflow: hidden;
}
.top-buttons {
	position: relative;
	display: block;
	padding: 10px;
	/* padding-left: 80px; */
	height: auto;
	background: #E4E9EB;
	top: 0;
	right: 0;
	left: 0
}
.top-buttons .badge {
	position: relative;
	border-radius: 3px;
	padding: 7px;
	margin-left: 10px;
	margin-top: 5px;
}
.top-buttons .badge:after {
	content: "";
	position: absolute;
	top: 5px;
	left: -5px;
	border-style: solid;
	border-width: 5px 5px 5px 0px;
	border-color: transparent #999;
	display: block;
	width: 0;
	z-index: 1;
}
.top-buttons h2 {
	font-weight: 300;
	color: #858689
}
.chat-pusher {
	position: relative;
}
/*Styling Chat Sidebar Menu*/


.chat-users-menu {
	position: absolute;
	top: 0;
	left: -180px;
	z-index: 100;
	visibility: visible;
	width: 180px;
	height: 100%;
	background: #e4e9eb;
	-webkit-transition: all .5s;
	transition: all .5s;
	overflow-y: auto;
}
/*Toggle Class for Moving Chat Menu Users*/
.chatbar-toggle {
	left: 0;
}
/*/Toggle Class for Moving Chat Menu Users*/

.chat-users-menu ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.chat-users-menu .menu-header {
	padding: 10px;
	text-align: right;
	color: #fff;
	font-size: 1.5em;
}
.chat-users-menu ul li {
	position: relative;
	display: block;
	height: 70px;
	padding: 15px 90px 10px 10px;
	outline: none;
	box-shadow: inset 0 -1px #D5DDE0;
	color: #fff;
	text-shadow: 0 0 1px rgba(255,255,255,.1);
	font-weight: 700;
	-webkit-transition: background .3s, box-shadow .3s;
	transition: background .3s, box-shadow .3s;
}
.chat-users-menu ul li .chat-name {
	display: block;
	text-overflow: ellipsis;
	width: auto;
	font-size: 1.05em;
}
.chat-users-menu ul li .badge {
	position: absolute;
	background: #d24d33;
	color: #fff;
	top: 10px;
	right: 10px;
}
.chat-users-menu ul li:hover {
	background-color: #D5DDE0;
	color: #fff;
	text-decoration: none;
}
.chat-users-menu ul li .label {
	margin-top: 2px;
}
.chat-users-menu ul li .user-img {
	position: absolute;
	right: 15px;
	top: 15px;
	display: block;
	max-width: 40px;
}
.chat-users-menu ul li .user-img img {
	display: inline-block;
	max-width: 100%;
	border-radius: 50%;
	box-shadow: 0 0 0 5px #fff;
}
/* And finally! Messages List and Chat Contents */

.chat-message-form .badge-success {
	background-color: #5cb85c !important;
}
.chat-messages .tools {
	float: right;
	font-size: 0.85em;
}
.chat-messages .tools > a {
	margin-right: 5px;
}
.chat-messages {
	padding: 15px;
}
.chat-messages-with-sidebar {
	margin-left: 70px;
}
.chat-messages ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.chat-messages li {
	margin-bottom: 10px;
}
.chat-messages li.left .chat-body {
	position: relative;
	margin-left: 70px;
	padding: 10px;
	background: #fff;
	border-radius: 3px;
}
.chat-messages li.left .chat-body :before {
	content: "";
	position: absolute;
	top: 20%;
	left: -7px;
	border-style: solid;
	border-width: 6px 7px 6px 0;
	border-color: transparent #fff;
	display: block;
	width: 0;
}
.chat-messages li.right .chat-body {
	position: relative;
	margin-right: 70px;
	padding: 10px 15px;
	background: #fff;
	border-radius: 3px;
}
.chat-messages li.right .chat-body :after {
	content: "";
	position: absolute;
	top: 20%;
	right: -7px;
	border-style: solid;
	border-width: 6px 0 6px 7px;
	border-color: transparent #fff;
	display: block;
	width: 0;
}
.top-buttons > span {
	vertical-align: sub;
}
.refresh-control {
	color: #999999;
	margin-bottom: 10px;/*margin-top: -18px;*/
}
/*
.counter {
    background-color: rgba(0, 0, 0, 0);
    border: 0 none;
    color: #999999;
	display: block;
    margin-top: -10px;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
}
*/

.counter {
	background-color: rgba(0, 0, 0, 0);
	border: 0 none;
	bottom: -20px;
	color: #999999;
	left: 0;
	position: absolute;
	text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
}
.chat-messages li.BG1 .chat-body {
	position: relative;
	margin-left: 60px;
	padding: 10px 10px 2px;
	background: #fff;
	border-radius: 3px;
}
.chat-messages li.BG1 .chat-body:before {
	content: "";
	position: absolute;
	top: 20%;
	left: -7px;
	border-style: solid;
	border-width: 6px 7px 6px 0;
	border-color: transparent #fff;
	display: block;
	width: 0;
}
.chat-messages li.BG2 .chat-body {
	position: relative;
	margin-right: 60px;
	padding: 10px 10px 2px;
	background: #fff;
	border-radius: 3px;
}
.chat-messages li.BG2 .chat-body:after {
	content: "";
	position: absolute;
	top: 20%;
	right: -7px;
	border-style: solid;
	border-width: 6px 0 6px 7px;
	border-color: transparent #fff;
	display: block;
	width: 0;
}
.chat-messages .pull-1 {
	float: left;
}
.chat-messages .pull-2 {
	float: right;
}
.chat-messages .badge {
	font-size: .85em;
	float: right;
	border-radius: 3px;
	background: #c0c2c7;
}
.chat-messages .chat-body .name {
	font-size: 1em;
	font-weight: 700;
}
.chat-messages .user-img {
	margin-top: 8px;
	display: block;
	max-width: 45px;
}
.chat-messages .user-img img {
	display: inline-block;
	max-width: 100%;
	border-radius: 50%;
	box-shadow: 0 0 0 6px #fff;
}
.chat-message-form {
	padding: 15px;
	background: #e4e9eb;
	display: block
}
.chat-messages-with-sidebar {
	margin-left: 0;
}
/* Messages List no avatars */

.chat-messages li.BG1 .chat-no-avatar {
	margin-left: 0;
}
.chat-messages li.BG1 .chat-no-avatar:before {
	border-width: 0;
}
.chat-messages li.BG2 .chat-no-avatar {
	margin-right: 0;
}
.chat-messages li.BG2 .chat-no-avatar:after {
	border-width: 0;
}
/* Messages List no avatars */
 /* ========================================================================
 * 7.9. Nanoscroller
 * ======================================================================== */


.nano {
	position : relative;
	width : 100%;
	height : 100%;
	overflow : hidden;
}
.nano > .nano-content {
	position : absolute;
	overflow : scroll;
	overflow-x : hidden;
	top : 0;
	right : 0;
	bottom : 0;
	left : 0;
}
.nano > .nano-content:focus {
	outline: thin dotted;
}
.nano > .nano-content::-webkit-scrollbar {
 visibility: hidden;
}
.has-scrollbar > .nano-content::-webkit-scrollbar {
 visibility: visible;
}
.nano > .nano-pane {
	background : rgba(0,0,0,.25);
	position : absolute;
	width : 10px;
	right : 0;
	top : 0;
	bottom : 0;
	visibility : hidden\9; /* Target only IE7 and IE8 with this hack */
	opacity : .01;
	-webkit-transition : .2s;
	-moz-transition : .2s;
	-o-transition : .2s;
	transition : .2s;
}
.nano > .nano-pane > .nano-slider {
	background: #d6d9e0;
	position : relative;
	margin : 0;
}
.nano:hover > .nano-pane, .nano-pane.active, .nano-pane.flashed {
	visibility : visible\9; /* Target only IE7 and IE8 with this hack */
	opacity : 0.99;
}
/*Paddings and Margins*/


.buttons-margin-bottom .btn {
	margin-bottom: 5px;
}
.buttons-margin-bottom .modal .btn {
	margin-bottom: 0
}
.zero-padding-margin {
	padding: 0;
	margin: 0
}
.padding-0px {
	padding: 0px
}
.margin-0px {
	margin: 0
}
.margin-negative-top-10px {
	margin-top: -10px
}
.margin-negative-top-20px {
	margin-top: -20px
}
.margin-negative-top-30px {
	margin-top: -30px
}
.padding-10px {
	padding: 10px
}
.padding-15px {
	padding: 10px
}
.padding-20px {
	padding: 10px
}
.margin-bottom, .margin-bottom-10px {
	margin-bottom: 10px;
}
.margin-bottom-20px {
	margin-bottom: 20px;
}
.margin-top {
	margin-top: 10px;
}
.margin-left {
	margin-left: 10px;
}
.margin-right {
	margin-right: 10px;
}
/* ===[ CSS MORE STYLING ENDS HERE ]=== */

.sideblock-avatar img {
	border: 3px solid #edeff0;
	border-radius: 50%;
	height: auto;
	width: 100px !important;
}
.bs-callout {
	border-left: 3px solid #EEEEEE;
	margin: 20px 0;
	padding: 20px;
}
.bs-callout h4 {
	margin-bottom: 5px;
	margin-top: 0;
}
.bs-callout p:last-child {
	margin-bottom: 0;
}
.bs-callout code {
	background-color: #FFFFFF;
	border-radius: 3px;
}
.bs-callout-danger {
	background-color: #FDF7F7;
	border-color: #D9534F;
}
.bs-callout-danger h4 {
	color: #D9534F;
}
.bs-callout-warning {
	background-color: #FCF8F2;
	border-color: #F0AD4E;
}
.bs-callout-warning h4 {
	color: #F0AD4E;
}
.bs-callout-info {
	background-color: #F4F8FA;
	border-color: #5BC0DE;
}
.bs-callout-info h4 {
	color: #5BC0DE;
}
.section-posting .btn-toolbar > .btn, .btn-toolbar > .btn-group, .btn-toolbar > .input-group {
	margin-top: 10px;
}
.reset-label {
	border-radius: 0.325em;
	color: #fff !important;
	display: inline-block;
	font-family: 'Source Sans Pro', 'Arial', 'Helvetica', sans-serif;
	font-size: 0.9rem;
	margin-bottom: 2.5px;
	padding: 0.4em 0.8em;
	vertical-align: middle;
}
.reset-label > span {
	font-family: 'Source Sans Pro', 'Arial', 'Helvetica', sans-serif;
	font-size: 65%;
	padding: 0.2em 0.6em 0.1em;
}
.header-img-1 {
	background: url("./styles/FLATBOOTS/theme/images/header-blank.png") #606060 repeat-x;
	background-position: center center;
}
/* === original image
.header-img-1 {
    background: url("./styles/FLATBOOTS/theme/images/day-plains.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
	background: url("./styles/FLATBOOTS/theme/images/current_banner.png") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
 original image === */

.header-img-2 {
	background: url("./styles/FLATBOOTS/theme/images/night-plains.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-3 {
	background: url("./styles/FLATBOOTS/theme/images/night-swamp.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-4 {
	background: url("./styles/FLATBOOTS/theme/images/day-forest.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-5 {
	background: url("./styles/FLATBOOTS/theme/images/night-swamp.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-6 {
	background: url("./styles/FLATBOOTS/theme/images/day-savana.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-7 {
	background: url("./styles/FLATBOOTS/theme/images/day-forest.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-8 {
	background: url("./styles/FLATBOOTS/theme/images/night-plains.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.header-img-9 {
	background: url("./styles/FLATBOOTS/theme/images/day-savana.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}
#header-wrapper {
	height: 230px;
	margin-top: -14px;
	padding: 50px 0;
	border-top: 10px solid #f96100;
}
#outer_pokeball {
	border-top: 60px solid #f83a3a;
	bottom: 12px;
	height: 0;
	margin: 0 auto;
	position: relative;
	width: 120px;
	z-index: 1;
}
#inner_pokeball {
	border-top: 35px solid #000;
	bottom: 35px;
	height: 0;
	margin: 0 auto;
	position: relative;
	width: 60px;
	z-index: 2;
}
#pokeball_button {
	border-top: 20px solid #fff;
	bottom: 54px;
	height: 0;
	margin: 0 auto;
	position: relative;
	width: 30px;
	z-index: 4;
}
#pokeball_line {
	border-top: 10px solid #000;
	bottom: 63px;
	height: 0;
	margin: 0 auto;
	position: relative;
	width: 120px;
	z-index: 3;
}
.navbar-inverse {
	background-color: #3d3d3d;
	border-color: #535a6c;
}
.navbar-nav > li > a {
	font-family: 'Source Sans Pro', 'Arial', 'Helvetica', sans-serif;
	color: #fff;
	font-size: 0.9em;
	font-weight: 600;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}
.navbar-nav-fancy {
	margin-top: 2px;
}
.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
	background-color: #3d3d3d;
	color: #fff;
}
.alert > a {
	color: #fff !important;
}
/* BBOOTS / FLATBOOTS Custom Colors Generated With COLORIZE - www.sitesplat.com - copyright (c) 2014 SiteSplat.com */
#logo {
	margin-top: -55px;
}
.logo span {
	color: #4a92ce;
}
.logo-transition a:after {
	color: #4a92ce;
}
.navBtn {
	background-color: #4a92ce;
}
.navBtn > a {
	border-left: 1px solid #2b6ba0;
}
.submenu {
	border-bottom: 4px solid #4a92ce;
}
.nav-icon:hover [class*="has-sub"] {
	color: #4a92ce;
}
.submenu li:hover > a {
	color: #4a92ce;
}
.submenu li:hover > span {
	background-color: #4a92ce;
}
.subheader {
	border-top: 4px solid #4a92ce;
}
.side-segment h3:after, .side-segment h2:after {
	background-color: #4a92ce;
}
.alert-info {
	background-color: #4a92ce;
	border-color: #4a92ce;
}
.label-info, .badge-info {
	background-color: #4a92ce;
}
.progress-info.progress-striped .bar, .progress-striped .bar-info {
	background-color: #4a92ce;
}
#scrollbar-one .thumb .end, #scrollbar-two .thumb .end {
	background-color: #4a92ce;
}
#scrollbar-one .thumb, #scrollbar-two .thumb {
	background-color: #4a92ce;
}
.tabbable-custom .nav-tabs > li.active {
	border-top: 3px solid #4a92ce;
}
.ver-inline-menu li.active a, .ver-inline-menu li.active i {
	background: none repeat scroll 0 0 #4a92ce;
	border-left: 1px solid #2b6ba0;
}
.ver-inline-menu li.active:after {
	border-left: 6px solid #4a92ce;
}
.ver-inline-menu li.active i {
	background: none repeat scroll 0 0 #5e9ed3;
}
.table-primary thead th {
	background-color: #4a92ce;
	border-color: #4a92ce !important;
}
a.forumtitle {
	color: #4a92ce;
}
.twitter-layout:before {
	color: #4a92ce;
}
footer .interact a:hover {
	color: #4a92ce;
}
footer {
	border-top: 3px solid #4a92ce;
}
footer .bottomLinks small a {
	color: #4a92ce;
}
footer .bottomLinks a:hover {
	border-bottom: 1px solid #4a92ce;
}
#footerContent blockquote p span {
	color: #4a92ce;
}
a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus {
	background-color: #4a92ce;
	border-color: #4a92ce;
}
.btn-link {
	color: #4a92ce;
}
.btn-link:hover, .btn-link:focus {
	color: #2b6ba0;
}
.pager li > a:hover, .pager li > a:focus {
	background-color: #4a92ce;
}
/* BBOOTS - FLATBOOTS Main Links color */
a {
	color: #4a92ce;
}
a:hover, a:focus {
	color: #2b6ba0;
}
blockquote {
	border-left-color: #4a92ce;
}
blockquote.pull-right {
	border-right-color: #4a92ce;
}
.btn-primary {
	color: #ffffff;
	background-color: #4a92ce;
	border: 0;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
	color: #ffffff;
	background-color: #555555;
}
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .dropdown-submenu:hover > a, .dropdown-submenu:focus > a {
	color: #4a92ce;
}
.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
	color: #4a92ce;
}
.dropdown-submenu:hover > a:after {
	border-left-color: #4a92ce;
}
/* Button Backgrounds */
/* FLATBOOTS Custom Color Generated with COLORIZE */
/* FLATBOOTS Forum Panel Heading */
.panel-forum > .panel-heading {
	background-color: #4a92ce;
}
/* FLATBOOTS Button Top */
.top-flat {
	background-color: #4a92ce;
}
footer {
	border-top: medium none;
}
/* FLATBOOTS Teaser Header Background color */
.masthead:before {
	background-color: #4a92ce;
}
/* FLATBOOTS Footer Call to Action Background Color */
.mastbottom {
	background-color: #4a92ce;
}
.chat-messages .user-img img {
	height: 40px;
	width: 40px;
}
/* ===[ CSS HOOK BOOTTOM ]=== */
 
 
.pos-abs {
    z-index: 444;
} 
 
.section-memberlist .profile-avatar {
    margin-bottom: 20px;
    margin-left: 5px;
} 
 
.section-memberlist .profile-avatar img {
    height: auto;
    margin-left: 4px;
    margin-top: 10px;
    width: 80px;
} 
 
.section-memberlist .mc_body_no_fx {
    margin-top: 12px;
} 
 
 
 
/* FLATBOOTS temp fix lazy topic loader */
.entry-header {
	word-wrap: break-word;
}
.large20 {
	width: 25%;
}
.mc_strikethrough {
	position: relative;
}
.mc_strikethrough:before {
	background-color: inherit;
	border-radius: 45px 34px 0 0;
	content: "";
	height: 10px;
	left: 4px;
	margin-top: 64px;
	position: absolute;
	width: 69px;
	-webkit-transform: rotate(-58deg);
	-moz-transform: rotate(-58deg);
	-ms-transform: rotate(-58deg);
	-o-transform: rotate(-58deg);
	transform: rotate(-58deg);
}
.dummy-skin::before {
	left: 6px;
	margin-top: 66px;
}
.colorpicker-element .input-group-addon i, .colorpicker-element .add-on i {
	background: #fff;
}
.mc_body_no_fx {
	display: inline-block;
	margin-left: 10px;
}
.mc_body_no_fx img {
	border: medium none;
	border-radius: 0;
}
.section-memberlist .profile-avatar img {
	border-radius: 4px;
}
/*Author: IvoryOwl Function: Banner User Authentication Notice */

.banner-notice a {
	text-decoration: underline;
}
.banner-notice {
	background: #fff;
	border: 2px solid #f96100;
	positon: relative;
	border-radius: 20px;
	width: 70%;
	z-index: 9000;
	left: 0;
	right: 0;
	margin-left: auto;
	margin-right: auto;
	padding: 5px 15px 5px 15px;
	margin-top: -57px;
}
.clear {
	clear: both;
}
.logoarea {
	margin-top: -55px;
	position: relative;
	z-index: 0;
}
img.hat-icon {
	width: 35px;
	margin-right: 10px;
}



/*Author: IvoryOwl Function: Team Page */


.team-nav-wrapper {
background:#3d3d3d;	
overflow: auto;
width:100%;
padding:5px;
	border-radius: 7px;
	margin-bottom:30px;
}
ul.team-nav {
	list-style-type: none;
	
}
.team-nav a{
	color:#fff;
	
	text-transform:uppercase;}
	
.team-nav-active{
	background:#ee836e;
	border-radius:4px;
	}
	
.team-nav li{
	float: left;
	margin-right:20px;
	font-size:14px;
	color:#fff;
	text-align:center;
	padding:5px;
}
.team-wrapper {
border-radius:7px;
border-left:8px solid #f96100;	
border-right: 2px solid #e1e5eb;	
border-bottom: 2px solid #e1e5eb;	
border-top: 2px solid #e1e5eb;	
background:#d1d1d1;
margin-bottom:30px;
overflow:auto;
}
.team-left {
padding:0px;
	background:#fff;
}
.team-left-content {
	background:#fff;
	min-height:220px;
	padding:20px;
	
}
.team-right {
	background:#d1d1d1;
	padding:20px;
}
.team-wrapper h1 {
font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
font-weight:300;
font-size:30px;	
color:#000;
letter-spacing:1px;
position: relative;
display: block;
margin-bottom:0px;
}
.team-left p {
	font-size:12px;
}
.team-left h4 {
font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
font-weight:300;
font-size:10px;	
display: block;
color:#000;
letter-spacing:1px;
position: relative;
margin-top:18px;
}
.team-headline {
border-bottom:4px solid #dedede;	
overflow: auto;
margin-bottom:7px;
position: relative;
}
.team-roles {
font-size:14px!important;
}
.team-footer {
background:#5f8295;
color:#fff;
overflow: auto;
margin-top:25px;
padding:15px;
}
.team-footer h4 {
text-transform: uppercase;
color:#fff;
font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size:14px;
letter-spacing: 0px;
font-weight:900;	
margin:0px;
}
.team-social .fa {
margin-left:7px;
color:#fff;
}
.team-social a {
	color:#fff;
}.team-social a:hover {
	opacity: .8;
}
.team-right h3 {
color:#000;
font-size:13px;
margin-bottom:15px;
border-bottom:3px solid #b2b2b2;	
}
.team-skin {
margin-top:30px;
max-height:250px;
}

.v-team {
margin-top:15px;	
margin-bottom:35px;
}
.team-sprite {
float:left;
margin-left:4px;
margin-right:4px;
width:45px;
}


.team-lightgreen:before {
	content: "• ";
	color: #339900;
}
.team-darkgreen:before {
	content: "• ";
	color: #1d4e1c;
}
.team-red:before {
	content: "• ";
	color: #822828;
}
.team-blue:before {
	content: "• ";
	color: #284182;
}
.team-yellow:before {
	content: "• ";
	color: #CC9900;
}
.team-pink:before {
	content: "• ";
	color: #d349d1;
}
.team-black:before {
	content: "• ";
	color: #000;
}


/*Author: IvoryOwl Function: Homepage Partners */
.row.partner {
	overflow: auto;
	margin-top: 40px;
}
.partner img {
	opacity: .7;
}
.partner img:hover {
	opacity: 1.0;
} 
 /* END @include custom.css */ 



