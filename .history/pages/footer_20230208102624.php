<style>
    *,
*:before,
*:after {
  box-sizing: border-box;
}
 
.body{
font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
  padding: 30px 0;
  height: 300px;
  flex-direction: column;
  justify-content: center;
  margin: 0;
 
  
}
 
:root {
  --black: #000;
  --white: #fff;
  --link-color: #FFF;
  --seprator-color: #red;
  --link-hover-color: #688dff;
  --input-border-color: #e9ebf3;
}
 
.content {
  box-shadow: 0 100px 107px #05134125;
  padding: 50px;
  border-radius: 4px;
  background-color: #b70015;
  background-image: linear-gradient(45deg, #b70015 0%, #5e3236 52%, #2b2425 90%);
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
  width: 450px;
  border-radius: 5px;
  display: flex;
  align-items: center;
}
.input-box svg {
  margin-top: 3px;
}
.input-box input {
  all: unset;
  width: 30%;
  font-size: 16px;
  margin-left: 5px;
}
.input-box input::placeholder {
  font-size: 16px;
}
 
.subscribe-button {
  margin-top: 20px;
  color: white;
  width: 430px;
  text-align: center;
  background: linear-gradient(to right, #5e3236, #ddd   );
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
        <body>
            <div class="body">
        <div class="container">
  <div class="content">
    <div class="row">
      <div class="col-lg-3">
        <div class="link-box">
          <div class="link-box__title">Thông tin</div>
          <div  class="link-box__link"><a style="text-decoration:none; color:white" href="index.php?quanly=trangchu">Đầu trang</a></div>
          <div class="link-box__link">Đăng nhập</div>
          <div class="link-box__link">Design by Quân</div>
        </div>
      </div>
      </div>
          <div class="input-box">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="51" height="43.667" viewBox="0 0 51 43.667">
              <defs>
                <linearGradient id="linear-gradient" x2="0.959" y2="1" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#8bcdff" />
                  <stop offset="1" stop-color="#6487ff" />
                  <stop offset="1" stop-color="#6888f3" />
                </linearGradient>
                <filter id="Rectangle" x="0" y="0" width="51" height="43.667" filterUnits="userSpaceOnUse">
                  <feOffset dy="2" input="SourceAlpha" />
                  <feGaussianBlur stdDeviation="3" result="blur" />
                  <feFlood flood-color="#003ca4" flood-opacity="0.596" />
                  <feComposite operator="in" in2="blur" />
                  <feComposite in="SourceGraphic" />
                </filter>
              </defs>
              <g id="Group" transform="translate(8.5 6.833)">
                <g transform="matrix(1, 0, 0, 1, -8.5, -6.83)" filter="url(#Rectangle)">
                  <rect id="Rectangle-2" data-name="Rectangle" width="33" height="25.667" rx="3.667" transform="translate(9 7)" fill="url(#linear-gradient)" />
                </g>
                <path id="Path" d="M0,0,14.5,12,29,0" transform="translate(2.5 3.833)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.75" />
              </g>
            </svg>
 
            <input type="text" placeholder="Nhập email" />
          </div>
          <button class="subscribe-button">Subscribe</button>
        </div>
      </div>
    </div>
    <div class="seprator"></div>
  </div>
</div>
</div>
</body>
        
    