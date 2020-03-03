jQuery(document).ready(function ($) {

    var body = document.getElementsByTagName("body")[0];
    var modal = document.getElementsByClassName("js-modal")[0];
    var btn = document.getElementsByClassName("js-modal-btn")[0];
    var content = document.getElementsByClassName("js-modal-content")[0];
    var span = document.getElementsByClassName("js-modal-close")[0];
  
  
    // Saat click button open modal
    if (btn != null) {
      btn.onclick = function (event) {
        event.preventDefault();
        body.classList.add("is-overflow-hidden");
        content.classList.add("is-opened");
        modal.style.display = "block";
      }
    }
  
    // // Saat clicks on <span> (x), close modal
    // if (span != null) {
    //   span.onclick = function (event) {
    //     event.preventDefault();
  
    //     $('.js-modal-content iframe').attr('src', '');
    //     body.classList.remove("is-overflow-hidden");
    //     content.classList.remove("is-opened");
    //     modal.style.display = "none";
  
    //     $('input[name="modul"]').val('')
    //     $(".ch-c-modal__wrapper:not(:first-child)").css('display', 'none')
    //     $(".ch-c-modal__wrapper:first-child").css('display', 'block')
    //     // menormalkan checkbox
    //     $("input[name='modul-selected']:checked"). prop("checked", false)
    //   }
    // }
  
    // Saat clicks outside of the modal, close modal
    window.onclick = function (event) {
      if (event.target == modal) {
        $('.js-modal-content iframe').attr('src', '');
        body.classList.remove("is-overflow-hidden");
        content.classList.remove("is-opened");
        modal.style.display = "none";
  
        $('input[name="modul"]').val('')
        
        $('.ch-c-slider').css('transform', '')
        // menormalkan checkbox
        $("input[name='modul-selected']:checked"). prop("checked", false)
      }
    }
  
    // menyembunyikan wrapper selain yang pertama
    $(".ch-c-modal__wrapper:not(:first-child)").css('display', 'none')
  
    // event untuk lanjut kelangkah berikutnya
    $(".js-next-step").click(function (e) {
      e.preventDefault();
      const index = $(this).parent().parent().index() + 1
      const length = $('.ch-c-slider__items').length
      console.log(length)
  
      // memanggil fungsi mendapatkan nilai checkbox
      if(index === 1) {
        getValueCheckbox()
      }
  
      $('.ch-c-slider').css('transform', `translateX(calc(-${index * 100}% - calc(${index * 100}px)`)
  
  
      if (index === length) {
        body.classList.remove("is-overflow-hidden");
        content.classList.remove("is-opened");
        modal.style.display = "none";
  
        // menampilkan pilihan pertama
        $('.ch-c-slider').css('transform', '')
  
        // mengosongkan data pertama
        $('input[name="modul"]').val('')
  
        // menormalkan checkbox
        $("input[name='modul-selected']:checked"). prop("checked", false)
      }
    })
  
    // mendapatkan nilai dari checkbox
    function getValueCheckbox() {
      let checks = document.querySelectorAll("input[name='modul-selected']:checked");
      let result = ''
  
      for(var i=0; i<checks.length; i++){
        if(checks[i].value != undefined) {
          result += checks[i].value + ", "
        }
      };
  
      $('.js-modul-list input').val(result.slice(0, -2))
    }
  
  });