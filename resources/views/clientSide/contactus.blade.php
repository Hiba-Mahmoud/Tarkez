<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="container">
           <div class="row justify-content-between">
            
               <div class="col-lg-2 col-6">
                   <div class="d-flex">
                       <div class="d-lg-none menu-icon" onclick="openNav()">
                           <div class="line line-1"></div>
                           <div class="line line-2"></div>
                           <div class="line line-3"></div>
                       </div>
                       <div class="logo">
                           <p>logo</p>
                       </div>
                   </div>
                   
               </div>
            
               <div class="col-7 menu">
   
                   <ul class="main-menu">
                       <li><a href="home.html">
                        الرئيسيه
                        </a></li>
                       <li><a href="about-us.html">
                         من نحن</a></li>
                       <li><a href="projects.html">المشاريع</a></li>
                       <li><a href="index.html">الصور</a></li>
                       <li><a href="contactus.html"> اتصل بنا </a></li>
                   </ul>
               </div>
               <div class="col-3">
                   <div class="icons">
                       <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                       <a href=""><i class="fa-solid fa-user"></i></a>
                   </div>
               </div>
           </div>
        </div>
      </nav>
    <div class="main-bg home">
        <div class="title">
          <h1>الصور</h1>
        </div>
     </div>
    <div class=" contact-us">
      <div class="container">
        <div class="row justify-content-between">
            <div class="col-4">
                 <div class="contact-icon">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                 </div>
                 <p class="contact-details">
                     عنوانا عنوانا عنوانا
                 </p>
            </div>
             <div class="col-4">
                 <div class="contact-icon">
                    <i class="fa-solid fa-envelope"></i>
                 </div>
                 <p class="contact-details">
                    عنوانا عنوانا عنوانا
                </p>
            </div>
            <div class="col-4">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                    
                </div>
                <p class="contact-details">
                    عنوانا عنوانا عنوانا
                </p>
           </div>
        </div>
       </div>
    </div>
    <div class="container form">
        <div class="row ">
            <div class="col-12">
                <form class="text-right">
                    <div class="form-group">
                      <label >الاسم الكامل</label>
                      <input type="name" class="form-control" >
        
                    </div>
                    <div class="contact-info d-flex justify-content-between">
                        <div class="form-group">
                       
                            <label >رقم الهاتف</label>
                            <input type="phone">
                          
                          </div>
                          <div class="form-group">
                              <label >ايميل</label>
                              <input type="email">
                          </div>
                    </div>
                    <input type="file" id="file-uploader">
        
                    <div id="feedback">
                      
                    </div>
                    <div class="form-group">
                        <label>الرساله</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">إرسال</button>
                  </form>
            </div>
           
        </div>
    </div>
    <div class="map">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100&amp;height=450&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdflist.com">Pdflist.com</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:450px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:450px;}.gmap_iframe {width:100%!important;height:450px!important;}</style></div>
    <div class="learn-more">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="learn-more-details">
                        <p>اعرف المزيد من التفاصيل</p>
                        <button class="btn-details">المزيد من التفاصيل</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="logo-img">
                    <p>logo</p>
                        <img src="" alt="">
                    </div>
                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href=""><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-snapchat"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
        
                        </ul>
                    </div>
                    <div class="msin-links">
                        <ul class="main-menu">
                            <li><a href="">الرئيسيه</a></li>
                            <li><a href="about-us.html">من نحن</a></li>
                            <li><a href="projects.html">المشاريع</a></li>
                            <li><a href="">الصور</a></li>
                            <li><a href="contactus.html">اتصل بنا</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="sub-footer text-center">
            <p>الحقوق محفوظه</p>
         </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
    <script>

        const fileUploader = document.getElementById('file-uploader');
        const feedback = document.getElementById('feedback');
        
        fileUploader.addEventListener('change', (event) => {
          const file = event.target.files[0];
          console.log('file', file);
          
          const size = file.size;
          console.log('size', size);
          let msg = '';
          
          if (size > 1024 * 1024) {
            msg = `<span style="color:red;">The allowed file size is 1MB. The file you are trying to upload is of ${returnFileSize(size)}</span>`;
          } else {
            msg = `<span style="color:green;"> A ${returnFileSize(size)} file has been uploaded successfully. </span>`;
          }
          feedback.innerHTML = msg;
        });
        
        function returnFileSize(number) {
          if(number < 1024) {
            return number + 'bytes';
          } else if(number >= 1024 && number < 1048576) {
            return (number/1024).toFixed(2) + 'KB';
          } else if(number >= 1048576) {
            return (number/1048576).toFixed(2) + 'MB';
          }
        }
              </script>
   
</body>
</html>