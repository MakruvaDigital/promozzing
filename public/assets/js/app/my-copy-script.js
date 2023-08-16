$('#generate_copywriting').click(()=>{

})

$('.removeInput').click(function(){
  $(this).parent().parent().remove()
})

$('.addKeterangan').click(function(){

  num = $(this).data('num')
  if( num > $(this).data('max') ){ return false }
  placeholder = $(this).parent().prev().children(0)[0].placeholder.slice(0,-1)+num
  inputName = $(this).parent().prev().children(0)[0].name
  $(this).parent().prev().append( $(`
  <div class="input-group mt-1">
    <input type="text" name="${inputName}" class="form-control sc" placeholder="${placeholder}">
    <div class="input-group-append">
      <button class="btn btn-info removeInput" type="button">Remove</button>
    </div>
  </div>
  `) )
  $(this).data('num', $(this).data('num')+1 )

  $('.removeInput').click(function(){
    $(this).parent().parent().remove()
  })
  
})

let copyData = localStorage.getItem('copy-data')
if( copyData ){
  let fields_data = JSON.parse(copyData)
  fields_data = pre_generate(fields_data);
  
  generateCopy( fields_data, $('#resultType').val() )

  $('#copy-gen-input').collapse('hide')
  $('#generate_copywriting').collapse('hide')

  $('#back-to-copy-gen').parent().collapse('show')
  $('#copy-gen-output').collapse('show')

  window.scroll({
    top: 100, 
    left: 0, 
    behavior: 'smooth' 
   });

   $('#resultType').change(function(){
    generateCopy( fields_data, $($(this)).val() )
  })
}

function formValidation(){
  let isValid = true;
  let scs = [].slice.call($('.sc'))
  scs.map(sc=>{
    if(sc.id==''||sc.id=='sc_website'||sc.id=='sc_ps'){ return false };
    if(!sc.value){
      swal.fire(`kolom tidak boleh kosong`)

      $('#'+sc.id).addClass('is-invalid')
      $('#'+sc.id).keyup(function(){
        if( this.value ){
          $('#'+sc.id).removeClass('is-invalid')
        }
      })

      isValid = false;
    }
  })

  return isValid
}

$('#generate_copywriting').click(function(){
  if( !formValidation() ){ return false }

  let fields_data0 = get_fields_data();
  let json_fields_data = JSON.stringify( fields_data0 )
  localStorage.setItem('copy-data', json_fields_data)

  fields_data = pre_generate(fields_data0);
  
  $('#copy-gen-input').collapse('hide')
  $($(this)).collapse('hide')
  
  $('#back-to-copy-gen').parent().collapse('show')
  $('#copy-gen-output').collapse('show')
  
  window.scroll({
    top: 100, 
    left: 0, 
    behavior: 'smooth' 
  });

  generateCopy( fields_data, $('#resultType').val() )

  $.post( '/copywriting/addCopywriting', JSON.stringify({text: fields_data0}), function(res){
    console.log( JSON.parse(res) )
  }, 'json' )
  
  $('#resultType').change(function(){
    generateCopy( fields_data, $($(this)).val() )
  })
})

$('#back-to-copy-gen').click(function(){
  $('#copy-gen-input').collapse('show')
  $('#generate_copywriting').collapse('show')

  $($(this)).parent().collapse('hide')
  $('#copy-gen-output').collapse('hide')
})

function get_fields_data(){
  let sc = [].slice.call($('.sc'))
  let fields = {}

  sc.map(xx=>{
    if( xx.name.slice(-2) == '[]' ){
      if( fields[xx.name.slice(0,-2)] == undefined ){
        fields[xx.name.slice(0,-2)] = [xx.value]
      }else{
        fields[xx.name.slice(0,-2)].push(xx.value)
      }
    }else{ 
      fields[xx.name] = xx.value
    }
  })

  return fields
}

function pre_generate(data){
  let fields = {}
  var val = ''
  
  val = data["sc_headline"];
  fields["headline"] = val ? '<b>' + val + '</b>' + '<br/><br/>' : '';
  val = data["sc_sub_headline"];
  fields["sub_headline"] = val ? '<b>' + val + '</b>' + '<br/><br/>' : '';
  val = data["sc_nama_produk"];
  fields["nama_produk"] = val ? '<b>' + val + '</b>' : '';
  val = data["sc_jaminan"];
  fields["jaminan"] = val ? '<b>' + val + '</b>' : '';
  val = data["sc_harga"];
  fields["harga"] = val ? '<b>' + val + '</b>' : '';
  val = data["sc_website"];
  fields["website"] = val ? '<b>' + val + '</b>' : '';
  val = data["sc_telephone"];
  fields["phone"] = val ? '<b>' + val + '</b>' : '';
  val = data["sc_ps"];
  fields["ps"] = val ? '<b>' + val + '</b>' : '';
  val = null;
  
  fields["penerangan-s"] = data["sc_penerangan"].map(i => '<b>' + i + '</b>');
  fields["kelebihan-s"] = data["sc_kelebihan"].map(i => '<b>' + i + '</b>');
  fields["freegift-s"] = data["sc_freegift"].map(i => '<b>' + i + '</b>');
  fields["masalah-s"] = data["sc_masalah"].map(i => '<b>' + i + '</b>');
  fields["testimoni-s"] = data["sc_testimoni"].map(i => '<b>' + i + '</b>');

  return fields
}