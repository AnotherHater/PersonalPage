<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
font-family: 'Quicksand', sans-serif;
  font-weight: 300;
  background: #F0F2F0;
  padding: 50px;
}

p {
  font-size: 1.2rem;
  font-weight: 300;
}

.card__overflowed{
    background: rgba(0,0,0,.3);
    position: relative;
    width: 300px;
    min-height: 405px;

}

.card__container {
  width: 300px;
  border-radius: 3px;
  position: absolute;
  padding-right: 5px;
  height: auto;
}


.card__image{
  width: 100%;
  height: 204px;
}

.card__image img {
  width: 100%;
  height: 204px;
}

.card__body {
  position: relative;
  padding: 0px 35px;
  text-align: center;
  max-height: 1000px;
  background:#eeeeee;
  color:black;

}

.card__body__wrapper {
  position: absolute;
  top: -12px;
  left: 15px;
  z-index: 1;
}




.card__body__heading {
    font-weight: 400;
    color: black;
    font-size: .95rem;
    line-height: 25px;
    padding: 15px 5px;
}

.card__footer {
  display: flex;
  text-align: center;
  border-top: 1px solid #C1BCBC;
  padding: 10px 35px;
  background:#eeeeee;
  color:black;
}

.card__footer__options {
  display: flex;
  align-items: center;
}

.card__footer__options--favourite {
      cursor: pointer;
    display: block;
    width: 26px;
    height: 26px;
    background-color: #edf2f6;
    color: #B2C0C8;
    line-height: 26px;
    text-align: center;
    font-size: 12px;
    border-radius: 50%;
    transition: color 0.35s, border 0.35s;
    border: 1px solid transparent;
    box-sizing: border-box;
}

.card__footer__options--favourite::before {
  font-family: "FontAwesome";
  content: "\f02e";
  font-size: 13px;
}

.card__footer__options--postmenu {
    cursor: pointer;
    color: #B2C0C8;
    width: 26px;
    text-align: center;
    margin-left: 5px;
}

.card__footer__options--postmenu:before {
  font-family: "FontAwesome";
  content: "\f141";
}

.card__footer__analysis--shares {
  color: #B2C0C8;
  width: 26px;
  height: 26px;
  font-size: 11px;
  margin-left: 10px;
}

.card__footer__analysis--shares:before {
  font-family: "FontAwesome";
  font-size: 14px;
  content: "\f06e";
}

.card__footer__analysis--views {
  width: 26px;
  height: 26px;
  color: #B2C0C8;
  font-size: 11px;
  margin-left: 10px;
}

.card__footer__analysis--views:before {
  font-size: 13px;
  font-family: "FontAwesome";
  content: "\f064";
}
</style>
</head>
<body>
    
        <div class="card__overflowed">
                <div class="card__container">
                        <div class="card__image">
                          <img src="https://libreshot.com/wp-content/uploads/2015/05/coffee-and-laptop.jpg" alt="">
                        </div>
                        
                        <div class="card__body">
        
                          <h3 class="card__body__heading">
                              My message to you: {!!$msg!!}</h3>
                        </div>
                        <div class="card__footer">
                          <h3 class="card__body__heading">Contact me: {!!$email!!}</h3>
                        </div>
                      </div>
        </div>
</body>
</html>