<style>
    *,
*:before,
*:after {
  box-sizing: border-box;
}
 
html {
  overflow: hidden;
}
 
.body {
  font-size: 18px;
  font-family: "Quicksand", sans-serif;
  padding: 30px 0;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 0;
  width: 100vw;
  overflow: hidden;
}
 
:root {
  --black: #000;
  --white: #fff;
  --link-color: #FFF;
  --seprator-color: #eceef5;
  --link-hover-color: #688dff;
  --input-border-color: #e9ebf3;
}
 
.content {
  box-shadow: 0 100px 107px #05134125;
  padding: 50px;
  border-radius: 4px;
  background-color: #FA8BFF;
  background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
}
 
.link-box {
  text-transform: capitalize;
}
.link-box__title {
  font-weight: 700;
  font-size: 20px;
  color: var(--link-color);
  margin-bottom: 10px;
}
.link-box__link {
  font-size: 16px;
  color: var(--link-color);
  margin-bottom: 10px;
  cursor: pointer;
  transition: 300ms all ease-in-out;
}
.link-box__link:hover {
  color: var(--link-hover-color);
}
.link-box__subscribe-description {
  font-size: 16px;
  line-height: 31px;
}
 
.privacy-box,
.social-media-box {
  color: #84849d;
  font-size: 14px;
}
 
.seprator {
  background: var(--seprator-color);
  height: 1px;
  margin: 50px 0 30px 0;
}
 
.input-box {
  border: 1px solid var(--input-border-color);
  padding: 4px 10px;
  margin-top: 20px;
  width: 100%;
  border-radius: 5px;
  display: flex;
  align-items: center;
}
.input-box svg {
  margin-top: 3px;
}
.input-box input {
  all: unset;
  width: 100%;
  font-size: 16px;
  margin-left: 5px;
}
.input-box input::placeholder {
  font-size: 16px;
}
 
.subscribe-button {
  margin-top: 20px;
  color: white;
  width: 100%;
  text-align: center;
  background: linear-gradient(to right, #8bcdff, #6487ff);
  padding: 15px;
  border-radius: 5px;
  outline: none;
  border: none;
  font-family: inherit;
}
 
@media (max-width: 768px) {
  .content {
    padding: 20px;
  }
}
</style>
<div class="clear">
        
    </div>
        <body class="body">
            
        </body>
    