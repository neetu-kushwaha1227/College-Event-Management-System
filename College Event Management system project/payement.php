<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
    
</head>
<body>
    <header class="home" id="home" >
        <div class="header-scrolled">
          <div class="logo">
               <h1>CEMS</h1>
              <div class="navbar fixed-top" >
                   <a href="student_status.php">Back</a>
                 
                 
                 </div>
             </div>
         </div>
     
     
         </header>

  <div class="wrapper">
    <div class="payment">
        <div class="payment-logo">
            <p>P</p>
        </div>
        <h2>Payment gateway</h2>
        <div class="form">
            <div class="card space icon-relative">
                <label class="label">Card holder</label>
                <input type="text" class="input" name="cardholder">
                <i class="fa-solid fa-user"></i>

            </div>
            <div class="card space icon-relative">
                <label class="label">Card number</label>
                <input type="text" class="input" name="cno" placeholder="0000 0000 0000 0000" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}">
                <i class="fa-solid fa-credit-card"></i>
                
            </div>
            <div class="card-grp space">
                <div class="card-item icon-relative">
                    <label class="label">Expiry date</label>
                    <input type="text" class="input" name="Ed" placeholder="00/00">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>

                <div class="card-item icon-relative">
                    <label class="label">CVC:</label>
                    <input type="text" class="input" name="cvc" placeholder=" 000 ">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>

            <div class="btn">
                pay
            </div>
        </div>
    </div>
  </div>


  
    
</body>
</html>