var btnVal = 1
$('.col-1').click(function(){
    $('.col-1').children().hide()
  $(this,'.col-1').children().show()

  if(btnVal%2==0){
    $('.col-1 .btn-success').hide()
    $('.col-1 .btn-warning').hide()
    $('.col-1 .btn-danger').hide()
    btnVal++
    console.log(btnVal)
  }
  else{
    $('.col-1 .btn-success').show()
    $('.col-1 .btn-warning').show()
    $('.col-1 .btn-danger').show()
    btnVal++
    console.log(btnVal)
  }
})

$('.btn-success').click(function(){
    $(this,'.btn-success').parent().parent().css("background-color","rgba(0,255,0,0.4)")
    $('.btns').hide()
    
})

$('.btn-warning').click(function(){
    $(this,'.btn-warning').parent().parent().css("background-color","rgba(255, 255, 0,0.4)")
})

$('.btn-danger').click(function(){
    $(this,'.btn-danger').parent().parent().css("background-color","rgba(255, 0, 0,0.4)")
    $(this).parent().hide()
})
$('.input.btn.btn-dark.clearBtn').hide()
$('.arrow-btn').click(function(){
    $('.popup').toggle(100)
})

$('.clearBtn').click(function(){
    $('.col-1').css("background-color","transparent")
    alert("All Grids Cleared")
})

let mapImg = document.getElementById("mapImg")
let mapUploader = document.getElementById("mapUploader")

mapUploader.addEventListener('change',function(){
    // console.log(this.files[0].type)
    if(this.files[0].type!='image/png' && this.files[0].type!='image/jpeg' && this.files[0].type!='image/gif'){
        alert("Please upload an image file...")
    }
    else{
        mapImg.src= URL.createObjectURL(this.files[0])
    }
})











// permanent co