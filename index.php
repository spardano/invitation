<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding Invitation</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="assets/font/fontawesome-free-5.14.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Source+Serif+Pro&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>

    <div class="motion text-center">

      <div class="isi">

        <h1>Undangan Pernikahan</h1>
        <h2>Youlin Dita Humairah <br> & <br> Wawan Ariessandi</h2>
  
        <button class="klik rounded-circle mt-3">Klik Disini</button>
      </div>
    

    </div>

    <div class="bgheader"></div>

    <div class="container">
      <div class="boxheader mx-auto">
        <div class="pengantar col-sm-12 text-center">
            <img src="assets/img/bismillah.png" class="img-fluid" alt="" />

          
            <div class="walimatul col-sm-4 offset-sm-4">
              <h1 class="title">Walimatul 'Urs</h1>
            </div>
              
      
            <div class="col-sm-8 offset-sm-2 mt-4">
              <p>Assalamu'alaikum Warahmatullahi Wabarakatuh</br>
                Dengan rahmat serta ridho Allah SWT Kami meyelenggarakan Akad serta
                Resepsi pernikahan Putra-Putri Kami
              </p>
            </div>
         
        </div>

       
      </div>
    </div>

    <div class="pengantin">
            
      <div class="container">
        <div class="nama col-sm-6 offset-sm-3 text-center">
          
          <h1>Yuolin Dita Humairah, S.T</h1>
          <p>Putri Dari Dra. Yulhemita & Ir. Budi Azhari</p>

          <img src="assets/img/ring.png" alt="">

          <h1>Wawan Aries Sandi, S.T</h1>
          <p>Putra Dari Zulhayati & Wahidul Kahar</p>

        </div>
      </div>
            
        
    </div>
    
    <section id="timeplace">

        <div class="container">
            <div class="judul">
                <h1>Time And Place</h1>
               
              </div>

              <div class="row mt-5">

                <div class="time col-sm-6 offset-sm-3 mr-4 text-center">
                  <i class="fas fa-calendar-alt fa-3x"></i>
                  <p class="label">Waktu</p>
                  <p>
                    Rabu, 28 Oktober 2020 <br />
                    09:00 Pagi Sampai Selesai
                  </p>
        
                  <p id="hitungmundur" class="mb-4"></p>
                
                  <i class="fas fa-map-marker-alt fa-3x mt-3"></i>
                  <p class="label">Tempat</p>

                  <p> <a href="https://goo.gl/maps/NwbCW6UYyThpiTNQ8">Jl. Angkatan Lrg. Jambu, Kec. Kemuning, Kota Palembang, Sumatera Selatan</a> </p>
                  <img src="assets/img/mappesta.jpeg" class="img-thumbnail my-3" alt="">
                 
                </div>
              </div>
        </div>
      
      
    </section>


    <section class="note" id="note">
        <div class="container">
            <div class="row">
                <div class="judul col-sm-12">
                   
                        <h1>Tutur Kata</h1>
                        
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center">
                    <p>
                        Kami segenap keluarga besar memberikan ucapan terimakasih atas segala perhatian saudara/i sekalian. dengan segala kerendahan hati, kami menantikan kesediaan bapak/ibu/sdr/i sekalian untuk memberikan do'a serta restu.
                    </p>

                    <p>
                        Sesuai dengan imbauan pemerintah terkait penanganan pandemi COVID 19, acara pernikahan baik akad ataupun resepsi dilaksanakan sesuai protokol kesehatan dan aturan dari pemerintah.
                    </p>

                    <p>
                       Maaf atas segala kekurangan dan kesalahan dan juga kami menyampaikan rasa terima kasih yang sebesar-besarnya atas perhatian dan do'a nya.
                    </p>

                </div>
            </div>
        </div>

    </section>

    <script
      src="assets/js/jquery-3.5.1.min.js"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>


    <script>
      $(function(){

        $('.klik').click(function(){
            $('.motion').fadeOut("slow");
        });

      });
    </script>

    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Oct 28, 2020 09:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("hitungmundur").innerHTML =
          days + " : " + hours + " : " + minutes + " : " + seconds;

        // If the count down is over, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("hitungmundur").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>
  </body>
</html>
