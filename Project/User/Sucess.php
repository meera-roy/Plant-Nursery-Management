

<style>
    :root {primary-col:#6C7BEE;}
    .bg {
      background-color:black;
      width: 480px;
      height: auto;
      align-items: top;
      overflow:hidden;
      margin: 0 auto;
      box-sizing: border-box;
      padding: 5px;
      font-family: 'Roboto';
      margin-top: 0px;
      margin-bottom: 0px;
    }
    .card {
      background-color: rgb(231, 228, 228);
      width: 100%;
      height:auto;
      float: left;
      margin-top: 0px;
      border-radius: 5px;
      box-sizing: border-box;
      padding: 20px 30px 25px 20px;
      text-align: center;
      position: relative;
      box-shadow:  20px 30px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)
      &__success {;
        position: absolute;
        top: -50px;
        left: 145px;
        width: 100px;
        height: 100px;
        border-radius: 100%;
        background-color: #60c878;
        border: 5px solid white;
        i{
          color: white;
          line-height: 100px;
          font-size: 45px;
        }
        
      }
      &__msg {
        text-transform: uppercase;
        color: #55585b;
        font-size: 18px;
        font-weight: 500;
        text-align: top;
        
      }
      &__submsg {  
        color: #959a9e;
        font-size: 16px;
        font-weight: 400;
        margin-top: 0px;
      }
      &__body {
        background-color: #d90505;
        border-radius: 4px;
        width: 100%;
        margin-top: 30px;
        float: left;
        box-sizing: border-box;
        padding: 30px;
      }
      &__avatar {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        display: inline-block;
        margin-right: 10px;
        position: relative;
        top: 7px;
      }
      &__recipient-info {
        display: inline-block;
      }
      &__recipient { 
        color: #232528;
        text-align: left;
        margin-bottom: 5px;
        font-weight: 600;
      }
      &__email {
        color: #838890;
        text-align: left;
        margin-top: 0px; 
      }
      &__price {
        color: #232528;
        font-size: 70px;
        margin-top: 25px;
        margin-bottom: 30px;
        span {font-size: 60%;}
      }
      &__method {
        color: #d3cece;
        text-transform: uppercase;
        text-align: left;
        font-size: 11px;
        margin-bottom: 5px;
      }
      &__payment {
        background-color: white;
        border-radius: 4px;
        width: 100%;
        height: 100px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      &__credit-card {
        width: 50px;
        display: inline-block;
        margin-right: 15px;
      }
      &__card-details { 
        display: inline-block;
        text-align: left; 
      }
      &__card-type {
        text-transform: uppercase;
        color: #232528;
        font-weight: 600;
        font-size: 12px;
        margin-bottom: 3px;
      }
      &__card-number {
        color: #838890;
        font-size: 12px;    
        margin-top: 0px;
      }
      &__tags { 
        clear: both;
        padding-top: 15px;
      }
      &__tag { 
        text-transform: uppercase;
        background-color: #f8f6f6;
        box-sizing: border-box;
        padding: 3px 5px;
        border-radius: 3px;
        font-size: 10px;
        color: #d3cece;
      }
    }


.body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  flex-direction: column;
}
h2 {
  font-family: Helvetica;
  font-size: 36px;
  margin-top: 0px;
  color: #333;
  opacity: 0;
}

input[type="checkbox"]:checked ~ h2 {
  animation: .1s title ease-in-out;
  animation-delay: 1.2s;
  animation-fill-mode: forwards;
}

.circle {
  stroke-dasharray: 1194;
  stroke-dashoffset: 1194;
}

input[type="checkbox"]:checked + svg .circle {
  animation: circle 1s ease-in-out;
  animation-fill-mode: forwards;
}

.tick {
  stroke-dasharray: 350;
  stroke-dashoffset: 350;
  -webkit-text-stroke-color: rgb(22, 132, 10);
}
</style>
</head>
    <body onLoad="Redirect()">
    <div class="bg">
      
      <div class="card">
        
        <span class="card__success"><i class="ion-checkmark"></i></span>
        
        <h1 class="card__msg">Payment Complete</h1>

<h2 class="card__submsg">Thank you for your transfer</h2>
        
        <div class="card__body">
          
          
          <div class="card__recipient-info">
           
          </div>
          
        
          
          <p class="card__method">Payment method</p>
          <div class="card__payment">
            <img src="https://seeklogo.com/images/V/VISA-logo-F3440F512B-seeklogo.com.png" class="card__credit-card">
            <div class="card__card-details">
              <p class="card__card-type">Credit / debit card</p>
                
            </div>
          </div>
          
        </div>
        
        <div class="card__tags">
            <span class="card__tag">completed</span>
           
        </div>
        
      </div>
      
    </div>
    </body>
    <script>
    function Redirect()
    {
        window.setTimeout(function() {
        window.location = 'HomePage.php';
      }, 5000);
    }
    </script>