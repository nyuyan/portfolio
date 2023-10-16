<!DOCTYPE html>
<html>
    <head>
        <title>Sample PHP Layout</title>
        <style>
            body {
                background-color: #A5D2F2;
            }
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 20px;
            }
            .purple-container {
                display: flex;
                align-items: center;
                background-color: #AAA7EB;
                padding: 10px;
                margin-bottom: 30px; /* Add margin-bottom to create space between purple-container and rectangle-box3 */
            }
            .rectangle-box{
                background-color: #FFC3C3;
                margin: 10px;
            }
            .rectangle-box2{
                background-color: #7B8EC7;
                margin: 10px;
            }
            .rectangle-box3{
                background-color: #CDE2F1;
                margin: 10px;
            }
            .image-box2,
            .image-box3 {
                background-color: #9DC8E6;
                margin: 20px;
                padding: 10px;
            }
            .button {
                margin-top: 30px;
            }
            .button button {
                background-color: #3498db; /* Blue color */
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 20px; /* Curved corners */
                cursor: pointer;
                position: relative;
                overflow: hidden;
                transition: background-color 0.3s ease, border 0.3s ease;
            }
            .button button:hover {
                background-color: #2980b9;
                border: 1px solid #000;
            }
            .button button::after {
                content: '';
                display: block;
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 0;
                height: 2px;
                background-color: black; /* Black line color */
                transition: width 0.3s ease;
            }
            .button button:hover::after {
                width: 100%;
                left: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="rectangle-box">
                <p>YUYAN'S PORTFOLIO</p>
            </div>
            <div class="rectangle-box2">
                <p>Lets Design, Develop, Create, Code!</p>
            </div>
            <div class="purple-container">
                <div class="image-box">
                    <img src="image/mepic2.jpg">
                </div>
            </div>
            <div class="rectangle-box3">
                <p>I'm YuYan, a passionate <b>UI/UX designer and developer</b>.<br>
                    I create meaningful digital experiences that inspire and <br> connect people.
                    I do UI/UX for apps, mobile, websites, etc,<br> and I also code as a developer.</p>
            </div>
        </div>
        <div class="container">
            <div class="image-box2">
                <img src="image/ntg.jpg">
            </div>
            <div class="image-box3">
                <img src="image/ntg2.jpg">
            </div>
        </div>
        <div class="button">
            <button>Get Started :)</button>
        </div>
    </body>
</html>
