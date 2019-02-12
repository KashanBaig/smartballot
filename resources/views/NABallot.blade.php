@extends('layout.main')

@section('content')

    <!-- **Home Content** -->
  <article id="home" class="content"><br>

    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <h2 class="sub-header " style="color: black; text-align: center;">NATIONAL ASSEMBLY</h2>
      </div>
      <div class="col-lg-2">
        <button type="button" id="btnSuccess" class="btn btn-success"  onclick="goToPS()">Proceed Goto PS</button>
        <script>
            document.querySelector('#btnSuccess').disabled = true;
          </script>
      </div>
    </div>

    

    <table class="table text-center">
        <tbody>
          
            <?php foreach($rows as $row): ?>
              <tr>
                  <td class="col-sm-2"><img src="./assets/images/flag/{{ $row['flag'] }}"></td>
                  <td class="col-sm-2"><img src="./assets/images/sign/{{ $row['sign'] }}"></td>
                  <td class="col-sm-3" style="font-size: 20px; font-weight: bold; ">{{ $row['title'] }}‬‎</td>
                  <td class="col-sm-2">
                    <form name="myForm">
                      <label>
                      <input type="checkbox" class="options" id="{{ $row['name'] }}" name="{{ $row['name'] }}" value="{{ $row['value'] }}" onclick="clicked('{{ json_encode( $row ) }}', '{{ $row['name'] }}')"> <span class="label-text"></span>
                      </label>
                    </form>
                  </td>
              </tr>
            <?php endforeach ?>
            
          </tr>
        </tbody>
    </table>
      <!--table End-->
  </article><!-- **Home Content - End** -->

  <script>
    function checker(selectedEl){
      const options = document.querySelector('.options');
      options.checked = true;
      selectedEl.checked = false;
    }

    function clicked(row, id){
      const goToBtn = document.querySelector('#btnSuccess');
      const option = document.querySelector('#'+ id);

      checker(option);
      console.log(option);
      
      if(!row)
        return false;
      
      goToBtn.disabled = false;
    }
</script>
@endsection