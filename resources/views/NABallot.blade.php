@extends('layout.main')
@section('content')
<link rel="stylesheet" href="./assets/css/ballot.css">

<head>
  {{-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Smart Ballot System</title>

  <!-- **Favicon** -->
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="icon" type="img/png" href="./assets/images/logo.png">
  <!-- **CSS - stylesheets** -->
  <link id="skin-css" href="./assets/css/anamoly/ballot.css" rel="stylesheet" media="all" />
  <link id="default-css" href="./assets/css/style.css" rel="stylesheet" media="all" />
  <link id="responsive-css" href="./assets/css/anamoly/responsive.css" rel="stylesheet" media="all" />

  <!-- **Font Awesome** -->

  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/ballot.css"> --}}
 
  <!-- **jQuery** -->

  <!-- <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/core-custom.js"> </script> -->

  <script type="text/javascript">
    function myfun(stayChecked) {
      // document.getElementById('btnSuccess').disabled = false;
      with (document.myForm) {

        for (i = 0; i < elements.length; i++) {
          if (elements[i].checked == true && elements[i].name != stayChecked.name) {
            elements[i].checked = false;
          }
        }
      }
      checkCondition(stayChecked);
    }

    function checkCondition(stayChecked) {
      with (document.myForm) {
        for (i = 0; i < elements.length; i++) {
          if (elements[i].checked == true) {
            document.getElementById('btnSuccess').disabled = false;
            alertName(stayChecked.name);

            break;
          }
          else {
            document.getElementById('btnSuccess').disabled = true;
          }
        }
      }
    }

    function alertName(name) {
      switch (name) {
        case 'cb1':
          alert("You Have Selected 'پاکستان تحريک انصاف' For National Assembly");
          break;

        case 'cb2':
          alert("You Have Selected 'پاکِستان پیپلز پارٹی‬‎' For National Assembly");
          break;

         case 'cb3':
          alert("You Have Selected 'پاکستان مسلم لیگ ن' For National Assembly");
          break;

         case 'cb4':
          alert("You Have Selected 'جميعت علماء پاکستان' For National Assembly");
          break;

         case 'cb5':
          alert("You Have Selected 'پاکستان مسلم لیگ ق' For National Assembly");
          break;

         case 'cb6':
          alert("You Have Selected 'جمیعت علمائے اسلام ف' For National Assembly");
          break;

         case 'cb7':
          alert("You Have Selected 'متحدہ قومی موومنٹ‬ پاکِستان' For National Assembly");
          break;

         case 'cb8':
          alert("You Have Selected 'عوامی نيشنل پارٹی' For National Assembly");
          break;

         case 'cb9':
          alert("You Have Selected 'پاکستان مسلم لیگ ف' For National Assembly");
          break;

          case 'cb10':
          alert("You Have Selected 'پاک سر زمین پارٹی‬‎' For National Assembly");
          break;

          case 'cb11':
          alert("You Have Selected 'پاکستان عوامی تحريک' For National Assembly");
          break;

          case 'cb12':
          alert("You Have Selected 'عوامی ورکرز پارٹی' For National Assembly");
          break;

          case 'cb13':
          alert("You Have Selected 'تحریک لبیک پاکستان' For National Assembly");
          break;

          case 'cb14':
          alert("You Have Selected 'بلوچستان نيشنل پارٹی' For National Assembly");
          break;

          case 'cb15':
          alert("You Have Selected 'پشتونخوا ملی عوامی پارٹی‬' For National Assembly");
          break;

          case 'cb16':
          alert("You Have Selected 'پاکستان گرین پارٹی‎' For National Assembly");
          break;


      }

    }

    function goToPS() {
      location.href = './PSBallot.html'
    }

  </script>
</head>

<body>

  <!-- **Header** -->

  <div id="header1">
    <div style="text-align: center; font-size: 30px; color: white">E-BALLOT PAPER</div>
  </div>

  <!-- **Home Content** -->
  <article id="home" class="content"><br>

    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2 class="sub-header " style="color: black; text-align: center;">NATIONAL ASSEMBLY</h2>
      </div>
      <div class="col-lg-2">
        <button type="button" id="btnSuccess" class="btn btn-success"  onclick="goToPS()" disabled>Proceed Goto PS</button>
      </div>
    </div>

    <!--table start-->
    <div class="col-lg-12">

    </div>

    <table class="table text-center">

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pti.jpg"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/bat.jpg"></td>
            <td class="col-sm-3" style="font-size: 20px; font-weight: bold; ">پاکستان تحريک انصاف‬‎</td>
            <form name="myForm">
              <td class="col-sm-2">
                <div class="checkbox">
                  <label style="font-size: 2.5em">
                    <input type="checkbox" name="cb1" value="1" onclick="return myfun(this);" style="font-size:0px">
                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  </label>
                </div>


              </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pppp.jpg"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/tier.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پاکِستان پیپلز پارٹی‬‎</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb2" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pmln.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/tiger.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px; font-weight: bold; ">پاکستان مسلم لیگ ن</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb3" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/jmi.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/tarazu.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">جماعتِ اسلامی پاکستان</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb4" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pmlq.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/cycle.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پاکستان مسلم لیگ ق‬</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb5" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/jui.jpg"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/book.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">جمیعت علمائے اسلام ف‬</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb6" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/mqm.jpg"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/kite.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">متحدہ قومی موومنٹ‬ پاکِستان</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb7" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/awami.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/lantern.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">عوامی نيشنل پارٹی</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb8" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pmlf.jpg"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/flower.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پاکستان مسلم لیگ ف</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb9" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>
 
          </tr>
        </tbody>
      </thead>

        <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/psp.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/dolphin.jpg"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پاک سر زمین پارٹی‬‎</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb10" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>
  
          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pat.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/pat.png"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پاکستان عوامی تحريک</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb11" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/awp.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/awp.png"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">عوامی ورکرز پارٹی</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb12" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/tlp.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/tlp.png"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">تحریک لبیک پاکستان</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb13" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/bnp.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/bnp.png"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">بلوچستان نيشنل پارٹی</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb14" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pmap.png"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/pmap.png"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پشتونخوا ملی عوامی پارٹی‬</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb15" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      <thead>
        <tbody>
          <tr>
            <td class="col-sm-2"><img src="./assets/images/flag/pgp.jpg"></td>
            <td class="col-sm-2"><img src="./assets/images/sign/pgp.png"></td>
            <td class="col-sm-2" style="font-size: 20px;  font-weight: bold; ">پاکستان گرین پارٹی‎</td>

            <td class="col-sm-2">

              <div class="checkbox">
                <label style="font-size: 2.5em">
                  <input type="checkbox" name="cb16" value="1" onclick="return myfun(this)">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
            </td>

          </tr>
        </tbody>
      </thead>

      </div>
      </div>
      </div>
      <!--table End-->
      </div>
      </div>
  </article><!-- **Home Content - End** -->
</body>
@endsection